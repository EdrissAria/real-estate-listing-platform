<?php

namespace App\Http\Controllers\Admin;
use App\Models\Property;
use App\Http\Controllers\CrudController;

class PropertyController extends CrudController
{
    // protected $model;

    public function __construct()
    {
        // parent::__construct();

        $this->model = Property::class;
    }   
}
