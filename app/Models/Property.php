<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\PropertyRequest;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
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
        return $this->belongsToMany(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'property_tag');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    // Validator Function
    public static function validator(PropertyRequest $request)
    {
        return $request->validated();
    }

    public static function getView($action)
    {
        return "admin.properties.$action";
    }

    public static function getRedirect($action)
    {
        return "admin.properties.$action";
    }
}
