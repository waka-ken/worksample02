@php
    $title = __('User') . ': ' . $user->name;
@endphp
@extends('layouts.app')
@section('content')
<div class="container">
    <h1>{{ $title }}</h1>

    {{-- 編集・削除ボタン --}}
    <div>
        <a href="{{ url('users/'.$user->id.'/edit') }}" class="btn btn-primary">
            {{ __('Edit') }}
        </a>
        {{-- 削除ボタンは後で正式なものに置き換えます --}}
        @component('components.btn-del')
            @slot('table', 'users')
            @slot('id', $user->id)
        @endcomponent
    </div>

    {{-- ユーザー1件の情報 --}}
    <dl class="row">
        <dt class="col-md-2">{{ __('ID') }}</dt>
        <dd class="col-md-10">{{ $user->id }}</dd>
        <dt class="col-md-2">{{ __('Name') }}</dt>
        <dd class="col-md-10">{{ $user->name }}</dd>
        <dt class="col-md-2">{{ __('E-Mail Address') }}</dt>
        <dd class="col-md-10">{{ $user->email }}</dd>
    </dl>

    @foreach ($socialAccounts as $provider => $account)
        @if (isset($account['link']) && $account['link'])
            <a href="{{ $account['link'] }}" target="_blank" rel="noopener noreferrer">
            @if ($provider === 'twitter')
                <i class="fab fa-twitter-square fa-2x"></i>
            @else
                {{ $provider }}
            @endif
            </a>
        @endif
    @endforeach
</div>
@endsection
