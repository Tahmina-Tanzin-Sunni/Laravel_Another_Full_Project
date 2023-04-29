<x-app-layout>

    

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
@include('admin.css')

<style type="text/css">
    .title{
        color:white;
        padding-top: 25px;
        font-size: 25px;
    }
    label{
        display:inline-block;
        width:200px;
    }
   

</style>
  </head>
  <body>

      <!-- partial -->
      @include('admin.sidebar')
     @include('admin.navbar')
    
<div class="container-fluid  page-body-wrapper">
    <div class="container" align="center">
<h1 class="title">Add Product</h1>

<form  class="bg-danger"action="{{url('uploadproduct')}}" method="post"  enctype="multipart/form-data">
@csrf
<div style="color:black ; padding: 15px;">
    <label>Product Title</label>
    <input type="text" name="title"  required>
</div>
<div style="color:black ; padding: 15px;">
    <label>Price</label>
    <input type="number" name="price"  required>
</div>
<div style="color:black ; padding: 15px;">
    <label>Description</label>
    <input type="text" name="des"  required>
</div>
<div style="color:black ; padding: 15px;">
    <label for="">Quantity</label>
    <input type="text" name="quantity"  required>
</div>
<div style="padding: 15px;">
    
    <input type="file" name="file">
</div>
<div style="padding: 15px;">
    
    <input  class="btn btn-success" type="submit" name="submit">
</div>



</form>
</div>
</div>
     


        @include('admin.script')
  </body>
</html>

 
