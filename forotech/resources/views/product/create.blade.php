@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center" style="margin-top: 50px; margin-bottom:80px">
        <div class="col-md-8">
        @include('util.message')
        <h1>CREAR PRODUCTO</h1>
        @if($errors->any())
                <ul id="errors">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif
            <div class="card">
                <div class="card-body">
                <form method="POST" action="{{ route('product.save') }}">
                    @csrf
                    <label for="name">Nombre del Producto: </label>
                    <input type="text" placeholder="Introducir nombre" name="name" value="{{ old('name') }}" />
                    <hr>
                    <label for="price">Precio del Producto: </label>
                    <input type="number" min="1" placeholder="Introducir precio" name="price" value="{{ old('price') }}" />
                    <hr>
                    <label for="link">Link de compra: </label>
                    <input type="text" placeholder="Introducir link" name="link" value="{{ old('link') }}" />
                    <hr>
                    <button class="btn btn-info" type="submit" value="Send">AGREGAR</button>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection