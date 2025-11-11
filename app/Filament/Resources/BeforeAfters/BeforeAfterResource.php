<?php

namespace App\Filament\Resources\BeforeAfters;

use App\Filament\Resources\BeforeAfters\Pages\CreateBeforeAfter;
use App\Filament\Resources\BeforeAfters\Pages\EditBeforeAfter;
use App\Filament\Resources\BeforeAfters\Pages\ListBeforeAfters;
use App\Filament\Resources\BeforeAfters\Schemas\BeforeAfterForm;
use App\Filament\Resources\BeforeAfters\Tables\BeforeAftersTable;
use App\Models\BeforeAfter;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use UnitEnum;

class BeforeAfterResource extends Resource
{
    protected static ?string $model = BeforeAfter::class;

    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationLabel = 'Before & After';

    protected static UnitEnum|string|null $navigationGroup = 'Content Management';

    protected static ?int $navigationSort = 2;

    protected static ?string $modelLabel = 'Before/After Photo';

    protected static ?string $pluralModelLabel = 'Before & After Photos';

    public static function form(Schema $schema): Schema
    {
        return BeforeAfterForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BeforeAftersTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListBeforeAfters::route('/'),
            'create' => CreateBeforeAfter::route('/create'),
            'edit' => EditBeforeAfter::route('/{record}/edit'),
        ];
    }
}
