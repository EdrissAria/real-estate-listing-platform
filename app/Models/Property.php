<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'description',
        'price',
        'address',
        'city',
        'state',
        'country',
        'zip_code',
        'type',
        'bedrooms',
        'bathrooms',
        'area',
    ];

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->hasMany(PropertyImage::class);
    }

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'property_tag');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public static function getExtras()
    {
        return \App\Models\Category::all();
    }

    public static function validator()
    {
        return [
            'category_id' => 'required|numeric',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'country' => 'required|string|max:100',
            'zip_code' => 'nullable|string|max:20',
            'type' => 'required|in:rent,sale',
            'bedrooms' => 'required|integer|min:0',
            'bathrooms' => 'required|integer|min:0',
            'area' => 'required|numeric|min:0',
        ];
    }

    public static function getView($action)
    {
        return "admin.properties.$action";
    }

    public static function getRedirect($action)
    {
        return "properties.$action";
    }
}
