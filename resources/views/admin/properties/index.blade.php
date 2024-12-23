@extends('layouts.admin')

@section('title', 'Properties')

@section('content')
<div class="flex justify-between items-center mb-4">
    <h2 class="text-xl font-semibold">Properties</h2>
    <a href="{{ route('properties.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add New Property</a>
</div>

<table class="min-w-full bg-white shadow-md rounded overflow-hidden">
    <thead class="bg-gray-200">
        <tr>
            <th class="text-left px-4 py-2">ID</th>
            <th class="text-left px-4 py-2">Title</th>
            <th class="text-left px-4 py-2">Price</th>
            <th class="text-left px-4 py-2">Type</th>
            <th class="text-left px-4 py-2">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $row)
        <tr class="border-b hover:bg-gray-100">
            <td class="px-4 py-2">{{ $row->id }}</td>
            <td class="px-4 py-2">{{ $row->title }}</td>
            <td class="px-4 py-2">{{ $row->price }}</td>
            <td class="px-4 py-2">{{ ucfirst($row->type) }}</td>
            <td class="px-4 py-2">
                <a href="{{ route('properties.edit', $row->id) }}" class="text-blue-500 hover:underline">Edit</a>
                <form action="{{ route('properties.destroy', $row->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:underline">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
