@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $data["product"]["name"] }}</div>

                <div class="card-body">
                    <b>Nombre del Producto:</b> {{ $data["product"]["name"] }}<br />
                    <b>Precio del Producto:</b> {{ $data["product"]["price"] }}<br/>
                    <b>Link de Compra:</b> 
                    <?php 
                        echo "<a href='".$data["product"]["link"]."'>".$data["product"]["link"]."</a>";
                    ?>
                    <br />
                    <br />
                    <form method="POST" action="{{route('product.delete')}}">
                    @csrf
                    <input type="hidden" name="productId" value='{{$data["product"]->getId()}}'/>
                    <button type="submit" class="btn btn-danger">Eliminar Producto</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection