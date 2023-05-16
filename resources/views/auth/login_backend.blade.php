@extends('layouts.guest')

@section('main')
    <div class="container">
        <div class="col-md-5" style="margin:100px auto;"> 
            <div class="card card-custom">
                <div class="card-header">
                    <div class="card-title">Login Ke Backend</div>
                    <div class="card-toolbar">
                        <a href="{{ route('auth.login_kasir') }}" class="btn btn-primary">LOGIN KASIR</a>
                    </div>
                </div>
                <div class="card-body">
                    @error('feedback')
                        <p class="alert alert-danger">
                            {{ $errors->get('feedback')['message'] }}
                        </p>
                    @enderror
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input value="{{ old('email') }}" type="text" name="email" id="email"
                                @class(['form-control', $errors->has('email') ? 'is-invalid' : ''])>
                            @error('email')
                                <p class="invalid-feedback">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" value="{{ old('password') }}" name="password" id="password"
                                @class(['form-control', $errors->has('password') ? 'is-invalid' : ''])>
                            @error('password')
                                <p class="invalid-feedback">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block">Masuk</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
