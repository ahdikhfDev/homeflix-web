<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    public function run(): void
    {
        $features = [
            [
                'title' => 'Real-time Sync',
                'description' => 'Nonton bareng tanpa delay. Sinkronisasi presisi milidetik antar semua device temanmu.',
                'icon' => 'zap',
                'sort_order' => 1,
            ],
            [
                'title' => 'Kualitas HD & 4K',
                'description' => 'Nikmati pengalaman sinematik dengan kualitas visual tajam dan audio jernih.',
                'icon' => 'monitor-play',
                'sort_order' => 2,
            ],
            [
                'title' => 'Voice & Chat',
                'description' => 'Ngobrol langsung sambil nonton. Tersedia fitur voice chat dan text chat built-in.',
                'icon' => 'message-circle',
                'sort_order' => 3,
            ],
            [
                'title' => 'Multi Platform',
                'description' => 'Akses dari Android, iOS, atau Web Browser. Nobar kapan saja, di mana saja.',
                'icon' => 'smartphone',
                'sort_order' => 4,
            ],
        ];

        foreach ($features as $feature) {
            Feature::create(array_merge($feature, ['is_active' => true]));
        }
    }
}
