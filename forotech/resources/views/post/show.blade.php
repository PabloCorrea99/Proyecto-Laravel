@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $data["post"]["title"] }}</div>

                <div class="card-body">
                    <img src="{{ $data['product']['image'] }}" alt="">
                    <p>{{ $data["post"]["body"] }}</p>  
                    <br/>
                    <form method="POST" action="{{route('post.delete')}}">
                    @csrf
                    <input type="hidden" name="postId" value='{{$data["post"]->getId()}}'/>
                    <button type="submit" class="btn btn-danger">Eliminar Publicacion</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection