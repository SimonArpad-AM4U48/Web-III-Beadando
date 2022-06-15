@extends('layouts.main')
    @section('title')<title>{{config('app.name')}}</title>@endsection
    @push('style')@endpush
    @section('content')
        <h3>{{__(('Upload'))}}</h3>
        <form action="{{route('torrent.create')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" placeholder="Title" value="{{old('title')}}">
                <label for="title">{{__(('Title'))}}</label>
                @if ($errors->has('title'))
                    <p class="invalid-feedback">{{$errors->first('title')}}</p>
                @endif
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="Leave a comment here" name="description" style="height: 200px">{{old('description')}}</textarea>
                <label for="description">{{__(('Description'))}}</label>
                @if ($errors->has('description'))
                    <p  class="invalid-feedback">{{$errors->first('description')}}</p>
                @endif
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text" for="category_id">{{__(('Category'))}}</label>
                <select class="form-select, form-control {{ $errors->has('category_id') ? ' is-invalid' : '' }}" name="category_id">
                    <option selected>Choose...</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}" {{old('category_id') == $category->id ? 'selected' : ''}}>{{$category->title}}</option>
                    @endforeach
                </select>
                @if ($errors->has('category_id'))
                    <p class="invalid-feedback">{{$errors->first('category_id')}}</p>
                @endif
            </div>
            <div class="input-group mb-3">
                <input type="file" class="form-control {{ $errors->has('torrent_file') ? ' is-invalid' : '' }}" name="torrent_file" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                <button class="btn btn-outline-secondary">{{__(('Upload'))}}</button>
                @if($errors->has('torrent_file'))
                    <p class="invalid-feedback">{{$errors->first('torrent_file')}}</p>
                @endif
            </div>
        </form>
    @endsection
    @push('sripts')@endpush
