@extends('layouts.admin')

@section('title', 'Categories')

@section('content')
<div class="space-y-6">
    <div class="text-end">
        <a href="{{ route('categories.create') }}" 
           class="bg-indigo-600 text-white px-5 py-2 rounded-lg hover:bg-indigo-700 transition duration-150">
           Add New Category
        </a>
    </div>

    <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
        <table class="min-w-full border-collapse border border-gray-200">
            <thead class="bg-indigo-50">
                <tr>
                    <th class="text-center px-4 py-3 text-sm font-semibold text-gray-700 border-b">ID</th>
                    <th class="text-left px-4 py-3 text-sm font-semibold text-gray-700 border-b">Name</th>
                    <th class="text-left px-4 py-3 text-sm font-semibold text-gray-700 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $category)
                <tr class="border-b hover:bg-gray-100">
                    <td class="text-center px-4 py-3 text-gray-700">{{ $category->id }}</td>
                    <td class="px-4 py-3 text-gray-700">{{ $category->name }}</td>
                    <td class="px-4 py-3">
                        <div class="flex items-center space-x-4">
                            <a href="{{ route('categories.edit', $category->id) }}" 
                               class="text-indigo-600 hover:underline">Edit</a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="text-red-600 hover:underline focus:outline-none">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
