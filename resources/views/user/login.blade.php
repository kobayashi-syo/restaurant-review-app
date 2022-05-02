<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン画面</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        <nav class="my-navbar">
            <div>
                <a class="my-navbar-brand" href="/">Restaurant Review App</a>
            </div>
            <div class="text-white border-white border-2 mr-40">
                <a href="/review/login" class="text-white block p-4">ログイン</a>
            </div>
        </nav>
    </header>
    <main class="container">
        <p class="mt-40 mb-20 text-5xl">ログイン</p>
        <form action="{{route('review.login.post')}}" method="POST">
            <div class="text-3xl">
                <label for="id" class="inline-block w-40">ID</label>
                <input type="text" id="id" name="id" value="{{ old('id') }}" class="border-black border-2">
            </div>
            <div class="text-3xl">
                <label for="password" class="inline-block w-40">パスワード</label>
                <input type="password" id="password" name="password" class="border-black border-2">
            </div>
            <div class="mt-20 btn btn-primary text-3xl">
                <input type="submit" value="ログイン">
            </div>
        </form>
    </main>
    <footer>

    </footer>
</body>

</html>