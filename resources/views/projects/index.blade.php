@extends('layouts.layout')

@section('title')
    コンディション記録
@endsection

@section('content')
    <div class="top-page-home">
        <div class="register-title">
            <h1 class="pt-5">Check <br>your fittness level</h1>
            <h3 class="text-light-bottom">あなたのコンディション記録をチェックしよう！</h3>
        </div>
    </div>
    <div class="container pt-5 pb-5">
    <table class="table table-bordered table-hover ">
     <thead class="bg-info text-light">
          <tr>
              <th scope="col">日付</th>
              <th scope="col">朝体温</th>
              <th scope="col">脈拍<br>(20秒)</th>
              <th scope="col">体重<br>(Tr前)</th>
              <th scope="col">体重<br>(Tr後)</th>
              <th scope="col">疲労度<br>(1~10)</th>
          </tr>
      </thead>
      <tbody>
            @foreach ($datas as $data)
            <tr>
              <td><a href="{{ route('showData',$data->id) }}"> {{ $data->created_at }}</a></td>
              <td> {{ $data->bt }} </td>
              <td> {{ $data->pulse }} </td>
              <td> {{ $data->Trb_bw }}</td>
              <td> {{ $data->Tra_bw }}</td>
              <td> {{ $data->fatigue }}</td>
            </tr>
            @endforeach
      </tbody>
    </table>
    </div>
@endsection