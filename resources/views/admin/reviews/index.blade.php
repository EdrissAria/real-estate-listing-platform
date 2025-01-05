@extends('layouts.admin')

@section('title', 'Reviews')

@section('content')
<div class="min-h-screen bg-gray-100 p-6">
    <div class="container mx-auto">
        <h1 class="text-2xl font-semibold text-gray-700 mb-6">Property Reviews</h1>
        
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
                        <th class="px-6 py-3 font-medium text-gray-600">Review</th>
                        <th class="px-6 py-3 font-medium text-gray-600">Status</th>
                        <th class="px-6 py-3 font-medium text-gray-600">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($reviews as $review)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">{{ $review->user->name }}</td>
                            <td class="px-6 py-4">{{ $review->property->title }}</td>
                            <td class="px-6 py-4">{{ Str::limit($review->content, 50) }}</td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 rounded-full text-sm 
                                {{ $review->status == 'approved' ? 'bg-green-100 text-green-600' : 'bg-yellow-100 text-yellow-600' }}">
                                    {{ ucfirst($review->status) }}
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex space-x-2">
                                    @if ($review->status != 'approved')
                                        <form action="{{ route('admin.reviews.approve', $review->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="text-green-500 hover:text-green-600">
                                                Approve
                                            </button>
                                        </form>
                                    @endif
                                    @if ($review->status != 'rejected')
                                        <form action="{{ route('admin.reviews.reject', $review->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="text-yellow-500 hover:text-yellow-600">
                                                Reject
                                            </button>
                                        </form>
                                    @endif
                                    <form action="{{ route('admin.reviews.destroy', $review->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-600">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-4 text-center text-gray-500">
                                No reviews found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-6">
            {{ $reviews->links() }}
        </div>
    </div>
</div>
@endsection
