<?php

namespace App\Filament\Resources\Coffees\Widgets;

use App\Models\Coffee;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CoffeeOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Koleksi', Coffee::count())
                ->description('Varietas Kopi Hasra')
                ->color('primary'),
            Stat::make('Total Stok', Coffee::sum('stok'). ' Kg')
                ->description('Total Inventori')
                ->color('success'),
            Stat::make('Stok Kritis', Coffee::where('stok', '<=', 1)->count())
                ->description('Perlu tambah stok')
                ->color('danger'),
            
        ];
    }
}
