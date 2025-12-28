<?php

namespace App\Observers;

use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class GalleryObserver
{
    /**
     * Handle the Gallery "updated" event.
     */
    public function updated(Gallery $gallery): void
    {
        if ($gallery->isDirty('image_path')) {
            $originalImage = $gallery->getOriginal('image_path');
            if ($originalImage) {
                Storage::head($originalImage) && Storage::delete($originalImage);
            }
        }
    }

    /**
     * Handle the Gallery "deleted" event.
     */
    public function deleted(Gallery $gallery): void
    {
        if ($gallery->image_path) {
            Storage::head($gallery->image_path) && Storage::delete($gallery->image_path);
        }
    }
}
