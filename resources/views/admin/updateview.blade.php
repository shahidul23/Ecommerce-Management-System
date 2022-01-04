<!DOCTYPE html>
<html lang="en">
  <head>
  	<base href="/public">
  	<style type="text/css">
   	.title{
   		color: white;
   		padding-top: 20px;
   		font-size: 25px;
   	}
   	label{
   		display: inline-block;
   		width: 200px;
   	}
   </style>
  </head>
  <body>
   @include('admin.css')
  </head>
  <body>
    @include('admin.sidebar')
    
        @include('admin.navbar')
      
        <div class="container-fluid page-body-wrapper">
        	<div class=" container" align="center">
        		<h1 class="title">UPDATE  PRODUCTS</h1>
        		<h1>-------------------------------------</h1>
                @if(session()->has('message'))
                <div class="alert alert-success">
                 <button type="button" class="close" data-dismiss="alert">X</button>
                {{session()->get('message')}}
                </div>
                @endif
        		<form action="{{url('updateview',$data->id)}}" method="POST" enctype="multipart/form-data">
        			@csrf

        		<div style="padding: 15px">
        			<label>Products Title :</label>
        			<input style="color: black;" type="text" name="title" value="{{$data->title}}">
        		</div>
        		<div style="padding: 15px">
        			<label>Prices :</label>
        			<input style="color: black;" type="number" name="price" value="{{$data->price}}">
        		</div>
        		<div style="padding: 15px">
        			<label>Quantity :</label>
        			<input style="color: black;" type="number" name="quantity" value="{{$data->quantity}}">
        		</div>
        		<div style="padding: 15px">
        			<label>Description :</label>
        			<input style="color: black;" type="text" name="description" value="{{$data->description}}">
        		</div>
        		
        		<div style="padding: 15px">
        			<label>Old Image :</label>
        			<img height="100" width="100" src="/productimages/{{$data->image}}">
        		</div>
        		<div style="padding: 15px">
        			<label>Change Image :</label>
        			<input type="file" name="image">
        		</div>
        		<div style="padding: 15px">
        			
        			<input style="background-color:" class="btn btn-success" type="submit" value="Update Product">
        		</div>
              </form>
        	</div>
         
        </div>
      
    @include('admin.script')    
  </body>
</html>