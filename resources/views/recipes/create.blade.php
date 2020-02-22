@php
    $title = __('Create Recipe');

@endphp
@extends('layouts.app')
@section('content')
<div class="container">
    <h1>{{ $title }}</h1>
    <form action="{{ url('recipes') }}" method="post">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="title">{{ __('Title') }}</label>
            <input id="title" type="text" class="form-control" name="title" required autofocus>
        </div>
        <div class="form-group">
            <label for="materials">{{ __('Materials') }}</label>
            <textarea id="materials" class="form-control" name="materials" rows="8" required></textarea>
        </div>
        <div class="form-group">
            <label for="method">{{ __('Method') }}</label>
            <textarea id="method" class="form-control" name="method" rows="8" required></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </form>
</div>
@endsection
