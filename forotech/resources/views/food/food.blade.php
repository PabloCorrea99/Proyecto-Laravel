@extends('layouts.master')

@section('content')
<div class="container" style="margin-top: 20px; margin-bottom:30px">
    <h1>PRODUCTOS ALIADOS:</h1>
    <hr>
    <div class="row justify-content-center">
    @foreach($data["data"] as $food)
        <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ $food['image'] }}" alt="Card image cap" style="height:180px;width:286px">
            <div class="card-body">
                <h5 class="card-title">{{ $food['name'] }}</h5>
                <p class='card-text'>Precio: ${{ $food['price'] }}</p>
                <a href="{{ $food['product_link'] }}" class="btn btn-primary">Visitar Tienda!</a>
            </div>
        </div>
        </div>   
    @endforeach
    </div>
</div>
@endsection