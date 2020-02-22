@php
    $title = $recipe->title;
    $materials = $recipe->materials;
    $method = $recipe->method;


@endphp
@extends('layouts.app')
@section('content')
<div class="container">
    <h1 id="post-title">{{ $title }}</h1>
    <hr>
    <h2 id="post-materials">{{ $materials }}</h2>
    <hr>
    <h2 id="post-method">{{ $method }}</h2>
    <hr>
    {{-- 編集・削除ボタン --}}
    <div class="edit">
        <a href="{{ url('recipes/'.$recipe->id.'/edit') }}" class="btn btn-primary">
            {{ __('Edit') }}
        </a>
        @component('components.btn-del')
            @slot('table', 'recipes')
            @slot('id', $recipe->id)
        @endcomponent
    </div>

    {{-- 記事内容 --}}
    <dl class="row">


        <dt class="col-md-2">{{ __('Created') }}:</dt>
        <dd class="col-md-10">
            <time itemprop="dateCreated" datetime="{{ $recipe->created_at }}">
                {{ $recipe->created_at }}
            </time>
        </dd>
        <dt class="col-md-2">{{ __('Updated') }}:</dt>
        <dd class="col-md-10">
            <time itemprop="dateModified" datetime="{{ $recipe->updated_at }}">
                {{ $recipe->updated_at }}
            </time>
        </dd>
    </dl>
    <hr>
    <div id="post-body">
        {{ $recipe->body }}
    </div>
</div>
@endsection
