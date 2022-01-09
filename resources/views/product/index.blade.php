@extends('product.layout')
@section('content')
<div class="jumbotron container" style="padding-top: 12%">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium laborum, eos debitis error a assumenda, autem dolorem necessitatibus enim placeat ab? Quod, perspiciatis nulla. Excepturi maxime officiis ea eaque? Nulla.</p>
        <a class="btn btn-primary btn-lg" href="{{route('products.create')}}" role="button">Create<i class="fas fa-plus-square" style="margin-left:.5rem"></i></a>
        <a class="btn btn-primary btn-lg" href="{{route('products.trash')}}" role="button">Trash <i class="fas fa-trash" ></i></a>
</div>
    <div class="container"style="margin-top: 2%">
    @if ($message = Session::get('success'))
<div class="alert alert-primary" role="alert">
    {{$message}}
 </div>

    @endif
</div>
<div class="container"style="padding-top: 2%">
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Product Name</th>
        <th scope="col">Product Price</th>
        <th scope="col">Product Detail</th>
        <th scope="col" style="width: 400px">Actions</th>
      </tr>
    </thead>
    <tbody>
        @php
            $i =0;
        @endphp
        @foreach ( $products as $item )
        <tr>
        <th scope="row">{{++$i}}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->price}}</td>
        <td>{{$item->detail}}</td>
        <td style="padding-top:4rem">
            <div class="row">
                <div class="col-sm">
                    <a href="{{route('products.edit',$item->id)}}" class="btn btn-success">EDIT <i class="fas fa-edit" style="margin-left:2%"></i></a>
                </div>
                <div class="col-sm">
                    <a href="{{route('products.show',$item->id)}}"class="btn btn-primary">SHOW <i class="fas fa-eye" style="margin-left:2%"></i></a>
                </div>
                <div class="col-sm">
                    <a href="{{route('soft.delete',$item->id)}}"class="btn btn-warning">SOFT DELETE <i class="fas fa-trash-alt" style="margin-left:2%"></i></a>
                </div>
            </div>


        </td>
      </tr>
        @endforeach

    </tbody>
  </table>

</div>
{!!$products->links()!!}
@endsection
