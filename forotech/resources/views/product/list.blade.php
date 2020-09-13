@extends('layouts.master')



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">Productos:</div>

                <div class="card-body">
                @foreach($data["products"] as $product)
                    <li>{{ $product->getId() }} - <a href="mostrar/{{$product->getId()}}">{{ $product->getName() }}</a></li>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection