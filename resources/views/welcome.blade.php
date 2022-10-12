@extends('layouts.layout')

@section('title')
    コンディション管理アプリ
@endsection

@section('content')
    <div class="top-page d-flex flex-column justify-content-center align-items-center ">
        <div class="h1 text-center">
            <h1 class="text-light-top">The chance is just your side</h1>
            <h4 class="text-light-bottom">毎日のコンディションを記録できるサイトです。</h2>
        </div>
        <div class="d-flex">
            @auth
                <a href="http://localhost/home" class="btn btn-success">ホーム画面へ</a>
            @else
                <a href ="{{ route('register') }}" class="btn btn-success" >まずは無料で登録する</a>
            @endauth
        </div>
    </div>
@endsection