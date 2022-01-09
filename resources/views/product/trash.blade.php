@extends('product.layout')
@section('content')
<div class="jumbotron container" style="padding-top: 12%">
    <span> <a href="{{route('products.index')}}" class="btn btn-primary" style="margin-right: 1rem"><i class="fas fa-arrow-circle-left"></i>Back</a>
    </span>
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
                   <a href="{{route('product.back.trash',$item->id)}}" class="btn btn-primary">BACK <i class="fas fa-arrow-circle-left"></i></a>
                </div>
                <div class="col-sm">
                    <a href="{{route('product.delete.trash',$item->id)}}" class="btn btn-danger">DELETE <i class="fas fa-trash"></i></a>

                    {{-- <form action="{{route('products.destroy',$item->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>                 --}}
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
