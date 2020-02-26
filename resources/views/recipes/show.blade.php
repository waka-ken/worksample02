@php
    $title = $recipe->title;
    $materials = $recipe->materials;
    $method = $recipe->method;


@endphp
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-4">
        <div class="card-body">
            <h1 class="card-title" id="post-title">{{ $title }}</h1>
            {{-- 記事内容 --}}
            <dl class="row text-secondary">
                <dt class="offset-lg-7 col-2 text-right p-0">{{ __('Created') }}:</dt>
                <dd class="col-lg-3 col-10">
                    <time itemprop="dateCreated" datetime="{{ $recipe->created_at }}">
                        {{ $recipe->created_at }}
                    </time>
                </dd>
                <dt class="offset-lg-7 col-2 text-right p-0">{{ __('Updated') }}:</dt>
                <dd class="col-lg-3 col-10">
                    <time itemprop="dateModified" datetime="{{ $recipe->updated_at }}">
                        {{ $recipe->updated_at }}
                    </time>
                </dd>
            </dl>
            <hr>
            <div class="row">
                <div class="col-md-6 order-md-1 my-4">
                    <h4>用意する具材</h4>
                    <p id="post-materials">{!! nl2br(e($materials)) !!}</p>
                </div>
                <div class="col-md-6 order-md-12 order-first">
                    <img class="card-img-top" src="/image/pancake-1984716_1920.jpg" style="max-width:32rem;" alt="サムネイル写真">
                </div>
            </div>
            <hr>
            <h4>調理手順</h4>
            <p id="post-method">{!! nl2br(e($method)) !!}</p>
            <hr>
            {{-- 編集・削除ボタン --}}
            <div class="edit text-right">
                <a href="{{ url('recipes/'.$recipe->id.'/edit') }}" class="btn btn-primary">
                    {{ __('Edit') }}
                </a>
                @component('components.btn-del')
                    @slot('table', 'recipes')
                    @slot('id', $recipe->id)
                @endcomponent
            </div>
        </div>
    </div>
    <div id="post-body">
        {{ $recipe->body }}
    </div>
</div>
@endsection
