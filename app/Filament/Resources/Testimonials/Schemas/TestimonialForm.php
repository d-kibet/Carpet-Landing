<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Customer Information')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('customer_name')
                                    ->label('Customer Name')
                                    ->required()
                                    ->maxLength(255)
                                    ->placeholder('John Doe'),

                                TextInput::make('rating')
                                    ->label('Rating (1-5)')
                                    ->required()
                                    ->numeric()
                                    ->minValue(1)
                                    ->maxValue(5)
                                    ->default(5),
                            ]),

                        FileUpload::make('customer_photo')
                            ->label('Customer Photo')
                            ->image()
                            ->directory('testimonials/customers')
                            ->maxSize(2048)
                            ->columnSpanFull(),

                        Textarea::make('review_text')
                            ->label('Testimonial Text')
                            ->required()
                            ->rows(4)
                            ->placeholder('Enter the customer testimonial...')
                            ->columnSpanFull(),
                    ]),

                Section::make('Association')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                Select::make('service_id')
                                    ->label('Service')
                                    ->relationship('service', 'name')
                                    ->placeholder('Select a service'),

                                Select::make('location_id')
                                    ->label('Location')
                                    ->relationship('location', 'name')
                                    ->placeholder('Select a location'),
                            ]),
                    ]),

                Section::make('Display Settings')
                    ->schema([
                        Grid::make(3)
                            ->schema([
                                Toggle::make('is_approved')
                                    ->label('Approved')
                                    ->default(true)
                                    ->inline(false),

                                Toggle::make('featured')
                                    ->label('Featured')
                                    ->default(false)
                                    ->inline(false),

                                TextInput::make('display_order')
                                    ->label('Display Order')
                                    ->required()
                                    ->numeric()
                                    ->default(0)
                                    ->minValue(0),
                            ]),
                    ]),
            ]);
    }
}
