<?php
/* Template Name: Contact */
get_header();
?>
<?php
// Primary Banner (Hero)
?>
<section class="relative overflow-hidden bg-[#0b3435]">
  <!-- Background Pattern -->
  <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff08_1px,transparent_1px),linear-gradient(to_bottom,#ffffff08_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>
  
  <!-- Decorative Gradients -->
  <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
    <div class="absolute top-0 right-0 h-[500px] w-[500px] translate-x-1/3 -translate-y-1/3 rounded-full bg-gradient-to-br from-[#d4a223]/20 to-transparent blur-3xl"></div>
    <div class="absolute bottom-0 left-0 h-[500px] w-[500px] -translate-x-1/3 translate-y-1/3 rounded-full bg-gradient-to-tr from-[#590925]/30 to-transparent blur-3xl"></div>
  </div>

  <div class="relative mx-auto w-full max-w-7xl px-6 py-10 lg:py-16">
    <div class="grid grid-cols-1 items-center gap-16 lg:grid-cols-12">
      <!-- Content Column -->
      <div class="lg:col-span-8">
       

        <h1 class="mt-8 font-serif  font-bold leading-tight text-white  text-4xl sm:text-5xl" id="hero-title">
        Let's Start a Conversation
        </h1>
        
        <p class="mt-8 max-w-2xl text-lg leading-relaxed text-stone-300" aria-describedby="hero-title">
        Whether you're looking to transform your business strategy, need expert guidance, or want to explore partnership opportunities, we're here to help you succeed.
        </p>

       

        <!-- CTA Buttons -->
        <div class="mt-10 flex flex-wrap items-center gap-4">
          <a href="<?php echo esc_url( home_url('/contact-aquilafrique') ); ?>" class="group inline-flex items-center justify-center rounded-lg bg-[#d4a223] px-8 py-4 text-base font-semibold text-white shadow-lg transition-all hover:bg-[#f0b929] hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-[#d4a223] focus:ring-offset-2 focus:ring-offset-[#0b3435]">
            Talk to an advisor
            <svg class="ml-2 h-5 w-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
          </a>
         
        </div>

       
      </div>

      <!-- Visual Column -->
      <div class="lg:col-span-4">
        
      </div>
    </div>

   
  </div>
</section>


<!-- Main Contact Section -->
<section class="py-12 md:py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 md:px-8 lg:px-0">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-8 lg:gap-12">
            
            <!-- Left Column - Contact Information -->
            <div class="lg:col-span-2 space-y-8" data-aos="fade-right" data-aos-duration="500">
                
                <!-- Section Header -->
                <div class="space-y-4">
                    <h2 class="text-2xl md:text-3xl font-bold text-[#1F3131]">
                        Contact Information
                    </h2>
                    <div class="w-12 h-1 bg-gradient-to-r from-[#006155] to-[#98C441] rounded-full"></div>
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                        Reach out to us through any of these channels. We typically respond within 24 hours.
                    </p>
                </div>

                <!-- Contact Cards -->
                <div class="space-y-6">
                    
                    <!-- Office Location -->
                    <div class="group bg-gradient-to-br from-[#F9F8F6] to-white p-6 rounded-2xl border border-gray-100 hover:border-[#006155] hover:shadow-lg transition-all duration-300">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-[#006155] bg-opacity-10 rounded-xl flex items-center justify-center group-hover:bg-[#006155] group-hover:bg-opacity-100 transition-all duration-300">
                                <svg class="w-6 h-6 text-[#006155] group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-semibold text-[#1F3131] mb-2">Office Location</h3>
                                <p class="text-gray-700 leading-relaxed">
                                    Nairobi, Kenya<br/>
                                    East Africa
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="group bg-gradient-to-br from-[#F9F8F6] to-white p-6 rounded-2xl border border-gray-100 hover:border-[#006155] hover:shadow-lg transition-all duration-300">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-[#006155] bg-opacity-10 rounded-xl flex items-center justify-center group-hover:bg-[#006155] group-hover:bg-opacity-100 transition-all duration-300">
                                <svg class="w-6 h-6 text-[#006155] group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-semibold text-[#1F3131] mb-2">Email Address</h3>
                                <a href="mailto:info@aquilafrique.com" class="text-[#006155] hover:text-[#98C441] font-medium transition-colors duration-300">
                                    info@aquilafrique.com
                                </a>
                                <p class="text-sm text-gray-600 mt-1">We'll respond within 24 hours</p>
                            </div>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="group bg-gradient-to-br from-[#F9F8F6] to-white p-6 rounded-2xl border border-gray-100 hover:border-[#006155] hover:shadow-lg transition-all duration-300">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-[#006155] bg-opacity-10 rounded-xl flex items-center justify-center group-hover:bg-[#006155] group-hover:bg-opacity-100 transition-all duration-300">
                                <svg class="w-6 h-6 text-[#006155] group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-semibold text-[#1F3131] mb-2">Phone Number</h3>
                                <a href="tel:+254700000000" class="text-[#006155] hover:text-[#98C441] font-medium transition-colors duration-300">
                                    +254 700 000 000
                                </a>
                                <p class="text-sm text-gray-600 mt-1">Mon - Fri, 9:00 AM - 6:00 PM EAT</p>
                            </div>
                        </div>
                    </div>

                    <!-- Business Hours -->
                    <div class="group bg-gradient-to-br from-[#F9F8F6] to-white p-6 rounded-2xl border border-gray-100 hover:border-[#006155] hover:shadow-lg transition-all duration-300">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-[#006155] bg-opacity-10 rounded-xl flex items-center justify-center group-hover:bg-[#006155] group-hover:bg-opacity-100 transition-all duration-300">
                                <svg class="w-6 h-6 text-[#006155] group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-semibold text-[#1F3131] mb-3">Business Hours</h3>
                                <div class="space-y-2 text-sm">
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Monday - Friday:</span>
                                        <span class="font-medium text-[#1F3131]">9:00 AM - 6:00 PM</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Saturday:</span>
                                        <span class="font-medium text-[#1F3131]">10:00 AM - 2:00 PM</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Sunday:</span>
                                        <span class="font-medium text-[#1F3131]">Closed</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Social Media Links -->
                <div class="pt-8 border-t border-gray-200">
                    <h3 class="text-lg font-semibold text-[#1F3131] mb-4">Connect With Us</h3>
                    <div class="flex flex-wrap gap-3">
                        <a href="#" class="w-12 h-12 rounded-xl bg-gray-100 hover:bg-[#0077B5] flex items-center justify-center transition-all duration-300 group" aria-label="LinkedIn">
                            <svg class="w-5 h-5 text-gray-600 group-hover:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-12 h-12 rounded-xl bg-gray-100 hover:bg-[#1DA1F2] flex items-center justify-center transition-all duration-300 group" aria-label="Twitter">
                            <svg class="w-5 h-5 text-gray-600 group-hover:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-12 h-12 rounded-xl bg-gray-100 hover:bg-[#25D366] flex items-center justify-center transition-all duration-300 group" aria-label="WhatsApp">
                            <svg class="w-5 h-5 text-gray-600 group-hover:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Right Column - Contact Form -->
            <div class="lg:col-span-3" data-aos="fade-left" data-aos-duration="500" data-aos-delay="200">
                <div class="bg-stone-200 rounded-3xl shadow-2xl p-8 md:p-10 lg:p-12 border border-gray-100">
                    
                    <!-- Form Header -->
                    <div class="mb-8">
                        <h2 class="text-3xl md:text-4xl font-bold text-[#1F3131] mb-4">
                            Send Us a Message
                        </h2>
                        <div class="w-16 h-1 bg-gradient-to-r from-[#006155] to-[#98C441] rounded-full mb-4"></div>
                        <p class="text-gray-700">
                            Fill out the form below and we'll get back to you as soon as possible. All fields marked with * are required.
                        </p>
                    </div>

                    <!-- Forminator Form -->
                    <div class="forminator-form-wrapper">
                        <?php echo do_shortcode('[forminator_form id="38"]'); ?>
                    </div>

                    <!-- Trust Indicators -->
                    <div class="mt-8 pt-8 border-t border-gray-200">
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                            <div class="flex items-start gap-3">
                                <div class="flex-shrink-0">
                                    <svg class="w-6 h-6 text-[#006155]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-[#1F3131] text-sm mb-1">Secure & Private</h4>
                                    <p class="text-xs text-gray-600">Your data is protected</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="flex-shrink-0">
                                    <svg class="w-6 h-6 text-[#006155]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-[#1F3131] text-sm mb-1">Quick Response</h4>
                                    <p class="text-xs text-gray-600">Reply within 24 hours</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="flex-shrink-0">
                                    <svg class="w-6 h-6 text-[#006155]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-[#1F3131] text-sm mb-1">Expert Support</h4>
                                    <p class="text-xs text-gray-600">Professional guidance</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>




<!-- Custom Styles for Forminator Form -->
<style>
    /* Enhance Forminator form styling */
    .forminator-form-wrapper .forminator-field {
        margin-bottom: 1.5rem;
    }
    
    .forminator-form-wrapper input[type="text"],
    .forminator-form-wrapper input[type="email"],
    .forminator-form-wrapper input[type="tel"],
    .forminator-form-wrapper textarea,
    .forminator-form-wrapper select {
        width: 100%;
        padding: 0.875rem 1rem;
        border: 2px solid #E5E7EB;
        border-radius: 0.75rem;
        font-size: 1rem;
        transition: all 0.3s ease;
        background-color: #FFFFFF;
    }
    
    .forminator-form-wrapper input[type="text"]:focus,
    .forminator-form-wrapper input[type="email"]:focus,
    .forminator-form-wrapper input[type="tel"]:focus,
    .forminator-form-wrapper textarea:focus,
    .forminator-form-wrapper select:focus {
        outline: none;
        border-color: #006155;
        box-shadow: 0 0 0 3px rgba(0, 97, 85, 0.1);
    }
    
    .forminator-form-wrapper textarea {
        min-height: 150px;
        resize: vertical;
    }
    
    .forminator-form-wrapper label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 600;
        color: #1F3131;
        font-size: 0.95rem;
    }
    
    .forminator-form-wrapper .forminator-button {
        background: #006155;
        color: white;
        padding: 1rem 2rem;
        border-radius: 0.75rem;
        font-weight: 600;
        font-size: 1.05rem;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
        width: 100%;
        margin-top: 1rem;
    }
    
    .forminator-form-wrapper .forminator-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0, 97, 85, 0.3);
    }
    
    .forminator-form-wrapper .forminator-error {
        color: #DC2626;
        font-size: 0.875rem;
        margin-top: 0.25rem;
    }
    
    .forminator-form-wrapper .forminator-success {
        background-color: #D1FAE5;
        border: 2px solid #10B981;
        color: #065F46;
        padding: 1rem;
        border-radius: 0.75rem;
        margin-top: 1rem;
    }
</style>

<?php get_footer(); ?>