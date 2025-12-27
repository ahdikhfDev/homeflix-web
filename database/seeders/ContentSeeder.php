<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Truncate first to prevent duplicates if run multiple times
        \App\Models\Gallery::truncate();
        \App\Models\Faq::truncate();

        // Seed Gallery
        $galleries = [
            [
                'image_path' => 'https://images.unsplash.com/photo-1536440136628-849c177e76a1?q=80&w=1925&auto=format&fit=crop',
                'title' => 'Movie Selection',
                'caption' => 'Pilih film favoritmu',
                'sort_order' => 1,
            ],
            [
                'image_path' => 'https://images.unsplash.com/photo-1616530940355-351fabd9524b?q=80&w=1935&auto=format&fit=crop',
                'title' => 'Watch Room',
                'caption' => 'Nonton bareng teman',
                'sort_order' => 2,
            ],
            [
                'image_path' => 'https://images.unsplash.com/photo-1593784654956-2384c58d0a83?q=80&w=2070&auto=format&fit=crop',
                'title' => 'Profile',
                'caption' => 'Atur profilmu',
                'sort_order' => 3,
            ],
            [
                'image_path' => 'https://images.unsplash.com/photo-1517604931442-710c8ef5ad25?q=80&w=2070&auto=format&fit=crop',
                'title' => 'Trending',
                'caption' => 'Film yang sedang hits',
                'sort_order' => 4,
            ],
        ];

        foreach ($galleries as $gallery) {
            \App\Models\Gallery::create($gallery);
        }

        // Seed FAQ
        $faqs = [
            [
                'question' => 'Apakah aplikasi ini gratis?',
                'answer' => 'Ya! HomeFlix bisa diunduh dan digunakan secara gratis. Beberapa film premium mungkin memerlukan langganan VIP, tapi fitur Watch Party dasar gratis selamanya.',
                'sort_order' => 1,
            ],
            [
                'question' => 'Bagaimana cara import video dari YouTube?',
                'answer' => 'Cukup salin link video YouTube, lalu paste di kolom pencarian di dalam aplikasi HomeFlix. Video akan langsung muncul dan siap ditonton bareng.',
                'sort_order' => 2,
            ],
            [
                'question' => 'Berapa maksimal orang dalam satu room?',
                'answer' => 'Untuk pengguna gratis, maksimal 5 orang per room. Untuk pengguna Premium, kamu bisa mengundang hingga 50 orang!',
                'sort_order' => 3,
            ],
        ];

        foreach ($faqs as $faq) {
            \App\Models\Faq::create($faq);
        }
    }
}
