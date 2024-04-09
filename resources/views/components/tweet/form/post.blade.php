@auth
    <div class="p-4">
        <form action="{{ route('tweet.create') }}" method="post">
            @csrf
            <label for="tweet-content">つぶやき</label>
            <textarea id="tweet-content"
                      type="text"
                      name="tweet"
                      placeholder="つぶやき入力"
                      rows="3"
                      class="focus:ring-blue-400 focus:border-blue-400 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md p-2"></textarea>
            <p class="mt-2 text-sm text-gray-500">
                140文字まで
            </p>

            @error('tweet')
            <x-input-error>
                <x-slot name="messages">{{ $message }}</x-slot>
            </x-input-error>
            @enderror

            <x-primary-button>投稿</x-primary-button>
        </form>
    </div>
@endauth
@guest
    <div class="flex flex-wrap justify-center">
        <div class="w-1/2 p-4 flex flex-wrap justify-evenly">
            <x-element.button-a :href="route('login')">ログイン</x-element.button-a>
            <x-element.button-a :href="route('register')" theme="secondary">会員登録</x-element.button-a>
        </div>
    </div>
@endguest