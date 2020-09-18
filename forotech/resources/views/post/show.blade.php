@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container" style="margin-top: 10px;">          
        <section class="section-bg">
            <div class="container" style="margin-top: 30px;">
                <header class="section-header">
                    <h3>{{ $data["post"]["title"] }}</h3> 
                     <p>Autor:</p>  
                </header>
                <div class="container">
                    <img style="max-height:500px;max-width:800px;display: block;margin-left: auto;margin-right: auto;" src="{{ $data['post']['image'] }}" alt="">
                    <br/>
                    <hr>
                    <p>{{ $data["post"]["body"] }}</p>  
                    <br/>
                    <hr>
                    <br/>
                </div>
            </div>
        
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-4">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <form method="POST" action="{{route('rating.like')}}">
                                @csrf
                                <input type="hidden" name="type" value='1'/>
                                <input type="hidden" name="postId" value='{{$data["post"]->getId()}}'/>
                                <button type="submit" class="btn btn-info">Me gusta</button>
                            </form>
                            <h5>{{ $data["likes"] }}</h5>
                        </div>
                        <div class="col-md-6">
                            <form method="POST" action="{{route('rating.like')}}">
                                @csrf
                                <input type="hidden" name="type" value='0'/>
                                <input type="hidden" name="postId" value='{{$data["post"]->getId()}}'/>
                                <button type="submit" class="btn btn-danger">No me gusta</button>
                            </form>   
                            <h5>{{ $data["dislikes"] }}</h5>                         
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <form method="POST" action="{{route('post.delete')}}">
                        @csrf
                        <input type="hidden" name="postId" value='{{$data["post"]->getId()}}'/>
                        <button type="submit" class="btn btn-danger">Eliminar Publicacion</button>
                    </form> 
                </div>
            </div>
        </div>
    </section>
        <div class="container">
            <div class="card" style="margin-top: 5%; margin-bottom:5%;">
                    <div class="card-body">
                    <h5 class="card-title">Deja un Comentario!</h5>
                    <p class="card-text">Opina sobre la Publicacion que acabas de leer o deja una pregunta si la tienes</p>
                    <form method="POST" id="commentform"action="{{ route('comment.save') }}">
                        @csrf
                        <input type="hidden" name="postId" value='{{$data["post"]->getId()}}'/>
                        <textarea style="height:200px; width:70%;" name="comment"  value="{{ old('name') }}" form="commentform" placeholder="Escribe tu comentario aquí!"></textarea>
                        <hr>
                        <input class="btn btn-primary" type="submit" value="Comentar" />
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <h1>COMENTARIOS:</h1>
            @foreach($data["comments"] as $comment)
            <div class="card">
                <div class="card-header"  style="background-color:#1bb2dc2d;">
                    NOMBRE
                </div>
                <div class="card-body">                           
                    {{ $comment->getComment() }}    
                </div>
            </div>
            <br>
            @endforeach
        </div>
</div>
@endsection