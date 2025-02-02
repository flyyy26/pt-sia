<?php

namespace App\Filament\Widgets;

use App\Models\User;
use App\Models\Banner;
use App\Models\Artikel;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make(label: 'Total Articles', value: Artikel::count())
                ->description(description : 'Increase in Articles')
                ->descriptionIcon(icon: 'heroicon-m-arrow-trending-up')
                ->color(color: 'success')
                ->chart([7, 3, 4, 5, 6, 3, 5, 3]),
            Stat::make(label: 'Total Banners', value: Banner::count())
                ->description(description : 'Increase in Banners')
                ->descriptionIcon(icon: 'heroicon-m-arrow-trending-up')
                ->color(color: 'success')
                ->chart([7, 3, 4, 5, 6, 3, 5, 3]),
            Stat::make(label: 'Total Users', value: User::count())
                ->description(description : 'Increase in Users')
                ->descriptionIcon(icon: 'heroicon-m-arrow-trending-up')
                ->color(color: 'success')
                ->chart([7, 3, 4, 5, 6, 3, 5, 3])
        ];
    }
}
