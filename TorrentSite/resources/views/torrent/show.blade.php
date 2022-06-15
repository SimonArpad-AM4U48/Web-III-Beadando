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
    @endsection
    @push('sripts')@endpush
