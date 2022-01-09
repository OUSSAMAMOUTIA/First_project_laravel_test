@extends('product.layout')
@section('content')
<div class="container" style="padding-top: 12%;">
    <div class="card">
    <div class="card-body">
      <p class="card-text"><span> <a href="{{route('products.index')}}" class="btn btn-primary"style="margin-right: 1rem"><i class="fas fa-arrow-circle-left"></i> Back</a>
      </span> Product Name : {{$product->name}}</p>
    </div>
</div>
  </div>
<div class="container" style="padding-top: 2%">
<form action="{{route('products.update',$product->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label  class="form-label">Name</label>
      <input type="text" class="form-control" name="name"   value="{{$product->name}}">
    </div>
    <div class="form-group">
        <label  class="form-label">Price</label>
        <input type="text" class="form-control" name="price" value="{{$product->price}}">
      </div>
      <div class="form-group">
        <label  class="form-label">Detail</label>
        <input type="text" class="form-control" name="detail" value="{{$product->detail}}">
      </div>
    <button type="submit" class="btn  btn-primary w-20" style="margin-top: 2%">Update<i class="fas fa-pen" style="margin-left: .5rem"></i></button>
  </form>
</div>

@endsection
