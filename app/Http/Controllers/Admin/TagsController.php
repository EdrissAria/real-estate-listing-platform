<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagsController extends CrudController
{
    // protected $model;

    public function __construct()
    {
        // parent::__construct();

        $this->model = Tag::class;
    }   
}
