<?php

namespace App\Http\Controllers;

use App\Models\Property;

class PropertyController extends CrudController
{
    // protected $model;

    public function __construct()
    {
        // parent::__construct();

        $this->model = Property::class;
    }   
}
