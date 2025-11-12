<x-layout.app-layout>
    <!-- Hero Section with Animated Water Effects -->
    <section class="relative bg-gradient-to-br from-primary-600 to-primary-800 text-white overflow-hidden min-h-[500px] md:min-h-[600px]">
        <!-- Background Image Overlay for Carpet Washing Machinery -->
        @php
            $heroBackground = $settings['hero_background_image'] ?? null;
            if ($heroBackground && !str_starts_with($heroBackground, 'http') && !str_starts_with($heroBackground, '/')) {
                $heroBackground = \Illuminate\Support\Facades\Storage::url($heroBackground);
            }
        @endphp
        @if($heroBackground)
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-10" style="background-image: url('{{ $heroBackground }}');"></div>
        @endif

        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-black opacity-30"></div>

        <!-- Animated Bubbles Container -->
        <div class="bubble-container">
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
        </div>

        <!-- Water Wave Animation -->
        <div class="water-wave"></div>

        <!-- Hero Content -->
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24 md:py-32 z-10">
            <div class="max-w-3xl">
                <h1 class="text-3xl sm:text-4xl md:text-6xl font-bold mb-4 sm:mb-6 leading-tight animate-fade-in-up">
                    Professional Carpet Cleaning with
                    <span class="text-accent-300 animate-gentle-float inline-block">24-Hour Turnaround</span>
                </h1>
                <p class="text-lg sm:text-xl md:text-2xl mb-6 sm:mb-8 text-primary-100 animate-fade-in-up delay-200">
                    State-of-the-art automated machinery. Expert care. Carpets that look brand new.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 animate-fade-in-up delay-300">
                    <a href="/quote" class="btn btn-accent text-lg px-8 py-4 animate-pulse-glow">
                        Get Free Quote
                    </a>
                    <a href="tel:0114440444" class="btn btn-outline border-white text-white hover:bg-white hover:text-primary-700 text-lg px-8 py-4">
                        Call 0114440444
                    </a>
                </div>
                <div class="mt-8 flex flex-wrap items-center gap-6 text-sm animate-fade-in-up delay-400">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-accent-300" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>24-Hour Turnaround</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-accent-300" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Automated Technology</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-accent-300" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Fair Pricing</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Decorative Wave -->
        <div class="absolute bottom-0 left-0 right-0 z-20">
            <svg class="w-full h-16 text-stone-50" preserveAspectRatio="none" viewBox="0 0 1200 120" fill="currentColor">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"></path>
            </svg>
        </div>
    </section>

    <!-- Value Propositions with Carpet Background -->
    <section class="py-20 relative overflow-hidden bg-gradient-to-br from-primary-50 via-white to-accent-50">
        <!-- Decorative carpet pattern background -->
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23000000\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Fast Turnaround -->
                <div class="group relative overflow-hidden rounded-2xl shadow-xl transform transition-all duration-500 hover:scale-105 hover:shadow-2xl animate-fade-in-up">
                    <!-- Gradient Background -->
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-600 to-blue-800"></div>
                    <!-- Shimmer Effect -->
                    <div class="shimmer-overlay opacity-20"></div>

                    <div class="relative p-10 text-center text-white">
                        <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-3xl font-bold mb-4 drop-shadow-lg">24-Hour Service</h3>
                        <p class="text-blue-100 text-lg leading-relaxed drop-shadow">
                            Drop off your carpets today, pick them up tomorrow - completely cleaned, dried, and ready to use.
                        </p>
                    </div>
                </div>

                <!-- Advanced Machinery -->
                <div class="group relative overflow-hidden rounded-2xl shadow-xl transform transition-all duration-500 hover:scale-105 hover:shadow-2xl animate-fade-in-up delay-200">
                    <!-- Gradient Background -->
                    <div class="absolute inset-0 bg-gradient-to-br from-amber-500 to-orange-600"></div>
                    <!-- Shimmer Effect -->
                    <div class="shimmer-overlay opacity-30"></div>

                    <div class="relative p-10 text-center text-white">
                        <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300 group-hover:rotate-12">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                        <h3 class="text-3xl font-bold mb-4 drop-shadow-lg">Advanced Machinery</h3>
                        <p class="text-orange-100 text-lg leading-relaxed drop-shadow">
                            State-of-the-art automated equipment ensures deep cleaning while being gentle on your carpets.
                        </p>
                    </div>
                </div>

                <!-- Fair Pricing -->
                <div class="group relative overflow-hidden rounded-2xl shadow-xl transform transition-all duration-500 hover:scale-105 hover:shadow-2xl animate-fade-in-up delay-400">
                    <!-- Gradient Background -->
                    <div class="absolute inset-0 bg-gradient-to-br from-emerald-600 to-teal-700"></div>
                    <!-- Shimmer Effect -->
                    <div class="shimmer-overlay opacity-20"></div>

                    <div class="relative p-10 text-center text-white">
                        <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-3xl font-bold mb-4 drop-shadow-lg">Fair Pricing</h3>
                        <p class="text-emerald-100 text-lg leading-relaxed drop-shadow">
                            Transparent pricing starting from KSh 800. No hidden fees, no surprises - just clean carpets.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview with Enhanced Visibility -->
    <section class="py-20 relative overflow-hidden">
        <!-- Dynamic gradient background -->
        <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900"></div>
        <!-- Carpet pattern overlay -->
        <div class="absolute inset-0 opacity-5" style="background-image: url('data:image/svg+xml,%3Csvg width=\'100\' height=\'100\' viewBox=\'0 0 100 100\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z\' fill=\'%23ffffff\' fill-opacity=\'1\' fill-rule=\'evenodd\'/%3E%3C/svg%3E');"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 animate-fade-in-up">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Our Services</h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Professional cleaning services with the quality and care your carpets deserve
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 max-w-6xl mx-auto">
                <!-- Carpet Cleaning -->
                <div class="group relative overflow-hidden rounded-3xl shadow-2xl transform transition-all duration-500 hover:scale-105 hover:shadow-blue-500/50 animate-slide-in-left">
                    <!-- Background with gradient -->
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-600 via-blue-700 to-indigo-800"></div>

                    <!-- Animated water bubbles -->
                    <div class="absolute inset-0 opacity-20">
                        <div class="bubble-container">
                            <div class="bubble"></div>
                            <div class="bubble"></div>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="relative p-10 text-white">
                        <div class="flex items-start gap-6 mb-6">
                            <div class="w-20 h-20 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center flex-shrink-0 shadow-xl group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-3xl font-bold mb-3 drop-shadow-lg">Carpet Cleaning</h3>
                                <p class="text-blue-100 text-lg leading-relaxed mb-6 drop-shadow">
                                    Deep cleaning for all carpet types using eco-friendly detergents. Removes dirt, stains, and odors effectively.
                                </p>
                            </div>
                        </div>

                        <ul class="space-y-4 mb-8">
                            <li class="flex items-center gap-3 text-white text-lg">
                                <svg class="w-6 h-6 text-blue-200 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="drop-shadow">All carpet sizes accepted</span>
                            </li>
                            <li class="flex items-center gap-3 text-white text-lg">
                                <svg class="w-6 h-6 text-blue-200 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="drop-shadow">Pet stain & odor treatment available</span>
                            </li>
                            <li class="flex items-center gap-3 text-white text-lg">
                                <svg class="w-6 h-6 text-blue-200 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="drop-shadow font-semibold">Pricing from KSh 800</span>
                            </li>
                        </ul>

                        <a href="{{ route('service.show', 'carpet-cleaning') }}" class="inline-flex items-center gap-2 bg-white text-blue-700 px-8 py-4 rounded-xl font-bold text-lg shadow-xl hover:bg-blue-50 hover:scale-105 transition-all duration-300 group-hover:shadow-2xl">
                            Learn More
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                    </div>

                    <!-- Shimmer effect -->
                    <div class="shimmer-overlay opacity-30"></div>
                </div>

                <!-- Laundry Services -->
                <div class="group relative overflow-hidden rounded-3xl shadow-2xl transform transition-all duration-500 hover:scale-105 hover:shadow-amber-500/50 animate-slide-in-right">
                    <!-- Background with gradient -->
                    <div class="absolute inset-0 bg-gradient-to-br from-amber-500 via-orange-600 to-red-700"></div>

                    <!-- Animated floating elements -->
                    <div class="absolute top-10 right-10 w-24 h-24 bg-white/10 rounded-full animate-gentle-float"></div>
                    <div class="absolute bottom-20 left-10 w-32 h-32 bg-white/10 rounded-full animate-gentle-float delay-300"></div>

                    <!-- Content -->
                    <div class="relative p-10 text-white">
                        <div class="flex items-start gap-6 mb-6">
                            <div class="w-20 h-20 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center flex-shrink-0 shadow-xl group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-3xl font-bold mb-3 drop-shadow-lg">Laundry Services</h3>
                                <p class="text-orange-100 text-lg leading-relaxed mb-6 drop-shadow">
                                    Complete laundry services including washing, drying, folding, and ironing for all fabric types.
                                </p>
                            </div>
                        </div>

                        <ul class="space-y-4 mb-8">
                            <li class="flex items-center gap-3 text-white text-lg">
                                <svg class="w-6 h-6 text-orange-200 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="drop-shadow">Wash & fold service</span>
                            </li>
                            <li class="flex items-center gap-3 text-white text-lg">
                                <svg class="w-6 h-6 text-orange-200 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="drop-shadow">Professional ironing available</span>
                            </li>
                            <li class="flex items-center gap-3 text-white text-lg">
                                <svg class="w-6 h-6 text-orange-200 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="drop-shadow font-semibold">Fast turnaround time</span>
                            </li>
                        </ul>

                        <a href="{{ route('service.show', 'laundry-services') }}" class="inline-flex items-center gap-2 bg-white text-orange-700 px-8 py-4 rounded-xl font-bold text-lg shadow-xl hover:bg-orange-50 hover:scale-105 transition-all duration-300 group-hover:shadow-2xl">
                            Learn More
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                    </div>

                    <!-- Shimmer effect -->
                    <div class="shimmer-overlay opacity-30"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Before & After Showcase -->
    <section class="py-20 bg-gradient-to-br from-gray-900 to-gray-800 relative overflow-hidden">
        <!-- Animated Water Effects -->
        <div class="absolute inset-0 opacity-5">
            <div class="bubble-container">
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-4 animate-fade-in-up">
                    The Transformation is Remarkable
                </h2>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto animate-fade-in-up delay-200">
                    See how our advanced machinery brings carpets back to life
                </p>
            </div>

            <!-- Before/After Grid -->
            @if($beforeAfters->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 max-w-5xl mx-auto">
                    @foreach($beforeAfters as $beforeAfter)
                        <!-- Before Image -->
                        <div class="group animate-slide-in-left">
                            <div class="relative rounded-2xl overflow-hidden shadow-2xl transform transition-transform duration-300 group-hover:scale-105">
                                <img
                                    src="{{ Storage::url($beforeAfter->before_image) }}"
                                    alt="Before: {{ $beforeAfter->title }}"
                                    class="w-full aspect-[4/3] object-cover"
                                >
                                <div class="absolute top-4 left-4 bg-red-600 text-white px-4 py-2 rounded-lg font-bold shadow-lg">
                                    BEFORE
                                </div>
                                @if($beforeAfter->description)
                                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-4">
                                        <p class="text-white text-sm">{{ $beforeAfter->description }}</p>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <!-- After Image -->
                        <div class="group animate-slide-in-right">
                            <div class="relative rounded-2xl overflow-hidden shadow-2xl transform transition-transform duration-300 group-hover:scale-105">
                                <img
                                    src="{{ Storage::url($beforeAfter->after_image) }}"
                                    alt="After: {{ $beforeAfter->title }}"
                                    class="w-full aspect-[4/3] object-cover"
                                >
                                <!-- Shimmer overlay -->
                                <div class="absolute inset-0 shimmer-overlay pointer-events-none"></div>
                                <div class="absolute top-4 right-4 bg-green-600 text-white px-4 py-2 rounded-lg font-bold shadow-lg">
                                    AFTER
                                </div>
                                @if($beforeAfter->title)
                                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-4">
                                        <p class="text-white font-semibold">{{ $beforeAfter->title }}</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <!-- Placeholder when no before/after images uploaded yet -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 max-w-5xl mx-auto">
                    <div class="group animate-slide-in-left">
                        <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                            <div class="aspect-[4/3] bg-gradient-to-br from-gray-700 to-gray-600 flex items-center justify-center">
                                <div class="text-center text-white p-8">
                                    <p class="text-2xl font-bold mb-2">BEFORE</p>
                                    <p class="text-sm text-gray-300">Upload before/after photos in admin</p>
                                </div>
                            </div>
                            <div class="absolute top-4 left-4 bg-red-600 text-white px-4 py-2 rounded-lg font-bold shadow-lg">
                                BEFORE
                            </div>
                        </div>
                    </div>

                    <div class="group animate-slide-in-right">
                        <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                            <div class="aspect-[4/3] bg-gradient-to-br from-primary-400 to-primary-300 flex items-center justify-center">
                                <div class="shimmer-overlay"></div>
                                <div class="text-center text-white p-8 relative z-10">
                                    <p class="text-2xl font-bold mb-2">AFTER</p>
                                    <p class="text-sm">Upload before/after photos in admin</p>
                                </div>
                            </div>
                            <div class="absolute inset-0 shimmer-overlay pointer-events-none"></div>
                            <div class="absolute top-4 right-4 bg-green-600 text-white px-4 py-2 rounded-lg font-bold shadow-lg">
                                AFTER
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Results Stats -->
            <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto animate-fade-in-up delay-400">
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold text-accent-400 mb-2">99%</div>
                    <div class="text-gray-300">Stain Removal Rate</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold text-accent-400 mb-2">24hrs</div>
                    <div class="text-gray-300">Turnaround Time</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold text-accent-400 mb-2">100%</div>
                    <div class="text-gray-300">Customer Satisfaction</div>
                </div>
            </div>

            <!-- CTA -->
            <div class="text-center mt-12 animate-fade-in-up delay-500">
                <a href="/quote" class="btn bg-accent-500 text-white hover:bg-accent-600 text-lg px-8 py-4 shadow-xl">
                    Transform Your Carpets Today
                </a>
            </div>
        </div>
    </section>

    <!-- Process Timeline with Enhanced Visibility -->
    <section class="py-20 relative overflow-hidden bg-gradient-to-br from-white via-blue-50 to-indigo-50">
        <!-- Decorative background -->
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23000000\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 animate-fade-in-up">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">How It Works</h2>
                <p class="text-xl text-gray-700 max-w-2xl mx-auto">
                    Simple, efficient process that gets your carpets cleaned in 24 hours
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 relative">
                <!-- Connecting Line (Desktop only) -->
                <div class="hidden lg:block absolute top-16 left-0 right-0 h-1 bg-gradient-to-r from-blue-500 via-indigo-500 to-green-500 opacity-30" style="width: calc(100% - 10rem); margin: 0 5rem;"></div>

                <!-- Step 1: Drop Off -->
                <div class="group relative animate-fade-in-up">
                    <div class="relative overflow-hidden rounded-2xl shadow-xl transform transition-all duration-500 hover:scale-105 hover:shadow-2xl">
                        <!-- Gradient Background -->
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-600 via-blue-700 to-indigo-700"></div>
                        <!-- Shimmer Effect -->
                        <div class="shimmer-overlay opacity-20"></div>

                        <div class="relative p-8 text-center text-white">
                            <!-- Step Number Badge -->
                            <div class="w-24 h-24 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mx-auto mb-6 shadow-2xl ring-4 ring-white/30 group-hover:scale-110 group-hover:rotate-12 transition-all duration-300">
                                <span class="text-5xl font-bold text-white drop-shadow-lg">1</span>
                            </div>

                            <h3 class="text-2xl font-bold mb-4 drop-shadow-lg">Drop Off</h3>
                            <p class="text-blue-100 text-base leading-relaxed drop-shadow">
                                Bring your carpets to our Lang'ata location. We're open 6:30 AM - 8:00 PM daily.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Step 2: Wash -->
                <div class="group relative animate-fade-in-up delay-200">
                    <div class="relative overflow-hidden rounded-2xl shadow-xl transform transition-all duration-500 hover:scale-105 hover:shadow-2xl">
                        <!-- Gradient Background -->
                        <div class="absolute inset-0 bg-gradient-to-br from-indigo-600 via-purple-600 to-indigo-700"></div>
                        <!-- Animated Bubbles -->
                        <div class="absolute inset-0 opacity-20">
                            <div class="bubble-container">
                                <div class="bubble"></div>
                                <div class="bubble"></div>
                            </div>
                        </div>
                        <!-- Shimmer Effect -->
                        <div class="shimmer-overlay opacity-20"></div>

                        <div class="relative p-8 text-center text-white">
                            <!-- Step Number Badge -->
                            <div class="w-24 h-24 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mx-auto mb-6 shadow-2xl ring-4 ring-white/30 group-hover:scale-110 group-hover:rotate-12 transition-all duration-300">
                                <span class="text-5xl font-bold text-white drop-shadow-lg">2</span>
                            </div>

                            <h3 class="text-2xl font-bold mb-4 drop-shadow-lg">Wash</h3>
                            <p class="text-purple-100 text-base leading-relaxed drop-shadow">
                                Our automated machinery deep cleans your carpets using eco-friendly detergents.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Step 3: Dry -->
                <div class="group relative animate-fade-in-up delay-300">
                    <div class="relative overflow-hidden rounded-2xl shadow-xl transform transition-all duration-500 hover:scale-105 hover:shadow-2xl">
                        <!-- Gradient Background -->
                        <div class="absolute inset-0 bg-gradient-to-br from-violet-600 via-fuchsia-600 to-violet-700"></div>
                        <!-- Floating Elements -->
                        <div class="absolute top-4 right-4 w-16 h-16 bg-white/10 rounded-full animate-gentle-float"></div>
                        <div class="absolute bottom-6 left-6 w-12 h-12 bg-white/10 rounded-full animate-gentle-float delay-300"></div>
                        <!-- Shimmer Effect -->
                        <div class="shimmer-overlay opacity-20"></div>

                        <div class="relative p-8 text-center text-white">
                            <!-- Step Number Badge -->
                            <div class="w-24 h-24 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mx-auto mb-6 shadow-2xl ring-4 ring-white/30 group-hover:scale-110 group-hover:rotate-12 transition-all duration-300">
                                <span class="text-5xl font-bold text-white drop-shadow-lg">3</span>
                            </div>

                            <h3 class="text-2xl font-bold mb-4 drop-shadow-lg">Dry</h3>
                            <p class="text-fuchsia-100 text-base leading-relaxed drop-shadow">
                                Advanced drying technology ensures your carpets are completely dry in 24 hours.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Step 4: Pick Up -->
                <div class="group relative animate-fade-in-up delay-400">
                    <div class="relative overflow-hidden rounded-2xl shadow-xl transform transition-all duration-500 hover:scale-105 hover:shadow-2xl">
                        <!-- Gradient Background -->
                        <div class="absolute inset-0 bg-gradient-to-br from-green-600 via-emerald-600 to-teal-700"></div>
                        <!-- Success Sparkles -->
                        <div class="absolute top-8 right-8 w-3 h-3 bg-white rounded-full animate-ping"></div>
                        <div class="absolute bottom-12 left-8 w-2 h-2 bg-white rounded-full animate-ping" style="animation-delay: 0.5s;"></div>
                        <!-- Shimmer Effect -->
                        <div class="shimmer-overlay opacity-30"></div>

                        <div class="relative p-8 text-center text-white">
                            <!-- Success Checkmark Badge -->
                            <div class="w-24 h-24 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mx-auto mb-6 shadow-2xl ring-4 ring-white/30 group-hover:scale-110 transition-all duration-300">
                                <svg class="w-12 h-12 text-white drop-shadow-lg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>

                            <h3 class="text-2xl font-bold mb-4 drop-shadow-lg">Pick Up</h3>
                            <p class="text-green-100 text-base leading-relaxed drop-shadow">
                                Collect your fresh, clean carpets the next day - ready to use immediately!
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Button -->
            <div class="text-center mt-16 animate-fade-in-up delay-500">
                <a href="/quote" class="inline-flex items-center gap-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white text-xl font-bold px-10 py-5 rounded-2xl shadow-2xl hover:from-blue-700 hover:to-indigo-700 hover:scale-105 transition-all duration-300 animate-pulse-glow">
                    Start Your Order Today
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Customer Appreciation Video Section -->
    <section class="py-20 bg-gradient-to-br from-primary-600 to-primary-800 relative overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 left-10 w-32 h-32 bg-white rounded-full animate-gentle-float"></div>
            <div class="absolute bottom-20 right-20 w-40 h-40 bg-accent-300 rounded-full animate-gentle-float delay-200"></div>
            <div class="absolute top-1/2 right-1/4 w-24 h-24 bg-secondary-300 rounded-full animate-gentle-float delay-300"></div>
        </div>

        <!-- Shimmer Overlay -->
        <div class="shimmer-overlay opacity-20"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-4 animate-fade-in-up">
                    See Our Machinery in Action
                </h2>
                <p class="text-xl text-primary-100 max-w-2xl mx-auto animate-fade-in-up delay-200">
                    Watch how our state-of-the-art automated carpet washing equipment delivers exceptional cleaning results
                </p>
            </div>

            <!-- Video Container -->
            <div class="max-w-4xl mx-auto animate-fade-in-up delay-300">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl bg-gray-900 aspect-video">
                    @php
                        $videoFile = $settings['machinery_video_file'] ?? null;
                        $videoUrl = $settings['machinery_video_url'] ?? null;

                        // Convert uploaded file path to URL
                        if ($videoFile && !str_starts_with($videoFile, 'http')) {
                            $videoFile = \Illuminate\Support\Facades\Storage::url($videoFile);
                        }
                    @endphp

                    @if($videoFile)
                        <!-- Uploaded video file takes priority -->
                        <video class="w-full h-full" controls>
                            <source src="{{ $videoFile }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    @elseif($videoUrl)
                        @if(str_contains($videoUrl, 'youtube.com') || str_contains($videoUrl, 'youtu.be'))
                            @php
                                // Extract YouTube video ID
                                if (str_contains($videoUrl, 'youtu.be/')) {
                                    $videoId = substr(parse_url($videoUrl, PHP_URL_PATH), 1);
                                } elseif (str_contains($videoUrl, '/shorts/')) {
                                    // Handle YouTube Shorts: https://www.youtube.com/shorts/VIDEO_ID
                                    $videoId = basename(parse_url($videoUrl, PHP_URL_PATH));
                                } else {
                                    // Handle regular YouTube: https://www.youtube.com/watch?v=VIDEO_ID
                                    parse_str(parse_url($videoUrl, PHP_URL_QUERY), $query);
                                    $videoId = $query['v'] ?? '';
                                }
                            @endphp
                            <iframe
                                class="w-full h-full"
                                src="https://www.youtube.com/embed/{{ $videoId }}"
                                title="Raha Express Carpet Washing - See Our Machinery in Action"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                            </iframe>
                        @else
                            <!-- Generic video embed or link -->
                            <video class="w-full h-full" controls>
                                <source src="{{ $videoUrl }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        @endif
                    @else
                        <!-- Placeholder when no video URL set -->
                        <div class="absolute inset-0 flex items-center justify-center bg-gradient-to-br from-gray-800 to-gray-900">
                            <div class="text-center text-white">
                                <svg class="w-24 h-24 mx-auto mb-4 text-accent-400 animate-pulse" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"></path>
                                </svg>
                                <p class="text-lg font-semibold mb-2">Carpet Washing Excellence</p>
                                <p class="text-sm text-gray-400">Add video URL in admin panel</p>
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Video Caption -->
                <div class="mt-8 text-center text-white">
                    <p class="text-lg">
                        Experience the difference our automated technology makes in delivering spotless, fresh carpets
                    </p>
                </div>
            </div>

            <!-- CTA Below Video -->
            <div class="text-center mt-12 animate-fade-in-up delay-400">
                <a href="/quote" class="btn bg-white text-primary-700 hover:bg-primary-50 text-lg px-8 py-4 shadow-xl">
                    Get Your Free Quote Today
                </a>
            </div>
        </div>
    </section>

    <!-- Locations with Enhanced Visibility -->
    <section class="py-20 relative overflow-hidden bg-gradient-to-br from-gray-50 via-blue-50 to-indigo-50">
        <!-- Decorative background elements -->
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: url('data:image/svg+xml,%3Csvg width=\'80\' height=\'80\' viewBox=\'0 0 80 80\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%230066cc\' fill-opacity=\'1\'%3E%3Cpath d=\'M50 50c0-5.523 4.477-10 10-10s10 4.477 10 10-4.477 10-10 10c0 5.523-4.477 10-10 10s-10-4.477-10-10 4.477-10 10-10zM10 10c0-5.523 4.477-10 10-10s10 4.477 10 10-4.477 10-10 10c0 5.523-4.477 10-10 10S0 25.523 0 20s4.477-10 10-10zm10 8c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8zm40 40c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8z\' /%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 animate-fade-in-up">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Our Locations</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Find us in Nairobi today, with more locations opening soon
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Nairobi (Operational) - Vibrant and Prominent -->
                <div class="group relative overflow-hidden rounded-2xl shadow-2xl transform transition-all duration-500 hover:scale-105 hover:shadow-blue-500/50 animate-fade-in-up">
                    <!-- Gradient Background -->
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-600 via-indigo-700 to-blue-800"></div>
                    <!-- Shimmer Effect -->
                    <div class="shimmer-overlay opacity-20"></div>

                    <div class="relative p-8 text-white">
                        <div class="flex items-center justify-between mb-6">
                            <div class="w-14 h-14 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <span class="inline-block px-4 py-2 bg-green-500 text-white text-xs font-bold rounded-full shadow-lg animate-pulse">
                                NOW OPEN
                            </span>
                        </div>

                        <h3 class="text-3xl font-bold mb-6 drop-shadow-lg">Nairobi - Lang'ata</h3>

                        <div class="space-y-4 mb-8">
                            <p class="flex items-start gap-3 text-white text-lg">
                                <svg class="w-6 h-6 text-blue-200 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span class="drop-shadow">Uchumi Lang'ata<br>Opp Uhuru Gardens</span>
                            </p>
                            <p class="flex items-center gap-3 text-white text-lg">
                                <svg class="w-6 h-6 text-blue-200 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="drop-shadow">Mon - Sun: 6:30 AM - 8:00 PM</span>
                            </p>
                            <p class="flex items-center gap-3 text-white text-lg font-semibold">
                                <svg class="w-6 h-6 text-blue-200 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                <span class="drop-shadow">0114440444</span>
                            </p>
                        </div>

                        <a href="/locations" class="inline-flex items-center justify-center gap-2 w-full bg-white text-blue-700 px-6 py-4 rounded-xl font-bold text-lg shadow-xl hover:bg-blue-50 hover:scale-105 transition-all duration-300">
                            View Details
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Mombasa (Coming Soon) - Exciting Preview -->
                <div class="group relative overflow-hidden rounded-2xl shadow-xl transform transition-all duration-500 hover:scale-105 animate-fade-in-up delay-200">
                    <!-- Gradient Background -->
                    <div class="absolute inset-0 bg-gradient-to-br from-slate-600 via-slate-700 to-slate-800"></div>
                    <!-- Pattern overlay -->
                    <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M54.627 0l.83.828-1.415 1.415L51.8 0h2.827zM5.373 0l-.83.828L5.96 2.243 8.2 0H5.374zM48.97 0l3.657 3.657-1.414 1.414L46.143 0h2.828zM11.03 0L7.372 3.657 8.787 5.07 13.857 0H11.03zm32.284 0L49.8 6.485 48.384 7.9l-7.9-7.9h2.83zM16.686 0L10.2 6.485 11.616 7.9l7.9-7.9h-2.83zm20.97 0l9.315 9.314-1.414 1.414L34.828 0h2.83zM22.344 0L13.03 9.314l1.414 1.414L25.172 0h-2.83zM32 0l12.142 12.142-1.414 1.414L30 .828 17.272 13.556 15.858 12.14 28 0zm0 15.858l13.556 13.556-1.414 1.414L32 18.686l-12.142 12.142-1.414-1.414L32 15.858zm0 17.143L45.556 46.557 44.142 47.97 32 35.83 19.858 47.97l-1.414-1.414L32 33zm0 17.143L45.556 63.7 44.142 65.112 32 52.97 19.858 65.112 18.444 63.7 32 50.144zM0 5.373l.828-.83L2.243 5.96 0 8.2V5.374zm0 5.656l3.657-3.657L5.07 8.787 0 13.857v-2.828zm0 5.656l6.485-6.485L7.9 11.616l-7.9 7.9v-2.83zm0 5.656l9.314-9.314L10.728 11.03 0 21.757v-2.828zm0 5.657l12.142-12.143L13.557 14.43 0 27.986v-2.828zm0 5.657l13.556-13.557L15.97 18.444 0 34.414v-2.828zm0 5.657l16.97-16.97 1.415 1.414L0 40.828v-2.828zm0 5.657l20.386-20.385 1.414 1.414L0 46.485v-2.828zm0 5.657l23.8-23.798 1.414 1.414L0 52.142v-2.828zm0 5.657l27.214-27.213 1.414 1.414L0 57.8v-2.83zm0 5.656l30.628-30.627 1.414 1.414L0 63.456v-2.828z\' fill=\'%23ffffff\' fill-opacity=\'1\' fill-rule=\'evenodd\'/%3E%3C/svg%3E');"></div>

                    <div class="relative p-8 text-white h-full flex flex-col">
                        <div class="flex items-center justify-between mb-6">
                            <div class="w-14 h-14 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center shadow-lg">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <span class="inline-block px-4 py-2 bg-blue-500 text-white text-xs font-bold rounded-full shadow-lg">
                                COMING SOON
                            </span>
                        </div>

                        <h3 class="text-3xl font-bold mb-4 drop-shadow-lg">Mombasa - Nyali</h3>
                        <p class="text-gray-200 text-lg mb-6 flex-grow drop-shadow">
                            We're expanding to Mombasa! Our Nyali location will be opening soon to serve the coastal region.
                        </p>

                        <button class="w-full bg-slate-600 text-white px-6 py-4 rounded-xl font-bold text-lg cursor-not-allowed opacity-75">
                            Opening Soon
                        </button>
                    </div>
                </div>

                <!-- Eldoret (Coming Soon) - Exciting Preview -->
                <div class="group relative overflow-hidden rounded-2xl shadow-xl transform transition-all duration-500 hover:scale-105 animate-fade-in-up delay-400">
                    <!-- Gradient Background -->
                    <div class="absolute inset-0 bg-gradient-to-br from-slate-600 via-slate-700 to-slate-800"></div>
                    <!-- Pattern overlay -->
                    <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M54.627 0l.83.828-1.415 1.415L51.8 0h2.827zM5.373 0l-.83.828L5.96 2.243 8.2 0H5.374zM48.97 0l3.657 3.657-1.414 1.414L46.143 0h2.828zM11.03 0L7.372 3.657 8.787 5.07 13.857 0H11.03zm32.284 0L49.8 6.485 48.384 7.9l-7.9-7.9h2.83zM16.686 0L10.2 6.485 11.616 7.9l7.9-7.9h-2.83zm20.97 0l9.315 9.314-1.414 1.414L34.828 0h2.83zM22.344 0L13.03 9.314l1.414 1.414L25.172 0h-2.83zM32 0l12.142 12.142-1.414 1.414L30 .828 17.272 13.556 15.858 12.14 28 0zm0 15.858l13.556 13.556-1.414 1.414L32 18.686l-12.142 12.142-1.414-1.414L32 15.858zm0 17.143L45.556 46.557 44.142 47.97 32 35.83 19.858 47.97l-1.414-1.414L32 33zm0 17.143L45.556 63.7 44.142 65.112 32 52.97 19.858 65.112 18.444 63.7 32 50.144zM0 5.373l.828-.83L2.243 5.96 0 8.2V5.374zm0 5.656l3.657-3.657L5.07 8.787 0 13.857v-2.828zm0 5.656l6.485-6.485L7.9 11.616l-7.9 7.9v-2.83zm0 5.656l9.314-9.314L10.728 11.03 0 21.757v-2.828zm0 5.657l12.142-12.143L13.557 14.43 0 27.986v-2.828zm0 5.657l13.556-13.557L15.97 18.444 0 34.414v-2.828zm0 5.657l16.97-16.97 1.415 1.414L0 40.828v-2.828zm0 5.657l20.386-20.385 1.414 1.414L0 46.485v-2.828zm0 5.657l23.8-23.798 1.414 1.414L0 52.142v-2.828zm0 5.657l27.214-27.213 1.414 1.414L0 57.8v-2.83zm0 5.656l30.628-30.627 1.414 1.414L0 63.456v-2.828z\' fill=\'%23ffffff\' fill-opacity=\'1\' fill-rule=\'evenodd\'/%3E%3C/svg%3E');"></div>

                    <div class="relative p-8 text-white h-full flex flex-col">
                        <div class="flex items-center justify-between mb-6">
                            <div class="w-14 h-14 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center shadow-lg">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <span class="inline-block px-4 py-2 bg-blue-500 text-white text-xs font-bold rounded-full shadow-lg">
                                COMING SOON
                            </span>
                        </div>

                        <h3 class="text-3xl font-bold mb-4 drop-shadow-lg">Eldoret</h3>
                        <p class="text-gray-200 text-lg mb-6 flex-grow drop-shadow">
                            Bringing our professional carpet cleaning services to Eldoret. Stay tuned for our grand opening!
                        </p>

                        <button class="w-full bg-slate-600 text-white px-6 py-4 rounded-xl font-bold text-lg cursor-not-allowed opacity-75">
                            Opening Soon
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials with Enhanced Visibility -->
    <section class="py-20 relative overflow-hidden">
        <!-- Dark gradient background -->
        <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-blue-900 to-indigo-900"></div>
        <!-- Decorative pattern -->
        <div class="absolute inset-0 opacity-5" style="background-image: url('data:image/svg+xml,%3Csvg width=\'100\' height=\'100\' viewBox=\'0 0 100 100\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z\' fill=\'%23ffffff\' fill-opacity=\'1\' fill-rule=\'evenodd\'/%3E%3C/svg%3E');"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 animate-fade-in-up">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-4 drop-shadow-lg">What Our Customers Say</h2>
                <p class="text-xl text-blue-200 max-w-2xl mx-auto drop-shadow">
                    Real reviews from satisfied customers across Nairobi
                </p>
            </div>

            @if($testimonials->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach($testimonials as $testimonial)
                        <div class="group relative overflow-hidden rounded-2xl shadow-2xl transform transition-all duration-500 hover:scale-105 animate-fade-in-up" style="animation-delay: {{ $loop->index * 200 }}ms">
                            <!-- Gradient Background -->
                            <div class="absolute inset-0 bg-gradient-to-br from-slate-700 via-slate-800 to-slate-900"></div>
                            <!-- Shimmer Effect -->
                            <div class="shimmer-overlay opacity-10"></div>

                            <div class="relative p-8 text-white">
                                <!-- Star Rating -->
                                <div class="flex items-center gap-1 mb-6">
                                    @for($i = 1; $i <= 5; $i++)
                                        <svg class="w-6 h-6 {{ $i <= $testimonial->rating ? 'text-yellow-400' : 'text-gray-600' }} drop-shadow" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                    @endfor
                                </div>

                                <!-- Review Text -->
                                <p class="text-gray-100 text-lg mb-8 leading-relaxed drop-shadow italic">
                                    "{{ $testimonial->review_text }}"
                                </p>

                                <!-- Customer Info -->
                                <div class="flex items-center gap-4 pt-6 border-t border-white/20">
                                    @if($testimonial->customer_photo)
                                        <img src="{{ Storage::url($testimonial->customer_photo) }}"
                                             alt="{{ $testimonial->customer_name }}"
                                             class="w-14 h-14 rounded-full object-cover ring-2 ring-white/30 shadow-lg">
                                    @else
                                        <div class="w-14 h-14 rounded-full bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center ring-2 ring-white/30 shadow-lg">
                                            <span class="text-white font-bold text-xl drop-shadow">
                                                {{ substr($testimonial->customer_name, 0, 1) }}
                                            </span>
                                        </div>
                                    @endif
                                    <p class="font-bold text-white text-lg drop-shadow">{{ $testimonial->customer_name }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <!-- Fallback: Show default testimonials if database is empty -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="group relative overflow-hidden rounded-2xl shadow-2xl transform transition-all duration-500 hover:scale-105 animate-fade-in-up">
                        <div class="absolute inset-0 bg-gradient-to-br from-slate-700 via-slate-800 to-slate-900"></div>
                        <div class="shimmer-overlay opacity-10"></div>
                        <div class="relative p-8 text-white">
                            <div class="flex items-center gap-1 mb-6">
                                @for($i = 0; $i < 5; $i++)
                                    <svg class="w-6 h-6 text-yellow-400 drop-shadow" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                @endfor
                            </div>
                            <p class="text-gray-100 text-lg mb-8 leading-relaxed drop-shadow italic">
                                "Excellent service! My carpet looks brand new. The 24-hour turnaround was exactly as promised. Highly recommend!"
                            </p>
                            <div class="flex items-center gap-4 pt-6 border-t border-white/20">
                                <div class="w-14 h-14 rounded-full bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center ring-2 ring-white/30 shadow-lg">
                                    <span class="text-white font-bold text-xl drop-shadow">J</span>
                                </div>
                                <p class="font-bold text-white text-lg drop-shadow">Jane Wanjiru</p>
                            </div>
                        </div>
                    </div>

                    <div class="group relative overflow-hidden rounded-2xl shadow-2xl transform transition-all duration-500 hover:scale-105 animate-fade-in-up delay-200">
                        <div class="absolute inset-0 bg-gradient-to-br from-slate-700 via-slate-800 to-slate-900"></div>
                        <div class="shimmer-overlay opacity-10"></div>
                        <div class="relative p-8 text-white">
                            <div class="flex items-center gap-1 mb-6">
                                @for($i = 0; $i < 5; $i++)
                                    <svg class="w-6 h-6 text-yellow-400 drop-shadow" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                @endfor
                            </div>
                            <p class="text-gray-100 text-lg mb-8 leading-relaxed drop-shadow italic">
                                "Professional and efficient. The staff was courteous and the automated cleaning process is impressive. Will definitely use again."
                            </p>
                            <div class="flex items-center gap-4 pt-6 border-t border-white/20">
                                <div class="w-14 h-14 rounded-full bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center ring-2 ring-white/30 shadow-lg">
                                    <span class="text-white font-bold text-xl drop-shadow">D</span>
                                </div>
                                <p class="font-bold text-white text-lg drop-shadow">David Ochieng</p>
                            </div>
                        </div>
                    </div>

                    <div class="group relative overflow-hidden rounded-2xl shadow-2xl transform transition-all duration-500 hover:scale-105 animate-fade-in-up delay-400">
                        <div class="absolute inset-0 bg-gradient-to-br from-slate-700 via-slate-800 to-slate-900"></div>
                        <div class="shimmer-overlay opacity-10"></div>
                        <div class="relative p-8 text-white">
                            <div class="flex items-center gap-1 mb-6">
                                @for($i = 0; $i < 5; $i++)
                                    <svg class="w-6 h-6 text-yellow-400 drop-shadow" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                @endfor
                            </div>
                            <p class="text-gray-100 text-lg mb-8 leading-relaxed drop-shadow italic">
                                "Best carpet cleaning service in Nairobi! Fair prices and excellent results. My carpets have never looked better."
                            </p>
                            <div class="flex items-center gap-4 pt-6 border-t border-white/20">
                                <div class="w-14 h-14 rounded-full bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center ring-2 ring-white/30 shadow-lg">
                                    <span class="text-white font-bold text-xl drop-shadow">G</span>
                                </div>
                                <p class="font-bold text-white text-lg drop-shadow">Grace Muthoni</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-br from-primary-600 to-primary-800 text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                Ready to Get Your Carpets Cleaned?
            </h2>
            <p class="text-xl md:text-2xl mb-10 text-primary-100">
                Drop off today, pick up tomorrow. It's that simple!
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/quote" class="btn btn-accent text-lg px-10 py-5">
                    Request a Quote
                </a>
                <a href="tel:0114440444" class="btn btn-outline border-white text-white hover:bg-white hover:text-primary-700 text-lg px-10 py-5">
                    Call Now: 0114440444
                </a>
            </div>
            <p class="mt-8 text-primary-200">
                Open 7 days a week • 6:30 AM - 8:00 PM • Lang'ata, Nairobi
            </p>
        </div>
    </section>
</x-layout.app-layout>
