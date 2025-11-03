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
    <div
        class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff08_1px,transparent_1px),linear-gradient(to_bottom,#ffffff08_1px,transparent_1px)] bg-[size:4rem_4rem]">
    </div>

    <div class="relative mx-auto w-full max-w-7xl px-6 py-20">
        <div class="mx-auto max-w-4xl text-center">
            <div
                class="inline-flex items-center gap-2 rounded-full border border-[#5b112a]/30 bg-[#5b112a]/10 px-4 py-2 backdrop-blur-sm">
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
                <a href="<?php echo esc_url( home_url('/contact') ); ?>"
                    class="group inline-flex items-center justify-center rounded-lg bg-[#5b112a] px-8 py-4 text-base font-semibold text-white shadow-lg transition-all hover:bg-[#7d1841] hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-[#5b112a] focus:ring-offset-2 focus:ring-offset-[#d4a123]">
                    Talk to an advisor
                    <svg class="ml-2 h-5 w-5 transition-transform group-hover:translate-x-1" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
                <a href="<?php echo esc_url( home_url('/services') ); ?>"
                    class="inline-flex items-center justify-center rounded-lg border-2 border-black bg-white px-8 py-4 text-base font-semibold text-black backdrop-blur-sm transition-colors hover:border-[#5b112a] hover:text-[#5b112a] hover:bg-[#fff7eb] focus:outline-none focus:ring-2 focus:ring-black focus:ring-offset-2 focus:ring-offset-[#d4a123]">
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
    <div
        class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff08_1px,transparent_1px),linear-gradient(to_bottom,#ffffff08_1px,transparent_1px)] bg-[size:4rem_4rem]">
    </div>

    <div class="relative mx-auto w-full max-w-7xl px-6 py-20">
        <div class="grid grid-cols-1 gap-12 lg:grid-cols-12">
            <!-- Brand Column -->
            <div class="lg:col-span-4">

                <p class=" text-base leading-relaxed text-black">
                    Aquilafrique Solutions Limited is a business advisory firm supporting MSMEs and NGOs across Africa
                    through strategic planning, management, and capacity development.
                </p>

                <!-- Social Links (if you want black icons, change text-black or keep subtle) -->
                <div class="mt-6 flex items-center gap-3">
                    <!-- LinkedIn -->
                    <a href="#"
                        class="flex h-10 w-10 items-center justify-center rounded-lg border border-black bg-white text-black backdrop-blur-sm transition-colors hover:border-[#5b112a] hover:text-[#5b112a]"
                        aria-label="LinkedIn">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                        </svg>
                    </a>

                    <!-- Instagram -->
                    <a href="https://www.instagram.com/aquilafrique?igsh=MXR6bjdtNDFtZzd6dA==" target="_blank"
                        class="flex h-10 w-10 items-center justify-center rounded-lg border border-black bg-white text-black backdrop-blur-sm transition-colors hover:border-[#5b112a] hover:text-[#5b112a]"
                        aria-label="Instagram">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>

                    <!-- Facebook -->
                    <a href="https://www.facebook.com/profile.php?id=61582871512125" target="_blank"
                        class="flex h-10 w-10 items-center justify-center rounded-lg border border-black bg-white text-black backdrop-blur-sm transition-colors hover:border-[#5b112a] hover:text-[#5b112a]"
                        aria-label="Facebook">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </a>

                    <!-- WhatsApp -->
                    <a href="#" target="_blank"
                        class="flex h-10 w-10 items-center justify-center rounded-lg border border-black bg-white text-black backdrop-blur-sm transition-colors hover:border-[#5b112a] hover:text-[#5b112a]"
                        aria-label="WhatsApp">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                        </svg>
                    </a>

                    <a href="#"
                        class="flex h-10 w-10 items-center justify-center rounded-lg border border-black bg-white text-black backdrop-blur-sm transition-colors hover:border-[#5b112a] hover:text-[#5b112a]"
                        aria-label="X">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Links Grid -->
            <div class="lg:col-span-8">
                <div class="grid grid-cols-1 gap-10 sm:grid-cols-3">
                    <!-- Quick Links -->
                    <div>
                        <h3 class="font-serif text-base font-bold text-[#5b112a]">Quick Links</h3>
                        <ul class="mt-5 space-y-3 text-base">
                            <?php
    $menu_items = wp_get_nav_menu_items(4); // Menu ID 4
    if ($menu_items) :
      foreach ($menu_items as $item) :
  ?>
                            <li>
                                <a class="group inline-flex items-center text-black transition-colors hover:text-[#5b112a]"
                                    href="<?php echo esc_url($item->url); ?>">
                                    <?php echo esc_html($item->title); ?>
                                </a>
                            </li>
                            <?php
      endforeach;
    endif;
  ?>
                        </ul>

                    </div>

                    <!-- Services -->
                    <div>
                        <h3 class="font-serif text-base font-bold text-[#5b112a]">Services</h3>
                        <ul class="mt-5 space-y-3 text-base text-black">
                            <?php
    $args = array(
      'post_type' => 'service',
      'posts_per_page' => -1,
      'post_status' => 'publish',
      'orderby' => 'menu_order',
      'order' => 'ASC'
    );
    $services = new WP_Query($args);
    if ($services->have_posts()) :
      while ($services->have_posts()) : $services->the_post();
  ?>
                            <li class="flex items-start gap-2">
                                <a href="<?php the_permalink(); ?>"
                                    class="text-black transition-colors hover:text-[#5b112a]">
                                    <?php the_title(); ?>
                                </a>
                            </li>
                            <?php
      endwhile;
      wp_reset_postdata();
    endif;
  ?>
                        </ul>


                    </div>

                    <!-- Contact -->
                    <div>
                        <h3 class="font-serif text-base font-bold text-[#5b112a]">Contact</h3>
                        <ul class="mt-5 space-y-4 text-base">
                            <li class="flex items-start gap-3">
                                <svg class="mt-0.5 h-5 w-5 flex-shrink-0 text-[#5b112a]" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <a class="text-black transition-colors hover:text-[#5b112a]"
                                    href="mailto:info@aquilafrique.com">info@aquilafrique.com</a>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="mt-0.5 h-5 w-5 flex-shrink-0 text-[#5b112a]" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <a class="text-black transition-colors hover:text-[#5b112a]"
                                    href="tel:+25470120127">+254 701 201 27</a>
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

                    <span>© <?php echo esc_html( date('Y') ); ?> Aquilafrique Solutions Limited. All rights
                        reserved.</span>
                </div>
                <div class="flex flex-wrap items-center gap-6 text-xs text-black">
                    <?php if ( function_exists( 'get_privacy_policy_url' ) && get_privacy_policy_url() ) : ?>
                    <a class="transition-colors hover:text-[#5b112a]"
                        href="<?php echo esc_url( get_privacy_policy_url() ); ?>">Privacy Policy</a>
                    <?php endif; ?>
                    <a class="transition-colors hover:text-[#5b112a]"
                        href="<?php echo esc_url( home_url('/terms') ); ?>">Terms of Service</a>
                    <span class="hidden text-black lg:inline">|</span>
                    <span>Designed for accessibility and clarity</span>
                </div>
            </div>
        </div>
    </div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Cookie Consent -->
<div id="cookie-consent" class="fixed inset-x-0 bottom-0 z-[60] hidden">
    <div class="mx-auto w-full max-w-7xl px-6 pb-6">
        <div
            class="rounded-xl border border-black/20 bg-white/95 shadow-xl backdrop-blur supports-[backdrop-filter]:bg-white/80">
            <div class="flex flex-col gap-4 p-5 md:flex-row md:items-center md:justify-between">
                <p class="text-sm text-black">
                    We use cookies to enhance your browsing experience, analyze site traffic, and personalize content.
                    By clicking "Accept", you consent to our use of cookies.
                </p>
                <div class="flex gap-3">
                    <button id="cookie-decline"
                        class="rounded-lg border border-black px-4 py-2 text-sm font-semibold text-black transition-colors hover:bg-black hover:text-white">Decline</button>
                    <button id="cookie-accept"
                        class="rounded-lg bg-[#5b112a] px-5 py-2 text-sm font-semibold text-white shadow hover:bg-[#7d1841]">Accept</button>
                </div>
            </div>
        </div>
    </div>
    <script>
    (function() {
        try {
            var key = 'aquilafrique_cookie_consent_v1';
            var banner = document.getElementById('cookie-consent');
            var acceptBtn = document.getElementById('cookie-accept');
            var declineBtn = document.getElementById('cookie-decline');
            var consent = localStorage.getItem(key);
            if (!consent) {
                banner.classList.remove('hidden');
            }

            function setConsent(value) {
                localStorage.setItem(key, value);
                banner.classList.add('hidden');
            }
            if (acceptBtn) acceptBtn.addEventListener('click', function() {
                setConsent('accepted');
            });
            if (declineBtn) declineBtn.addEventListener('click', function() {
                setConsent('declined');
            });
        } catch (e) {}
    })();
    </script>
</div>

</body>

</html>