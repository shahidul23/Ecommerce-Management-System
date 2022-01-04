<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
  </head>
  <body>
    @include('admin.sidebar')
    
        @include('admin.navbar')
        <div class="container-fluid page-body-wrapper">
        	<div style="padding-top: 30px;" class=" container" align="center">
        		<h1 class="title">COSTOMER ORDER LIST</h1>
        		<h1>-------------------------------------</h1>
                @if(session()->has('message'))
                <div class="alert alert-success">
                 <button type="button" class="close" data-dismiss="alert">X</button>
                {{session()->get('message')}}
                </div>
                @endif
             <div>
                <table>
                	<tr style="background-color: #0C090A" align="center">
                		<th style="color: white; padding: 10px; font-size: 20px;">Customer Name</th>
                		<th style="color: white; padding: 10px; font-size: 20px;">Phone</th>
                		<th style="color: white; padding: 10px; font-size: 20px;">Address</th>
                		<th style="color: white; padding: 10px; font-size: 20px;">Products Name</th>
                		<th style="color: white; padding: 10px; font-size: 20px;">Quantity</th>
                		<th style="color: white; padding: 10px; font-size: 20px;">Price</th>
                		<th style="color: white; padding: 10px; font-size: 20px;">Status</th>
                		<th style="color: white; padding: 10px; font-size: 20px;">Action</th>
                		<th style="color: white; padding: 10px; font-size: 20px;">Delete</th>
                	</tr>
                	@foreach($order as $data)
                	<tr align="center" style="background-color: #E5E4E2">
                		<td style="padding: 5px; color: black">{{$data->name}}</td>
                		<td style="padding: 5px; color: black">{{$data->phone}}</td>
                		<td style="padding: 5px; color: black">{{$data->address}}</td>
                		<td style="padding: 5px; color: black">{{$data->product_name}}</td>
                		<td style="padding: 5px; color: black">{{$data->quantity}}</td>
                		<td style="padding: 5px; color: black">{{$data->price}}</td>
                		<td style="padding: 5px; color: black">{{$data->status}}</td>
                		<td style="padding: 5px; color: black">
                             <a class="btn btn-success" href="{{url('updatestatus',$data->id)}}">Delivered</a>
                	    </td>
                	    <td><a class="btn btn-danger" onclick="return confirm('Are you sure Delete !')" href="{{url('deleteorder',$data->id)}}">Remove</a></td>

                	</tr>
                	@endforeach
                </table>
 
                </div>
            </div>
        </div>

      
    @include('admin.script')    
  </body>
</html>