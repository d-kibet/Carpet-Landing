<?php

namespace App\Filament\Resources\GalleryItems\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class GalleryItemsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('file_path')
                    ->label('Preview')
                    ->disk('public')
                    ->circular()
                    ->defaultImageUrl(url('/images/placeholder.png'))
                    ->size(60),

                TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->weight('semibold')
                    ->limit(40),

                TextColumn::make('type')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'image' => 'success',
                        'video' => 'info',
                        default => 'gray',
                    })
                    ->icon(fn (string $state): string => match ($state) {
                        'image' => 'heroicon-o-photo',
                        'video' => 'heroicon-o-film',
                        default => 'heroicon-o-question-mark-circle',
                    }),

                TextColumn::make('category')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color('primary'),

                TextColumn::make('display_order')
                    ->label('Order')
                    ->numeric()
                    ->sortable(),

                IconColumn::make('is_featured')
                    ->label('Featured')
                    ->boolean()
                    ->sortable(),

                IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean()
                    ->sortable(),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->since()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('type')
                    ->options([
                        'image' => 'Images',
                        'video' => 'Videos',
                    ]),

                SelectFilter::make('category')
                    ->options([
                        'Before & After' => 'Before & After',
                        'Residential' => 'Residential',
                        'Commercial' => 'Commercial',
                        'Deep Cleaning' => 'Deep Cleaning',
                        'Testimonials' => 'Testimonials',
                        'Other' => 'Other',
                    ])
                    ->multiple(),

                TernaryFilter::make('is_featured')
                    ->label('Featured Status')
                    ->placeholder('All Items')
                    ->trueLabel('Featured Only')
                    ->falseLabel('Not Featured'),

                TernaryFilter::make('is_active')
                    ->label('Active Status')
                    ->placeholder('All Items')
                    ->trueLabel('Active Only')
                    ->falseLabel('Inactive Only'),
            ])
            ->defaultSort('display_order', 'asc')
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
