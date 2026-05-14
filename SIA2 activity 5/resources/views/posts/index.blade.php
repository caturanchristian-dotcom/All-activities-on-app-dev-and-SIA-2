<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Latest Posts (External API)
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach(array_slice($posts, 0, 9) as $post)
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-bold mb-2">{{ $post['title'] }}</h3>
                    <p class="text-gray-600 mb-4">{{ Str::limit($post['body'], 100) }}</p>
                    <a href="{{ route('posts.show', $post['id']) }}"
                       class="text-blue-500 hover:underline">Read more →</a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>