<x-layout title="編集 | つぶやきアプリ">
    <x-layouts.single>
        <h2 class="text-center text-blue-500 text-4xl font-bold mt-8 mb-8">
            つぶやきアプリ
        </h2>
        @php
            $breadcrumbs = [
                ['href' => route('tweet.index'), 'label' => 'TOP'],
                ['href' => '#', 'label' => '編集']
            ];
        @endphp
        <x-element.breadcrumbs :breadcrumbs="$breadcrumbs"></x-element.breadcrumbs>
        <x-tweet.form.put :tweet="$tweet"></x-tweet.form.put>
    </x-layouts.single>
</x-layout>


{{--<!doctype html>--}}
{{--<html lang="ja">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>つぶやきアプリ</title>--}}
{{--    @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
{{--</head>--}}
{{--<body>--}}
{{--<h1>つぶやきを編集する</h1>--}}
{{--<div>--}}
{{--    <a href="{{ route('tweet.index') }}">< 戻る</a>--}}
{{--    <p>投稿フォーム</p>--}}
{{--    @if (session('feedback.success'))--}}
{{--    <p style="color: green">{{ session('feedback.success') }}</p>--}}
{{--    @endif--}}
{{--    <form action="{{ route('tweet.update.put', ['tweetId' => $tweet->id]) }}" method="post">--}}
{{--        @method('PUT')--}}
{{--        @csrf--}}
{{--        <label for="tweet-content">つぶやき</label>--}}
{{--        <span>140文字まで</span>--}}
{{--        <textarea id="tweet-content" type="text" name="tweet" placeholder="つぶやきを入力">{{ $tweet->content }}</textarea>--}}
{{--        @error('tweet')--}}
{{--        <p style="color: red;">{{ $message }}</p>--}}
{{--        @enderror--}}
{{--        <button type="submit">保存</button>--}}
{{--    </form>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}
