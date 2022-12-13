@extends('layouts.layout')

@section('title')
    コンディション編集画面
@endsection

@section('content')
    <div class="top-page-home">
        <div class="register-title">
            <h1 class="pt-5">Edit <br>your fittness </h1>
            <h3 class="text-light-bottom">コンディション入力の変更はこちら！</h3>
        </div>
        
        <div class="card-body">
                        <form method="get" action="{{ route('record_updateStore',$datas->id) }}">
                           @csrf
                           <div class="form-group d-flex flex-column flex-md-row">
                                <label for="bt" class="col-md-4 col-form-label text-md-right">体温(朝)　</label>
                                <div class="col-md-1">
                                    <input id="bt" type="bt" class="form-control  @error('bt') is-invalid @enderror" name="bt"
                                    value="{{ old('bt') }}" required autocomplete="new-bt">
                                    @error('bt')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group d-flex flex-column flex-md-row mt-1">
                                <label for="pulse" class="col-md-4 col-form-label text-md-right">朝の脈拍(20秒)　</label>
                                <div class="col-md-1">
                                    <input id="pulse" type="pulse" class="form-control  @error('pulse') is-invalid @enderror" 
                                    value="{{ old('pulse') }}" name="pulse" required autocomplete="new-pulse">
                                    @error('pulse')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                           <div class="form-group d-flex flex-column flex-md-row mt-3">
                                <label for="Trb_bw" class="col-md-4 col-form-label text-md-right">体重(トレーニング前)　</label>
                                <div class="col-md-1">
                                    <input id="Trb_bw" type="text" class="form-control @error('Trb_bw') is-invalid @enderror" 
                                    value="{{ old('Trb_bw') }}" name="Trb_bw" required autocomplete="Trb_bw" autofocus>
                                    @error('Trb_bw')
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror                                    
                                </div>
                            </div>

                            <div class="form-group d-flex flex-column flex-md-row mt-1">
                                <label for="Tra_bw" class="col-md-4 col-form-label text-md-right">体重(トレーニング後)　</label>
                                <div class="col-md-1">
                                    <input id="Tra_bw" type="Tra_bw" class="form-control @error('Tra_bw') is-invalid @enderror" 
                                    value="{{ old('Tra_bw') }}" name="Tra_bw" required autocomplete="Tra_bw" autofocus>
                                    @error('Tra_bw')
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group d-flex flex-column flex-md-row mt-3">
                                <label for="fatigue" class="col-md-4 col-form-label text-md-right">疲労度(トレーニング後)(1低 ~ 高10)　</label>
                                <select type="fatigue" class="form-control  @error('fatigue') is-invalid @enderror" name="fatigue" value="{{ old('fatigue') }}" required autocomplete="new-fatigue" id="fatigue" name="fatigue" class="col-md-4 col-form-label text-md-right">
                                    <option>クリックして入力</option>
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
                                <div class="col-md-6">
                                    <!-- <input id="fatigue" type="fatigue" class="form-control  @error('fatigue') is-invalid @enderror" name="fatigue" required autocomplete="new-fatigue"> -->
                                    @error('fatigue')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group d-flex flex-column flex-md-row mt-3">
                                <label for="training" class="col-md-4 col-form-label text-md-right">トレーニング　</label>
                                <div class="col-md-6">
                                    <textarea id="training" type="training" class="form-control @error('training') is-invalid @enderror" name="training" required autocomplete="training" rows="5" autofocus>{{ old('training') }}</textarea>
                                    @error('training')
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group d-flex justify-content-end mt-3">
                            <a class="btn btn-secondary mr-2" href="{{ route('record.index') }}">
                                キャンセル
                            </a>
                            <button type="submit" class="btn btn-primary">登録</button>
                            </div>
                        </form>
        </div>
    </div>
@endsection
