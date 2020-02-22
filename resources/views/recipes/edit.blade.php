@php
    $title = __('Edit') . ': ' . $recipe->title;
@endphp
@extends('layouts.app')
@section('content')
<div class="container">
    <h1>{{ $title }}</h1>
    <form action="{{ url('recipes/'.$recipe->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">{{ __('Title') }}</label>
            <input id="title" type="text" class="form-control" name="title" value="{{ $recipe->title }}" required autofocus>
        </div>
        <div class="form-group">
            <label for="body">{{ __('Materials') }}</label>
            <textarea id="materials" class="form-control" name="materials" rows="8" required>{{ $recipe->materials }}</textarea>
        </div>
        <div class="form-group">
            <label for="body">{{ __('Method') }}</label>
            <textarea id="method" class="form-control" name="method" rows="8" required>{{ $recipe->method }}</textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </form>
</div>
@endsection
