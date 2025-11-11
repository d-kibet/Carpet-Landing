<header class="bg-white shadow-sm sticky top-0 z-50" x-data="{ mobileMenuOpen: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="/" class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-primary-600 rounded-lg flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-primary-700">RAHA EXPRESS</h1>
                        <p class="text-xs text-gray-600">Automated Carpet Wash</p>
                    </div>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center gap-8">
                <a href="/" class="text-gray-700 hover:text-primary-600 font-medium transition-colors">Home</a>

                <!-- Services Dropdown -->
                <div class="relative" x-data="{ servicesOpen: false }" @mouseenter="servicesOpen = true" @mouseleave="servicesOpen = false">
                    <button @click="servicesOpen = !servicesOpen"
                            class="flex items-center gap-1 text-gray-700 hover:text-primary-600 font-medium transition-colors">
                        Services
                        <svg class="w-4 h-4 transition-transform" :class="{'rotate-180': servicesOpen}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <!-- Dropdown Menu -->
                    <div x-show="servicesOpen"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 translate-y-1"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 translate-y-1"
                         class="absolute left-0 mt-2 w-64 bg-white rounded-lg shadow-xl border border-gray-100 py-2 z-50"
                         style="display: none;">
                        <a href="{{ route('service.show', 'carpet-cleaning') }}"
                           class="block px-4 py-3 text-gray-700 hover:bg-primary-50 hover:text-primary-600 transition-colors">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold">Carpet Cleaning</div>
                                    <div class="text-xs text-gray-500">24-hour turnaround</div>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('service.show', 'laundry-services') }}"
                           class="block px-4 py-3 text-gray-700 hover:bg-secondary-50 hover:text-secondary-600 transition-colors">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-secondary-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-secondary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold">Laundry Services</div>
                                    <div class="text-xs text-gray-500">Wash, dry & fold</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <a href="/pricing" class="text-gray-700 hover:text-primary-600 font-medium transition-colors">Pricing</a>
                <a href="/locations" class="text-gray-700 hover:text-primary-600 font-medium transition-colors">Locations</a>
                <a href="/gallery" class="text-gray-700 hover:text-primary-600 font-medium transition-colors">Gallery</a>
                <a href="/contact" class="text-gray-700 hover:text-primary-600 font-medium transition-colors">Contact</a>
            </nav>

            <!-- CTA Buttons -->
            <div class="hidden md:flex items-center gap-4">
                <a href="tel:0114440444" class="inline-flex items-center gap-2 text-gray-700 hover:text-primary-600 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    <span class="font-medium">0114440444</span>
                </a>
                <a href="/quote" class="btn btn-accent">
                    Get Quote
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden p-2 text-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileMenuOpen"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-1"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-1"
             class="md:hidden py-4 border-t"
             x-data="{ mobileServicesOpen: false }">
            <nav class="flex flex-col gap-4">
                <a href="/" class="text-gray-700 hover:text-primary-600 font-medium transition-colors py-2">Home</a>

                <!-- Mobile Services Accordion -->
                <div>
                    <button @click="mobileServicesOpen = !mobileServicesOpen"
                            class="flex items-center justify-between w-full text-gray-700 hover:text-primary-600 font-medium transition-colors py-2">
                        <span>Services</span>
                        <svg class="w-5 h-5 transition-transform" :class="{'rotate-180': mobileServicesOpen}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div x-show="mobileServicesOpen"
                         x-collapse
                         class="pl-4 mt-2 space-y-2">
                        <a href="{{ route('service.show', 'carpet-cleaning') }}"
                           class="flex items-center gap-3 py-2 text-gray-600 hover:text-primary-600 transition-colors">
                            <div class="w-8 h-8 bg-primary-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span>Carpet Cleaning</span>
                        </a>
                        <a href="{{ route('service.show', 'laundry-services') }}"
                           class="flex items-center gap-3 py-2 text-gray-600 hover:text-secondary-600 transition-colors">
                            <div class="w-8 h-8 bg-secondary-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-secondary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span>Laundry Services</span>
                        </a>
                    </div>
                </div>

                <a href="/pricing" class="text-gray-700 hover:text-primary-600 font-medium transition-colors py-2">Pricing</a>
                <a href="/locations" class="text-gray-700 hover:text-primary-600 font-medium transition-colors py-2">Locations</a>
                <a href="/gallery" class="text-gray-700 hover:text-primary-600 font-medium transition-colors py-2">Gallery</a>
                <a href="/contact" class="text-gray-700 hover:text-primary-600 font-medium transition-colors py-2">Contact</a>
                <div class="flex flex-col gap-3 pt-4 border-t">
                    <a href="tel:0114440444" class="btn btn-outline text-center">
                        Call: 0114440444
                    </a>
                    <a href="/quote" class="btn btn-accent text-center">
                        Get Quote
                    </a>
                </div>
            </nav>
        </div>
    </div>
</header>