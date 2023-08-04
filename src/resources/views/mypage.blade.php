@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
<div class="reserve">
  <div class="reserve__title">
    <p class="reserve__title-1">予約状況</p>
  </div>
  <form class="form" action="/mypage/reserve/delete" method="post">
    @csrf
    <div class="reserve__form">
      <p class="reserve__number">予約1</p>
      <div class="batsu">×</div>
      @foreach($reserves as $reserve)
        <div class="text-box">
          <p class="title">Shop</p>
          <input class="shop_name" type="hidden" name="shop_name" value="{{ $reserve->shop->shop_name }}">
        </div>
        <div class="text-box">
          <p class="title">Date</p>
          <input class="reserve_date" type="hidden" name="reserve_date" value="{{ $reserve->date }}">
        </div>
        <div class="text-box">
          <p class="title">Time</p>
          <input class="reserve_time" type="hidden" name="reserve_time" value="{{ $reserve->time }}">
        </div>
        <div class="text_box">
          <p class="title">Number</p>
          <input class="reserve_number" type="hidden" name="reserve_number" value="{{ $reserve->number }}">
        </div>
      @endforeach
    </div>
  </form>
</div>

<div class="test">
  <h2>{{ Auth::user()->name }}さん</h2>
</div>
<div class="score">
  <div class="score__title">
    <p class="score__title-1">お気に入り店舗</p>
  </div>
  @foreach($tests as $test)
  <div class="wrapper">
    <div class="card">
      <div class="content-img">
        <img src="{{ $test->shop->shop_img }}" />
      </div>
      <div class="text-box">
        <h3 class="title">{{ $test->shop->shop_name }}</h3>
        <p class="tag">#{{ $test->area->name }} #{{ $test->genre->name }}</p>
      </div>
      <div class="detail">
        <button class="detail__button">詳しく見る</button>
      </div>
      <button class="heart">{{ $test->score }}</button>
    </div>
  </div>
  @endforeach
</div>
@endsection