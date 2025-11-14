<?php

namespace App\Filament\Resources\BeforeAfters\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class BeforeAfterForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Before & After Images')
                    ->description('Upload before and after carpet cleaning photos to showcase your transformation results')
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('e.g., Living Room Carpet Transformation')
                            ->helperText('Give this before/after showcase a descriptive title')
                            ->columnSpanFull(),

                        Textarea::make('description')
                            ->maxLength(500)
                            ->rows(3)
                            ->placeholder('Optional description of the transformation')
                            ->helperText('Describe the carpet condition, stains removed, etc.')
                            ->columnSpanFull(),

                        Grid::make(2)
                            ->schema([
                                FileUpload::make('before_image')
                                    ->label('Before Image')
                                    ->image()
                                    ->disk('public')
                                    ->directory('before-after')
                                    ->visibility('public')
                                    ->required()
                                    ->helperText('Upload the BEFORE cleaning photo (max 10MB)')
                                    ->maxSize(10240),

                                FileUpload::make('after_image')
                                    ->label('After Image')
                                    ->image()
                                    ->disk('public')
                                    ->directory('before-after')
                                    ->visibility('public')
                                    ->required()
                                    ->helperText('Upload the AFTER cleaning photo (max 10MB)')
                                    ->maxSize(10240),
                            ]),

                        Grid::make(2)
                            ->schema([
                                TextInput::make('display_order')
                                    ->label('Display Order')
                                    ->numeric()
                                    ->default(0)
                                    ->required()
                                    ->helperText('Lower numbers appear first'),

                                Toggle::make('is_active')
                                    ->label('Show on Homepage')
                                    ->default(true)
                                    ->helperText('Toggle to show/hide this showcase')
                                    ->inline(false),
                            ]),
                    ]),
            ]);
    }
}
