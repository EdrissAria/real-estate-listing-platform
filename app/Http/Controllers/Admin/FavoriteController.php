<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;

class FavoriteController extends CrudController
{
    // protected $model;

    public function __construct()
    {
        // parent::__construct();

        $this->model = Favorite::class;
    }   
}
