@extends('layouts.main')
    @section('title')<title>{{config('app.name')}}</title>@endsection
    @push('style')@endpush
    @section('content')
        <h3>{{__(('Sign up'))}}</h3>
        <form action="{{route('register')}}" method="POST">
            @csrf
            <x-forms.input name="name" label="{{__(('Username'))}}"/>
            <x-forms.input name="email" type="email" label="{{__(('Email address'))}}"/>
            <x-forms.input name="password" type="password" label="{{__(('Password'))}}"/>
            <x-forms.input name="password_confirmation" type="password" label="{{__(('Password confirmation'))}}"/>
            <div class="form-check">
                <input class="form-check-input{{$errors->has('terms') ? 'is-invalid' : ''}}" type="checkbox" value="1" id="terms" name="terms">
                <label class="form-check-label" for="terms">
                    {{__(('Agree to terms and conditions'))}}
                </label>
                <div class="invalid-feedback">
                    {{__(('You must agree before submitting.'))}}
                </div>
            </div>
            <div>
                <button class="btn btn-primary btn-lg" type="submit">
                    {{__(('Register'))}}
                </button>
            </div>
        </form>
    @endsection
    @push('sripts')@endpush
