<?php

namespace App\Filament\Resources\SiteSettings\Pages;

use App\Filament\Resources\SiteSettings\SiteSettingsResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSiteSettings extends EditRecord
{
    protected static string $resource = SiteSettingsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        // Map the value to the appropriate field based on type
        if (isset($data['type'])) {
            switch ($data['type']) {
                case 'text':
                    $data['value_text'] = $data['value'] ?? null;
                    $data['value_image'] = null;
                    $data['value_video'] = null;
                    $data['value_textarea'] = null;
                    $data['value_boolean'] = null;
                    break;
                case 'textarea':
                    $data['value_textarea'] = $data['value'] ?? null;
                    $data['value_image'] = null;
                    $data['value_video'] = null;
                    $data['value_text'] = null;
                    $data['value_boolean'] = null;
                    break;
                case 'image':
                    $data['value_image'] = $data['value'] ?? null;
                    $data['value_text'] = null;
                    $data['value_video'] = null;
                    $data['value_textarea'] = null;
                    $data['value_boolean'] = null;
                    break;
                case 'video':
                    $data['value_video'] = $data['value'] ?? null;
                    $data['value_text'] = null;
                    $data['value_image'] = null;
                    $data['value_textarea'] = null;
                    $data['value_boolean'] = null;
                    break;
                case 'boolean':
                    $data['value_boolean'] = $data['value'] ?? null;
                    $data['value_image'] = null;
                    $data['value_video'] = null;
                    $data['value_text'] = null;
                    $data['value_textarea'] = null;
                    break;
            }
        }

        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Map the appropriate field back to value based on type
        if (isset($data['type'])) {
            switch ($data['type']) {
                case 'text':
                    $data['value'] = $data['value_text'] ?? null;
                    break;
                case 'textarea':
                    $data['value'] = $data['value_textarea'] ?? null;
                    break;
                case 'image':
                    $data['value'] = $data['value_image'] ?? null;
                    break;
                case 'video':
                    $data['value'] = $data['value_video'] ?? null;
                    break;
                case 'boolean':
                    $data['value'] = $data['value_boolean'] ?? null;
                    break;
            }
        }

        // Remove the temporary fields
        unset($data['value_text'], $data['value_textarea'], $data['value_image'], $data['value_video'], $data['value_boolean']);

        return $data;
    }
}
