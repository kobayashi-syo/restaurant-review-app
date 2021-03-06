@extends('layouts.app')

@section('title')
<title>レビュー検索</title>
@endsection

@section('content')
<main>
    <div class="container">
        <h2 class="text-5xl mb-10">レビュー管理システム</h2>
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $message)
                <li>{{$message}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="border-black border-1 p-4">
            <form action="{{route('review.select.post')}}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name">氏名：</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}">
                </div>
                <div class="mb-4">
                    <p class="inline font-bold">性別：</p>
                    <label for="male">男性</label>
                    @if(old('sex') == 2)
                    <input id="male" type="radio" name="sex" value="1">
                    @else
                    <input id="male" type="radio" name="sex" value="1" checked>
                    @endif
                    <label for="female">女性</label>
                    @if(old('sex') == 2)
                    <input id="female" type="radio" name="sex" value="2" checked>
                    @else
                    <input id="female" type="radio" name="sex" value="2">
                    @endif
                </div>
                <div class="mb-4">
                    <label for="age">年代：</label>
                    <select name="age" id="age">
                        <option value="1">10代以下</option>
                        @if(old('age')==2)
                        <option value="2" selected>20代</option>
                        @else
                        <option value="2">20代</option>
                        @endif
                        @if(old('age')==3)
                        <option value="3" selected>30代</option>
                        @else
                        <option value="3">30代</option>
                        @endif
                        @if(old('age')==4)
                        <option value="4" selected>40代</option>
                        @else
                        <option value="4">40代</option>
                        @endif
                        @if(old('age')==5)
                        <option value="5" selected>50代</option>
                        @else
                        <option value="5">50代</option>
                        @endif
                        @if(old('age')==6)
                        <option value="6" selected>60代以上</option>
                        @else
                        <option value="6">60代以上</option>
                        @endif
                    </select>
                </div>
                <div class="mb-4">
                    <label for="mail">メールアドレス：</label>
                    <input type="text" id="mail" name="mail" value="{{ old('mail') }}">
                </div>
                <div class="mb-4">
                    <div class="flex">
                        <p class="font-bold">メール送信可否：</p>
                        <div>
                            <div>
                                <label for="yes">はい</label>
                                <input id="yes" type="radio" name="mail-sent" value="1" checked>
                            </div>
                            <div>
                                <label for="no">いいえ</label>
                                @if(old('mail-sent')==2)
                                <input id="no" type="radio" name="mail-sent" value="2" checked>
                                @else
                                <input id="no" type="radio" name="mail-sent" value="2">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-10">
                    <label for="review">評価：</label>
                    <select name="review" id="review">
                        @if(old('review') == 1)
                        <option value="1" selected>星1</option>
                        @else
                        <option value="1">星1</option>
                        @endif
                        @if(old('review') == 2)
                        <option value="2" selected>星2</option>
                        @else
                        <option value="2">星2</option>
                        @endif
                        @if(old('review') == null)
                        <option value="3" selected>星3</option>
                        @elseif(!old('review') == 3)
                        <option value="3">星3</option>
                        @elseif(old('review') == 3)
                        <option value="3" selected>星3</option>
                        @endif
                        @if(old('review') == 4)
                        <option value="4" selected>星4</option>
                        @else
                        <option value="4">星4</option>
                        @endif
                        @if(old('review') == 5)
                        <option value="5" selected>星5</option>
                        @else
                        <option value="5">星5</option>
                        @endif
                    </select>
                </div>
                <div class="mb-10">
                    <div class="flex">
                        <label for="opinion" class="block mr-10">ご意見</label>
                        <textarea name="opinion" id="opinion" cols="50" rows="10">{{ old('opinion') }}</textarea>
                    </div>
                </div>
                <div class="btn btn-secondary">
                    <input type="submit" value="検索">
                </div>
            </form>
        </div>
    </div>
</main>
@endsection