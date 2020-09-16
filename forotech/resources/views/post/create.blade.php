@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @include('util.message')
            <div class="card">
                <div class="card-header">Crear Publicación</div>
                <div class="card-body">
                @if($errors->any())
                <ul id="errors">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif

                <form method="POST" action="{{ route('post.save') }}">
                    @csrf
                    <input type="text" placeholder="Escribe el titulo" name="name" value="{{ old('title') }}" />
                    <input type="text" placeholder="Contenido de la Publicacion" name="name" value="{{ old('body') }}" />
                    <input type="text" placeholder="Link de alguna imagen que quieras compartir" name="link" value="{{ old('link') }}" />
                    <input type="submit" value="Send" />
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection