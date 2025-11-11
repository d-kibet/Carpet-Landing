<?php

namespace Database\Seeders;

use App\Models\SiteSettings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            // Hero Section
            [
                'key' => 'hero_background_image',
                'value' => null,
                'type' => 'image',
                'group' => 'backgrounds',
                'label' => 'Hero Section Background Image',
                'description' => 'Main background image for the hero section at the top of the homepage',
            ],

            // Value Propositions Section
            [
                'key' => 'value_propositions_background',
                'value' => null,
                'type' => 'image',
                'group' => 'backgrounds',
                'label' => 'Value Propositions Background',
                'description' => 'Background image for the value propositions section',
            ],

            // Services Section
            [
                'key' => 'services_background',
                'value' => null,
                'type' => 'image',
                'group' => 'backgrounds',
                'label' => 'Services Section Background',
                'description' => 'Background image for the services overview section',
            ],

            // Process Timeline Section
            [
                'key' => 'process_timeline_background',
                'value' => null,
                'type' => 'image',
                'group' => 'backgrounds',
                'label' => 'Process Timeline Background',
                'description' => 'Background image for the process timeline section',
            ],

            // Locations Section
            [
                'key' => 'locations_background',
                'value' => null,
                'type' => 'image',
                'group' => 'backgrounds',
                'label' => 'Locations Section Background',
                'description' => 'Background image for the locations section',
            ],

            // Testimonials Section
            [
                'key' => 'testimonials_background',
                'value' => null,
                'type' => 'image',
                'group' => 'backgrounds',
                'label' => 'Testimonials Section Background',
                'description' => 'Background image for the testimonials section',
            ],

            // Before/After Section
            [
                'key' => 'before_after_background',
                'value' => null,
                'type' => 'image',
                'group' => 'backgrounds',
                'label' => 'Before/After Section Background',
                'description' => 'Background image for the transformation showcase section',
            ],

            // CTA Section
            [
                'key' => 'cta_background',
                'value' => null,
                'type' => 'image',
                'group' => 'backgrounds',
                'label' => 'Call-to-Action Background',
                'description' => 'Background image for the call-to-action section',
            ],

            // Individual service card backgrounds
            [
                'key' => 'carpet_cleaning_bg',
                'value' => null,
                'type' => 'image',
                'group' => 'backgrounds',
                'label' => 'Carpet Cleaning Card Background',
                'description' => 'Background texture/image for carpet cleaning service card',
            ],
            [
                'key' => 'laundry_service_bg',
                'value' => null,
                'type' => 'image',
                'group' => 'backgrounds',
                'label' => 'Laundry Service Card Background',
                'description' => 'Background texture/image for laundry service card',
            ],

            // Machinery Video Section
            [
                'key' => 'machinery_video_url',
                'value' => null,
                'type' => 'text',
                'group' => 'content',
                'label' => 'Machinery Video URL',
                'description' => 'YouTube or video URL for the "See Our Machinery in Action" section',
            ],
        ];

        foreach ($settings as $setting) {
            SiteSettings::updateOrCreate(
                ['key' => $setting['key']],
                $setting
            );
        }
    }
}
