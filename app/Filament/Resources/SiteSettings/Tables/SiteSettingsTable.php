<?php

namespace App\Filament\Resources\SiteSettings\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class SiteSettingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('key')
                    ->label('Key')
                    ->searchable()
                    ->sortable()
                    ->weight('semibold')
                    ->copyable()
                    ->copyMessage('Key copied!')
                    ->limit(30),

                TextColumn::make('label')
                    ->searchable()
                    ->sortable()
                    ->limit(40),

                TextColumn::make('type')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'image' => 'success',
                        'boolean' => 'info',
                        'textarea' => 'warning',
                        default => 'gray',
                    }),

                TextColumn::make('group')
                    ->badge()
                    ->color('primary')
                    ->sortable(),

                ImageColumn::make('value')
                    ->label('Preview')
                    ->circular()
                    ->size(50)
                    ->visible(fn ($record) => $record && $record->type === 'image'),

                TextColumn::make('value')
                    ->label('Value')
                    ->limit(40)
                    ->visible(fn ($record) => $record && in_array($record->type, ['text', 'textarea', 'boolean']))
                    ->formatStateUsing(fn ($state, $record) => $record && $record->type === 'boolean' ? ($state ? 'Yes' : 'No') : $state
                    ),

                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->since()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('type')
                    ->options([
                        'text' => 'Text',
                        'textarea' => 'Textarea',
                        'image' => 'Image',
                        'boolean' => 'Boolean',
                    ]),

                SelectFilter::make('group')
                    ->options([
                        'general' => 'General',
                        'backgrounds' => 'Background Images',
                        'images' => 'Other Images',
                        'content' => 'Content',
                    ]),
            ])
            ->defaultSort('group', 'asc')
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
