@extends('layouts.main')
    @section('title')<title>{{config('app.name')}}</title>@endsection
    @push('style')
        <style>
            .link{
                text-decoration: none;
                color: black;
                font-weight: bold;
            }
            .link:hover{
                color: green;
            }
        </style>
    @endpush
    @section('content')
        <h1>{{$torrent->title}}</h1>
        <p>
            <a class="link" href="{{route('profile.show', $torrent->user)}}">
                <img class="rounded-circle me-2" width="50px" src="{{$torrent->user->avatar}}" alt="{{$torrent->user->name}}">
                {{$torrent->user->name}}
            </a>
            |
            <a class="link" href="{{route('category.show', $torrent->category)}}">
                {{$torrent->category->title}}
            </a>
            |
            <b>{{ $torrent->created_at->diffForHumans() }}</b>
        </p>
        <div>
            {{ $torrent->description }}
        </div>
        <div class="mt-5 card">
            <h5 class="card-header">{{__(('Comments'))}}</h5>
            <div class="card-body">
                <h5 class="card-title"><form action="{{ route('torrent.comment', $torrent) }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <input name="comment" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-success" type="submit">{{__(('Comment'))}}</button>
                        </div>
                    </form>
                </h5>
                @foreach($torrent->comments as $comment)
                    <div class="card mb-3" id="comment-{{$comment->id}}">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a class="link" href="{{ route('profile.show', $comment->user) }}">
                                    <img class="rounded-circle me-2" width="25" src="{{ $comment->user->avatar }}" alt="{{ $comment->user->name }}">
                                    {{ $comment->user->name }}
                                </a>
                                | {{ $comment->created_at->diffForHumans() }}
                            </h5>
                            <p class="card-text">{{ $comment->message }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
    @push('sripts')@endpush
