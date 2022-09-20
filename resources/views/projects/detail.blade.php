@extends('layouts.layout')

@section('title')
    データ詳細
@endsection

@section('content')
<table class="table table-bordered table-hover">
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
            <tr>
              <td> {{ $datas->created_at }} </td>
              <td> {{ $datas->bt }} </td>
              <td> {{ $datas->pulse }} </td>
              <td> {{ $datas->Trb_bw }}</td>
              <td> {{ $datas->Tra_bw }}</td>
              <td> {{ $datas->fatigue }}</td>
            </tr>
      </tbody>
    </table>
    <a href="{{ route('record.index') }}" class="m-3 btn btn-secondary">戻る</a>
    <a href="{{ route('record_update', $datas->id) }}" class="m-3 btn btn-secondary">変更</a>
    <a href="{{ route('record_delete', $datas->id) }}" class="m-3 btn btn-secondary">削除</a>
@endsection