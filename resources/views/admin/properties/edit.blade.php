@extends('layouts.admin')

@section('title', 'Edit Property')

@section('content')
<div class="min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-4xl w-full">
        <form action="{{ route('properties.update', $data->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" id="title" name="title"
                       class="mt-1 p-2 block w-full border {{ $errors->has('title') ? 'border-red-500' : 'border-gray-300' }} rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                       placeholder="Enter property title" value="{{ old('title', $data->title) }}">
                @error('title')
                <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                    <input type="text" id="address" name="address"
                           class="mt-1 p-2 block w-full border {{ $errors->has('address') ? 'border-red-500' : 'border-gray-300' }} rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                           placeholder="Enter property address" value="{{ old('address', $data->address) }}">
                    @error('address')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                    <input type="text" id="city" name="city"
                           class="mt-1 p-2 block w-full border {{ $errors->has('city') ? 'border-red-500' : 'border-gray-300' }} rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                           placeholder="Enter city" value="{{ old('city', $data->city) }}">
                    @error('city')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                <div>
                    <label for="state" class="block text-sm font-medium text-gray-700">State</label>
                    <input type="text" id="state" name="state"
                           class="mt-1 p-2 block w-full border {{ $errors->has('state') ? 'border-red-500' : 'border-gray-300' }} rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                           placeholder="Enter state" value="{{ old('state', $data->state) }}">
                    @error('state')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                    <input type="text" id="country" name="country"
                           class="mt-1 p-2 block w-full border {{ $errors->has('country') ? 'border-red-500' : 'border-gray-300' }} rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                           placeholder="Enter country" value="{{ old('country', $data->country) }}">
                    @error('country')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="zip_code" class="block text-sm font-medium text-gray-700">Zip Code</label>
                    <input type="text" id="zip_code" name="zip_code"
                           class="mt-1 p-2 block w-full border {{ $errors->has('zip_code') ? 'border-red-500' : 'border-gray-300' }} rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                           placeholder="Enter zip code" value="{{ old('zip_code', $data->zip_code) }}">
                    @error('zip_code')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                    <input type="number" id="price" name="price"
                           class="mt-1 p-2 block w-full border {{ $errors->has('price') ? 'border-red-500' : 'border-gray-300' }} rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                           placeholder="Enter data price" value="{{ old('price', $data->price) }}">
                    @error('price')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
                    <select id="type" name="type"
                            class="mt-1 p-2 block w-full border {{ $errors->has('type') ? 'border-red-500' : 'border-gray-300' }} rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="rent" {{ old('type', $data->type) == 'rent' ? 'selected' : '' }}>Rent</option>
                        <option value="sale" {{ old('type', $data->type) == 'sale' ? 'selected' : '' }}>Sale</option>
                    </select>
                    @error('type')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                <div>
                    <label for="bedrooms" class="block text-sm font-medium text-gray-700">Bedrooms</label>
                    <input type="number" id="bedrooms" name="bedrooms"
                           class="mt-1 p-2 block w-full border {{ $errors->has('bedrooms') ? 'border-red-500' : 'border-gray-300' }} rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                           placeholder="Enter number of bedrooms" value="{{ old('bedrooms', $data->bedrooms) }}">
                    @error('bedrooms')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="bathrooms" class="block text-sm font-medium text-gray-700">Bathrooms</label>
                    <input type="number" id="bathrooms" name="bathrooms"
                           class="mt-1 p-2 block w-full border {{ $errors->has('bathrooms') ? 'border-red-500' : 'border-gray-300' }} rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                           placeholder="Enter number of bathrooms" value="{{ old('bathrooms', $data->bathrooms) }}">
                    @error('bathrooms')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="area" class="block text-sm font-medium text-gray-700">Area (sq ft)</label>
                    <input type="number" id="area" name="area"
                           class="mt-1 p-2 block w-full border {{ $errors->has('area') ? 'border-red-500' : 'border-gray-300' }} rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                           placeholder="Enter area in square feet" value="{{ old('area', $data->area) }}">
                    @error('area')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="description" name="description"
                          class="mt-1 p-2 block w-full border {{ $errors->has('description') ? 'border-red-500' : 'border-gray-300' }} rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                          placeholder="Enter data description">{{ old('description', $data->description) }}</textarea>
                @error('description')
                <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-6">
                <button type="submit"
                        class="w-full bg-indigo-500 text-white p-2 rounded-md shadow-md hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-400">
                    Update data
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
