@extends('layouts.layout')

@section('title')
    新規登録
@endsection

@section('content')
    
<div class="top-page">
        <div class="register-title pt-5">
            <h1>Welcome to our site</h1>
            <h3>新規登録画面(仮登録)</h3>
            <p>初めての方はこちらからユーザー登録してください。</p>
        </div>
        
        <div class="card-body">
                        <form method="GET" action="{{ route('pre_register_check') }}">
                            @csrf
                            <div class="form-group d-flex flex-column flex-md-row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">ユーザー名　</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"  value ="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror                                    
                                </div>
                            </div>
                            <div class="form-group d-flex flex-column flex-md-row mt-3">
                                <label for="email" class="col-md-4 col-form-label text-md-right">メールアドレス　</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group d-flex mt-3 mb-0">
                                <div class="col-md-10 col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">送信</button>
                                </div>
                            </div>
                        </form>
        </div>
</div>
@endsection