@extends('layouts.admin')

@section('title', 'Property Details')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-4xl w-full">
        <div class="space-y-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-sm font-medium text-gray-600">Title</h3>
                    <p class="text-gray-800">{{ $data->title }}</p>
                </div>
                <div>
                    <h3 class="text-sm font-medium text-gray-600">Type</h3>
                    <p class="text-gray-800">{{ ucfirst($data->type) }}</p>
                </div>
                <div>
                    <h3 class="text-sm font-medium text-gray-600">Price</h3>
                    <p class="text-gray-800">${{ number_format($data->price, 2) }}</p>
                </div>
                <div>
                    <h3 class="text-sm font-medium text-gray-600">Address</h3>
                    <p class="text-gray-800">{{ $data->address }}</p>
                </div>
                <div>
                    <h3 class="text-sm font-medium text-gray-600">City</h3>
                    <p class="text-gray-800">{{ $data->city }}</p>
                </div>
                <div>
                    <h3 class="text-sm font-medium text-gray-600">State</h3>
                    <p class="text-gray-800">{{ $data->state }}</p>
                </div>
                <div>
                    <h3 class="text-sm font-medium text-gray-600">Country</h3>
                    <p class="text-gray-800">{{ $data->country }}</p>
                </div>
                <div>
                    <h3 class="text-sm font-medium text-gray-600">Zip Code</h3>
                    <p class="text-gray-800">{{ $data->zip_code }}</p>
                </div>
                <div>
                    <h3 class="text-sm font-medium text-gray-600">Bedrooms</h3>
                    <p class="text-gray-800">{{ $data->bedrooms }}</p>
                </div>
                <div>
                    <h3 class="text-sm font-medium text-gray-600">Bathrooms</h3>
                    <p class="text-gray-800">{{ $data->bathrooms }}</p>
                </div>
                <div>
                    <h3 class="text-sm font-medium text-gray-600">Area</h3>
                    <p class="text-gray-800">{{ $data->area }} sq ft</p>
                </div>
            </div>

            <div>
                <h3 class="text-sm font-medium text-gray-600">Description</h3>
                <p class="text-gray-800">{{ $data->description }}</p>
            </div>
        </div>

        <div class="mt-6 flex justify-end space-x-4">
            <a href="{{ route('properties.edit', $data->id) }}" 
               class="bg-yellow-500 text-white px-5 py-2 rounded-lg hover:bg-yellow-600 transition duration-150">
               Edit
            </a>
            <form action="{{ route('properties.destroy', $data->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" 
                        class="bg-red-500 text-white px-5 py-2 rounded-lg hover:bg-red-600 transition duration-150">
                    Delete
                </button>
            </form>
            <a href="{{ route('properties.index') }}" 
               class="bg-gray-500 text-white px-5 py-2 rounded-lg hover:bg-gray-600 transition duration-150">
               Back to Properties
            </a>
        </div>
    </div>
</div>
@endsection
