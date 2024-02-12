@extends('layouts.app')

@section('content')
<div class="container">

    <!-- CREATE POST -->
    <h3 class="text-center my-3">
        Hello, 
        <span class="fw-bold">{{ Auth::user()->name }}</span>
    </h3>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <form action="{{ route('createpost') }}" method="POST" class="form-control card-body p-5">
                @csrf
                    <input type="text"
                            name="content"
                            required
                            placeholder="What's on your mind? 💭"
                            class="form-control">
                    <button class="btn btn-dark mt-2 float-end">Create Post</button>
                </form>
            </div>
        </div>
    </div>

    <!-- POSTS -->
    @foreach($posts as $post)
    <div class="mt-5 row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body -4">
                    <span class="fw-bold">
                        {{ $post->user->name }}
                        <!-- DELETE -->
                        @if($post->user->id == Auth::user()->id)
                            <a href="{{ route('deletepost', $post->id) }}" class="float-end btn btn-dark btn-sm">Delete</a>
                        @endif
                    </span><br>
                    <small> {{ $post->created_at->diffForHumans() }}</small>
                    <p class="mt-3"> {{ $post->content }}</p>

                    <!-- COMMENT INPUT -->
                    <div class="card mb-3">
                        <form class="card-body" action="{{ route('createcomment') }}" method="POST">
                        @csrf
                            <input type="text"
                                    required
                                    name="content"
                                    placeholder="Write a comment"
                                    class="form-control">
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <button class="btn btn-dark mt-2 float-end btn-sm">Submit</button>
                        </form>
                    </div>

                    <!-- COMMENT -->
                    @foreach($post->comments->reverse() as $comment)
                    <div class="mt-2 card px-3 py-2" style="font-size:12px">
                        <div class="card-body">
                            <span class="fw-bold mt-1">
                                {{ $comment->user->name }}
                                <!-- @if($post->user->id == Auth::user()->id)
                                    <a href="{{ route('deletepost', $post->id) }}" class="float-end btn btn-dark btn-sm">Delete</a>
                                @endif -->
                            </span>
                            <small>{{ $post->created_at->diffForHumans() }}</small>
                            <p> {{ $comment->content }} </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>
@endsection
