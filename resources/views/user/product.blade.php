
<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>

               <form action="{{url('search')}}" method="get" class="from-inline" style="float: right; padding: 20px;">
                 <input class="form-control" type="search" name="search" placeholder="search products">
                 <input style="color: black" type="submit" value="Search" class="btn btn-success">
               </form>

            </div>
          </div>
          @foreach($data as $product)
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img height="300" width="180" src="/productimages/{{$product->image}}" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>{{$product->title}}</h4></a>
                <h6>{{$product->price}}</h6>
                <p>{{$product->description}}</p>

                <form action="{{url('addcart',$product->id)}}" method="POST">
                  @csrf
                  <input type="number" style="width: 100px;" value="1" class="form-control" min="1" name="quantity">
                  <br>
                  <input style="background-color: #0000FF" type="submit" value="Add Cart" class="btn btn-primary">
                </form>
               
              </div>
            </div>
          </div>
          @endforeach
          @if(method_exists($data,'links'))
          <div class="d-flex justify-content-center">
            {!! $data->links() !!}
             
          </div>
          @endif
            


        </div>
      </div>
    </div>