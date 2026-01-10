<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;

Route::get('/', Home::class)->name('home');
Route::get('/download', function () {
    $path = storage_path('app/public/Homeflix.apk');
    if (!file_exists($path)) {
        abort(404, 'File not found. Please upload Homeflix.apk to storage/app/public/');
    }
    return response()->download($path);
})->name('download');
Route::post('/feedback', [App\Http\Controllers\FeedbackController::class, 'store'])->name('feedback.store');
