<x-app-layout>

    

</x-app-layout>
<!DOCTYPE html>
<html lang="en">

  <head>
    <base href="/public"
@include('admin.css')
  </head>
  <body>

      <!-- partial -->
      @include('admin.sidebar')
     @include('admin.navbar')
        <!-- partial -->
        <div class="bg-success container-fluid  page-body-wrapper">
    <div class="container" align="center">
<h1 style="color:red" class="title"> Update Product</h1>

<form action="{{url('updateproduct',$data->id)}}" method="post"  enctype="multipart/form-data">
@csrf
<div style="color:black ; padding: 15px;">
    <label style="color:white;">Product Title</label>
    <input type="text" name="title" value="{{$data->title}}" required>
</div>
<div style="color:black ; padding: 15px;">
    <label  style="color:white;">Price</label>
    <input type="number" name="price"  value="{{$data->price}}"  required>
</div>
<div style="color:black ; padding: 15px;">
    <label style="color:white;">Description</label>
    <input type="text" name="des" value="{{$data->description}}"   required>
</div>
<div style="color:black ; padding: 15px;">
    <label style="color:white;" >Quantity</label>
    <input type="text" name="quantity"  value="{{$data->quantity}}"  required>
</div>
<div style="color:black ; padding: 15px;">
    <label style="color:white;">Old Image</label>

    <img height="100px" width="100px" src="/productimage/{{$data->image}}" alt="">

    
</div>
<div style="padding: 15px;">
    <label style="color:white;">Change the image</label>
    <input type="file" name="file">


   
</div>
<div style="padding: 15px;">
 
<input class="btn btn-success" type="submit" name="submit">
    
</div>



</form>
</div>
</div>
     
       
          <!-- partial -->
        @include('admin.script')
  </body>
</html>

  </body>

</html>

