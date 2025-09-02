<?php

namespace App\Filament\Resources\Orders\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class OrdersInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('user_id')
                    ->numeric(),
                TextEntry::make('guest_name'),
                TextEntry::make('guest_email'),
                TextEntry::make('guest_phone'),
                TextEntry::make('total_price')
                    ->numeric(),
                TextEntry::make('status'),
                TextEntry::make('payment_status'),
                TextEntry::make('payment_method'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
