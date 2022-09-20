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
                                <div class="col-md-6">
                                    <input id="bt" type="bt" class="form-control  @error('bt') is-invalid @enderror" name="bt"
                                    value="{{ old('bt', $datas->bt) }}" required autocomplete="new-bt">
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
                                    <input id="pulse" type="pulse" class="form-control  @error('pulse') is-invalid @enderror" 
                                    value="{{ old('pulse', $datas->pulse) }}" name="pulse" required autocomplete="new-pulse">
                                    @error('pulse')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                           <div class="form-group d-flex flex-column flex-md-row mt-3">
                                <label for="Trb_bw" class="col-md-4 col-form-label text-md-right">体重(Tr前)　</label>
                                <div class="col-md-6">
                                    <input id="Trb_bw" type="text" class="form-control @error('Trb_bw') is-invalid @enderror" 
                                    value="{{ old('Trb_bw', $datas->Trb_bw) }}" name="Trb_bw" required autocomplete="Trb_bw" autofocus>
                                    @error('Trb_bw')
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror                                    
                                </div>
                            </div>

                            <div class="form-group d-flex flex-column flex-md-row mt-1">
                                <label for="Tra_bw" class="col-md-4 col-form-label text-md-right">体重(Tr後)　</label>
                                <div class="col-md-6">
                                    <input id="Tra_bw" type="Tra_bw" class="form-control @error('Tra_bw') is-invalid @enderror" 
                                    value="{{ old('Tra_bw', $datas->Tra_bw) }}" name="Tra_bw" required autocomplete="Tra_bw" autofocus>
                                    @error('Tra_bw')
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group d-flex flex-column flex-md-row mt-3">
                                <label for="fatigue" class="col-md-4 col-form-label text-md-right">疲労度(Tr後)(1低 ~ 高10)　</label>
                                <div class="col-md-6">
                                    <input id="fatigue" type="fatigue" class="form-control  @error('fatigue') is-invalid @enderror" 
                                    value="{{ old('fatigue', $datas->fatigue) }}" name="fatigue" required autocomplete="new-fatigue">
                                    @error('fatigue')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group d-flex mt-3 mb-0">
                            <a class="btn btn-secondary mr-2" href="{{ route('record.index') }}">
                                キャンセル
                            </a>
                                <div class="col-md-10 col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">登録</button>
                                </div>
                            </div>
                        </form>
        </div>
    </div>
@endsection