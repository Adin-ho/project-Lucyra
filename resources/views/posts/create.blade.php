@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-4">Tambah Post</h1>
    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label class="block">Judul:</label>
            <input type="text" name="title" class="border w-full p-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block">Gambar:</label>
            <input type="file" name="image" class="border w-full p-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block">Deskripsi:</label>
            <textarea name="description" class="border w-full p-2 rounded"></textarea>
        </div>

        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Simpan</button>
    </form>
</div>
@endsection
