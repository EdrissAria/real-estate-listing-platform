<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class crud extends Controller
{
    public $model;

    public function index()
    {
        $properties = $this->model::all();
        return view('properties.index', compact('properties'));
    }

    public function create()
    {
        return view($this->model::getView('create'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate($this->model::validator());
        $this->model::create($validated);
        // return redirect()->route('properties.index')->with('success', 'Property created successfully.');
    }

    public function show($id)
    {
        $property = $this->model::findOrFail($id);
        return view('properties.show', compact('property'));
    }

    public function edit($id)
    {
        $property = $this->model::findOrFail($id);
        return view('properties.edit', compact('property'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate($this->model::validator());
        $property = $this->model::findOrFail($id);
        $property->update($validated);
        return redirect()->route('properties.index')->with('success', 'Property updated successfully.');
    }

    public function destroy($id)
    {
        $property = $this->model::findOrFail($id);
        $property->delete();
        return redirect()->route('properties.index')->with('success', 'Property deleted successfully.');
    }
}
