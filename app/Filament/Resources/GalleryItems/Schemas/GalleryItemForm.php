<?php

namespace App\Filament\Resources\GalleryItems\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class GalleryItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Media')
                    ->description('Upload an image or provide a YouTube video URL')
                    ->schema([
                        Select::make('type')
                            ->options([
                                'image' => 'Image',
                                'video' => 'YouTube Video',
                            ])
                            ->required()
                            ->default('image')
                            ->live(),

                        FileUpload::make('file_path')
                            ->label('Image')
                            ->image()
                            ->disk('public')
                            ->directory('gallery')
                            ->visibility('public')
                            ->maxSize(10240)
                            ->required(fn ($get) => $get('type') === 'image')
                            ->hidden(fn ($get) => $get('type') === 'video')
                            ->columnSpanFull(),

                        TextInput::make('youtube_url')
                            ->label('YouTube URL')
                            ->url()
                            ->placeholder('https://www.youtube.com/watch?v=...')
                            ->required(fn ($get) => $get('type') === 'video')
                            ->hidden(fn ($get) => $get('type') === 'image')
                            ->columnSpanFull(),

                        FileUpload::make('thumbnail_path')
                            ->label('Video Thumbnail')
                            ->image()
                            ->disk('public')
                            ->directory('gallery/thumbnails')
                            ->visibility('public')
                            ->maxSize(5120)
                            ->hidden(fn ($get) => $get('type') === 'image')
                            ->helperText('Optional custom thumbnail for the video')
                            ->columnSpanFull(),
                    ]),

                Section::make('Details')
                    ->description('Add titles and descriptions')
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Image or video title')
                            ->columnSpanFull(),

                        Textarea::make('caption')
                            ->maxLength(500)
                            ->rows(3)
                            ->placeholder('Brief description or caption')
                            ->columnSpanFull(),

                        TextInput::make('alt_text')
                            ->label('Alt Text')
                            ->maxLength(255)
                            ->placeholder('Accessibility text for screen readers')
                            ->helperText('Important for SEO and accessibility')
                            ->columnSpanFull(),
                    ]),

                Section::make('Organization')
                    ->description('Categorize and manage display')
                    ->schema([
                        Grid::make(4)
                            ->schema([
                                Select::make('category')
                                    ->options([
                                        'Before & After' => 'Before & After',
                                        'Residential' => 'Residential',
                                        'Commercial' => 'Commercial',
                                        'Deep Cleaning' => 'Deep Cleaning',
                                        'Testimonials' => 'Testimonials',
                                        'Other' => 'Other',
                                    ])
                                    ->searchable()
                                    ->default('Other'),

                                TextInput::make('display_order')
                                    ->label('Display Order')
                                    ->required()
                                    ->numeric()
                                    ->default(0)
                                    ->minValue(0),

                                Toggle::make('is_featured')
                                    ->label('Featured')
                                    ->helperText('Show in highlights')
                                    ->default(false)
                                    ->inline(false),

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
