<?php

namespace App\Filament\Widgets;

use App\Models\FAQ;
use App\Models\GalleryItem;
use App\Models\Location;
use App\Models\QuoteRequest;
use App\Models\Service;
use App\Models\Testimonial;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Quote Requests', QuoteRequest::count())
                ->description('Total quote requests received')
                ->descriptionIcon('heroicon-o-envelope')
                ->color('primary')
                ->chart([7, 12, 15, 10, 18, 22, QuoteRequest::count()]),

            Stat::make('Testimonials', Testimonial::count())
                ->description('Customer testimonials')
                ->descriptionIcon('heroicon-o-chat-bubble-left-right')
                ->color('success'),

            Stat::make('Services', Service::count())
                ->description('Available services')
                ->descriptionIcon('heroicon-o-sparkles')
                ->color('info'),

            Stat::make('Locations', Location::count())
                ->description('Service locations')
                ->descriptionIcon('heroicon-o-map-pin')
                ->color('warning'),

            Stat::make('Gallery Items', GalleryItem::count())
                ->description('Gallery photos')
                ->descriptionIcon('heroicon-o-photo')
                ->color('success'),

            Stat::make('FAQs', FAQ::count())
                ->description('Frequently asked questions')
                ->descriptionIcon('heroicon-o-question-mark-circle')
                ->color('gray'),
        ];
    }
}
