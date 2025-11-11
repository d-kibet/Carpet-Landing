<x-layout.app-layout>
    <x-slot name="title">{{ $service->seo_title ?? $service->name . ' - Raha Express Automated Carpet Wash' }}</x-slot>
    <x-slot name="description">{{ $service->seo_description ?? $service->short_description }}</x-slot>

    <!-- Service Hero with Water Animation -->
    <section class="relative bg-gradient-to-br from-primary-600 via-primary-700 to-primary-900 text-white py-24 overflow-hidden min-h-[500px]">
        <!-- Animated Bubbles Container -->
        <div class="bubble-container">
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
        </div>

        <!-- Water Wave Animation -->
        <div class="water-wave"></div>

        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-black opacity-20"></div>

        <!-- Decorative Floating Elements -->
        <div class="absolute top-10 right-10 w-32 h-32 bg-white opacity-5 rounded-full animate-gentle-float"></div>
        <div class="absolute bottom-20 left-20 w-40 h-40 bg-accent-400 opacity-10 rounded-full animate-gentle-float delay-300"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10">
            <div class="max-w-4xl">
                <div class="inline-flex items-center gap-2 mb-6 animate-fade-in-up">
                    <a href="/" class="text-primary-200 hover:text-white transition-colors">Home</a>
                    <svg class="w-4 h-4 text-primary-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="text-primary-100">{{ $service->name }}</span>
                </div>
                <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight animate-fade-in-up delay-200">
                    {{ $service->name }}
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-primary-100 leading-relaxed animate-fade-in-up delay-300">
                    {{ $service->short_description }}
                </p>
                <div class="flex flex-col sm:flex-row gap-4 animate-fade-in-up delay-400">
                    <a href="/quote?service={{ $service->slug }}" class="btn btn-accent text-lg px-8 py-4 animate-pulse-glow">
                        Get a Quote
                    </a>
                    <a href="tel:0114440444" class="btn btn-outline border-white text-white hover:bg-white hover:text-primary-700 text-lg px-8 py-4">
                        Call: 0114440444
                    </a>
                </div>
            </div>
        </div>

        <!-- Decorative Wave -->
        <div class="absolute bottom-0 left-0 right-0 z-20">
            <svg class="w-full h-16 text-white" preserveAspectRatio="none" viewBox="0 0 1200 120" fill="currentColor">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"></path>
            </svg>
        </div>
    </section>

    <!-- Service Description with Enhanced Visibility -->
    @if($service->description)
    <section class="py-24 bg-white relative overflow-hidden">
        <!-- Decorative floating elements -->
        <div class="absolute top-10 left-10 w-32 h-32 bg-primary-100 opacity-20 rounded-full animate-gentle-float"></div>
        <div class="absolute bottom-20 right-20 w-40 h-40 bg-accent-100 opacity-20 rounded-full animate-gentle-float delay-300"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-5xl mx-auto">
                <div class="relative overflow-hidden rounded-2xl shadow-2xl animate-fade-in-up">
                    <!-- Gradient border effect -->
                    <div class="absolute inset-0 bg-gradient-to-br from-primary-500 via-accent-500 to-secondary-500 opacity-10"></div>

                    <!-- Content card -->
                    <div class="relative bg-white p-12 md:p-16">
                        <div class="absolute top-0 left-0 w-20 h-20 bg-gradient-to-br from-primary-500 to-accent-500 opacity-10 rounded-br-full"></div>
                        <div class="absolute bottom-0 right-0 w-24 h-24 bg-gradient-to-tl from-accent-500 to-secondary-500 opacity-10 rounded-tl-full"></div>

                        <p class="text-xl md:text-2xl text-gray-800 leading-relaxed relative z-10">
                            {{ $service->description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- What's Included - Enhanced Cards -->
    <section class="py-24 bg-gradient-to-br from-white via-stone-50 to-gray-50 relative overflow-hidden">
        <!-- Floating decorative elements -->
        <div class="absolute top-20 left-10 w-24 h-24 bg-primary-200 opacity-10 rounded-full animate-gentle-float"></div>
        <div class="absolute bottom-40 right-20 w-32 h-32 bg-accent-300 opacity-10 rounded-full animate-gentle-float delay-200"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 animate-fade-in-up">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">What's Included</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Every {{ strtolower($service->name) }} service includes these essential features
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @if($service->slug === 'carpet-cleaning')
                    <!-- Deep Cleaning -->
                    <div class="group relative overflow-hidden rounded-2xl shadow-xl transform transition-all duration-500 hover:scale-105 hover:shadow-2xl animate-fade-in-up">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-600 to-blue-800"></div>
                        <div class="shimmer-overlay opacity-20"></div>
                        <div class="relative p-8 text-white">
                            <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold mb-3 drop-shadow-lg">Deep Cleaning</h3>
                            <p class="text-blue-100 leading-relaxed drop-shadow">
                                Automated machinery removes embedded dirt, stains, and allergens from deep within carpet fibers.
                            </p>
                        </div>
                    </div>

                    <!-- Eco-Friendly Detergents -->
                    <div class="group relative overflow-hidden rounded-2xl shadow-xl transform transition-all duration-500 hover:scale-105 hover:shadow-2xl animate-fade-in-up delay-100">
                        <div class="absolute inset-0 bg-gradient-to-br from-emerald-600 to-teal-700"></div>
                        <div class="shimmer-overlay opacity-20"></div>
                        <div class="relative p-8 text-white">
                            <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold mb-3 drop-shadow-lg">Eco-Friendly</h3>
                            <p class="text-emerald-100 leading-relaxed drop-shadow">
                                Safe, biodegradable detergents that are gentle on carpets and safe for your family and pets.
                            </p>
                        </div>
                    </div>

                    <!-- Complete Drying -->
                    <div class="group relative overflow-hidden rounded-2xl shadow-xl transform transition-all duration-500 hover:scale-105 hover:shadow-2xl animate-fade-in-up delay-200">
                        <div class="absolute inset-0 bg-gradient-to-br from-amber-500 to-orange-600"></div>
                        <div class="shimmer-overlay opacity-30"></div>
                        <div class="relative p-8 text-white">
                            <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold mb-3 drop-shadow-lg">Complete Drying</h3>
                            <p class="text-orange-100 leading-relaxed drop-shadow">
                                Advanced drying process ensures your carpets are completely dry and ready to use in 24 hours.
                            </p>
                        </div>
                    </div>

                    <!-- Stain Treatment -->
                    <div class="group relative overflow-hidden rounded-2xl shadow-xl transform transition-all duration-500 hover:scale-105 hover:shadow-2xl animate-fade-in-up delay-300">
                        <div class="absolute inset-0 bg-gradient-to-br from-purple-600 to-indigo-700"></div>
                        <div class="shimmer-overlay opacity-20"></div>
                        <div class="relative p-8 text-white">
                            <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold mb-3 drop-shadow-lg">Stain Treatment</h3>
                            <p class="text-purple-100 leading-relaxed drop-shadow">
                                Specialized treatment for tough stains including wine, coffee, pet accidents, and more.
                            </p>
                        </div>
                    </div>

                    <!-- Odor Removal -->
                    <div class="group relative overflow-hidden rounded-2xl shadow-xl transform transition-all duration-500 hover:scale-105 hover:shadow-2xl animate-fade-in-up delay-400">
                        <div class="absolute inset-0 bg-gradient-to-br from-pink-600 to-rose-700"></div>
                        <div class="shimmer-overlay opacity-20"></div>
                        <div class="relative p-8 text-white">
                            <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold mb-3 drop-shadow-lg">Odor Removal</h3>
                            <p class="text-pink-100 leading-relaxed drop-shadow">
                                Eliminates unpleasant odors leaving your carpets smelling fresh and clean.
                            </p>
                        </div>
                    </div>

                    <!-- Quality Inspection -->
                    <div class="group relative overflow-hidden rounded-2xl shadow-xl transform transition-all duration-500 hover:scale-105 hover:shadow-2xl animate-fade-in-up delay-500">
                        <div class="absolute inset-0 bg-gradient-to-br from-cyan-600 to-blue-700"></div>
                        <div class="shimmer-overlay opacity-20"></div>
                        <div class="relative p-8 text-white">
                            <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold mb-3 drop-shadow-lg">Quality Check</h3>
                            <p class="text-cyan-100 leading-relaxed drop-shadow">
                                Every carpet is inspected before and after cleaning to ensure the highest quality results.
                            </p>
                        </div>
                    </div>
                @else
                    <!-- Generic features for other services -->
                    <div class="group relative overflow-hidden rounded-2xl shadow-xl transform transition-all duration-500 hover:scale-105 hover:shadow-2xl animate-fade-in-up">
                        <div class="absolute inset-0 bg-gradient-to-br from-primary-600 to-primary-800"></div>
                        <div class="shimmer-overlay opacity-20"></div>
                        <div class="relative p-8 text-white">
                            <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold mb-3 drop-shadow-lg">Professional Service</h3>
                            <p class="text-primary-100 leading-relaxed drop-shadow">
                                Expert care using industry-leading equipment and techniques.
                            </p>
                        </div>
                    </div>

                    <div class="group relative overflow-hidden rounded-2xl shadow-xl transform transition-all duration-500 hover:scale-105 hover:shadow-2xl animate-fade-in-up delay-200">
                        <div class="absolute inset-0 bg-gradient-to-br from-secondary-600 to-secondary-800"></div>
                        <div class="shimmer-overlay opacity-20"></div>
                        <div class="relative p-8 text-white">
                            <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold mb-3 drop-shadow-lg">Fast Turnaround</h3>
                            <p class="text-secondary-100 leading-relaxed drop-shadow">
                                Quick, efficient service to get your items back to you as soon as possible.
                            </p>
                        </div>
                    </div>

                    <div class="group relative overflow-hidden rounded-2xl shadow-xl transform transition-all duration-500 hover:scale-105 hover:shadow-2xl animate-fade-in-up delay-400">
                        <div class="absolute inset-0 bg-gradient-to-br from-accent-500 to-accent-700"></div>
                        <div class="shimmer-overlay opacity-30"></div>
                        <div class="relative p-8 text-white">
                            <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold mb-3 drop-shadow-lg">Quality Assured</h3>
                            <p class="text-accent-100 leading-relaxed drop-shadow">
                                We guarantee satisfaction with every service we provide.
                            </p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- Pricing Calculator -->
    @if($service->slug === 'carpet-cleaning')
    <section class="py-24 bg-gradient-to-br from-primary-50 via-white to-accent-50 relative overflow-hidden">
        <!-- Decorative elements -->
        <div class="absolute top-10 right-10 w-32 h-32 bg-primary-300 opacity-10 rounded-full animate-gentle-float"></div>
        <div class="absolute bottom-20 left-10 w-40 h-40 bg-accent-400 opacity-10 rounded-full animate-gentle-float delay-300"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-12 animate-fade-in-up">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Calculate Your Price</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Get an instant estimate for your carpet cleaning at KSh 30 per square foot
                </p>
            </div>
            <div class="max-w-4xl mx-auto animate-fade-in-up delay-200">
                <x-pricing-calculator />
            </div>
        </div>
    </section>
    @endif

    <!-- Pricing Section with Enhanced Cards -->
    @if($service->pricingItems->count() > 0)
    <section class="py-24 bg-white relative overflow-hidden">
        <!-- SVG Pattern Background -->
        <div class="absolute inset-0 opacity-[0.02]" style="background-image: url('data:image/svg+xml,%3Csvg width=\'100\' height=\'100\' viewBox=\'0 0 100 100\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3z\' fill=\'%23000000\' fill-opacity=\'1\' fill-rule=\'evenodd\'/%3E%3C/svg%3E');"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 animate-fade-in-up">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Transparent Pricing</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Simple, straightforward pricing with no hidden fees
                </p>
            </div>

            <div class="max-w-4xl mx-auto">
                <!-- Main Pricing Items -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                    @foreach($service->pricingItems->where('is_addon', false) as $index => $item)
                    <div class="group relative overflow-hidden rounded-2xl shadow-xl border-2 border-primary-200 hover:border-primary-400 transition-all duration-300 transform hover:scale-105 animate-fade-in-up" style="animation-delay: {{ $index * 100 }}ms;">
                        <!-- Gradient background on hover -->
                        <div class="absolute inset-0 bg-gradient-to-br from-primary-50 to-accent-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                        <div class="relative p-8">
                            <div class="flex justify-between items-start mb-4">
                                <div class="flex-1">
                                    <h3 class="text-2xl font-bold text-gray-900 mb-2 group-hover:text-primary-700 transition-colors">{{ $item->item_name }}</h3>
                                    @if($item->description)
                                    <p class="text-gray-600 text-sm">{{ $item->description }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="flex items-baseline gap-2">
                                <span class="text-5xl font-bold bg-gradient-to-r from-primary-600 to-accent-600 bg-clip-text text-transparent">KSh {{ number_format($item->price) }}</span>
                                @if($item->unit)
                                <span class="text-gray-500 text-lg">/ {{ str_replace('per_', '', $item->unit) }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Add-ons with Beautiful Card -->
                @if($service->pricingItems->where('is_addon', true)->count() > 0)
                <div class="relative overflow-hidden rounded-2xl shadow-2xl animate-fade-in-up delay-400">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-50 to-stone-100"></div>
                    <div class="shimmer-overlay opacity-10"></div>

                    <div class="relative p-10">
                        <h3 class="text-2xl font-bold text-gray-900 mb-8 flex items-center gap-3">
                            <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            Optional Add-ons
                        </h3>
                        <div class="space-y-6">
                            @foreach($service->pricingItems->where('is_addon', true) as $addon)
                            <div class="flex justify-between items-center p-6 bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
                                <div>
                                    <p class="font-bold text-gray-900 text-lg">{{ $addon->item_name }}</p>
                                    @if($addon->description)
                                    <p class="text-sm text-gray-600 mt-1">{{ $addon->description }}</p>
                                    @endif
                                </div>
                                <span class="text-2xl font-bold text-primary-600 whitespace-nowrap ml-4">+KSh {{ number_format($addon->price) }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif

                <div class="text-center mt-12 animate-fade-in-up delay-500">
                    <a href="/quote?service={{ $service->slug }}" class="btn btn-accent text-lg px-12 py-5 shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
                        Get Your Custom Quote
                    </a>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- Process Steps with Modern Design -->
    <section class="py-24 bg-gradient-to-br from-primary-600 via-primary-700 to-primary-900 text-white relative overflow-hidden">
        <!-- Animated background elements -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 left-10 w-32 h-32 bg-white rounded-full animate-gentle-float"></div>
            <div class="absolute bottom-20 right-20 w-40 h-40 bg-accent-300 rounded-full animate-gentle-float delay-200"></div>
            <div class="absolute top-1/2 right-1/4 w-24 h-24 bg-secondary-300 rounded-full animate-gentle-float delay-300"></div>
        </div>

        <!-- Shimmer Overlay -->
        <div class="shimmer-overlay opacity-20"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-20 animate-fade-in-up">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 drop-shadow-lg">Our Process</h2>
                <p class="text-xl text-primary-100 max-w-3xl mx-auto drop-shadow">
                    @if($service->slug === 'carpet-cleaning')
                        From drop-off to pickup, here's how we transform your carpets
                    @else
                        Simple steps to get your items professionally cleaned
                    @endif
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center group animate-fade-in-up">
                    <div class="relative inline-block mb-8">
                        <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center shadow-2xl transform group-hover:scale-110 transition-transform duration-300">
                            <span class="text-4xl font-bold text-primary-600">1</span>
                        </div>
                        <!-- Connecting line -->
                        <div class="hidden lg:block absolute top-1/2 left-full w-full h-1 bg-white/30"></div>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 drop-shadow-lg">Inspection</h3>
                    <p class="text-primary-100 leading-relaxed drop-shadow">
                        We carefully examine your items and note any special concerns or stains.
                    </p>
                </div>

                <div class="text-center group animate-fade-in-up delay-200">
                    <div class="relative inline-block mb-8">
                        <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center shadow-2xl transform group-hover:scale-110 transition-transform duration-300">
                            <span class="text-4xl font-bold text-primary-600">2</span>
                        </div>
                        <div class="hidden lg:block absolute top-1/2 left-full w-full h-1 bg-white/30"></div>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 drop-shadow-lg">Pre-Treatment</h3>
                    <p class="text-primary-100 leading-relaxed drop-shadow">
                        Specialized solutions are applied to tackle tough stains and embedded dirt.
                    </p>
                </div>

                <div class="text-center group animate-fade-in-up delay-300">
                    <div class="relative inline-block mb-8">
                        <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center shadow-2xl transform group-hover:scale-110 transition-transform duration-300">
                            <span class="text-4xl font-bold text-primary-600">3</span>
                        </div>
                        <div class="hidden lg:block absolute top-1/2 left-full w-full h-1 bg-white/30"></div>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 drop-shadow-lg">Cleaning</h3>
                    <p class="text-primary-100 leading-relaxed drop-shadow">
                        Automated machinery provides deep, thorough cleaning with precision and care.
                    </p>
                </div>

                <div class="text-center group animate-fade-in-up delay-400">
                    <div class="relative inline-block mb-8">
                        <div class="w-24 h-24 bg-gradient-to-br from-accent-400 to-accent-600 rounded-full flex items-center justify-center shadow-2xl transform group-hover:scale-110 group-hover:rotate-12 transition-all duration-300">
                            <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 drop-shadow-lg">Drying & QC</h3>
                    <p class="text-primary-100 leading-relaxed drop-shadow">
                        Complete drying followed by quality inspection before your items are ready.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section with Stunning Design -->
    <section class="py-24 bg-gradient-to-br from-accent-500 via-orange-600 to-red-600 text-white relative overflow-hidden">
        <!-- Animated floating bubbles -->
        <div class="bubble-container">
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
        </div>

        <!-- Decorative elements -->
        <div class="absolute top-10 left-10 w-40 h-40 bg-white opacity-10 rounded-full animate-gentle-float"></div>
        <div class="absolute bottom-20 right-20 w-32 h-32 bg-white opacity-10 rounded-full animate-gentle-float delay-200"></div>

        <!-- Dark overlay -->
        <div class="absolute inset-0 bg-black opacity-10"></div>

        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center z-10">
            <div class="animate-fade-in-up">
                <h2 class="text-5xl md:text-6xl font-bold mb-8 leading-tight drop-shadow-2xl">
                    Ready to Experience Professional {{ $service->name }}?
                </h2>
                <p class="text-2xl md:text-3xl mb-12 text-orange-50 drop-shadow-lg">
                    Get started today with a free quote or give us a call
                </p>
                <div class="flex flex-col sm:flex-row gap-6 justify-center mb-10">
                    <a href="/quote?service={{ $service->slug }}" class="btn bg-white text-orange-700 hover:bg-orange-50 text-xl px-12 py-6 shadow-2xl hover:shadow-3xl transform hover:scale-105 transition-all duration-300">
                        Request a Quote
                    </a>
                    <a href="tel:0114440444" class="btn btn-outline border-2 border-white text-white hover:bg-white hover:text-orange-700 text-xl px-12 py-6 shadow-2xl">
                        Call Now: 0114440444
                    </a>
                </div>
                <div class="inline-flex items-center gap-4 text-orange-100 bg-white/10 backdrop-blur-sm px-8 py-4 rounded-full drop-shadow-xl">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span class="font-semibold">Uchumi Lang'ata, Opposite Uhuru Gardens</span>
                    <span class="text-orange-200">•</span>
                    <span>Open 7 Days: 6:30 AM - 8:00 PM</span>
                </div>
            </div>
        </div>

        <!-- Wave decoration at bottom -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg class="w-full h-20 text-white" preserveAspectRatio="none" viewBox="0 0 1200 120" fill="currentColor">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"></path>
            </svg>
        </div>
    </section>
</x-layout.app-layout>
