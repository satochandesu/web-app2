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
        <form action="{{ route('search',Auth::user()->id) }}" method="GET" class="d-flex justify-container-flex-end align-items-top mb-5">
                <div class="search-date mr-5">
                    <h4>トレーニング日付検索</h4>
                    <input type="search" name="training_date"  value="@if (isset($keyword)) {{ $keyword }} @endif" placeholder="日時検索は 年-月-日">
                </div>
                <div class="search-fatigue mr-5">
                    <h4>疲労度検索</h4>
                    <select type="fatigue" class="form-control  @error('fatigue') is-invalid @enderror" name="training_fatigue"  autocomplete="new-fatigue" id="fatigue" name="fatigue">
                        <option></option>
                        <option value="1" @if( old('fatigue') ==  "1") selected @endif>1</option>
                        <option value="2" @if( old('fatigue') ==  "2") selected @endif>2</option>
                        <option value="3" @if( old('fatigue') ==  "3") selected @endif>3</option>
                        <option value="4" @if( old('fatigue') ==  "4") selected @endif>4</option>
                        <option value="5" @if( old('fatigue') ==  "5") selected @endif>5</option>
                        <option value="6" @if( old('fatigue') ==  "6") selected @endif>6</option>
                        <option value="7" @if( old('fatigue') ==  "7") selected @endif>7</option>
                        <option value="8" @if( old('fatigue') ==  "8") selected @endif>8</option>
                        <option value="9" @if( old('fatigue') ==  "9") selected @endif>9</option>
                        <option value="10" @if( old('fatigue') ==  "10") selected @endif>10</option>
                    </select>
                </div>

                <div class="search_training mr-5">
                    <h4>トレーニング内容検索</h4>
                    <input type="search" name="search_training"  value="@if (isset($keyword)) {{ $keyword }} @endif" placeholder="トレーニング内容">
                </div> 
                <input type="submit" class="ml-3 btn btn-primary" value="検索">
            </form>
        </div>
        <div class="d-flex">
            <p><h4>{{ $training_date }}　{{ $training_fatigue }}　{{ $search_training }}</h4>　の検索結果</p>
        </div>
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