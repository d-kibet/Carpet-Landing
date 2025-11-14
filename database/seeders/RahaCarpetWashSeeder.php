<?php

namespace Database\Seeders;

use App\Models\FAQ;
use App\Models\GalleryMedia;
use App\Models\Location;
use App\Models\PricingItem;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class RahaCarpetWashSeeder extends Seeder
{
    public function run(): void
    {
        // Seed Site Settings first
        $this->call(SiteSettingsSeeder::class);

        // Create Services
        $carpetCleaning = Service::create([
            'name' => 'Carpet Cleaning',
            'slug' => 'carpet-cleaning',
            'short_description' => 'Professional carpet cleaning with 24-hour turnaround',
            'description' => 'Our automated carpet cleaning service uses state-of-the-art machinery to deep clean your carpets. We guarantee a 24-hour drying time and return your carpets looking brand new. Perfect for homes, offices, and commercial spaces.',
            'icon' => 'heroicon-o-sparkles',
            'pricing_type' => 'variable',
            'is_active' => true,
            'display_order' => 1,
            'seo_title' => 'Professional Carpet Cleaning Services in Nairobi - 24hr Turnaround',
            'seo_description' => 'Expert carpet cleaning services in Nairobi with automated machinery. Quick 24-hour turnaround. Book your carpet cleaning today!',
        ]);

        $laundryService = Service::create([
            'name' => 'Laundry Services',
            'slug' => 'laundry-services',
            'short_description' => 'Complete laundry services with fast turnaround',
            'description' => 'From everyday clothing to delicate fabrics, our laundry service handles it all. We offer washing, drying, and folding services with the same commitment to quality and speed.',
            'icon' => 'heroicon-o-sparkles',
            'pricing_type' => 'variable',
            'is_active' => true,
            'display_order' => 2,
            'seo_title' => 'Laundry Services in Nairobi - Fast & Affordable',
            'seo_description' => 'Professional laundry services with quick turnaround. Washing, drying, and folding available. Serving Nairobi and surrounding areas.',
        ]);

        // Create Locations
        $nairobi = Location::create([
            'name' => 'Nairobi - Lang\'ata',
            'slug' => 'nairobi-langata',
            'address' => 'Uchumi Lang\'ata Opp Uhuru Gardens',
            'city' => 'Nairobi',
            'phone' => '0114440444',
            'whatsapp' => '254114440444',
            'operating_hours' => [
                'Mon-Sat' => '7:30 AM - 7:30 PM',
                'Sunday' => '7:30 AM - 5:00 PM',
            ],
            'is_operational' => true,
            'description' => 'Our flagship location in Lang\'ata, conveniently located opposite Uhuru Gardens with ample parking.',
            'display_order' => 1,
        ]);

        $mombasa = Location::create([
            'name' => 'Mombasa - Nyali',
            'slug' => 'mombasa-nyali',
            'address' => 'Nyali Area',
            'city' => 'Mombasa',
            'is_operational' => false,
            'opening_date' => now()->addMonths(2),
            'description' => 'Coming soon to Nyali! Bringing the same quality service to Mombasa.',
            'display_order' => 2,
        ]);

        $eldoret = Location::create([
            'name' => 'Eldoret',
            'slug' => 'eldoret',
            'address' => 'TBD',
            'city' => 'Eldoret',
            'is_operational' => false,
            'opening_date' => now()->addMonths(3),
            'description' => 'Coming soon to Eldoret! Expanding our services to serve you better.',
            'display_order' => 3,
        ]);

        // Attach services to locations
        $nairobi->services()->attach([$carpetCleaning->id, $laundryService->id]);
        $mombasa->services()->attach([$carpetCleaning->id, $laundryService->id]);
        $eldoret->services()->attach([$carpetCleaning->id, $laundryService->id]);

        // Create Pricing Items for Carpet Cleaning
        PricingItem::create([
            'service_id' => $carpetCleaning->id,
            'item_name' => 'Small Carpet (up to 6x4 ft)',
            'description' => 'Perfect for bedroom carpets',
            'price' => 800,
            'unit' => 'per_piece',
            'display_order' => 1,
        ]);

        PricingItem::create([
            'service_id' => $carpetCleaning->id,
            'item_name' => 'Medium Carpet (6x8 ft to 8x10 ft)',
            'description' => 'Ideal for living rooms',
            'price' => 1200,
            'unit' => 'per_piece',
            'display_order' => 2,
        ]);

        PricingItem::create([
            'service_id' => $carpetCleaning->id,
            'item_name' => 'Large Carpet (above 8x10 ft)',
            'description' => 'For large spaces',
            'price' => 1800,
            'unit' => 'per_piece',
            'display_order' => 3,
        ]);

        PricingItem::create([
            'service_id' => $carpetCleaning->id,
            'item_name' => 'Pet Odor Treatment',
            'description' => 'Additional treatment for pet-related odors',
            'price' => 300,
            'unit' => 'per_piece',
            'is_addon' => true,
            'display_order' => 4,
        ]);

        // Create Pricing Items for Laundry
        PricingItem::create([
            'service_id' => $laundryService->id,
            'item_name' => 'Wash & Fold (per kg)',
            'description' => 'Standard washing and folding',
            'price' => 150,
            'unit' => 'per_kg',
            'display_order' => 1,
        ]);

        PricingItem::create([
            'service_id' => $laundryService->id,
            'item_name' => 'Wash & Iron (per piece)',
            'description' => 'Washing and professional ironing',
            'price' => 80,
            'unit' => 'per_piece',
            'display_order' => 2,
        ]);

        // Create Testimonials
        Testimonial::create([
            'customer_name' => 'Jane Wanjiru',
            'rating' => 5,
            'review_text' => 'Excellent service! My carpet looks brand new. The 24-hour turnaround was exactly as promised. Highly recommend!',
            'service_id' => $carpetCleaning->id,
            'location_id' => $nairobi->id,
            'is_approved' => true,
            'featured' => true,
            'display_order' => 1,
        ]);

        Testimonial::create([
            'customer_name' => 'David Ochieng',
            'rating' => 5,
            'review_text' => 'Professional and efficient. The staff was courteous and the automated cleaning process is impressive. Will definitely use again.',
            'service_id' => $carpetCleaning->id,
            'location_id' => $nairobi->id,
            'is_approved' => true,
            'featured' => true,
            'display_order' => 2,
        ]);

        Testimonial::create([
            'customer_name' => 'Grace Muthoni',
            'rating' => 5,
            'review_text' => 'Best carpet cleaning service in Nairobi! Fair prices and excellent results. My carpets have never looked better.',
            'service_id' => $carpetCleaning->id,
            'location_id' => $nairobi->id,
            'is_approved' => true,
            'display_order' => 3,
        ]);

        // Create FAQs
        FAQ::create([
            'question' => 'How long does the carpet cleaning process take?',
            'answer' => 'Our standard process includes a 24-hour drying period. You can drop off your carpet and pick it up the next day, fully cleaned and dried.',
            'category' => 'General',
            'is_active' => true,
            'display_order' => 1,
        ]);

        FAQ::create([
            'question' => 'What size carpets do you clean?',
            'answer' => 'We clean carpets of all sizes, from small bedroom carpets to large commercial carpets. Our pricing is based on carpet size and condition.',
            'category' => 'Services',
            'is_active' => true,
            'display_order' => 2,
        ]);

        FAQ::create([
            'question' => 'Do you offer pick-up and delivery services?',
            'answer' => 'Currently, we operate on a drop-off and pick-up basis at our Lang\'ata location. Pick-up and delivery services may be available for large orders.',
            'category' => 'Services',
            'is_active' => true,
            'display_order' => 3,
        ]);

        FAQ::create([
            'question' => 'What cleaning methods do you use?',
            'answer' => 'We use state-of-the-art automated machinery that deep cleans carpets using eco-friendly detergents. Our process is safe for all carpet types and removes dirt, stains, and odors.',
            'category' => 'Process',
            'is_active' => true,
            'display_order' => 4,
        ]);

        FAQ::create([
            'question' => 'What are your operating hours?',
            'answer' => 'We are open 7 days a week from 6:30 AM to 8:00 PM at our Nairobi Lang\'ata location.',
            'category' => 'General',
            'is_active' => true,
            'display_order' => 5,
        ]);

        FAQ::create([
            'question' => 'Do you handle pet stains and odors?',
            'answer' => 'Yes! We offer specialized treatment for pet-related stains and odors. Our automated cleaning process effectively removes pet hair, stains, and odors.',
            'category' => 'Services',
            'is_active' => true,
            'display_order' => 6,
        ]);
    }
}
