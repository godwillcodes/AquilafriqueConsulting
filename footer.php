<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PiedmontFederal
 */

?>

<!-- CTA Section -->
<section aria-labelledby="cta-title" class="relative overflow-hidden bg-white">
  <!-- Single Grid Background Pattern -->
  <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff08_1px,transparent_1px),linear-gradient(to_bottom,#ffffff08_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>
  
  <div class="relative mx-auto w-full max-w-7xl px-6 py-20">
    <div class="mx-auto max-w-4xl text-center">
      <div class="inline-flex items-center gap-2 rounded-full border border-[#5b112a]/30 bg-[#5b112a]/10 px-4 py-2 backdrop-blur-sm">
        <span class="h-2 w-2 animate-pulse rounded-full bg-[#5b112a]"></span>
        <span class="text-sm font-semibold text-[#5b112a]">Let's Get Started</span>
      </div>
      <h2 id="cta-title" class="mt-6 font-serif text-4xl font-bold text-[#5b112a] sm:text-5xl lg:text-5xl">
        Ready to move from intent to <span class="text-black">execution</span>?
      </h2>
      <p class="mt-6 text-lg leading-relaxed text-black">
        Let's define priorities, structure delivery, and build the internal capacity to sustain results.
      </p>
      <div class="mt-10 flex flex-wrap items-center justify-center gap-4">
        <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="group inline-flex items-center justify-center rounded-lg bg-[#5b112a] px-8 py-4 text-base font-semibold text-white shadow-lg transition-all hover:bg-[#7d1841] hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-[#5b112a] focus:ring-offset-2 focus:ring-offset-[#d4a123]">
          Talk to an advisor
          <svg class="ml-2 h-5 w-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
          </svg>
        </a>
        <a href="<?php echo esc_url( home_url('/services') ); ?>" class="inline-flex items-center justify-center rounded-lg border-2 border-black bg-white px-8 py-4 text-base font-semibold text-black backdrop-blur-sm transition-colors hover:border-[#5b112a] hover:text-[#5b112a] hover:bg-[#fff7eb] focus:outline-none focus:ring-2 focus:ring-black focus:ring-offset-2 focus:ring-offset-[#d4a123]">
          Explore services
        </a>
      </div>
      <div class="mt-8 flex items-center justify-center gap-3">
        <div class="h-px w-12 bg-gradient-to-r from-transparent to-black"></div>
        <p class="text-sm font-medium text-black">Consultative, structured, and outcome-focused</p>
        <div class="h-px w-12 bg-gradient-to-l from-transparent to-black"></div>
      </div>
    </div>
  </div>
</section>


<!-- Footer -->
<footer id="colophon" class="site-footer relative bg-[#d4a123] text-black">
  <!-- Single Grid Background Pattern -->
  <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff08_1px,transparent_1px),linear-gradient(to_bottom,#ffffff08_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>

  <div class="relative mx-auto w-full max-w-7xl px-6 py-20">
    <div class="grid grid-cols-1 gap-12 lg:grid-cols-12">
      <!-- Brand Column -->
      <div class="lg:col-span-4">
        
        <p class=" text-base leading-relaxed text-black">
        Aquilafrique Solutions Limited is a business advisory firm supporting MSMEs and NGOs across Africa through strategic planning, management, and capacity development.
        </p>

        <!-- Social Links (if you want black icons, change text-black or keep subtle) -->
        <div class="mt-6 flex items-center gap-3">
          <a href="#" class="flex h-10 w-10 items-center justify-center rounded-lg border border-black bg-white text-black backdrop-blur-sm transition-colors hover:border-[#5b112a] hover:text-[#5b112a]" aria-label="LinkedIn">
            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
              <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
            </svg>
          </a>
          <!-- Repeat pattern for other social icons -->
        </div>
      </div>

      <!-- Links Grid -->
      <div class="lg:col-span-8">
        <div class="grid grid-cols-1 gap-10 sm:grid-cols-3">
          <!-- Quick Links -->
          <div>
            <h3 class="font-serif text-base font-bold text-[#5b112a]">Quick Links</h3>
            <ul class="mt-5 space-y-3 text-base">
              <li>
                <a class="group inline-flex items-center text-black transition-colors hover:text-[#5b112a]" href="<?php echo esc_url( home_url('/') ); ?>">
                  Home
                </a>
              </li>
            </ul>
          </div>

          <!-- Services -->
          <div>
            <h3 class="font-serif text-base font-bold text-[#5b112a]">Services</h3>
            <ul class="mt-5 space-y-3 text-base text-black">
              <li class="flex items-start gap-2">
                <span>Strategic Planning & Business Planning</span>
              </li>
            </ul>
          </div>

          <!-- Contact -->
          <div>
            <h3 class="font-serif text-base font-bold text-[#5b112a]">Contact</h3>
            <ul class="mt-5 space-y-4 text-base">
              <li class="flex items-start gap-3">
                <svg class="mt-0.5 h-5 w-5 flex-shrink-0 text-[#5b112a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                <a class="text-black transition-colors hover:text-[#5b112a]" href="mailto:info@aquilafrique.com">info@aquilafrique.com</a>
              </li>
              <!-- repeat pattern for other contacts -->
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer Bottom -->
    <div class="mt-12 border-t border-black pt-8">
      <div class="flex flex-col items-start justify-between gap-6 lg:flex-row lg:items-center">
        <div class="flex items-center gap-3 text-sm text-black">
         
          <span>© <?php echo esc_html( date('Y') ); ?> Aquilafrique Solutions Limited. All rights reserved.</span>
        </div>
        <div class="flex flex-wrap items-center gap-6 text-xs text-black">
          <?php if ( function_exists( 'get_privacy_policy_url' ) && get_privacy_policy_url() ) : ?>
            <a class="transition-colors hover:text-[#5b112a]" href="<?php echo esc_url( get_privacy_policy_url() ); ?>">Privacy Policy</a>
          <?php endif; ?>
          <a class="transition-colors hover:text-[#5b112a]" href="<?php echo esc_url( home_url('/terms') ); ?>">Terms of Service</a>
          <span class="hidden text-black lg:inline">|</span>
          <span>Designed for accessibility and clarity</span>
        </div>
      </div>
    </div>
  </div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>