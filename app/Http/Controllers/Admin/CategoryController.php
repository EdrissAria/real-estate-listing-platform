<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends CrudController
{
    // protected $model;

    public function __construct()
    {
        // parent::__construct();

        $this->model = Category::class;
    }   
}
