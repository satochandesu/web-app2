@extends('layouts.layout')

@section('title')
    コンディション入力画面
@endsection

@section('content')
    <div class="top-page-home">
        <div class="register-title">
            <h1 class="pt-5">Insert <br>your fittness </h1>
            <h3 class="text-light-bottom">今日のコンディションを入力しよう！</h3>
        </div>
        
        <div class="card-body">
                        <form method="get" action="{{ route('storeProfile',$profiles->id) }}">
                           @csrf
                           <div class="form-group d-flex flex-column flex-md-row">
                                <label for="profileName" class="col-md-4 col-form-label text-md-right">名前　</label>
                                <div class="col-md-6">
                                    <input id="profileName" type="profileName" class="form-control  @error('profileName') is-invalid @enderror" name="profileName" value ="{{ old('profileName') }}" required autocomplete="new-profileName">
                                    @error('profileName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group d-flex flex-column flex-md-row mt-1">
                                <label for="sports" class="col-md-4 col-form-label text-md-right">スポーツ　</label>
                                <div class="col-md-6">
                                    <input id="sports" type="sports" class="form-control  @error('sports') is-invalid @enderror" name="sports"  value ="{{ old('sports') }}" required autocomplete="new-sports">
                                    @error('sports')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                           <div class="form-group d-flex flex-column flex-md-row mt-1">
                                <label for="team" class="col-md-4 col-form-label text-md-right">チーム　</label>
                                <div class="col-md-6">
                                    <input id="team" type="text" class="form-control @error('team') is-invalid @enderror" name="team"  value ="{{ old('team') }}" required autocomplete="team" autofocus>
                                    @error('team')
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror                                    
                                </div>
                            </div>

                            <div class="form-group d-flex flex-column flex-md-row mt-1">
                                <label for="number" class="col-md-4 col-form-label text-md-right">背番号　</label>
                                <div class="col-md-6">
                                    <input id="number" type="number" class="form-control @error('number') is-invalid @enderror" name="number" value="{{ old('number') }}" required autocomplete="number" autofocus>
                                    @error('number')
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group d-flex flex-column flex-md-row mt-1">
                                <label for="position" class="col-md-4 col-form-label text-md-right">ポジション　</label>
                                <div class="col-md-6">
                                    <input id="position" type="position" class="form-control @error('position') is-invalid @enderror" name="position" value="{{ old('position') }}" required autocomplete="position" autofocus>
                                    @error('position')
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                </div>
                            </div>
                            

                            <div class="form-group d-flex mt-3 mb-0">
                                <div class="col-md-10 col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">編集完了</button>
                                </div>
                            </div>
                        </form>
        </div>
    </div>
@endsection