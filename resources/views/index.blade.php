<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お店一覧画面</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        <nav class="my-navbar">
            <a class="my-navbar-brand" href="/">Restaurant Review App</a>
        </nav>
    </header>
    <main class="container">
        <h2 class="text-8xl mb-10">お店一覧</h2>
        <div class="flex">
            <div class="w-1/3 mr-10">
                <img src="https://1.bp.blogspot.com/-DRdIFx5u7Rk/XVKfn_f43pI/AAAAAAABUDI/53tDXLqaDM4MEihuLeb9RmBeCY5dHBu4QCLcBGAs/s1600/building_food_family_restaurant.png" alt="">
            </div>
            <div class="mt-20">
                <p class="text-4xl mb-10">イタリアン広島</p>
                <div class="flex mb-24">
                    <p class="text-3xl mr-1">評価：</p>
                    <p class="text-3xl mr-4">⭐️⭐️⭐️⭐️⭐️</p>
                    <p class="text-3xl">(5.0)</p>
                </div>
                <a href="{{route('review.create')}}" class="text-3xl border-black border-2 p-4">レビューする</a>
            </div>
        </div>
        <div class="flex">
            <div class="w-1/3 mr-10">
                <img src="https://1.bp.blogspot.com/-DRdIFx5u7Rk/XVKfn_f43pI/AAAAAAABUDI/53tDXLqaDM4MEihuLeb9RmBeCY5dHBu4QCLcBGAs/s1600/building_food_family_restaurant.png" alt="">
            </div>
            <div class="mt-20">
                <p class="text-4xl mb-10">イタリアン広島</p>
                <div class="flex mb-24">
                    <p class="text-3xl mr-1">評価：</p>
                    <p class="text-3xl mr-4">⭐️⭐️⭐️⭐️⭐️</p>
                    <p class="text-3xl">(5.0)</p>
                </div>
                <a href="{{route('review.create')}}" class="text-3xl border-black border-2 p-4">レビューする</a>
            </div>
        </div>
        <div class="flex">
            <div class="w-1/3 mr-10">
                <img src="https://1.bp.blogspot.com/-DRdIFx5u7Rk/XVKfn_f43pI/AAAAAAABUDI/53tDXLqaDM4MEihuLeb9RmBeCY5dHBu4QCLcBGAs/s1600/building_food_family_restaurant.png" alt="">
            </div>
            <div class="mt-20">
                <p class="text-4xl mb-10">イタリアン広島</p>
                <div class="flex mb-24">
                    <p class="text-3xl mr-1">評価：</p>
                    <p class="text-3xl mr-4">⭐️⭐️⭐️⭐️⭐️</p>
                    <p class="text-3xl">(5.0)</p>
                </div>
                <a href="{{route('review.create')}}" class="text-3xl border-black border-2 p-4">レビューする</a>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>