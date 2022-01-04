<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
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
    @include('admin.sidebar')
    
        @include('admin.navbar')
      
        <div class="container-fluid page-body-wrapper">
        	<div class=" container" align="center">
        		<h1 class="title">ADD PRODUCTS</h1>
        		<h1>-------------------------------------</h1>
                @if(session()->has('message'))
                <div class="alert alert-success">
                 <button type="button" class="close" data-dismiss="alert">X</button>
                {{session()->get('message')}}
                </div>
                @endif
        		<form action="{{url('uplodeproduct')}}" method="POST" enctype="multipart/form-data">
        			@csrf

        		<div style="padding: 15px">
        			<label>Products Title :</label>
        			<input style="color: black;" type="text" name="title" placeholder="Write a product title">
        		</div>
        		<div style="padding: 15px">
        			<label>Prices :</label>
        			<input style="color: black;" type="number" name="price" placeholder="Write a price">
        		</div>
        		<div style="padding: 15px">
        			<label>Quantity :</label>
        			<input style="color: black;" type="number" name="quantity" placeholder="Write a quantity">
        		</div>
        		<div style="padding: 15px">
        			<label>Description :</label>
        			<input style="color: black;" type="text" name="description" placeholder="Write a description">
        		</div>
        		
        		<div style="padding: 15px">
        			<label>Image :</label>
        			<input type="file" name="image">
        		</div>
        		<div style="padding: 15px">
        			
        			<input style="background-color:" class="btn btn-success" type="submit" value="Add Product">
        		</div>
              </form>
        	</div>
         
        </div>
      
    @include('admin.script')    
  </body>
</html>