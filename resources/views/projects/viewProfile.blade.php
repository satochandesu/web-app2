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
                        @if(isset($profile->profileName))
                            <td>{{ $profile->profileName }}</td>
                        @else
                            <td><p>未設定</p></td>
                        @endisset
                        
                        @if(isset($profile->sports))
                            <td>{{ $profile->sports }}</td>
                        @else
                            <td><p>未設定</p></td>
                        @endisset

                        @if(isset($profile->team))
                            <td>{{ $profile->team }}</td>
                        @else
                            <td><p>未設定</p></td>
                        @endisset
                        
                        @if(isset($profile->number))
                            <td>{{ $profile->number }}</td>
                        @else
                            <td><p>未設定</p></td>
                        @endisset

                        @if(isset($profile->position))
                            <td>{{ $profile->position }}</td>
                        @else
                            <td><p>未設定</p></td>
                        @endisset
                    </tr>
                </tbody>
            </table>
            
            @if(isset($profile->profileName))
            <a class="btn btn-sm btn-primary text-light nav-item nav-link" href ="{{ route('update_profile', Auth::user()->id)}}">編集</a>
            @else
            <a class="btn btn-sm btn-primary text-light nav-item nav-link" href ="{{ route('create_profile', Auth::user()->id)}}">プロフィールを設定</a>
            @endif
    </div>
@endsection