<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertyRequest;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public $model;

    public function index()
    {
        $data = $this->model::all();
        return view($this->model::getView('index'), compact('data'));
    }

    public function create()
    {
        return view($this->model::getView('create'), ['extra_data' => $this->model::getExtras()]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate($this->model::validator());
        $this->model::create($validated);

        return redirect()->route($this->model::getRedirect('index'))
            ->with('success', 'Record has been added successfully.');
    }

    public function show($id)
    {
        $data = $this->model::findOrFail($id);
        return view($this->model::getView('show'), compact('data'));
    }

    public function edit($id)
    {
        $data = $this->model::findOrFail($id);
        return view($this->model::getView('edit'), compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate($this->model::validator());
        $property = $this->model::findOrFail($id);
        $property->update($validated);
        return redirect()->route($this->model::getRedirect('index'))->with('success', $this->model.' updated successfully.');
    }

    public function destroy($id)
    {
        $property = $this->model::findOrFail($id);
        $property->delete();
        return redirect()->route($this->model::getRedirect('index'))->with('success', $this->model.' deleted successfully.');
    }
}
