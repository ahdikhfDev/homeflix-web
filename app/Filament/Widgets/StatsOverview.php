<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Downloads', \App\Models\AppDownload::count())
                ->description('Total application downloads')
                ->descriptionIcon('heroicon-m-arrow-down-tray')
                ->color('success')
                ->chart([7, 2, 10, 3, 15, 4, 17]),
            
            Stat::make('Unread Feedback', \App\Models\Feedback::where('is_read', false)->count())
                ->description('New feedback from users')
                ->descriptionIcon('heroicon-m-inbox')
                ->color('warning'),

            Stat::make('Active Features', \App\Models\Feature::where('is_active', true)->count())
                ->description('Features currently detailed on landing page')
                ->descriptionIcon('heroicon-m-check-circle')
                ->color('primary'),
        ];
    }
}
