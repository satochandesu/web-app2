@extends('layouts.layout')

@section('title')
    検索結果
@endsection

@section('content')
    <div class="top-page-home">
        <div class="register-title">
            <h1 class="pt-5">Check <br>your fittness level</h1>
            <h3 class="text-light-bottom">あなたのコンディション記録をチェックしよう！</h3>
        </div>
    </div>
    <div class="container pt-5 pb-5">
        <div class="pb-2">
        <form action="{{ route('search',Auth::user()->id) }}" method="GET">
            <h3>トレーニング内容や数値を検索</h3>
            <input type="text" name="keyword" value="{{ $keyword }}" placeholder="日時検索は 年-月-日">
            <input type="submit" value="検索">
        </form>
        </div>
        <p><h4>{{ $keyword }}</h4>の検索結果</p>
    <table class="table table-bordered table-hover ">
     <thead class="bg-info text-light">
          <tr>
              <th scope="col">日付</th>
              <th scope="col">朝体温</th>
              <th scope="col">脈拍<br>(20秒)</th>
              <th scope="col">体重<br>(トレーニング前)</th>
              <th scope="col">体重<br>(トレーニング後)</th>
              <th scope="col">疲労度<br>(1~10)</th>
          </tr>
      </thead>
      <tbody>
            @foreach ($seaches as $seach)
            <tr>
              <td><a href="{{ route('showData',$seach->id) }}"> {{ $seach->created_at }} <br>トレーニング内容</a></td>
              <td> {{ $seach->bt }} </td>
              <td> {{ $seach->pulse }} </td>
              <td> {{ $seach->Trb_bw }}</td>
              <td> {{ $seach->Tra_bw }}</td>
              <td> {{ $seach->fatigue }}</td>
            </tr>
            @endforeach
      </tbody>
    </table>
    </div>
@endsection