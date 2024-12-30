@extends('layouts.admin')

@section('title', 'Properties')

@section('content')
<div class="space-y-6">
    <div class="text-end">
        <a href="{{ route('properties.create') }}" 
           class="bg-indigo-600 text-white px-5 py-2 rounded-lg hover:bg-indigo-700 transition duration-150 shadow-md">
           Add New Property
        </a>
    </div>

    <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
        <table class="min-w-full border-collapse border border-gray-200">
            <thead class="bg-indigo-50">
                <tr>
                    <th class="text-center px-4 py-3 text-sm font-semibold text-gray-700 border-b">ID</th>
                    <th class="text-left px-4 py-3 text-sm font-semibold text-gray-700 border-b">Title</th>
                    <th class="text-left px-4 py-3 text-sm font-semibold text-gray-700 border-b">Price</th>
                    <th class="text-left px-4 py-3 text-sm font-semibold text-gray-700 border-b">Type</th>
                    <th class="text-left px-4 py-3 text-sm font-semibold text-gray-700 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $row)
                <tr class="border-b hover:bg-gray-100">
                    <td class="text-center px-4 py-3 text-gray-700">{{ $row->id }}</td>
                    <td class="px-4 py-3 text-gray-700">{{ $row->title }}</td>
                    <td class="px-4 py-3 text-gray-700">${{ number_format($row->price, 2) }}</td>
                    <td class="px-4 py-3 text-gray-700">{{ ucfirst($row->type) }}</td>
                    <td class="px-4 py-3">
                        <div class="flex items-center space-x-2">
                            <a href="{{ route('properties.show', $row->id) }}" 
                               class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600 transition duration-150 shadow-sm">
                               View
                            </a>
                            <a href="{{ route('properties.edit', $row->id) }}" 
                               class="bg-yellow-500 text-white px-3 py-1 rounded-lg hover:bg-yellow-600 transition duration-150 shadow-sm">
                               Edit
                            </a>
                            <form action="{{ route('properties.destroy', $row->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600 transition duration-150 shadow-sm">
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
