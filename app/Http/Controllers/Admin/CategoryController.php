<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\CrudController;
use App\Models\Category;

class CategoryController extends CrudController
{

    public function __construct()
    {
        $this->model = Category::class;
    }   
}
