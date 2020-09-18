@extends('layouts.master')

@section('content')
<div class="container" style="margin-top: 20px; margin-bottom:30px">
    <h1>PUBLICACIONES:</h1>
    <h6 class="textopub">CREAR PUBLICACIÓN!</h6>
    <a style="float: right;" class="botonpub" href="{{route ('post.create')}}"><i class="fa fa-pencil fa-2x" style="margin-top:12px;"></i></a>
    <hr>
    <div class="row justify-content-center">
    @foreach($data["posts"] as $post)
        <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ $post->getImage() }}" alt="Card image cap" style="height:180px;width:286px">
            <div class="card-body">
                <h5 class="card-title">{{ $post->getTitle() }}</h5>
                <a href="show/{{$post->getId()}}" class="btn btn-primary">Leer Publicación</a>
            </div>
        </div>
        </div>   
    @endforeach
    </div>
</div>
@endsection