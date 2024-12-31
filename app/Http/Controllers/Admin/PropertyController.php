<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\CrudController;
use App\Models\Property;

class PropertyController extends CrudController
{
    public function __construct()
    {
        $this->model = Property::class;
    }   
}
