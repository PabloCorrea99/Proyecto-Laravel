@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $data["post"]["title"] }}</div>

                <div class="card-body">
                    <img src="{{ $data['post']['image'] }}" alt="">
                    <p>{{ $data["post"]["body"] }}</p>  
                    <br/>
                    <form method="POST" action="{{ route('comment.save') }}">
                        @csrf
                        <input type="hidden" name="postId" value='{{$data["post"]->getId()}}'/>
                        <input type="text" placeholder="Enter comment" name="comment" value="{{ old('name') }}" />
                        <input type="submit" value="Send" />
                    </form>
                    <br/>
                    <form method="POST" action="{{route('post.delete')}}">
                        @csrf
                        <input type="hidden" name="postId" value='{{$data["post"]->getId()}}'/>
                        <button type="submit" class="btn btn-danger">Eliminar Publicacion</button>
                    </form>
                    <form method="POST" action="{{route('rating.like')}}">
                        @csrf
                        <input type="hidden" name="type" value='1'/>
                        <input type="hidden" name="postId" value='{{$data["post"]->getId()}}'/>
                        <button type="submit" class="btn btn-info">Me gusta</button>
                    </form>
                    <form method="POST" action="{{route('rating.dislike')}}">
                        @csrf
                        <input type="hidden" name="type" value='1'/>
                        <input type="hidden" name="postId" value='{{$data["post"]->getId()}}'/>
                        <button type="submit" class="btn btn-danger">No me gusta</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection