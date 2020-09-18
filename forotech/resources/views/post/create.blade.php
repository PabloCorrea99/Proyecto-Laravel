@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container" style="margin-top: 20px; margin-bottom:30px">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @include('util.message')
            <h1>Crear Publicación</h1>
            @if($errors->any())
                <ul id="errors">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <div class="card">
                <div class="card-body">
                <form method="POST" id="postform" action="{{ route('post.save') }}">
                    @csrf
                    <label for="title">Titulo de la Publicación: </label>
                    <br>
                    <input type="text" placeholder="Escribe el titulo" name="title" value="{{ old('title') }}" />
                    <hr>
                    <label for="body">Escribe tu Publicación: </label>
                    <br>
                    <textarea style="height:400px; width:95%;" name="body"  value="{{ old('body') }}" form="postform"></textarea>
                    <hr>
                    <label for="image">Agrega alguna imagen: </label>
                    <br>
                    <input type="text" placeholder="Link imagen" name="image" value="{{ old('image') }}" />
                    <hr>
                    <button class="btn btn-info" type="submit" value="Send"> CREAR </button>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection