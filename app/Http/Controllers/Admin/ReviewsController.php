<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewsController extends CrudController
{
    // protected $model;

    public function __construct()
    {
        // parent::__construct();

        $this->model = Review::class;
    }   
}
