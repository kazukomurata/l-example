<x-layout title="TOP | つぶやきアプリ">
    <x-layouts.single>
        @if (session('feedback.success'))
            <p style="color: green">{{ session('feedback.success') }}</p>
        @endif
        <x-tweet.form.post></x-tweet.form.post>
        <x-tweet.list :tweets="$tweets"></x-tweet.list>
            <x-test></x-test>
{{--        <div>--}}
{{--            @foreach($tweets as $tweet)--}}
{{--                <details>--}}
{{--                    <summary>{{ $tweet->content }} by {{  $tweet->user->name }}--}}
{{--                    </summary>--}}
{{--                    @if(\Illuminate\Support\Facades\Auth::id() === $tweet->user_id)--}}
{{--                        <div>--}}
{{--                            <a href="{{ route('tweet.update.index', ['tweetId' => $tweet->id]) }}">編集</a>--}}
{{--                        </div>--}}
{{--                        <form action="{{ route('tweet.delete', ['tweetId' => $tweet->id]) }}" method="post">--}}
{{--                            @method('DELETE')--}}
{{--                            @csrf--}}
{{--                            <button type="submit">削除</button>--}}
{{--                        </form>--}}
{{--                    @else--}}
{{--                        対象外です--}}
{{--                    @endif--}}
{{--                </details>--}}
{{--            @endforeach--}}
{{--        </div>--}}
    </x-layouts.single>
</x-layout>

{{--<x-app-layout>--}}
{{--    <h1>つぶやきアプリ</h1>--}}
{{--    @if (session('feedback.success'))--}}
{{--        <p style="color: green">{{ session('feedback.success') }}</p>--}}
{{--    @endif--}}
{{--    <x-tweet.form.post></x-tweet.form.post>--}}
{{--    <div>--}}
{{--        @foreach($tweets as $tweet)--}}
{{--            <details>--}}
{{--                <summary>{{ $tweet->content }} by {{  $tweet->user->name }}--}}
{{--                </summary>--}}
{{--                @if(\Illuminate\Support\Facades\Auth::id() === $tweet->user_id)--}}
{{--                    <div>--}}
{{--                        <a href="{{ route('tweet.update.index', ['tweetId' => $tweet->id]) }}">編集</a>--}}
{{--                    </div>--}}
{{--                    <form action="{{ route('tweet.delete', ['tweetId' => $tweet->id]) }}" method="post">--}}
{{--                        @method('DELETE')--}}
{{--                        @csrf--}}
{{--                        <button type="submit">削除</button>--}}
{{--                    </form>--}}
{{--                @else--}}
{{--                    対象外です--}}
{{--                @endif--}}
{{--            </details>--}}
{{--        @endforeach--}}
{{--    </div>--}}
{{--</x-app-layout>--}}


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
{{--    <h1>つぶやきアプリ</h1>--}}
{{--    @if (session('feedback.success'))--}}
{{--        <p style="color: green">{{ session('feedback.success') }}</p>--}}
{{--    @endif--}}
{{--    @auth--}}
{{--    <form action="{{ route('tweet.create') }}" method="post">--}}
{{--        @csrf--}}
{{--        <label for="tweet-content">つぶやき</label>--}}
{{--        <span>140文字まで</span>--}}
{{--        <textarea id="tweet-content" type="text" name="tweet" placeholder="つぶやき入力"></textarea>--}}
{{--        @error('tweet')--}}
{{--        <p style="color: red;">{{ $message }}</p>--}}
{{--        @enderror--}}
{{--        <button type="submit">投稿</button>--}}
{{--    </form>--}}
{{--    @endauth--}}


{{--    <div>--}}
{{--    @foreach($tweets as $tweet)--}}
{{--            <details>--}}
{{--                <summary>{{ $tweet->content }} by {{  $tweet->user->name }}--}}
{{--                </summary>--}}
{{--                @if(\Illuminate\Support\Facades\Auth::id() === $tweet->user_id)--}}
{{--                    <div>--}}
{{--                        <a href="{{ route('tweet.update.index', ['tweetId' => $tweet->id]) }}">編集</a>--}}
{{--                    </div>--}}
{{--                    <form action="{{ route('tweet.delete', ['tweetId' => $tweet->id]) }}" method="post">--}}
{{--                        @method('DELETE')--}}
{{--                        @csrf--}}
{{--                        <button type="submit">削除</button>--}}
{{--                    </form>--}}
{{--                @else--}}
{{--                    対象外です--}}
{{--                @endif--}}
{{--            </details>--}}
{{--    @endforeach--}}
{{--    </div>--}}
{{--</body>--}}
{{--</html>--}}
