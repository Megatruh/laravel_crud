<?php

namespace App\Filament\Resources\Coffees\Pages;

use App\Filament\Resources\Coffees\CoffeeResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCoffee extends ViewRecord
{
    protected static string $resource = CoffeeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
