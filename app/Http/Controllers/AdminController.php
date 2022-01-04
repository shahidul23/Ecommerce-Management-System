<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Order;

class AdminController extends Controller
{
    public function products()
    {
      if(Auth::id())
      { 
        if(Auth::user()->usertype='1')
        {
           return view('admin.products'); 
        }
        else
        {
            return redirect()->back();
        }
       }
       else
       {
        return redirect('login');
       }
      
    }
    public function uplodeproduct(Request $request)
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype='1')
            {
    	$data = new product;

    	$image = $request->image;
    	$imagename = time().'.'.$image->getClientOriginalExtension();
    	$request->image->move('productimages',$imagename);
    	$data->image=$imagename;

    	$data->title=$request->title;
    	$data->price=$request->price;
    	$data->quantity=$request->quantity;
    	$data->description=$request->description;

    	$data->save();
    	return redirect()->back()->with('message','Product Added Successfully');
    }
    else
    {
       return redirect()->back();  
    }
        }
         else
       {
        return redirect('login');
       }
    }

    public function showproducts()
    {
        if(Auth::id())
        {
        $data=product::all();
        return view('admin.showproduct',compact("data"));
        }
         else
       {
        return redirect('login');
       }
    }
    public function deleteproduct($id)
    {
        if(Auth::id())
        {
        $data=product::find($id);
        $data->delete();
        return redirect()->back()->with('message','Product Delete Successfully');
        }
         else
       {
        return redirect('login');
       }
    }
    public function updateproduct($id)
    { 
        if(Auth::id())
        {
        $data=product::find($id);
        return view('admin.updateview',compact("data"));
        }
         else
       {
        return redirect('login');
       }
    }
    public function updateview(Request $request,$id)
    {
        if(Auth::id())
        {
        $data=product::find($id);
        $image = $request->image;
        if($image){
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('productimages',$imagename);
        $data->image=$imagename;
     }
        $data->title=$request->title;
        $data->price=$request->price;
        $data->quantity=$request->quantity;
        $data->description=$request->description;

        $data->save();
        return redirect()->back()->with('message','Product Update Successfully');
        }
         else
       {
        return redirect('login');
       }

    }
    public function customerorder()
    {
        if(Auth::id())
        {
        $order = order::all();
        return view('admin.orderview',compact("order"));
        }
         else
       {
        return redirect('login');
       }
    }
    public function deleteorder($id)
    {
        if(Auth::id())
        {
        $order = order::find($id);
        $order->delete();
        return redirect()->back()->with('message','Order Delete Successfully');;
        }
         else
       {
        return redirect('login');
       }
    }
    public function updatestatus($id)
    {
        if(Auth::id())
        {
        $order = order::find($id);
        $order->status='delivered';
        $order->save();
        return redirect()->back();
        }
         else
       {
        return redirect('login');
       }
    }
}
