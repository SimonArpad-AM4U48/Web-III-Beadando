@extends('layouts.main')
    @section('title')<title>{{config('app.name')}}</title>@endsection
    @push('style')@endpush
    @section('content')
        <h3>{{__(('Sign in'))}}</h3>
        <form action="{{route('login')}}" method="POST">
            @csrf
            <x-forms.input name="email" type="email" label="{{__(('Email address'))}}"/>
            <x-forms.input name="password" type="password" label="{{__(('Password'))}}"/>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" id="remember" name="remember">
                <label class="form-check-label" for="remember">
                    {{__(('Remeber me'))}}
                </label>
            </div>
            <div>
                <button class="btn btn-primary btn-lg" type="submit">
                    {{__(('Sign in'))}}
                </button>
            </div>
        </form>
    @endsection
    @push('sripts')@endpush
