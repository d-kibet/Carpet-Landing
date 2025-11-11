<x-layout.app-layout>
    <div class="min-h-screen bg-gradient-to-br from-gray-50 via-white to-primary-50 py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Terms of Service</h1>
                <p class="text-lg text-gray-600">Raha Express Carpet Wash & Laundry Services</p>
                <p class="text-sm text-gray-500 mt-2">Last Updated: {{ date('F d, Y') }}</p>
            </div>

            <!-- Content -->
            <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 space-y-8">

                <!-- 1. Agreement to Terms -->
                <section>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">1. Agreement to Terms</h2>
                    <p class="text-gray-700 leading-relaxed">
                        By using the services of Raha Express ("we," "us," or "our"), you agree to be bound by these Terms of Service.
                        If you do not agree to these terms, please do not use our services. These terms apply to all customers who access
                        or use our carpet washing, cleaning, and laundry services in Kenya.
                    </p>
                </section>

                <!-- 2. Services Description -->
                <section>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">2. Services We Provide</h2>
                    <div class="text-gray-700 leading-relaxed space-y-3">
                        <p>Raha Express provides the following services:</p>
                        <ul class="list-disc list-inside space-y-2 ml-4">
                            <li><strong>Carpet Washing & Cleaning:</strong> Professional deep cleaning of carpets and rugs</li>
                            <li><strong>Laundry Services:</strong> Washing, drying, and folding of clothing and linens</li>
                            <li><strong>24-Hour Turnaround:</strong> Standard service completed within 24 hours</li>
                            <li><strong>Pickup & Delivery:</strong> Convenient collection and return of items</li>
                        </ul>
                        <p class="mt-4">
                            <strong>Service Areas:</strong> We primarily operate in Nairobi, with expansion to Mombasa and Kisumu.
                            Our main location is in Langata, opposite Uhuru Gardens.
                        </p>
                        <p>
                            <strong>No Minimum Order:</strong> We accept orders of any size - no minimum requirements.
                        </p>
                    </div>
                </section>

                <!-- 3. Pricing & Payment -->
                <section>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">3. Pricing & Payment Terms</h2>
                    <div class="text-gray-700 leading-relaxed space-y-3">
                        <p><strong>Payment Flexibility:</strong> You may choose to pay either before or after service completion.</p>

                        <p><strong>Accepted Payment Methods:</strong></p>
                        <ul class="list-disc list-inside space-y-2 ml-4">
                            <li>M-Pesa mobile money</li>
                            <li>Credit/Debit cards</li>
                            <li>Cash on delivery</li>
                        </ul>

                        <p><strong>Delivery Fees:</strong> Deliveries outside Nairobi are charged at <strong class="text-primary-600">KES 50 per kilometer</strong> from our Langata location.</p>

                        <p><strong>Pricing:</strong> Our pricing is based on carpet size (per square meter) or item type. Final quotes will be provided after inspection of items.</p>

                        <p><strong>Price Changes:</strong> We reserve the right to adjust prices, but will notify you of any changes before confirming your order.</p>
                    </div>
                </section>

                <!-- 4. Storage & Collection Policy -->
                <section>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">4. Storage & Collection Policy</h2>
                    <div class="bg-amber-50 border-l-4 border-amber-500 p-6 rounded-r-lg mb-4">
                        <p class="font-semibold text-amber-900 mb-2">⚠️ Important: Collection Deadline</p>
                        <p class="text-amber-800">Items must be collected within <strong>2 weeks (14 days)</strong> of service completion.</p>
                    </div>
                    <div class="text-gray-700 leading-relaxed space-y-3">
                        <p><strong>Storage Fees:</strong> Items not collected within 2 weeks will incur a storage fee of <strong class="text-primary-600">KES 500 per month</strong>.</p>

                        <p><strong>Maximum Storage Period:</strong> We will store uncollected items for a maximum of <strong>3 months</strong> from completion date.</p>

                        <p><strong>Disposal After 3 Months:</strong> Items not collected after 3 months will be donated to charity. We will make reasonable attempts to contact you before donation.</p>

                        <p><strong>Notification:</strong> You will receive notification via SMS before storage fees begin and before items are donated.</p>
                    </div>
                </section>

                <!-- 5. Quality Guarantee -->
                <section>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">5. Quality Guarantee & Re-Cleaning</h2>
                    <div class="bg-green-50 border-l-4 border-green-500 p-6 rounded-r-lg mb-4">
                        <p class="font-semibold text-green-900 mb-2">✓ Our Guarantee</p>
                        <p class="text-green-800">If you're not satisfied with our service, we offer <strong>FREE re-cleaning within 2 days</strong> of delivery.</p>
                    </div>
                    <div class="text-gray-700 leading-relaxed space-y-3">
                        <p><strong>How to Request Re-Cleaning:</strong></p>
                        <ul class="list-disc list-inside space-y-2 ml-4">
                            <li>Contact us within 2 days of receiving your items</li>
                            <li>Call or WhatsApp: <a href="tel:0114440444" class="text-primary-600 font-semibold">0114440444</a></li>
                            <li>Describe the issue with specific areas/stains</li>
                            <li>We will schedule a free re-cleaning at no additional charge</li>
                        </ul>

                        <p><strong>Limitations:</strong> Some stains may be permanent due to the nature of the stain or fabric. We will inform you upfront if complete removal is not guaranteed.</p>
                    </div>
                </section>

                <!-- 6. Compensation for Damaged Items -->
                <section>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">6. Compensation for Damaged Items</h2>
                    <div class="text-gray-700 leading-relaxed space-y-3">
                        <p>We take utmost care with your items. However, if damage occurs during our service, we provide fair compensation.</p>

                        <p><strong>Reporting Damage:</strong></p>
                        <ul class="list-disc list-inside space-y-2 ml-4">
                            <li>Report any damage within <strong>2 days</strong> of delivery</li>
                            <li>Provide photos of the damaged item</li>
                            <li>Contact us at <a href="tel:0114440444" class="text-primary-600 font-semibold">0114440444</a></li>
                        </ul>

                        <p><strong>Claims Process:</strong></p>
                        <ul class="list-disc list-inside space-y-2 ml-4">
                            <li>We will investigate your claim within <strong>5 business days</strong></li>
                            <li>Compensation amount will be discussed and agreed upon based on the extent of damage and item value</li>
                            <li>Fair compensation will be provided for verified damages caused by our service</li>
                        </ul>

                        <p><strong>Exclusions:</strong> We are not liable for:</p>
                        <ul class="list-disc list-inside space-y-2 ml-4">
                            <li>Pre-existing damage or wear and tear disclosed before service</li>
                            <li>Damage caused by defects in the item itself</li>
                            <li>Normal fading or color changes in old fabrics</li>
                            <li>Items not collected within the maximum storage period</li>
                        </ul>
                    </div>
                </section>

                <!-- 7. Cancellation Policy -->
                <section>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">7. Cancellation & Rescheduling</h2>
                    <div class="bg-blue-50 border-l-4 border-blue-500 p-6 rounded-r-lg mb-4">
                        <p class="font-semibold text-blue-900 mb-2">ℹ️ No Cancellation Fees</p>
                        <p class="text-blue-800">You can cancel or reschedule your order at any time before pickup - absolutely free!</p>
                    </div>
                    <div class="text-gray-700 leading-relaxed space-y-3">
                        <p><strong>Customer Cancellations:</strong></p>
                        <ul class="list-disc list-inside space-y-2 ml-4">
                            <li>Cancel anytime before we pick up your items</li>
                            <li>No cancellation fees or penalties</li>
                            <li>Contact us at <a href="tel:0114440444" class="text-primary-600 font-semibold">0114440444</a></li>
                        </ul>

                        <p><strong>Rescheduling:</strong> You can reschedule pickup or delivery at no charge. We'll work with your schedule.</p>

                        <p><strong>Our Right to Cancel:</strong> We reserve the right to cancel service if:</p>
                        <ul class="list-disc list-inside space-y-2 ml-4">
                            <li>Items are heavily contaminated or pose health risks</li>
                            <li>Items require specialized treatment beyond our capabilities</li>
                            <li>You are unavailable for scheduled pickup/delivery after multiple attempts</li>
                        </ul>
                    </div>
                </section>

                <!-- 8. Refund Policy -->
                <section>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">8. Refund Policy</h2>
                    <div class="bg-red-50 border-l-4 border-red-500 p-6 rounded-r-lg mb-4">
                        <p class="font-semibold text-red-900 mb-2">No Refunds</p>
                        <p class="text-red-800">We do not offer cash refunds for completed services.</p>
                    </div>
                    <div class="text-gray-700 leading-relaxed space-y-3">
                        <p><strong>Alternatives to Refunds:</strong></p>
                        <ul class="list-disc list-inside space-y-2 ml-4">
                            <li><strong>Free Re-Cleaning:</strong> Available within 2 days if you're unsatisfied</li>
                            <li><strong>Compensation:</strong> Provided for items damaged during our service</li>
                            <li><strong>Service Credits:</strong> May be offered in exceptional circumstances for future services</li>
                        </ul>

                        <p>This no-refund policy applies to all completed services. If you have concerns about our service, please contact us immediately to discuss alternative solutions.</p>
                    </div>
                </section>

                <!-- 9. Customer Responsibilities -->
                <section>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">9. Your Responsibilities</h2>
                    <div class="text-gray-700 leading-relaxed space-y-3">
                        <p>As a customer, you agree to:</p>
                        <ul class="list-disc list-inside space-y-2 ml-4">
                            <li><strong>Accurate Description:</strong> Provide accurate information about items, stains, and special care requirements</li>
                            <li><strong>Availability:</strong> Be available or designate someone for scheduled pickup and delivery</li>
                            <li><strong>Payment:</strong> Pay for services as agreed (before or after completion)</li>
                            <li><strong>Timely Collection:</strong> Collect items within 2 weeks to avoid storage fees</li>
                            <li><strong>Disclosure:</strong> Inform us of any pre-existing damage or special concerns</li>
                            <li><strong>Valuable Items:</strong> Remove any valuable or personal items from pockets, carpets, etc. before service</li>
                        </ul>
                    </div>
                </section>

                <!-- 10. Limitation of Liability -->
                <section>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">10. Limitation of Liability</h2>
                    <div class="text-gray-700 leading-relaxed space-y-3">
                        <p>While we take every precaution to protect your items:</p>

                        <p><strong>We Are Not Liable For:</strong></p>
                        <ul class="list-disc list-inside space-y-2 ml-4">
                            <li>Pre-existing damage, wear, or defects in items</li>
                            <li>Permanent stains that cannot be removed despite proper treatment</li>
                            <li>Natural color fading in old or delicate fabrics</li>
                            <li>Items left in storage beyond 3 months (donated items)</li>
                            <li>Delays due to force majeure (natural disasters, riots, government actions, etc.)</li>
                            <li>Lost or stolen items from unsecured pickup/delivery locations</li>
                        </ul>

                        <p><strong>Maximum Liability:</strong> Our total liability for any claim shall not exceed the service fee paid for that specific order, except in cases of proven gross negligence.</p>

                        <p><strong>Insurance:</strong> We maintain appropriate business insurance. Compensation for damaged items will be determined on a case-by-case basis.</p>
                    </div>
                </section>

                <!-- 11. Dispute Resolution -->
                <section>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">11. Complaints & Dispute Resolution</h2>
                    <div class="text-gray-700 leading-relaxed space-y-3">
                        <p><strong>How to File a Complaint:</strong></p>
                        <ul class="list-disc list-inside space-y-2 ml-4">
                            <li>Contact us within 2 days of service completion or issue discovery</li>
                            <li>Call or WhatsApp: <a href="tel:0114440444" class="text-primary-600 font-semibold">0114440444</a></li>
                            <li>Provide detailed description and photos if applicable</li>
                        </ul>

                        <p><strong>Resolution Process:</strong></p>
                        <ul class="list-disc list-inside space-y-2 ml-4">
                            <li>We will acknowledge your complaint within 24 hours</li>
                            <li>Investigation and resolution within <strong>5 business days</strong></li>
                            <li>You will be informed of the outcome and proposed solution</li>
                        </ul>

                        <p><strong>Escalation:</strong> If you are unsatisfied with our resolution, you may escalate to our management team for final review.</p>

                        <p><strong>Governing Law:</strong> These terms are governed by the laws of Kenya. Any disputes will be subject to the exclusive jurisdiction of the courts in Nairobi, Kenya.</p>
                    </div>
                </section>

                <!-- 12. Changes to Terms -->
                <section>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">12. Changes to These Terms</h2>
                    <div class="text-gray-700 leading-relaxed space-y-3">
                        <p>We may update these Terms of Service from time to time. When we do:</p>
                        <ul class="list-disc list-inside space-y-2 ml-4">
                            <li>We will update the "Last Updated" date at the top of this page</li>
                            <li>Significant changes will be communicated via SMS to our customers</li>
                            <li>Continued use of our services after changes constitutes acceptance of the new terms</li>
                        </ul>
                    </div>
                </section>

                <!-- 13. Contact Information -->
                <section>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">13. Contact Us</h2>
                    <div class="bg-primary-50 border-l-4 border-primary-500 p-6 rounded-r-lg">
                        <p class="font-semibold text-gray-900 mb-3">Raha Express Carpet Wash & Laundry Services</p>
                        <div class="text-gray-700 space-y-2">
                            <p><strong>Phone/WhatsApp:</strong> <a href="tel:0114440444" class="text-primary-600 font-semibold">0114440444</a></p>
                            <p><strong>Location:</strong> Langata, opposite Uhuru Gardens, Nairobi, Kenya</p>
                            <p><strong>Service Hours:</strong> Monday - Sunday, 7:00 AM - 8:00 PM</p>
                            <p class="mt-4 text-sm text-gray-600">Raha Express is a registered business operating in Kenya.</p>
                        </div>
                    </div>
                </section>

                <!-- Footer -->
                <div class="mt-12 pt-8 border-t border-gray-200 text-center text-sm text-gray-500">
                    <p>By using Raha Express services, you acknowledge that you have read, understood, and agree to be bound by these Terms of Service.</p>
                    <p class="mt-4">Last Updated: {{ date('F d, Y') }}</p>
                </div>

            </div>

            <!-- Back to Home -->
            <div class="text-center mt-8">
                <a href="/" class="inline-block px-6 py-3 bg-primary-600 text-white font-semibold rounded-lg hover:bg-primary-700 transition duration-200">
                    Back to Home
                </a>
            </div>
        </div>
    </div>
</x-layout.app-layout>
