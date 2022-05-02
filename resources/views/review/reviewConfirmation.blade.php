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
            <div>
                <a class="my-navbar-brand" href="/">Restaurant Review App</a>
            </div>
            <div class="text-white border-white border-2 mr-40">
                <a href="/review/login" class="text-white block p-4">ログイン</a>
            </div>
        </nav>
    </header>
    <main class="container">
        <h2 class="text-6xl mb-20">内容確認</h2>
        <form action="{{route('review.confirmaiton.post')}}" method="POST">
            @csrf
            <div class="flex mb-4">
                <label for="name" class="text-2xl">氏名：</label>
                <p class="text-2xl">{{$input['name']}}</p>
            </div>
            <div class="flex mb-4">
                <label for="name" class="text-2xl">性別：</label>
                <p class="text-2xl">{{$input['sex'] === '1' ? '男性' : '女性'}}</p>
            </div>
            <div class="flex mb-4">
                <label for="name" class="text-2xl">年代：</label>
                @if($input['age']==1)
                <p class="text-2xl">10代以下</p>
                @elseif($input['age']==2)
                <p class="text-2xl">20代</p>
                @elseif($input['age']==3)
                <p class="text-2xl">30代</p>
                @elseif($input['age']==4)
                <p class="text-2xl">40代</p>
                @elseif($input['age']==5)
                <p class="text-2xl">50代</p>
                @elseif($input['age']==6)
                <p class="text-2xl">60代以上</p>
                @endif
            </div>
            <div class="flex mb-4">
                <label for="name" class="text-2xl">メールアドレス：</label>
                <p class="text-2xl">{{$input['mail']}}</p>
            </div>
            <div class="flex mb-4">
                <label for="name" class="text-2xl">メール送信可否：</label>
                <p class="text-2xl">{{$input['mail-sent'] === '1' ? '許可' : '許可しない'}}</p>
            </div>
            <div class="flex mb-4">
                <label for="name" class="text-2xl">評価：</label>
                @if($input['review']==1)
                <p class="text-2xl">⭐️</p>
                @elseif($input['review']==2)
                <p class="text-2xl">⭐️⭐️</p>
                @elseif($input['review']==3)
                <p class="text-2xl">⭐️⭐️⭐️</p>
                @elseif($input['review']==4)
                <p class="text-2xl">⭐️⭐️⭐️⭐️</p>
                @elseif($input['review']==5)
                <p class="text-2xl">⭐️⭐️⭐️⭐️⭐️</p>
                @endif
            </div>
            <div class="flex mb-10">
                <label for="name" class="text-2xl">ご意見：</label>
                <p class="text-2xl">{{$input['opinion']}}</p>
            </div>

            <div class="flex">
                <div class="btn btn-succes mr-10">
                    <input name="back" type="submit" value="再入力" />
                </div>
                <div class="btn btn-success">
                    <input type="submit" value="送信" />
                </div>
            </div>
        </form>
    </main>
    <footer>

    </footer>
</body>

</html>