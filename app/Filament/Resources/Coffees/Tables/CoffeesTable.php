<?php

namespace App\Filament\Resources\Coffees\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CoffeesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('ULID')
                    ->copyable()
                    ->toggleable(isToggledHiddenByDefault:true),
                TextColumn::make('species')
                    ->badge()
                    ->color(fn(string $state):string=>match($state){
                        'Arabika'=> 'success',
                        'Robusta' => 'warning',
                        'Liberika' => 'info',
                        default => 'gray',
                    })
                    ->sortable(),
                TextColumn::make('variety')
                    ->searchable(),
                TextColumn::make('origin')
                    ->searchable(),
                TextColumn::make('roasted_level')
                    ->badge(),
                TextColumn::make('process')
                    ->badge()
                    ->color(fn(string $state):string=>match($state){
                        'Wash'=>'info',
                        'Honey'=>'primary',
                        'Natural'=> 'success',
                        'Wine'=> 'purple',
                    }),
                TextColumn::make('stok')
                    ->numeric()
                    ->label('Stok (Kg)')
                    ->color(fn(int $state): string=>$state <= 1 ? 'danger' :'success')
                    ->description(fn(int $state): string=> $state <= 1 ? 'Stok Kritis!' : 'Stok Aman' )
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
