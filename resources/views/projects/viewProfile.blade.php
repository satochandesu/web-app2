@extends('layouts.layout')

@section('title')
    コンディション記録
@endsection

@section('content')
    <div class="top-page-home">
        <div class="register-title">
            <h1 class="pt-5">Profile</h1>
            <h3 class="text-light-bottom">あなたのプロフィールを表示しています</h3>
        </div>
    </div>
    <div class="container pt-5 pb-5">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">名前</th>
                    <th scope="col">スポーツ</th>
                    <th scope="col">チーム</th>
                    <th scope="col">背番号</th>
                    <th scope="col">ポジション</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $profile->profileName }}</td>
                        <td>{{ $profile->sports }}</td>
                        <td>{{ $profile->team }}</td>
                        <td>{{ $profile->number }}</td>
                        <td>{{ $profile->position }}</td>
                    </tr>
                </tbody>
            </table>
           <a href ="{{ route('create_profile', $profile_id)}}">編集</a>
    </div>
@endsection