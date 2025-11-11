<div class="bg-white rounded-xl shadow-lg p-8"
     x-data="{
        length: '',
        width: '',
        unit: 'feet',
        pricePerSqFt: 30,

        // Conversion factors to feet
        conversionFactors: {
            'feet': 1,
            'meters': 3.28084,
            'cm': 0.0328084
        },

        // Convert dimension to feet
        convertToFeet(value) {
            return parseFloat(value) * this.conversionFactors[this.unit];
        },

        // Calculate square feet
        get squareFeet() {
            if (!this.length || !this.width) return 0;
            const lengthInFeet = this.convertToFeet(this.length);
            const widthInFeet = this.convertToFeet(this.width);
            return lengthInFeet * widthInFeet;
        },

        // Calculate total price
        get totalPrice() {
            return Math.round(this.squareFeet * this.pricePerSqFt);
        },

        // Check if valid input
        get isValid() {
            return this.length > 0 && this.width > 0;
        }
     }">

    <div class="mb-6">
        <h3 class="text-2xl font-bold text-gray-900 mb-2">Carpet Cleaning Price Calculator</h3>
        <p class="text-gray-600">Calculate your carpet cleaning cost instantly</p>
    </div>

    <!-- Unit Selector -->
    <div class="mb-6">
        <label class="block text-sm font-semibold text-gray-700 mb-3">Select Measurement Unit</label>
        <div class="grid grid-cols-3 gap-3">
            <button @click="unit = 'feet'"
                    :class="unit === 'feet' ? 'bg-primary-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'"
                    class="py-3 px-4 rounded-lg font-medium transition-colors">
                Feet
            </button>
            <button @click="unit = 'meters'"
                    :class="unit === 'meters' ? 'bg-primary-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'"
                    class="py-3 px-4 rounded-lg font-medium transition-colors">
                Meters
            </button>
            <button @click="unit = 'cm'"
                    :class="unit === 'cm' ? 'bg-primary-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'"
                    class="py-3 px-4 rounded-lg font-medium transition-colors">
                Centimeters
            </button>
        </div>
    </div>

    <!-- Dimension Inputs -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">
                Length <span x-text="`(${unit})`" class="text-gray-500 font-normal"></span>
            </label>
            <input type="number"
                   x-model="length"
                   step="0.01"
                   min="0"
                   placeholder="Enter length"
                   class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition-all">
        </div>
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">
                Width <span x-text="`(${unit})`" class="text-gray-500 font-normal"></span>
            </label>
            <input type="number"
                   x-model="width"
                   step="0.01"
                   min="0"
                   placeholder="Enter width"
                   class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition-all">
        </div>
    </div>

    <!-- Results Display -->
    <div x-show="isValid"
         x-transition
         class="bg-gradient-to-br from-primary-50 to-secondary-50 rounded-xl p-6 mb-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
            <div class="bg-white rounded-lg p-4">
                <p class="text-sm text-gray-600 mb-1">Area (Square Feet)</p>
                <p class="text-3xl font-bold text-primary-600" x-text="squareFeet.toFixed(2)"></p>
            </div>
            <div class="bg-white rounded-lg p-4">
                <p class="text-sm text-gray-600 mb-1">Estimated Cost</p>
                <p class="text-3xl font-bold text-accent-600">
                    KSh <span x-text="totalPrice.toLocaleString()"></span>
                </p>
            </div>
        </div>
        <div class="text-sm text-gray-600 bg-white rounded-lg p-4">
            <p class="font-semibold mb-2">Calculation:</p>
            <p>
                <span x-text="squareFeet.toFixed(2)"></span> sq ft ×
                KSh <span x-text="pricePerSqFt"></span> per sq ft =
                KSh <span x-text="totalPrice.toLocaleString()" class="font-semibold text-gray-900"></span>
            </p>
        </div>
    </div>

    <!-- Conversion Reference Table -->
    <div class="border-t border-gray-200 pt-6">
        <button @click="showConversion = !showConversion"
                x-data="{ showConversion: false }"
                class="flex items-center justify-between w-full text-left">
            <span class="text-sm font-semibold text-gray-700">
                <svg class="w-5 h-5 inline-block mr-2 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                Quick Conversion Reference
            </span>
            <svg class="w-5 h-5 text-gray-500 transform transition-transform"
                 :class="{'rotate-180': showConversion}"
                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </button>

        <div x-show="showConversion"
             x-collapse
             class="mt-4 bg-gray-50 rounded-lg p-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm">
                <div>
                    <p class="font-semibold text-gray-900 mb-2">Length Conversions:</p>
                    <ul class="space-y-1 text-gray-600">
                        <li>1 meter = 3.28 feet</li>
                        <li>1 foot = 30.48 cm</li>
                        <li>1 foot = 0.305 meters</li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold text-gray-900 mb-2">Common Carpet Sizes:</p>
                    <ul class="space-y-1 text-gray-600">
                        <li>Small: 6×4 ft (24 sq ft)</li>
                        <li>Medium: 8×6 ft (48 sq ft)</li>
                        <li>Large: 10×8 ft (80 sq ft)</li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold text-gray-900 mb-2">Pricing:</p>
                    <ul class="space-y-1 text-gray-600">
                        <li>Rate: KSh 30/sq ft</li>
                        <li>Minimum: KSh 600</li>
                        <li>Pet treatment: +KSh 300</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Button -->
    <div x-show="isValid" x-transition class="mt-6">
        <a href="/quote" class="btn btn-accent w-full text-lg py-4">
            Get Official Quote
            <svg class="w-5 h-5 ml-2 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
        </a>
    </div>

    <!-- Disclaimer -->
    <p class="text-xs text-gray-500 mt-4 text-center">
        * This is an estimate. Final price may vary based on carpet condition and additional services.
    </p>
</div>
