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
                    <th scope="col">NAME</th>
                    <th scope="col">SPORTS</th>
                    <th scope="col">TEAM</th>
                    <th scope="col">Number</th>
                    <th scope="col">Position</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($profiles as $profile)
                    <tr>
                        <td>{{ $profile->profileName }}</td>
                        <td>{{ $profile->sports }}</td>
                        <td>{{ $profile->team }}</td>
                        <td>{{ $profile->number }}</td>
                        <td>{{ $profile->position }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <a href="{{ route('editProfile',$profiles->id) }}">編集</button>
    </div>
@endsection