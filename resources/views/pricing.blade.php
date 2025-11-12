<x-layout.app-layout>
    <x-slot:title>Pricing - Raha Express Carpet Wash</x-slot:title>
    <x-slot:description>Transparent pricing for carpet cleaning and laundry services. No hidden fees. Get a free quote today!</x-slot:description>

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-primary-600 via-primary-700 to-secondary-700 text-white py-12 sm:py-20">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;%3E%3Cg fill=&quot;%23ffffff&quot; fill-opacity=&quot;0.4&quot;%3E%3Cpath d=&quot;M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z&quot;/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center">
                <h1 class="text-3xl sm:text-5xl font-bold mb-4 sm:mb-6">Transparent Pricing</h1>
                <p class="text-base sm:text-xl text-primary-100 max-w-3xl mx-auto">
                    No hidden fees. No surprises. Just clean carpets and competitive prices.
                </p>
            </div>
        </div>
    </section>

    <!-- Pricing Calculator Section -->
    <section class="py-16 bg-gradient-to-b from-white to-stone-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8 sm:mb-12">
                <h2 class="text-2xl sm:text-4xl font-bold text-gray-900 mb-4">Carpet Cleaning Calculator</h2>
                <p class="text-base sm:text-lg text-gray-600">Calculate your carpet cleaning cost instantly</p>
            </div>

            <div class="max-w-3xl mx-auto">
                <x-pricing-calculator />
            </div>
        </div>
    </section>

    <!-- Services Pricing -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Services</h2>
                <p class="text-lg text-gray-600">Professional cleaning at affordable rates</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                @foreach(\App\Models\Service::where('is_active', true)->orderBy('display_order')->with('pricingItems')->get() as $service)
                    <div class="bg-gradient-to-br from-white to-stone-50 rounded-2xl shadow-xl overflow-hidden border border-gray-100">
                        <!-- Service Header -->
                        <div class="bg-gradient-to-r from-{{ $loop->even ? 'secondary' : 'primary' }}-600 to-{{ $loop->even ? 'secondary' : 'primary' }}-700 text-white p-6 sm:p-8">
                            <h3 class="text-2xl sm:text-3xl font-bold mb-3">{{ $service->name }}</h3>
                            <p class="text-sm sm:text-base text-{{ $loop->even ? 'secondary' : 'primary' }}-100">{{ $service->short_description }}</p>
                        </div>

                        <!-- Pricing Items -->
                        <div class="p-6 sm:p-8">
                            @if($service->pricingItems->count() > 0)
                                <div class="space-y-4">
                                    @foreach($service->pricingItems->where('is_addon', false) as $item)
                                        <div class="flex items-center justify-between py-3 border-b border-gray-200 last:border-0">
                                            <div class="flex-1">
                                                <h4 class="font-semibold text-gray-900">{{ $item->item_name }}</h4>
                                                @if($item->description)
                                                    <p class="text-sm text-gray-600 mt-1">{{ $item->description }}</p>
                                                @endif
                                            </div>
                                            <div class="ml-4 text-right">
                                                <p class="text-2xl font-bold text-{{ $loop->parent->even ? 'secondary' : 'primary' }}-600">
                                                    KSh {{ number_format($item->price) }}
                                                </p>
                                                @if($item->unit)
                                                    <p class="text-xs text-gray-500">{{ str_replace('_', ' ', $item->unit) }}</p>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach

                                    @if($service->pricingItems->where('is_addon', true)->count() > 0)
                                        <div class="mt-6 pt-6 border-t border-gray-300">
                                            <h4 class="font-semibold text-gray-900 mb-3">Add-On Services</h4>
                                            <div class="space-y-3">
                                                @foreach($service->pricingItems->where('is_addon', true) as $addon)
                                                    <div class="flex items-center justify-between">
                                                        <span class="text-sm text-gray-700">{{ $addon->item_name }}</span>
                                                        <span class="text-sm font-semibold text-gray-900">+KSh {{ number_format($addon->price) }}</span>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @else
                                <p class="text-gray-600 text-center py-8">Contact us for pricing details</p>
                            @endif

                            <div class="mt-8">
                                <a href="{{ route('quote.create') }}"
                                   class="btn btn-{{ $loop->even ? 'secondary' : 'primary' }} w-full text-center justify-center">
                                    Get a Quote
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-16 bg-gradient-to-b from-stone-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Why Choose Raha Express?</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white rounded-xl p-6 shadow-lg text-center">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Transparent Pricing</h3>
                    <p class="text-gray-600 text-sm">No hidden fees or surprise charges</p>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-lg text-center">
                    <div class="w-16 h-16 bg-secondary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-secondary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">24-Hour Turnaround</h3>
                    <p class="text-gray-600 text-sm">Fast service without compromising quality</p>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-lg text-center">
                    <div class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-accent-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Quality Guarantee</h3>
                    <p class="text-gray-600 text-sm">100% satisfaction or your money back</p>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-lg text-center">
                    <div class="w-16 h-16 bg-trust-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-trust-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Automated Facility</h3>
                    <p class="text-gray-600 text-sm">State-of-the-art cleaning technology</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-primary-600 to-secondary-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-bold mb-4">Ready to Get Started?</h2>
            <p class="text-xl text-primary-100 mb-8 max-w-2xl mx-auto">
                Request a free quote today and experience the Raha Express difference
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('quote.create') }}" class="btn bg-white text-primary-700 hover:bg-gray-100 px-8 py-4 text-lg">
                    Get Free Quote
                </a>
                <a href="tel:0114440444" class="btn btn-outline border-2 border-white text-white hover:bg-white hover:text-primary-700 px-8 py-4 text-lg">
                    Call: 0114440444
                </a>
            </div>
        </div>
    </section>
</x-layout.app-layout>
