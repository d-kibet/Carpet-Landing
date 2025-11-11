<?php

namespace App\Filament\Resources\FAQS\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class FAQSTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('question')
                    ->searchable()
                    ->sortable()
                    ->weight('semibold')
                    ->wrap()
                    ->limit(60),

                TextColumn::make('answer')
                    ->searchable()
                    ->limit(100)
                    ->html()
                    ->toggleable()
                    ->wrap(),

                TextColumn::make('category')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'General' => 'gray',
                        'Services' => 'primary',
                        'Pricing' => 'success',
                        'Locations' => 'warning',
                        'Booking' => 'info',
                        default => 'gray',
                    }),

                TextColumn::make('display_order')
                    ->label('Order')
                    ->numeric()
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

                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->since()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('category')
                    ->options([
                        'General' => 'General',
                        'Services' => 'Services',
                        'Pricing' => 'Pricing',
                        'Locations' => 'Locations',
                        'Booking' => 'Booking',
                        'Other' => 'Other',
                    ])
                    ->multiple()
                    ->label('Category'),

                TernaryFilter::make('is_active')
                    ->label('Active Status')
                    ->placeholder('All FAQs')
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
