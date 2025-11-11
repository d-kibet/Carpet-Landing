<?php

namespace App\Filament\Resources\SiteSettings;

use App\Filament\Resources\SiteSettings\Pages\CreateSiteSettings;
use App\Filament\Resources\SiteSettings\Pages\EditSiteSettings;
use App\Filament\Resources\SiteSettings\Pages\ListSiteSettings;
use App\Filament\Resources\SiteSettings\Schemas\SiteSettingsForm;
use App\Filament\Resources\SiteSettings\Tables\SiteSettingsTable;
use App\Models\SiteSettings;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use UnitEnum;

class SiteSettingsResource extends Resource
{
    protected static ?string $model = SiteSettings::class;

    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-cog';

    protected static ?string $navigationLabel = 'Site Settings';

    protected static UnitEnum|string|null $navigationGroup = 'Settings';

    protected static ?int $navigationSort = 1;

    protected static ?string $modelLabel = 'Site Setting';

    protected static ?string $pluralModelLabel = 'Site Settings';

    public static function form(Schema $schema): Schema
    {
        return SiteSettingsForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SiteSettingsTable::configure($table);
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
            'index' => ListSiteSettings::route('/'),
            'create' => CreateSiteSettings::route('/create'),
            'edit' => EditSiteSettings::route('/{record}/edit'),
        ];
    }
}
