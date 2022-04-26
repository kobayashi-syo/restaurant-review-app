<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>レビュー確認画面</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        <nav class="my-navbar">
            <a class="my-navbar-brand" href="/">Restaurant Review App</a>
        </nav>
    </header>
    <main class="container">
        <h2 class="text-6xl mb-20">内容確認</h2>
        <p class="mb-4">氏名：<span>山田太郎</span></p>
        <p class="mb-4">性別：<span>男性</span></p>
        <p class="mb-4">年代：<span>20代</span></p>
        <p class="mb-4">メールアドレス：<span>hogehoge@example.com</span></p>
        <p class="mb-4">メール送信可否：<span>送信許可</span></p>
        <p class="mb-4">評価：<span>⭐️⭐️⭐️⭐️⭐️</span></p>
        <p class="mb-4">ご意見：<span>美味しかったです。</span></p>
        <div class="w-1/4"><img src="https://1.bp.blogspot.com/-DRdIFx5u7Rk/XVKfn_f43pI/AAAAAAABUDI/53tDXLqaDM4MEihuLeb9RmBeCY5dHBu4QCLcBGAs/s1600/building_food_family_restaurant.png" alt=""></div>

        <div class="flex">
            <form action="/review/create" class="border-black border-2 p-4">
                <input type="submit" value="再入力">
            </form>
            <form action="/review/complete" class="border-black border-2 p-4">
                <input type="submit" value="送信">
            </form>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>