@extends ('layout')

@section('title')
    All product
@endsection

@section('content')

<div class=" container">
    
@foreach($Products as $product)

    <h1>{{$product->name}}</h1>
    <h3 class="btn btn-info">{{$product->price}}</h3>
    <p>{{$product->desc}}</p>
    <hr>


@endforeach
</div>

@endsection
