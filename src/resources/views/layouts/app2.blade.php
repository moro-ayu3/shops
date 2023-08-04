<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/common2.css') }}">
  @yield('css')
</head>

<body>
  <div class="homepage">
    <header>
      <div class="header__inner">
        <div class="hamburger-menu">
          <input type="checkbox" id="menu-btn-check">
          <label for="menu-btn-check" class="menu-btn"><span></span></label>
        </div>
        @if (Auth::check())
        <div class="menu-content">
          <ul>
            <li>
              <a href="/">Home</a>
            </li>
            <li>
              <form class="form" action="/logout" method="post">
                @csrf
                <button class="logout__buttin">Logout</button>
              </form>
            </li>
            <li>
              <a href="/mypage">mypage</a>
            </li>
          </ul>
        </div>
        @endif
        <h2 class="header__logo">
          Rese
        </h2>
      </div>
    </header>

    <main>
      @yield('content')
    </main>
  </div>
</body>

</html>