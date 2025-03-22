@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-4">Postingan</h1>
    <a href="{{ route('posts.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Post</a>

    <div class="grid grid-cols-3 gap-4 mt-4">
        @foreach ($posts as $post)
            <div class="border p-4 rounded shadow">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-48 object-cover">
                <h2 class="text-xl font-bold mt-2">{{ $post->title }}</h2>
                <p class="text-gray-600">{{ $post->description }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection
