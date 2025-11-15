<?php

namespace App\Filament\Resources\Locations\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class LocationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Location Details')
                    ->description('Basic location information')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('name')
                                    ->required()
                                    ->maxLength(255)
                                    ->placeholder('Location name')
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn ($state, callable $set) => $set('slug', \Illuminate\Support\Str::slug($state))),

                                TextInput::make('slug')
                                    ->required()
                                    ->maxLength(255)
                                    ->unique(ignoreRecord: true)
                                    ->helperText('Auto-generated from name')
                                    ->disabled()
                                    ->dehydrated(),
                            ]),

                        Textarea::make('address')
                            ->required()
                            ->rows(3)
                            ->placeholder('Full street address')
                            ->columnSpanFull(),

                        Grid::make(2)
                            ->schema([
                                TextInput::make('city')
                                    ->required()
                                    ->maxLength(255)
                                    ->placeholder('City name'),

                                TextInput::make('google_maps_url')
                                    ->label('Google Maps URL')
                                    ->url()
                                    ->placeholder('https://maps.google.com/...')
                                    ->suffixIcon('heroicon-o-map-pin')
                                    ->helperText('For location map on website'),
                            ]),
                    ]),

                Section::make('Contact Information')
                    ->description('Contact details for this location')
                    ->schema([
                        Grid::make(3)
                            ->schema([
                                TextInput::make('phone')
                                    ->tel()
                                    ->maxLength(20)
                                    ->placeholder('+1 (555) 123-4567')
                                    ->prefixIcon('heroicon-o-phone'),

                                TextInput::make('email')
                                    ->label('Email Address')
                                    ->email()
                                    ->maxLength(255)
                                    ->placeholder('location@example.com')
                                    ->prefixIcon('heroicon-o-envelope'),

                                TextInput::make('whatsapp')
                                    ->label('WhatsApp')
                                    ->tel()
                                    ->maxLength(20)
                                    ->placeholder('+1 (555) 123-4567')
                                    ->helperText('With country code'),
                            ]),

                        Textarea::make('operating_hours')
                            ->label('Operating Hours')
                            ->rows(4)
                            ->placeholder('Mon-Fri: 9AM-5PM\nSat: 10AM-4PM\nSun: Closed')
                            ->helperText('Enter hours in a readable format')
                            ->columnSpanFull(),
                    ]),

                Section::make('Additional Information')
                    ->description('Media and status')
                    ->schema([
                        FileUpload::make('featured_image')
                            ->label('Featured Image')
                            ->image()
                            ->directory('locations')
                            ->visibility('public')
                            ->helperText('Recommended size: 1200x800px')
                            ->maxSize(5120)
                            ->columnSpanFull(),

                        RichEditor::make('description')
                            ->placeholder('Additional details about this location...')
                            ->disableToolbarButtons([
                                'attachFiles',
                                'codeBlock',
                            ])
                            ->columnSpanFull(),

                        Grid::make(3)
                            ->schema([
                                DatePicker::make('opening_date')
                                    ->label('Opening Date')
                                    ->helperText('When did/will this location open?')
                                    ->displayFormat('M d, Y'),

                                TextInput::make('display_order')
                                    ->label('Display Order')
                                    ->required()
                                    ->numeric()
                                    ->default(0)
                                    ->minValue(0)
                                    ->helperText('Lower numbers appear first'),

                                Toggle::make('is_operational')
                                    ->label('Operational')
                                    ->helperText('Is this location open?')
                                    ->default(true)
                                    ->inline(false),
                            ]),
                    ]),
            ]);
    }
}
