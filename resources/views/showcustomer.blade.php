@extends ('layout')

@section('title')
    All product
@endsection

@section('content')

<div class=" container">
    @foreach($customers as $customer)
    <h1>{{$customer->customerName}}</h1>
    <button class="btn btn-primary">{{$customer->customerEmail}}</button>
    <button class="btn btn-danger">{{$customer->customerPhone}}</button>
    <button class="btn btn-info">{{$customer->customerCity}}</button>
    <hr>
    @endforeach
</div>
@endsection
