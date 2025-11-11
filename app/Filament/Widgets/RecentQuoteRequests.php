<?php

namespace App\Filament\Widgets;

use App\Models\QuoteRequest;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;

class RecentQuoteRequests extends TableWidget
{
    protected int|string|array $columnSpan = 'full';

    protected static ?int $sort = 2;

    public function table(Table $table): Table
    {
        return $table
            ->query(
                QuoteRequest::query()
                    ->latest()
                    ->limit(5)
            )
            ->heading('Recent Quote Requests')
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('email')
                    ->searchable()
                    ->sortable()
                    ->icon('heroicon-o-envelope'),

                TextColumn::make('phone')
                    ->searchable()
                    ->icon('heroicon-o-phone'),

                TextColumn::make('service')
                    ->searchable()
                    ->badge()
                    ->color('primary'),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->label('Requested At')
                    ->since(),
            ])
            ->paginated(false);
    }
}
