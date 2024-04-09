<x-mail::message>
    # 昨日は{{ $count }}件のつぶやきが追加されました！

    {{ $toUser->name }}さんこんにちは！

    昨日は{{ $count }}件のつぶやきが追加されましたよ！最新のつぶやきを見に行きましょう。
    <x-mail::button :url="route('tweet.index')">
        つぶやきを見に行く
    </x-mail::button>
</x-mail::message>
