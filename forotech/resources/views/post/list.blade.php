@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">Publicaciones:</div>

                <div class="card-body">
                @foreach($data["posts"] as $post)
                    <li>{{ $post->getId() }} - <a href="show/{{$post->getId()}}">{{ $post->getTitle() }}</a></li>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection