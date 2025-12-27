<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class FeedbackChart extends ChartWidget
{
    protected static ?string $heading = 'Feedback Types';

    protected function getData(): array
    {
        $data = \App\Models\Feedback::select('type', \Illuminate\Support\Facades\DB::raw('count(*) as total'))
            ->groupBy('type')
            ->pluck('total', 'type');

        return [
            'datasets' => [
                [
                    'label' => 'Feedback',
                    'data' => $data->values()->toArray(),
                    'backgroundColor' => [
                        '#10b981', // success (feature)
                        '#ef4444', // danger (bug)
                        '#f59e0b', // warning (other)
                    ],
                ],
            ],
            'labels' => $data->keys()->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
}
