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
        </style>@endpush
    @section('content')
        <div class="mt-5 card">
            <h5 class="card-header">{{__(('Chat'))}}</h5>
            <div class="card-body">
                @auth
                    <h5 class="card-title">
                        <form action="{{ route('home') }}" method="POST">
                            @csrf
                            <div class="input-group mb-3">
                                <input name="message" class="form-control" placeholder="{{__(('Send message'))}}" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-outline-success" type="submit">{{__(('Send'))}}</button>
                            </div>
                        </form>
                    </h5>
                @endauth
                @if ($chatitems->isNotEmpty())
                    @foreach($chatitems as $chatitem)
                            <div class="card mb-3" id="comment-{{$chatitem->id}}">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a class="link" href="{{ route('profile.show', $chatitem->user) }}">
                                            <img class="rounded-circle me-2" width="25" src="{{ $chatitem->user->avatar }}" alt="{{ $chatitem->user->name }}">
                                            {{ $chatitem->user->name }}
                                        </a>
                                        | {{ $chatitem->created_at->diffForHumans() }}
                                    </h5>
                                    <p class="card-text">{{ $chatitem->message }}</p>
                                </div>
                            </div>
                    @endforeach
                @else
                    <div class="alert alert-warning">
                        {{ __('No message to show') }}
                    </div>
                @endif
            </div>
        </div>
    @endsection
    @push('sripts')@endpush
