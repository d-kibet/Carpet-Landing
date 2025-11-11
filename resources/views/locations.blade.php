<x-layout.app-layout>
    <x-slot:title>Our Locations - Raha Express Carpet Wash</x-slot:title>
    <x-slot:description>Find a Raha Express location near you. We serve Nairobi, Mombasa, and Eldoret with automated carpet cleaning services.</x-slot:description>

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-primary-600 via-primary-700 to-secondary-700 text-white py-20">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;%3E%3Cg fill=&quot;%23ffffff&quot; fill-opacity=&quot;0.4&quot;%3E%3Cpath d=&quot;M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z&quot;/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center">
                <h1 class="text-5xl font-bold mb-6">Our Locations</h1>
                <p class="text-xl text-primary-100 max-w-3xl mx-auto">
                    Find a Raha Express branch near you for professional carpet cleaning services
                </p>
            </div>
        </div>
    </section>

    <!-- Locations Grid -->
    <section class="py-16 bg-gradient-to-b from-white to-stone-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @php
                $locations = \App\Models\Location::orderBy('display_order')->get();
            @endphp

            @if($locations->count() > 0)
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    @foreach($locations as $location)
                        <div class="bg-white rounded-2xl shadow-xl overflow-hidden {{ $location->is_operational ? '' : 'opacity-90' }}">
                            <!-- Location Header -->
                            <div class="relative">
                                @if($location->featured_image)
                                    <img src="{{ Storage::url($location->featured_image) }}"
                                         alt="{{ $location->name }}"
                                         class="w-full h-64 object-cover">
                                @else
                                    <div class="w-full h-64 bg-gradient-to-br from-{{ $loop->even ? 'secondary' : 'primary' }}-400 to-{{ $loop->even ? 'secondary' : 'primary' }}-600 flex items-center justify-center">
                                        <svg class="w-24 h-24 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </div>
                                @endif

                                @if(!$location->is_operational)
                                    <div class="absolute top-4 right-4">
                                        <span class="bg-accent-500 text-white px-4 py-2 rounded-full text-sm font-semibold shadow-lg">
                                            Coming Soon
                                        </span>
                                    </div>
                                @else
                                    <div class="absolute top-4 right-4">
                                        <span class="bg-green-500 text-white px-4 py-2 rounded-full text-sm font-semibold shadow-lg flex items-center gap-2">
                                            <span class="w-2 h-2 bg-white rounded-full animate-pulse"></span>
                                            Now Open
                                        </span>
                                    </div>
                                @endif
                            </div>

                            <!-- Location Details -->
                            <div class="p-8">
                                <h3 class="text-3xl font-bold text-gray-900 mb-4">{{ $location->name }}</h3>

                                @if($location->description)
                                    <p class="text-gray-600 mb-6">{{ $location->description }}</p>
                                @endif

                                <!-- Address -->
                                <div class="space-y-4 mb-6">
                                    <div class="flex items-start gap-3">
                                        <svg class="w-6 h-6 text-{{ $loop->even ? 'secondary' : 'primary' }}-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        <div>
                                            <p class="font-medium text-gray-900">Address</p>
                                            <p class="text-gray-600">{{ $location->address }}, {{ $location->city }}</p>
                                        </div>
                                    </div>

                                    @if($location->phone)
                                        <div class="flex items-start gap-3">
                                            <svg class="w-6 h-6 text-{{ $loop->even ? 'secondary' : 'primary' }}-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                            </svg>
                                            <div>
                                                <p class="font-medium text-gray-900">Phone</p>
                                                <a href="tel:{{ $location->phone }}" class="text-{{ $loop->even ? 'secondary' : 'primary' }}-600 hover:underline">
                                                    {{ $location->phone }}
                                                </a>
                                            </div>
                                        </div>
                                    @endif

                                    @if($location->email)
                                        <div class="flex items-start gap-3">
                                            <svg class="w-6 h-6 text-{{ $loop->even ? 'secondary' : 'primary' }}-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                            </svg>
                                            <div>
                                                <p class="font-medium text-gray-900">Email</p>
                                                <a href="mailto:{{ $location->email }}" class="text-{{ $loop->even ? 'secondary' : 'primary' }}-600 hover:underline">
                                                    {{ $location->email }}
                                                </a>
                                            </div>
                                        </div>
                                    @endif

                                    @if($location->whatsapp)
                                        <div class="flex items-start gap-3">
                                            <svg class="w-6 h-6 text-{{ $loop->even ? 'secondary' : 'primary' }}-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                                            </svg>
                                            <div>
                                                <p class="font-medium text-gray-900">WhatsApp</p>
                                                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $location->whatsapp) }}"
                                                   target="_blank"
                                                   class="text-{{ $loop->even ? 'secondary' : 'primary' }}-600 hover:underline">
                                                    {{ $location->whatsapp }}
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                </div>

                                <!-- Operating Hours -->
                                @if($location->is_operational && $location->operating_hours)
                                    <div class="mb-6 p-4 bg-stone-50 rounded-lg">
                                        <h4 class="font-semibold text-gray-900 mb-3 flex items-center gap-2">
                                            <svg class="w-5 h-5 text-{{ $loop->even ? 'secondary' : 'primary' }}-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            Operating Hours
                                        </h4>
                                        <div class="space-y-1 text-sm">
                                            @foreach($location->operating_hours as $day => $hours)
                                                <div class="flex justify-between">
                                                    <span class="text-gray-600 capitalize">{{ $day }}</span>
                                                    <span class="font-medium text-gray-900">{{ $hours }}</span>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @elseif(!$location->is_operational && $location->opening_date)
                                    <div class="mb-6 p-4 bg-accent-50 rounded-lg border border-accent-200">
                                        <p class="text-accent-800 font-medium flex items-center gap-2">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                            </svg>
                                            Opening: {{ $location->opening_date->format('F d, Y') }}
                                        </p>
                                    </div>
                                @endif

                                <!-- Action Buttons -->
                                <div class="flex flex-col sm:flex-row gap-3">
                                    @if($location->google_maps_url)
                                        <a href="{{ $location->google_maps_url }}"
                                           target="_blank"
                                           class="btn btn-{{ $loop->even ? 'secondary' : 'primary' }} flex-1 justify-center">
                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                                            </svg>
                                            Get Directions
                                        </a>
                                    @endif
                                    @if($location->is_operational)
                                        <a href="{{ route('quote.create') }}"
                                           class="btn btn-accent flex-1 justify-center">
                                            Get Quote
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-16">
                    <p class="text-gray-600 text-lg">No locations available at the moment.</p>
                </div>
            @endif
        </div>
    </section>

    <!-- Service Area Map -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Expanding Across Kenya</h2>
                <p class="text-lg text-gray-600">We're growing to serve you better</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6">
                    <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Nairobi</h3>
                    <p class="text-green-600 font-semibold mb-2">Now Operating</p>
                    <p class="text-gray-600 text-sm">Lang'ata branch serving all of Nairobi</p>
                </div>

                <div class="text-center p-6">
                    <div class="w-20 h-20 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-accent-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Mombasa</h3>
                    <p class="text-accent-600 font-semibold mb-2">Coming Soon</p>
                    <p class="text-gray-600 text-sm">Nyali branch opening this year</p>
                </div>

                <div class="text-center p-6">
                    <div class="w-20 h-20 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-accent-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Eldoret</h3>
                    <p class="text-accent-600 font-semibold mb-2">Coming Soon</p>
                    <p class="text-gray-600 text-sm">Expanding to serve Western Kenya</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-primary-600 to-secondary-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-bold mb-4">Ready to Experience the Difference?</h2>
            <p class="text-xl text-primary-100 mb-8 max-w-2xl mx-auto">
                Visit your nearest Raha Express location or request a free quote today
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
