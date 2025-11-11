<x-layout.app-layout>
    <x-slot:title>Gallery - Raha Express Carpet Wash</x-slot:title>
    <x-slot:description>See our work! Browse before and after photos of our professional carpet cleaning services in Nairobi, Mombasa, and Eldoret.</x-slot:description>

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-primary-600 via-primary-700 to-secondary-700 text-white py-20">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;%3E%3Cg fill=&quot;%23ffffff&quot; fill-opacity=&quot;0.4&quot;%3E%3Cpath d=&quot;M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z&quot;/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center">
                <h1 class="text-5xl font-bold mb-6">Our Gallery</h1>
                <p class="text-xl text-primary-100 max-w-3xl mx-auto">
                    See the amazing transformations we've achieved with our automated carpet cleaning technology
                </p>
            </div>
        </div>
    </section>

    <!-- Filter Tabs -->
    <section class="bg-white border-b border-gray-200" x-data="{ activeCategory: 'all' }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap gap-2 py-6 justify-center">
                <button @click="activeCategory = 'all'"
                        :class="activeCategory === 'all' ? 'bg-primary-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'"
                        class="px-6 py-2 rounded-lg font-medium transition-colors">
                    All Photos
                </button>
                <button @click="activeCategory = 'before_after'"
                        :class="activeCategory === 'before_after' ? 'bg-primary-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'"
                        class="px-6 py-2 rounded-lg font-medium transition-colors">
                    Before & After
                </button>
                <button @click="activeCategory = 'carpet'"
                        :class="activeCategory === 'carpet' ? 'bg-primary-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'"
                        class="px-6 py-2 rounded-lg font-medium transition-colors">
                    Carpet Cleaning
                </button>
                <button @click="activeCategory = 'laundry'"
                        :class="activeCategory === 'laundry' ? 'bg-primary-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'"
                        class="px-6 py-2 rounded-lg font-medium transition-colors">
                    Laundry Services
                </button>
                <button @click="activeCategory = 'facility'"
                        :class="activeCategory === 'facility' ? 'bg-primary-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'"
                        class="px-6 py-2 rounded-lg font-medium transition-colors">
                    Our Facility
                </button>
            </div>
        </div>
    </section>

    <!-- Gallery Grid -->
    <section class="py-16 bg-gradient-to-b from-white to-stone-50" x-data="{ activeCategory: 'all' }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @php
                $galleryItems = \App\Models\GalleryItem::where('is_active', true)
                    ->orderBy('display_order')
                    ->get();
            @endphp

            @if($galleryItems->count() > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($galleryItems as $item)
                        <div class="group relative bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1"
                             x-show="activeCategory === 'all' || activeCategory === '{{ $item->category }}'"
                             x-transition:enter="transition ease-out duration-300"
                             x-transition:enter-start="opacity-0 transform scale-95"
                             x-transition:enter-end="opacity-100 transform scale-100">

                            <!-- Image -->
                            <div class="aspect-w-4 aspect-h-3 bg-gray-200 overflow-hidden">
                                @if($item->image_path)
                                    <img src="{{ Storage::url($item->image_path) }}"
                                         alt="{{ $item->title }}"
                                         class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-300">
                                @else
                                    <div class="w-full h-64 bg-gradient-to-br from-primary-400 to-secondary-400 flex items-center justify-center">
                                        <svg class="w-16 h-16 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                @endif
                            </div>

                            <!-- Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                                <div class="p-6 text-white w-full">
                                    <h3 class="text-xl font-bold mb-2">{{ $item->title }}</h3>
                                    @if($item->description)
                                        <p class="text-sm text-gray-200">{{ $item->description }}</p>
                                    @endif
                                </div>
                            </div>

                            <!-- Category Badge -->
                            <div class="absolute top-4 right-4">
                                <span class="bg-white/90 backdrop-blur-sm text-gray-900 px-3 py-1 rounded-full text-xs font-semibold">
                                    {{ ucwords(str_replace('-', ' ', $item->category)) }}
                                </span>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <!-- Placeholder Gallery -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @for($i = 1; $i <= 9; $i++)
                        <div class="group relative bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                            <div class="aspect-w-4 aspect-h-3 bg-gradient-to-br from-{{ ['primary', 'secondary', 'accent'][($i - 1) % 3] }}-400 to-{{ ['primary', 'secondary', 'accent'][($i - 1) % 3] }}-600 overflow-hidden">
                                <div class="w-full h-64 flex flex-col items-center justify-center text-white">
                                    <svg class="w-16 h-16 opacity-50 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <p class="text-sm font-medium">Gallery Photo {{ $i }}</p>
                                </div>
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                                <div class="p-6 text-white w-full">
                                    <h3 class="text-xl font-bold mb-2">Professional Cleaning Result #{{ $i }}</h3>
                                    <p class="text-sm text-gray-200">Our state-of-the-art equipment delivers exceptional results every time.</p>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            @endif
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Track Record</h2>
                <p class="text-lg text-gray-600">Numbers that speak for themselves</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-5xl font-bold text-primary-600 mb-2">5,000+</div>
                    <div class="text-gray-600 font-medium">Carpets Cleaned</div>
                </div>
                <div class="text-center">
                    <div class="text-5xl font-bold text-secondary-600 mb-2">98%</div>
                    <div class="text-gray-600 font-medium">Satisfaction Rate</div>
                </div>
                <div class="text-center">
                    <div class="text-5xl font-bold text-accent-600 mb-2">24hr</div>
                    <div class="text-gray-600 font-medium">Average Turnaround</div>
                </div>
                <div class="text-center">
                    <div class="text-5xl font-bold text-trust-600 mb-2">100%</div>
                    <div class="text-gray-600 font-medium">Quality Guarantee</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 bg-gradient-to-b from-stone-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">What Our Customers Say</h2>
            </div>

            @php
                $testimonials = \App\Models\Testimonial::where('is_approved', true)
                    ->orderBy('display_order')
                    ->limit(3)
                    ->get();
            @endphp

            @if($testimonials->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach($testimonials as $testimonial)
                        <div class="bg-white rounded-xl p-8 shadow-lg">
                            <div class="flex items-center gap-1 mb-4">
                                @for($i = 1; $i <= 5; $i++)
                                    <svg class="w-5 h-5 {{ $i <= $testimonial->rating ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                @endfor
                            </div>
                            <p class="text-gray-700 mb-6 italic">"{{ $testimonial->review_text }}"</p>
                            <div class="border-t pt-4">
                                <p class="font-semibold text-gray-900">{{ $testimonial->customer_name }}</p>
                                @if($testimonial->location)
                                    <p class="text-sm text-gray-600">{{ $testimonial->location->name }}</p>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-primary-600 to-secondary-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-bold mb-4">Ready to Transform Your Carpets?</h2>
            <p class="text-xl text-primary-100 mb-8 max-w-2xl mx-auto">
                Experience the same quality you see in our gallery. Get a free quote today!
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('quote.create') }}" class="btn bg-white text-primary-700 hover:bg-gray-100 px-8 py-4 text-lg">
                    Get Free Quote
                </a>
                <a href="/pricing" class="btn btn-outline border-2 border-white text-white hover:bg-white hover:text-primary-700 px-8 py-4 text-lg">
                    View Pricing
                </a>
            </div>
        </div>
    </section>
</x-layout.app-layout>
