<section class="relative overflow-hidden bg-[#d4a223]" aria-label="Aquilafrique Solutions Limited Hero Banner">
  <!-- Background Pattern Decorative, hidden from assistive tech -->
  <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff08_1px,transparent_1px),linear-gradient(to_bottom,#ffffff08_1px,transparent_1px)] bg-[size:4rem_4rem]" aria-hidden="true"></div>

  <!-- Decorative Gradients -->
  <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
    <div class="absolute top-0 right-0 h-[500px] w-[500px] translate-x-1/3 -translate-y-1/3 rounded-full bg-gradient-to-br from-[#d4a223]/20 to-transparent blur-3xl"></div>
    <div class="absolute bottom-0 left-0 h-[500px] w-[500px] -translate-x-1/3 translate-y-1/3 rounded-full bg-gradient-to-tr from-[#590925]/30 to-transparent blur-3xl"></div>
  </div>

  <div class="relative mx-auto w-full max-w-7xl px-6 py-24 lg:py-32">
    <div class="grid grid-cols-1 items-center gap-16 lg:grid-cols-12">
      <!-- Content Column -->
      <div class="lg:col-span-6">
        <div class="inline-flex items-center gap-2 rounded-full border border-[#5b112a]/30 bg-[#5b112a]/10 px-4 py-2 backdrop-blur-sm" role="status" aria-live="polite">
          <span class="h-2 w-2 animate-pulse rounded-full bg-[#5b112a]" aria-hidden="true"></span>
          <span class="text-sm font-semibold text-[#5b112a]">Aquilafrique Solutions Limited</span>
        </div>

        <h1 class="mt-8 font-serif max-w-md font-bold  text-[#5b112a] text-4xl" id="hero-title">
          Empowering Africa’s Ideas to Find Form
        </h1>
        
        <div class="mt-8 prose-invert max-w-2xl text-lg leading-relaxed text-black" aria-describedby="hero-title">
          <?php echo the_content(); ?>
        </div>

        <!-- CTA Buttons -->
        <div class="mt-10 flex flex-wrap items-center gap-4">
          <a href="<?php echo esc_url( home_url('/contact-aquilafrique') ); ?>"
             class="group inline-flex items-center justify-center rounded-lg bg-[#5b112a] px-8 py-4 text-base font-semibold text-white shadow-lg transition-all hover:bg-[#590925] hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-[#d4a223] focus:ring-offset-2 focus:ring-offset-[#0b3435]"
             aria-label="Talk to an Aquilafrique advisor">
            Talk to an advisor
            <svg class="ml-2 h-5 w-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
          </a>
          <a href="/services" class="inline-flex items-center justify-center rounded-lg border-2 border-black bg-white/5 px-8 py-4 text-base font-semibold text-black backdrop-blur-sm transition-all hover:border-[#590925] hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-[#0b3435]"
             aria-label="Explore Aquilafrique services">
            Explore services
          </a>
        </div>

        <!-- Trust Badge -->
        <div class="mt-10 flex items-center gap-3">
          <div class="h-px w-12 bg-gradient-to-r from-transparent to-stone-900" aria-hidden="true"></div>
          <p class="text-sm font-medium text-black" aria-live="polite">
            Your partner in bridging the gap between vision and execution
          </p>
        </div>
      </div>

      <!-- Visual Column with Image -->
      <div class="lg:col-span-6">
        <div class="relative">
          <!-- Hero Image replaces abstract grid -->
          <img
  src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>"
  alt="<?php echo esc_attr(get_the_title()); ?> Featured Image"
  width="400"
  height="500"
  class="mx-auto w-full h-[500px] max-w-md rounded-2xl border border-white/10 shadow-2xl backdrop-blur-sm object-cover"
/>


          <!-- Accessible floating stats -->
          <div class="absolute -bottom-6 -left-6 rounded-xl border border-white/20 bg-[#590925]/90 p-4 shadow-xl backdrop-blur-md" role="region" aria-label="Projects Delivered">
            <p class="text-2xl font-bold text-white">150+</p>
            <p class="text-xs text-stone-300">Projects Delivered</p>
          </div>

          <div class="absolute -right-6 -top-6 rounded-xl border border-white/20 bg-[#0b3435]/90 p-4 shadow-xl backdrop-blur-md" role="region" aria-label="Years Experience">
            <p class="text-2xl font-bold text-white">15+</p>
            <p class="text-xs text-white/90">Years Experience</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
