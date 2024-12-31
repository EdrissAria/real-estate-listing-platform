@extends('layouts.admin')

@section('title', 'Edit Category')

@section('content')
<div class="min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-lg w-full">
        <form action="{{ route('categories.update', $data->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Category Name</label>
                <input type="text" id="name" name="name"
                       class="mt-1 p-2 block w-full border {{ $errors->has('name') ? 'border-red-500' : 'border-gray-300' }} rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                       placeholder="Enter category name" value="{{ old('name', $data->name) }}">
                @error('name')
                <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-6">
                <button type="submit"
                        class="w-full bg-indigo-500 text-white p-2 rounded-md shadow-md hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-400">
                    Update Category
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
