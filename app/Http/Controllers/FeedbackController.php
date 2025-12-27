<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string',
            'message' => 'required|string',
        ]);

        $typeMap = [
            'Saran Fitur' => 'feature',
            'Laporan Bug' => 'bug',
            'Lainnya' => 'other',
        ];

        \App\Models\Feedback::create([
            'name' => $validated['name'],
            'type' => $typeMap[$validated['type']] ?? 'other',
            'message' => $validated['message'],
        ]);

        return back()->with('success', 'Terima kasih atas masukan Anda!');
    }
}
