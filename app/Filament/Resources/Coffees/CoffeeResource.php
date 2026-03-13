<?php

namespace App\Filament\Resources\Coffees;

use App\Filament\Resources\Coffees\Pages\CreateCoffee;
use App\Filament\Resources\Coffees\Pages\EditCoffee;
use App\Filament\Resources\Coffees\Pages\ListCoffees;
use App\Filament\Resources\Coffees\Pages\ViewCoffee;
use App\Filament\Resources\Coffees\Schemas\CoffeeForm;
use App\Filament\Resources\Coffees\Schemas\CoffeeInfolist;
use App\Filament\Resources\Coffees\Tables\CoffeesTable;
use App\Filament\Resources\Coffees\Widgets\CoffeeOverview;
use App\Models\Coffee;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;


class CoffeeResource extends Resource
{
    protected static ?string $model = Coffee::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Coffee';

    public static function form(Schema $schema): Schema
    {
        return CoffeeForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return CoffeeInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CoffeesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getWidgets(): array
    {
        return [
            CoffeeOverview::class,
        ];
    }
    public function getHeaderWidgets(): array
    {
        return [
            CoffeeOverview::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCoffees::route('/'),
            'create' => CreateCoffee::route('/create'),
            'view' => ViewCoffee::route('/{record}'),
            'edit' => EditCoffee::route('/{record}/edit'),
        ];
    }
}
