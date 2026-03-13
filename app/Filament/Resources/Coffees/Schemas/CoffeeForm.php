<?php

namespace App\Filament\Resources\Coffees\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CoffeeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Detail Koleksi Kopi')
                    ->description('Kelola data stok dan spesifikasi Kopi Hasra Roastery')
                    ->schema([
                        Select::make('species')
                            ->options(['Arabika' => 'Arabika', 'Robusta' => 'Robusta', 'Liberika' => 'Liberika'])
                            ->native(false)
                            ->required(),
                        TextInput::make('variety')
                            ->placeholder('Contoh : Sigarar Utang')
                            ->required(),
                        TextInput::make('origin')
                            ->placeholder('Contoh : Garut Papandayan')
                            ->required(),
                        Select::make('roasted_level')
                            ->options([
                                'Green Bean' => 'Green bean',
                                'Light' => 'Light',
                                'Medium' => 'Medium',
                                'Medium to Dark' => 'Medium to dark',
                                'Dark' => 'Dark',
                            ])
                            ->native(false)
                            ->required(),
                        Select::make('process')
                            ->options([
                                'Honey' => 'Honey', 
                                'Natural' => 'Natural', 
                                'Wine' => 'Wine', 
                                'Wash' => 'Wash'
                            ])
                            ->native(false)
                            ->required(),
                        TextInput::make('stok')
                            ->label('Jumlah Stok')
                            ->suffix('Kg')
                            ->default(0)
                            ->required()
                            ->numeric(),
                ])->columns(2),
            ]);
    }
}
