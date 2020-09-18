@extends('layouts.master')



@section('content')
<div class="container" style="margin-top: 20px; margin-bottom:30px">
    <h1>PRODUCTOS:</h1>
    <hr>
    <div class="row">
        @foreach($data["products"] as $product)
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4>{{ $product->getName() }}</h4>
                    <h6>Precio: ${{$product->getPrice()}}</h6>
                    <h6>Link de Compra: <a href="{{$product->getLink()}}">{{$product->getLink()}}</a></h6>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection