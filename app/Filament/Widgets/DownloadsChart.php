<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class DownloadsChart extends ChartWidget
{
    protected static ?string $heading = 'Downloads over time';

    protected function getData(): array
    {
        $data = \Flowframe\Trend\Trend::model(\App\Models\AppDownload::class)
            ->between(
                start: now()->subDays(7),
                end: now(),
            )
            ->perDay()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Downloads',
                    'data' => $data->map(fn (\Flowframe\Trend\TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (\Flowframe\Trend\TrendValue $value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
