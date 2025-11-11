<?php

namespace App\Filament\Resources\Services\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class ServicesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('featured_image')
                    ->label('Image')
                    ->circular()
                    ->defaultImageUrl(url('/images/placeholder.png'))
                    ->size(50),

                TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->weight('semibold')
                    ->icon('heroicon-o-sparkles'),

                TextColumn::make('short_description')
                    ->searchable()
                    ->limit(50)
                    ->wrap()
                    ->toggleable(),

                TextColumn::make('pricing_type')
                    ->badge()
                    ->sortable()
                    ->color(fn (string $state): string => match ($state) {
                        'fixed' => 'success',
                        'variable' => 'info',
                        'quote' => 'warning',
                        default => 'gray',
                    }),

                TextColumn::make('base_price')
                    ->label('Price')
                    ->money('USD')
                    ->sortable()
                    ->toggleable(),

                IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean()
                    ->sortable(),

                TextColumn::make('display_order')
                    ->label('Order')
                    ->numeric()
                    ->sortable(),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->since()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('pricing_type')
                    ->options([
                        'fixed' => 'Fixed Price',
                        'variable' => 'Variable Price',
                        'quote' => 'Request Quote',
                    ]),

                TernaryFilter::make('is_active')
                    ->label('Active Status')
                    ->placeholder('All Services')
                    ->trueLabel('Active Only')
                    ->falseLabel('Inactive Only'),
            ])
            ->defaultSort('display_order', 'asc')
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
