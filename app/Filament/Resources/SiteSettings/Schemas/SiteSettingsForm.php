<?php

namespace App\Filament\Resources\SiteSettings\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class SiteSettingsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Setting Details')
                    ->description('Configure the setting key, label, and type')
                    ->schema([
                        TextInput::make('key')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true)
                            ->placeholder('e.g., hero_background_image')
                            ->helperText('Unique identifier for this setting (use snake_case)'),

                        TextInput::make('label')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('e.g., Hero Section Background Image')
                            ->helperText('Human-readable label for this setting'),

                        Select::make('type')
                            ->required()
                            ->options([
                                'text' => 'Text',
                                'textarea' => 'Textarea',
                                'image' => 'Image',
                                'video' => 'Video',
                                'boolean' => 'Boolean',
                            ])
                            ->default('text')
                            ->reactive()
                            ->helperText('Type of setting value'),

                        Select::make('group')
                            ->required()
                            ->options([
                                'general' => 'General',
                                'backgrounds' => 'Background Images',
                                'images' => 'Other Images',
                                'content' => 'Content',
                            ])
                            ->default('general')
                            ->helperText('Group this setting belongs to'),

                        Textarea::make('description')
                            ->maxLength(500)
                            ->rows(2)
                            ->placeholder('Optional description of what this setting controls')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Setting Value')
                    ->description('Set the value for this setting based on its type')
                    ->schema([
                        TextInput::make('value_text')
                            ->label('Text Value')
                            ->maxLength(255)
                            ->visible(fn ($get) => $get('type') === 'text')
                            ->columnSpanFull(),

                        Textarea::make('value_textarea')
                            ->label('Textarea Value')
                            ->rows(4)
                            ->visible(fn ($get) => $get('type') === 'textarea')
                            ->columnSpanFull(),

                        FileUpload::make('value_image')
                            ->label('Image File')
                            ->image()
                            ->imageEditor()
                            ->disk('public')
                            ->directory('site-settings')
                            ->visibility('public')
                            ->maxSize(5120)
                            ->helperText('Upload background image (max 5MB)')
                            ->visible(fn ($get) => $get('type') === 'image')
                            ->columnSpanFull(),

                        FileUpload::make('value_video')
                            ->label('Video File')
                            ->acceptedFileTypes(['video/mp4', 'video/webm', 'video/quicktime', 'video/x-msvideo'])
                            ->disk('public')
                            ->directory('site-videos')
                            ->visibility('public')
                            ->maxSize(51200)
                            ->helperText('Upload video file (max 50MB) - MP4, WebM, MOV, AVI')
                            ->visible(fn ($get) => $get('type') === 'video')
                            ->columnSpanFull(),

                        Toggle::make('value_boolean')
                            ->label('Boolean Value')
                            ->visible(fn ($get) => $get('type') === 'boolean')
                            ->inline(false)
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
