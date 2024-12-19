<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PropertyTag extends Model
{
    use HasFactory;

    protected $table = 'property_tag';

    protected $fillable = [
        'property_id',
        'tag_id',
    ];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
}
