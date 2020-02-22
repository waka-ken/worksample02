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
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <!-- <th>{{ __('Author') }}</th> -->
                    <th>{{ __('Title') }}</th>
                    <!-- <th>{{ __('Body') }}</th> -->
                    <th>{{ __('Created') }}</th>
                    <th>{{ __('Updated') }}</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($recipes as $recipe)
                <tr>

                    <td>
                        <a href="{{ url('recipes/'.$recipe->id) }}">{{ $recipe->title }}</a>
                    </td>

                    <td>{{ $recipe->created_at }}</td>
                    <td>{{ $recipe->updated_at }}</td>
                 </tr>
            @endforeach
            </tbody>
        </table>
    </div>
{{ $recipes->links() }}
</div>
@endsection
