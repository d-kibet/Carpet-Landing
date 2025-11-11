<?php

namespace App\Filament\Resources\QuoteRequests\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class QuoteRequestForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('phone')
                    ->tel()
                    ->required(),
                Select::make('service_id')
                    ->relationship('service', 'name')
                    ->default(null),
                Select::make('location_id')
                    ->relationship('location', 'name')
                    ->default(null),
                Textarea::make('message')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('estimated_size')
                    ->default(null),
                Select::make('status')
                    ->options([
            'pending' => 'Pending',
            'quoted' => 'Quoted',
            'converted' => 'Converted',
            'declined' => 'Declined',
        ])
                    ->default('pending')
                    ->required(),
                Textarea::make('admin_notes')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
