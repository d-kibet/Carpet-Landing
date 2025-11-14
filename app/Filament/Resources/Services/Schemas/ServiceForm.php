<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Basic Information')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('name')
                                    ->required()
                                    ->maxLength(255)
                                    ->placeholder('Service name'),

                                TextInput::make('slug')
                                    ->required()
                                    ->maxLength(255)
                                    ->unique(ignoreRecord: true)
                                    ->placeholder('service-slug'),
                            ]),

                        TextInput::make('short_description')
                            ->maxLength(160)
                            ->placeholder('Brief one-line description')
                            ->columnSpanFull(),

                        RichEditor::make('description')
                            ->placeholder('Detailed service description...')
                            ->columnSpanFull(),
                    ]),

                Section::make('Media & Pricing')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                FileUpload::make('featured_image')
                                    ->label('Featured Image')
                                    ->image()
                                    ->directory('services')
                                    ->maxSize(2048),

                                TextInput::make('icon')
                                    ->label('Icon Class')
                                    ->placeholder('heroicon-o-sparkles'),
                            ]),

                        Grid::make(2)
                            ->schema([
                                Select::make('pricing_type')
                                    ->options([
                                        'fixed' => 'Fixed Price',
                                        'variable' => 'Variable Price',
                                        'quote' => 'Request Quote',
                                    ])
                                    ->default('variable')
                                    ->required(),

                                TextInput::make('base_price')
                                    ->label('Base Price (USD)')
                                    ->numeric()
                                    ->prefix('$')
                                    ->minValue(0)
                                    ->step(0.01),
                            ]),
                    ]),

                Section::make('SEO & Display')
                    ->schema([
                        TextInput::make('seo_title')
                            ->label('SEO Title')
                            ->maxLength(100)
                            ->placeholder('Custom page title'),

                        Textarea::make('seo_description')
                            ->label('SEO Description')
                            ->maxLength(160)
                            ->rows(3)
                            ->placeholder('Meta description'),

                        Grid::make(2)
                            ->schema([
                                TextInput::make('display_order')
                                    ->label('Display Order')
                                    ->required()
                                    ->numeric()
                                    ->default(0)
                                    ->minValue(0),

                                Toggle::make('is_active')
                                    ->label('Active')
                                    ->default(true)
                                    ->inline(false),
                            ]),
                    ]),
            ]);
    }
}
