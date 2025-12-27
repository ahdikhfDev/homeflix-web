<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AppDownload;

class DownloadController extends Controller
{
    public function index(Request $request)
    {
        AppDownload::create([
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        return redirect()->away('https://homeflix.biz.id/download'); // Or the actual file path
    }
}
