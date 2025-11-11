<?php

namespace App\Filament\Resources\BeforeAfters\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class BeforeAftersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('before_image')
                    ->label('Before')
                    ->disk('public')
                    ->circular()
                    ->size(60),

                ImageColumn::make('after_image')
                    ->label('After')
                    ->disk('public')
                    ->circular()
                    ->size(60),

                TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->weight('semibold')
                    ->limit(40)
                    ->description(fn ($record) => $record->description ? substr($record->description, 0, 50).'...' : null),

                TextColumn::make('display_order')
                    ->label('Order')
                    ->numeric()
                    ->sortable(),

                IconColumn::make('is_active')
                    ->label('Show on Homepage')
                    ->boolean()
                    ->sortable(),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->since()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                TernaryFilter::make('is_active')
                    ->label('Homepage Status')
                    ->placeholder('All Items')
                    ->trueLabel('Visible on Homepage')
                    ->falseLabel('Hidden from Homepage'),
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
