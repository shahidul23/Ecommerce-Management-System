<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
  </head>
  <body>
    @include('admin.sidebar')
    
        @include('admin.navbar')
        <div style="padding-bottom: 30px;" class="container-fluid page-body-wrapper">
        	<div class="container" align="center" style="padding-top: 20px;">

        		@if(session()->has('message'))
                <div class="alert alert-success">
                 <button type="button" class="close" data-dismiss="alert">X</button>
                {{session()->get('message')}}
                </div>
                @endif
        		<form action="{{url('uplodeproduct')}}" method="POST" enctype="multipart/form-data">
        			@csrf

        		<table>
        			
        			<tr style="background-color: #0C090A; align-items: center;">
        				<th style="padding: 20px;">Title</th>
        				<th style="padding: 20px;">Price</th>
        				<th style="padding: 20px;">Quantity</th>
        				<th style="padding: 20px;">Description</th>
        				<th style="padding: 20px;">Image</th>
        				<th style="padding: 20px;">Updates</th>
        				<th style="padding: 20px;">Deletes</th>
        			</tr>
        			@foreach($data as $data)
        			<tr style="background-color: #B6B6B4; align-items: center;">
        				<td style="padding: 20px; color: black">{{$data->title}}</td>
        				<td style="padding: 20px; color: black">{{$data->price}}</td>
        				<td style="padding: 20px; color: black">{{$data->quantity}}</td>
        				<td style="padding: 20px; color: black">{{$data->description}}</td>
        				<td><img height="100" width="80" src="/productimages/{{$data->image}}"></td>
        				<td style="padding: 20px;"><a class="btn btn-primary" href="{{url('updateproduct',$data->id)}}">Update</a></td>
        				<td style="padding: 20px;"><a class="btn btn-danger" 
                            onclick="return confirm('Are you sure Delete !')" href="{{url('deleteproduct',$data->id)}}">Delete</a></td>
        			</tr>
        			@endforeach
        		</table>
        		
        	</div>
      
      </div>
    @include('admin.script')    
  </body>
</html>