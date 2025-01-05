@extends('layouts.admin')

@section('title', 'Favorites')

@section('content')
<div class="min-h-screen bg-gray-100 p-6">
    <div class="container mx-auto">
        <h1 class="text-2xl font-semibold text-gray-700 mb-6">User Favorites</h1>
        
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full bg-white">
                <thead>
                    <tr class="text-left border-b border-gray-200">
                        <th class="px-6 py-3 font-medium text-gray-600">User</th>
                        <th class="px-6 py-3 font-medium text-gray-600">Property</th>
                        <th class="px-6 py-3 font-medium text-gray-600">Created At</th>
                        <th class="px-6 py-3 font-medium text-gray-600">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($favorites as $favorite)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">{{ $favorite->user->name }}</td>
                            <td class="px-6 py-4">{{ $favorite->property->title }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500">{{ $favorite->created_at->format('M d, Y') }}</td>
                            <td class="px-6 py-4">
                                <form action="{{ route('admin.favorites.destroy', $favorite->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-600">
                                        Remove
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-4 text-center text-gray-500">
                                No favorites found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-6">
            {{ $favorites->links() }}
        </div>
    </div>
</div>
@endsection
