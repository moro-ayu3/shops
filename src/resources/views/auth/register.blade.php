@extends('layouts.app1')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register__card">
  <div class="register__header">
    <h3 class="register__header-title">Registation</h3>
  </div>
  <div class="register__inner">
    <form class="form" action="/register" method="post">
      @csrf
      <div class="form__group">
        <div class="form__group-icon">
          <img src="/img/icon_150010_256.png" alt="name" width="20" height="20">
        </div>
        <div class="form__group-content">
          <div class="form__input--text">
            <input type="text" name="name" value="{{ old('name') }}" placeholder="Username"/>
          </div>
          <div class="form__error">
            @error('name')
            {{ $message }}
            @enderror
          </div>
        </div>
      </div>
      <div class="form__group">
        <div class="form__group-icon">
          <img src="/img/icon_112180_256.png" alt="email" width="20" height="20">
        </div>
        <div class="form__group-content">
          <div class="form__input--text">
            <input type="email" name="email" value="{{ old('email') }}" placeholder="Email"/>
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
            <input type="password" name="password" placeholder="Password"/>
          </div>
          <div class="form__error">
            @error('password')
            {{ $message }}
            @enderror
          </div>
        </div>
      </div>
      <div class="form__button">
        <button class="form__button-submit" type="submit">登録</button>
      </div>
    </form>
  </div>
</div>
@endsection