@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="space-y-6">
    <div class="text-end">
        <a href="{{ route('properties.create') }}" 
           class="bg-indigo-600 text-white px-5 py-2 rounded-lg hover:bg-indigo-700 transition duration-150 shadow-md">
           Add New Property
        </a>
    </div>

    <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
        
    </div>
</div>
@endsection
