@extends('layouts.layout')

@section('title')
    プロフィール設定
@endsection

@section('content')
    <div class="top-page-home">
        <div class="register-title">
            <h1 class="pt-5">EDIT <br>your PROFILE </h1>
            <h3 class="text-light-bottom">プロフィールを設定してください</h3>
        </div>
        
        <div class="card-body">
                        <form method="post" action="{{ route('store_profile',Auth::user()->id) }}">
                           @csrf
                           <div class="form-group d-flex flex-column flex-md-row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">名前　</label>
                                <div class="col-md-6">
                                    <input id="name" type="name" class="form-control  @error('name') is-invalid @enderror" name="name" value ="{{ old('$name') }}" required autocomplete="new-name">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group d-flex flex-column flex-md-row mt-3">
                                <label for="sports" class="col-md-4 col-form-label text-md-right">スポーツ　</label>
                                <div class="col-md-6">
                                    <input id="sports" type="text" class="form-control @error('sports') is-invalid @enderror" name="sports"  value ="{{ old('sports') }}" required autocomplete="sports" autofocus>
                                    @error('sports')
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror                                    
                                </div>
                            </div>

                            <div class="form-group d-flex flex-column flex-md-row mt-3">
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

                            <div class="form-group d-flex flex-column flex-md-row mt-3">
                                <label for="number" class="col-md-4 col-form-label text-md-right">背番号　</label>
                                <div class="col-md-6">
                                    <input id="number" type="text" class="form-control @error('number') is-invalid @enderror" name="number"  value ="{{ old('number') }}" required autocomplete="number" autofocus>
                                    @error('number')
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror                                    
                                </div>
                            </div>

                            <div class="form-group d-flex flex-column flex-md-row mt-3">
                                <label for="position" class="col-md-4 col-form-label text-md-right">ポジション　</label>
                                <div class="col-md-6">
                                    <input id="position" type="text" class="form-control @error('position') is-invalid @enderror" name="position"  value ="{{ old('position') }}" required autocomplete="position" autofocus>
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