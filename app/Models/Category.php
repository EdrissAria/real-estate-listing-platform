<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function properties()
    {
        return $this->hasMany(Property::class);
    }

    public static function validator()
    {
        return [
            'name' => 'required|string|max:255',           
        ];
    }

    
    public static function getView($action)
    {
        return "admin.categories.$action";
    }

    public static function getRedirect($action)
    {
        return "categories.$action";
    }
}
