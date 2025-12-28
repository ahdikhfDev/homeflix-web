<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use App\Observers\GalleryObserver;

#[ObservedBy(GalleryObserver::class)]
class Gallery extends Model
{
    protected $fillable = [
        'image_path',
        'title',
        'caption',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
