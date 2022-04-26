<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>レビュー作成画面</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        <nav class="my-navbar">
            <a class="my-navbar-brand" href="/">Restaurant Review App</a>
        </nav>
    </header>
    <main class="container">
        <h2 class="text-6xl mb-20">イタリアン広島へのご意見をお聞かせください</h2>
        <form action="/review/confirmation">
            <div class="mb-4">
                <label for="name">氏名：</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="mb-4">
                <p class="inline font-bold">性別：</p>
                <label for="male">男性</label>
                <input id="male" type="radio" name="sex" value="1">
                <label for="female">女性</label>
                <input id="female" type="radio" name="sex" value="2">
            </div>
            <div class="mb-4">
                <label for="age">年代：</label>
                <select name="age" id="age">
                    <option value="1">10代以下</option>
                    <option value="2">20代</option>
                    <option value="3">30代</option>
                    <option value="4">40代</option>
                    <option value="5">50代</option>
                    <option value="6">60代以上</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="mail">メールアドレス：</label>
                <input type="text" id="mail" name="mail">
            </div>
            <div class="mb-4">
                <div class="flex">
                    <p class="font-bold">メール送信可否：</p>
                    <div>
                        <p>登録したメールアドレスにメールマガジンをお送りしてよろしいですか？</p>
                        <input type="checkbox" name="mail-sent" value="1" checked>
                    </div>
                </div>
            </div>
            <div class="mb-10">
                <label for="review">評価：</label>
                <select name="review" id="review">
                    <option value="1">星1</option>
                    <option value="2">星2</option>
                    <option value="3">星3</option>
                    <option value="4">星4</option>
                    <option value="5">星5</option>
                </select>
            </div>
            <div class="mb-10">
                <div class="flex">
                    <label for="opinion" class="block mr-10">ご意見</label>
                    <textarea name="opinion" id="opinion" cols="50" rows="10"></textarea>
                </div>
            </div>
            <div class="mb-10">
                <input type="file" name="image" accept="image/jpg,image/png">
            </div>
            <div class="btn btn-secondary">
                <input type="submit" value="確認">
            </div>
        </form>
    </main>
    <footer>

    </footer>
</body>

</html>