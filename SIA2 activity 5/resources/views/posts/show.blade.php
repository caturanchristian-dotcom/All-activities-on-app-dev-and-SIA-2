<x-app-layout>
    <x-slot name="header">
        <h2>{{ $post['title'] }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-8 rounded-lg shadow">
                <div class="prose max-w-none">
                    <p>{{ $post['body'] }}</p>
                </div>
                <div class="mt-6 pt-6 border-t">
                    <span class="text-sm text-gray-500">Post ID: {{ $post['id'] }}</span>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>