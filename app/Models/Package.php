<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'price', 'languages', 'description', 'people', 'time', 'type'
    ];

    public function galleries()
    {
        return $this->hasMany(GalleryPackage::class);
    }
}
