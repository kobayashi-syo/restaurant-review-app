<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        <nav class="my-navbar">
            <div>
                <a class="my-navbar-brand" href="/">Restaurant Review App</a>
            </div>
            @if(Auth::check())
            <span class="my-navbar-item">ようこそ, {{ Auth::user()->name }}さん</span>
            ｜
            <a href="#" id="logout" class="my-navbar-item">ログアウト</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @else
            <div class="text-white border-white border-2 mr-40">
                <a href="{{route('login')}}" class="text-white block p-2">ログイン</a>
            </div>
            @endif
        </nav>
    </header>
    @yield('content')
    <footer>

    </footer>
    @if(Auth::check())
    <script>
        document.getElementById('logout').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('logout-form').submit();
        });
    </script>
    @endif
</body>

</html>