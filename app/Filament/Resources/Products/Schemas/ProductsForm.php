<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\FileUpload;

class ProductsForm
{
    public static function form(): array
    {
        return [
            TextInput::make('name')
                ->label('Product Name')
                ->required()
                ->maxLength(255),

            Textarea::make('description')
                ->label('Description')
                ->rows(4),

            TextInput::make('price')
                ->label('Price')
                ->numeric()
                ->prefix('Rp')
                ->required(),

            Select::make('category_id')
                ->label('Category')
                ->relationship('category', 'name')
                ->searchable()
                ->preload(),

            TextInput::make('stock_1')
                ->label('Stock 1')
                ->numeric()
                ->required(),

            TextInput::make('stock_2')
                ->label('Stock 2')
                ->numeric()
                ->required(),

            TextInput::make('stock_3')
                ->label('Stock 3')
                ->numeric()
                ->required(),

        Repeater::make('images')
    ->label('Product Images')
    ->relationship('images')
    ->schema([
        FileUpload::make('image')
            ->label('Image')
            ->image()
            ->disk('public')                  // <= WAJIB
            ->directory('products/images')
            ->visibility('public')
            ->required()
            ->maxSize(5120)
            ->acceptedFileTypes(['image/*']),
    ])
    ->columns(1)
    ->minItems(1)
    ->addActionLabel('Add Image')
        ];
    }
}
