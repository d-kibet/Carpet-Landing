<?php

namespace App\Filament\Resources\SiteSettings\Pages;

use App\Filament\Resources\SiteSettings\SiteSettingsResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSiteSettings extends CreateRecord
{
    protected static string $resource = SiteSettingsResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Map the appropriate field to value based on type
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
