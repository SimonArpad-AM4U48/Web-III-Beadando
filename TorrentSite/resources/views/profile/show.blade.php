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
        <div>
            <div class="mb-2">
                <img class="rounded-circle me-2" width="50px" src="{{$user->avatar}}" alt="{{$user->name}}">{{$user->name}}
            </div>
            <div>
                @include('torrent._table')
            </div>
        </div>
    @endsection
    @push('sripts')@endpush
