@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card-header">Comments</div>
                @foreach($data["comments"] as $comment)
                    <details>
                        <summary>Comment {{$comment->getId()}}</summary>
                            <ul>
                                <li><b>id: </b>{{ $comment->getId() }}</li>
                                <li><b>Comment: </b>{{ $comment->getComment() }}</li>
                                <li><b>Creation: </b>{{$comment->getDate() }}</li>
                            </ul>
                            <form method="POST" action="{{ route('comment.delete') }}">
                                @csrf
                                <input type="hidden" name="commentId" value='{{ $comment->getId() }}'/>
                                <input type="submit" value="Delete" />
                            </form>
                    </details>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection
