@extends('layouts.app1')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="login__card">
  <div class="login__header">
    <h3 class="login__header-title">Login</h3>
  </div>
  <div class="login__inner">
    <form class="form" action="/login" method="post">
      @csrf
      <div class="form__group">
        <div class="form__group-icon">
          <img src="/img/icon_112180_256.png" alt="email" width="20" height="20">
        </div>
        <div class="form__group-content">
          <div class="form__input--text">
            <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" />
          </div>
          <div class="form__error">
            @error('email')
            {{ $message }}
            @enderror
          </div>
        </div>
      </div>
      <div class="form__group">
        <div class="form__group-icon">
          <img src="/img/icon_000140_256.png" alt="password" width="20" height="20">
        </div>
        <div class="form__group-content">
          <div class="form__input--text">
            <input type="password" name="password" placeholder="Password" />
          </div>
          <div class="form__error">
            @error('password')
            {{ $message }}
            @enderror
          </div>
        </div>
      </div>
      <div class="form__button">
        <button class="form__button-submit" type="submit">ログイン</button>
      </div>
    </form>
  </div>
</div>
@endsection