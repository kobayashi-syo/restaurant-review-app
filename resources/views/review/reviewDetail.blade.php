@extends('layouts.app')

@section('title')
<title>レビュー詳細</title>
@endsection

@section('content')
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
@endsecition