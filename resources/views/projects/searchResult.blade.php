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
                <form action="{{ route('search',Auth::user()->id) }}" method="GET" class="search-form mb-3">
                    <div class="search-columns">
                        <div class="search-column">
                            <div class="search-date">
                                <h5>他データ人物検索</h5>
                                <input type="search" class="form-control" name="All_data_name"  value="{{ request('All_data_name','チームメイトを検索') }}">
                            </div>
                            <div class="search-date">
                                <h5>日付検索</h5>
                                <input type="date" class="form-control" name="All_training_date" value="{{ request('All_training_date',$training_date) }}">
                            </div>
                        </div>
                        <div class="search-column">
                            <div class="search_training">
                                <h5>トレーニング検索</h5>
                                <input type="search" class="form-control" name="All_search_training" value="{{ request('All_search_training',$search_training) }}">
                            </div>
                            <div class="search-fatigue">
                                <h5>疲労度検索</h5>
                                <select type="fatigue" class="form-control" name="All_training_fatigue" autocomplete="new-fatigue" id="All_fatigue" name="All_fatigue">
                                    <option>{{ request('training_fatigue',$All_training_fatigue) }}</option>
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
                        </div>
                        <div class="button text-align-right">
                                <input type="submit" class="submit btn btn-primary" value="全データ検索">
                        </div>
                    </div>
                </form>
            </div>
            <table class="table table-bordered table-hover ">
            <thead class="bg-info text-light">
                <tr>
                    <th scope="col">日付</th>
                    <th scope="col">名前</th>
                    <th scope="col" class="pc-data">朝体温</th>
                    <th scope="col" class="pc-data">脈拍<br>(20秒)</th>
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
                <td class="pc-data"> {{ $data->bt }} </td>
                <td class="pc-data"> {{ $data->pulse }} </td>
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
                <td class="pc-data"> {{ $data->bt }} </td>
                <td class="pc-data"> {{ $data->pulse }} </td>
                <td> {{ $data->Trb_bw }}</td>
                <td> {{ $data->Tra_bw }}</td>
                <td> {{ $data->fatigue }}</td>
                </tr>
                @endforeach
      </tbody>
        </table>
    </div>
@endsection