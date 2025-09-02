<?php

namespace App\Filament\Resources\Products;

use App\Filament\Resources\Products\Pages\CreateProducts;
use App\Filament\Resources\Products\Pages\EditProducts;
use App\Filament\Resources\Products\Pages\ListProducts;
use App\Filament\Resources\Products\Pages\ViewProducts;
use App\Filament\Resources\Products\Schemas\ProductsForm;
use App\Filament\Resources\Products\Schemas\ProductsInfolist;
use App\Filament\Resources\Products\Tables\ProductsTable;
use App\Models\Products;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Schemas\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\RepeatableEntry;

class ProductsResource extends Resource
{
    protected static ?string $model = Products::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'products';

public static function form(Schema $schema): Schema
{
    return $schema->schema(ProductsForm::form());
}

public static function infolist(Schema $schema): Schema
{
    return $schema->components([
        Section::make('Detail Produk')->schema([
            TextEntry::make('name')->label('Product Name'),
            TextEntry::make('description')->label('Description'),
            TextEntry::make('price')->label('Price'),
            TextEntry::make('category.name')->label('Category'),
            TextEntry::make('stock_1')->label('Stock 1'),
            TextEntry::make('stock_2')->label('Stock 2'),
            TextEntry::make('stock_3')->label('Stock 3'),
        ]),

        Section::make('Images')->schema([
            RepeatableEntry::make('images')->schema([
                ImageEntry::make('image')
                    ->label('')
                    ->disk('public')
                    ->visibility('public'), 
            ]),
        ]),
    ]);
}

    public static function table(Table $table): Table
    {
        return ProductsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListProducts::route('/'),
            'create' => CreateProducts::route('/create'),
            'view' => ViewProducts::route('/{record}'),
            'edit' => EditProducts::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }


}


