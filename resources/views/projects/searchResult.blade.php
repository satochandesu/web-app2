@extends('layouts.layout')

@section('title')
    検索結果
@endsection

@section('content')
    <div class="top-page-home">
        <div class="register-title">
            <h1 class="pt-5">SEARCH <br>your team mate fittness level</h1>
            <h3 class="text-light-bottom">チームメイトのコンディション記録をチェックしよう！</h3>
            <h5 class="text-light-bottom">検索一覧ページ</h5>
        </div>
    </div>
    <div class="container pb-5">
        <div id ="AllSearch" class="mt-3 mb-3">
                <form action="{{ route('search',Auth::user()->id) }}" method="GET" class="d-flex align-items-end mb-3">
                    <div class="search-date mr-5">
                        <h4>他データ人物検索</h4>
                        
                        <input type="search" class="form-control" name="All_data_name"  value="@if (isset($All_data_name)) {{ $All_data_name }} @endif"  placeholder="チームメイトを検索">
                    </div>
                    <div class="search-date mr-5">
                        <h4>トレーニング日付検索</h4>
                        <!-- ↓　valueのところ→半角スペースを空けずに記述したら反応した？！ -->
                        <input type="date" class="form-control" name="All_training_date" value="@if(isset($training_date)){{$training_date}}@elseif(isset($All_training_date)){{$All_training_date}}@endif">
                    </div>
                    <div class="search-fatigue mr-5">
                        <h4>疲労度検索</h4>
                        <select type="fatigue" class="form-control" name="All_training_fatigue" autocomplete="new-fatigue" id="All_fatigue" name="All_fatigue">
                            <option>@if(isset($training_fatigue)){{ $training_fatigue }}@elseif(isset($All_training_fatigue)){{ $All_training_fatigue }}@endif</option>
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
                        <input type="search" class="form-control" name="All_search_training"  value="@if(null == $search_training && !null == $All_search_training) {{$All_search_training}} @elseif(null == $All_search_training && !null == $search_training) {{$search_training}}  @endif" placeholder="トレーニング内容" >
                    </div> 
                    <input type="submit" id ="AllSearch" class="ml-3 btn btn-primary" value="全データ検索">
                </form>
            </div>
            <table class="table table-bordered table-hover ">
            <thead class="bg-info text-light">
                <tr>
                    <th scope="col">日付</th>
                    <th scope="col">名前</th>
                    <th scope="col">朝体温</th>
                    <th scope="col">脈拍<br>(20秒)</th>
                    <th scope="col">体重<br>(トレーニング前)</th>
                    <th scope="col">体重<br>(トレーニング後)</th>
                    <th scope="col">疲労度<br>(1~10)</th>
                </tr>
            </thead>
            <div id="personal_data_table">
            <tbody>
                @foreach ($seaches as $data)
                <tr>
                <td><a href="{{ route('showData',$data->id) }}"> {{ $data->created_at }} <br>トレーニング内容</a></td>
                <td> {{ $data->name }} </td>
                <td> {{ $data->bt }} </td>
                <td> {{ $data->pulse }} </td>
                <td> {{ $data->Trb_bw }}</td>
                <td> {{ $data->Tra_bw }}</td>
                <td> {{ $data->fatigue }}</td>
                </tr>
                @endforeach
            </tbody>
            </div>

            <tbody id="other_data_table" class="display">
            @foreach ($seaches as $data)
                <tr>
                <td><a href="{{ route('showData',$data->id) }}"> {{ $data->created_at }} <br>トレーニング内容</a></td>
                <td> {{ $data->name }} </td>
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