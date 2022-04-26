<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>レビュー一覧画面</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header>
        <nav class="my-navbar">
            <a class="my-navbar-brand" href="/">Restaurant Review App</a>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col col-md-4">
                    <nav class="panel panel-default">
                        <div class="panel-heading">お店一覧</div>
                        <div class="list-group">
                            @foreach($reviews as $review)
                            <p class="list-group-item">
                                {{ $review->name }}
                            </p>
                            <p class="list-group-item">
                                {{ $review->sex }}
                            </p>
                            <p class="list-group-item">
                                {{ $review->age }}
                            </p>
                            <p class="list-group-item">
                                {{ $review->mail }}
                            </p>
                            <p class="list-group-item">
                            </p>
                            <p class="list-group-item">
                                {{ $review->review }}
                            </p>
                            <p class="list-group-item">
                                {{ $review->opinion }}
                            </p>
                            @endforeach
                        </div>
                    </nav>
                </div>
                <div class="column col-md-8">
                    <!-- ここにタスクが表示される -->
                </div>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>