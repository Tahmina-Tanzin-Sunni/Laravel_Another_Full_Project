<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
           <form class="form-inline" action="{{url('search')}}" method="get">
            @csrf
            <input class="form-control" type="search" name="search" placeholder="search">
            <input type="submit" value="search" class="btn btn-success">
           </form>
           
            </div>
          </div>

         @foreach($data as $product)
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="/productimage/{{$product->image}}" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>{{$product->title}}</h4></a>
                <h6>${{$product->price}}</h6>
                <p>{{$product->description}}</p>
                <form action="{{url('addcart',$product->id)}}" method="POST">


<input class="form-control style="width:100px;" "type="number" value="" min="1" name="">
<br>
<input class="btn btn-primary" type="submit" value="Add Cart">


</form >
@csrf
              </div>
            </div>
          </div>
          @endforeach
          
          @if(method_exists($data,'links'))
          <div class="d-flex justify-content-center">
{!! $data->links()!!}
 
          </div>
          @endif
        </div>
      </div>
    </div>