<?php

namespace App\Filament\Resources\FAQS\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class FAQForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('FAQ Details')
                    ->description('Enter the question and answer')
                    ->schema([
                        TextInput::make('question')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('What is your question?')
                            ->helperText('Enter a clear, concise question')
                            ->columnSpanFull(),

                        RichEditor::make('answer')
                            ->required()
                            ->placeholder('Provide a detailed answer...')
                            ->helperText('Use formatting to make the answer easy to read')
                            ->columnSpanFull()
                            ->disableToolbarButtons([
                                'attachFiles',
                                'codeBlock',
                            ]),
                    ]),

                Section::make('Organization')
                    ->description('Categorize and order the FAQ')
                    ->schema([
                        Grid::make(3)
                            ->schema([
                                Select::make('category')
                                    ->options([
                                        'General' => 'General',
                                        'Services' => 'Services',
                                        'Pricing' => 'Pricing',
                                        'Locations' => 'Locations',
                                        'Booking' => 'Booking',
                                        'Other' => 'Other',
                                    ])
                                    ->placeholder('Select a category')
                                    ->searchable()
                                    ->default('General'),

                                TextInput::make('display_order')
                                    ->label('Display Order')
                                    ->required()
                                    ->numeric()
                                    ->default(0)
                                    ->minValue(0)
                                    ->helperText('Lower numbers appear first'),

                                Toggle::make('is_active')
                                    ->label('Active')
                                    ->helperText('Show on website')
                                    ->default(true)
                                    ->inline(false),
                            ]),
                    ]),
            ]);
    }
}
