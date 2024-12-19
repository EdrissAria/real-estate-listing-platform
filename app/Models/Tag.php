<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function properties()
    {
        return $this->belongsToMany(Property::class, 'property_tag');
    }
}
