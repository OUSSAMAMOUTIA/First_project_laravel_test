@extends('product.layout')
@section('content')
<div class="container"style="padding-top: 2%">
<form action="{{route('products.store')}}" method="POST">
    @csrf
    <div class="form-group">
      <label  class="form-label">Name</label>
      <input type="text" class="form-control" name="name" placeholder="Product Name">
    </div>
    <div class="form-group">
        <label  class="form-label">Price</label>
        <input type="text" class="form-control" name="price" placeholder="Product Price">
      </div>
      <div class="form-group">
        <label  class="form-label">Detail</label>
        <input type="text" class="form-control" name="detail" placeholder="Product Details">
      </div>
    <button type="submit" class="btn btn-primary" style="margin-top: 2%">Save <i class="fas fa-save"></i></button>
  </form>
</div>

@endsection
