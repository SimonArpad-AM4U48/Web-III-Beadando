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
        @include('torrent._table')
    @endsection
    @push('sripts')@endpush
