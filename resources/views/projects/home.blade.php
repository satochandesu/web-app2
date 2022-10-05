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
                        <form method="get" action="{{ route('projects.store') }}">
                           @csrf
                           <div class="form-group d-flex flex-column flex-md-row">
                                <label for="bt" class="col-md-4 col-form-label text-md-right">体温(朝)　</label>
                                <div class="col-md-6">
                                    <input id="bt" type="bt" class="form-control  @error('bt') is-invalid @enderror" name="bt" value ="{{ old('bt') }}" required autocomplete="new-bt">
                                    @error('bt')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group d-flex flex-column flex-md-row mt-1">
                                <label for="pulse" class="col-md-4 col-form-label text-md-right">朝の脈拍(20秒)　</label>
                                <div class="col-md-6">
                                    <input id="pulse" type="pulse" class="form-control  @error('pulse') is-invalid @enderror" name="pulse"  value ="{{ old('pulse') }}" required autocomplete="new-pulse">
                                    @error('pulse')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                           <div class="form-group d-flex flex-column flex-md-row mt-3">
                                <label for="Trb_bw" class="col-md-4 col-form-label text-md-right">体重(トレーニング前)　</label>
                                <div class="col-md-6">
                                    <input id="Trb_bw" type="text" class="form-control @error('Trb_bw') is-invalid @enderror" name="Trb_bw"  value ="{{ old('Trb_bw') }}" required autocomplete="Trb_bw" autofocus>
                                    @error('Trb_bw')
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror                                    
                                </div>
                            </div>

                            <div class="form-group d-flex flex-column flex-md-row mt-1">
                                <label for="Tra_bw" class="col-md-4 col-form-label text-md-right">体重(トレーニング後)　</label>
                                <div class="col-md-6">
                                    <input id="Tra_bw" type="Tra_bw" class="form-control @error('Tra_bw') is-invalid @enderror" name="Tra_bw" value="{{ old('Tra_bw') }}" required autocomplete="Tra_bw" autofocus>
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
                                    <option value="{{ old('fatigue') }}">クリックで入力</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
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

                            <div class="form-group d-flex mt-3 mb-0">
                                <div class="col-md-10 col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">登録</button>
                                </div>
                            </div>
                        </form>
        </div>
    </div>
@endsection