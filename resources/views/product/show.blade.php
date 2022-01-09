@extends('product.layout')
@section('content')
<div class="container" style="padding-top: 12%;">
    <div class="card">
    <div class="card-body">

      <p class="card-text"> <span><a href="{{route('products.index')}}" class="btn btn-primary" style="margin-right: 1rem">Back </a></span>Product Name : {{$product->name}}</p>
    </div>
</div>
  </div>
<div class="container">
    <div class="form-group">
      <label  class="form-label">Name : {{$product->name}}</label>
    </div>
    <div class="form-group">
        <label  class="form-label">Price : {{$product->price}}</label>
      </div>
      <div class="form-group">
        <label  class="form-label">Detail : {{$product->detail}}</label>
      </div>
</div>

@endsection
