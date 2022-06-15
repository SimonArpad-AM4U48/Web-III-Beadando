@extends('layouts.main')
    @section('title')<title>{{config('app.name')}}</title>@endsection
    @push('style')@endpush
    @section('content')
        <h1>{{$torrent->title}}</h1>
        <p>{{ $torrent->user->name }} | {{ $torrent->category->title }} | {{ $torrent->created_at->diffForHumans() }}</p>
        <div>
            {{ $torrent->description }}
        </div>
    @endsection
    @push('sripts')@endpush
