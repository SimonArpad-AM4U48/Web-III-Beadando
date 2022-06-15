@extends('layouts.main')
    @section('title')<title>{{config('app.name')}}</title>@endsection
    @push('style')
        <style>
            .link{
                text-decoration: none;
                color: white;
            }
            .link:hover{
                color: green;
            }
        </style>
    @endpush
    @section('content')
        <div class="mb-3">
            <h1>{{$category->title}}</h1>
        </div>
        @include('torrent._table')
    @endsection
    @push('sripts')@endpush
