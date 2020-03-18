@php
    $title = __('Recipes');

@endphp
@extends('layouts.app')
@section('content')
<div class="container">
    <h1>{{ $title }}</h1>
    <button class="my-3">
        <a href="recipes/create">
            新規作成
        </a>
    </button>
    <div class="container p-0">
        <div class="row justify-content-center">
            @foreach ($recipes as $recipe)
            <div class="col-md-4 col-sm-6 py-3">
                <div class="card" style="max-width:25rem;">
                    <img src="./image/pancake-1984716_1920.jpg" class="card-img-top p-3">
                    <div class="card-body">
                        <h2 class="card-title">{{ $recipe->title }}</h2>

                        <hr>
                        <a href=" recipes/{{ $recipe->id }}" class="btn btn-primary">詳しくみる</a>
                        <p class="card-text text-secondary text-right pt-4">作成日:{{ $recipe->created_at }}</p>
                        @if ($recipe->comments->count())
                        <span class="badge badge-primary">
                            コメント {{ $recipe->comments->count() }}件
                        </span>
                    @endif
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>

    {{ $recipes->links() }}
</div>
@endsection
