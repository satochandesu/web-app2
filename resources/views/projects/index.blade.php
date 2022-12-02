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
    <div class="container pb-5">
            <div class="d-flex" id="data_btn">
                <div id="personal_data_btn">
                    個人データ一覧
                </div>
                <div id="other_data_btn">
                    全データ一覧
                </div>
            </div>
            <div id="search">
                <form action="{{ route('search',Auth::user()->id) }}" method="GET" class="d-flex align-items-end mb-5">
                    <div class="search-date mr-5">
                        <h5>トレーニング日付検索</h5>
                        <input type="date" class="form-control" name="training_date"  value="@if (isset($keyword)) {{ $keyword }} @endif" placeholder="日時検索は 年-月-日">
                    </div>
                    <div class="search-fatigue mr-5">
                        <h5>疲労度検索</h5>
                        <select type="fatigue" class="form-control  @error('fatigue') is-invalid @enderror" name="training_fatigue" autocomplete="new-fatigue" id="fatigue" name="fatigue">
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
                        <h5>トレーニング内容検索</h5>
                        <input type="search" name="search_training"  value="@if (isset($keyword)) {{ $keyword }} @endif" placeholder="トレーニング内容" >
                    </div> 
                    <input type="submit" class="ml-3 btn btn-primary" value="検索">
                </form>
            </div>

            <div id ="AllSearch" class="display">
                <form action="{{ route('search',Auth::user()->id) }}" method="GET" class="d-flex align-items-end mb-5">
                    <div class="search-date mr-5">
                            <h5>他データ人物検索</h5>
                            <input type="search" class="form-control" name="All_data_name"  value="@if (isset($keyword)) {{ $keyword }} @endif" placeholder="チームメイトを検索">
                    </div>
                    <div class="search-date mr-5">
                        <h5>トレーニング日付検索</h5>
                        <input type="date" class="form-control" name="All_training_date"  value="@if (isset($keyword)) {{ $keyword }} @endif" placeholder="日時検索は 年-月-日">
                    </div>
                    <div class="search-fatigue mr-5">
                        <h5>疲労度検索</h5>
                        <select type="fatigue" class="form-control  @error('fatigue') is-invalid @enderror" name="All_training_fatigue" autocomplete="new-fatigue" id="All_fatigue" name="All_fatigue">
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
                        <h5>トレーニング内容検索</h5>
                        <input type="search" name="All_search_training"  value="@if (isset($keyword)) {{ $keyword }} @endif" placeholder="トレーニング内容" >
                    </div> 
                    <input type="submit" class="ml-3 btn btn-primary" value="全データ検索">
                </form>
            </div>
    <table class="table table-bordered table-hover">
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
            @foreach ($datas as $data)
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
            @foreach ($AllDatas as $data)
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