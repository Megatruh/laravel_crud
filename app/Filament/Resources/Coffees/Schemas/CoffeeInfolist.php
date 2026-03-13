<?php

namespace App\Filament\Resources\Coffees\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class CoffeeInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('id')
                    ->label('ID'),
                TextEntry::make('species')
                    ->badge(),
                TextEntry::make('variety'),
                TextEntry::make('origin'),
                TextEntry::make('roasted_level')
                    ->badge(),
                TextEntry::make('process')
                    ->badge(),
                TextEntry::make('stok')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
