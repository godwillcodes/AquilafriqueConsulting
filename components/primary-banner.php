<section class="relative overflow-hidden bg-[#d4a223]" aria-label="Aquilafrique Solutions Limited Hero Banner">
  <!-- Background Video -->
  <video class="absolute inset-0 h-full w-full object-cover" autoplay muted loop playsinline preload="metadata" aria-hidden="true"
    poster="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>">
    <source src="https://www.pexels.com/download/video/8141649/" type="video/mp4" />
  </video>

  <!-- Yellow Tint Overlay for better contrast on text -->
  <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/70 to-transparent mix-blend-multiply" aria-hidden="true"></div>

  <!-- Subtle Pattern on top of tint -->
  <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff08_1px,transparent_1px),linear-gradient(to_bottom,#ffffff08_1px,transparent_1px)] bg-[size:4rem_4rem]" aria-hidden="true"></div>

  <!-- Decorative Gradients -->
  <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
    <div class="absolute top-0 right-0 h-[500px] w-[500px] translate-x-1/3 -translate-y-1/3 rounded-full bg-gradient-to-br from-[#d4a223]/20 to-transparent blur-3xl"></div>
    <div class="absolute bottom-0 left-0 h-[500px] w-[500px] -translate-x-1/3 translate-y-1/3 rounded-full bg-gradient-to-tr from-[#590925]/30 to-transparent blur-3xl"></div>
  </div>

  <div class="relative z-10 mx-auto w-full max-w-7xl px-6 py-24 lg:py-32">
    <div class="grid grid-cols-1 items-center gap-16 lg:grid-cols-12">
      <!-- Content Column -->
      <div class="lg:col-span-8">
        <div class="inline-flex items-center gap-2 rounded-full border border-[#d4a223]/30 bg-[#d4a223]/10 px-4 py-2 backdrop-blur-sm" role="status" aria-live="polite">
          <span class="h-2 w-2 animate-pulse rounded-full bg-[#d4a223]" aria-hidden="true"></span>
          <span class="text-sm font-semibold text-[#d4a223]">Aquilafrique Solutions Limited</span>
        </div>

        <h1 class="mt-8 font-serif max-w-md font-bold  text-[#d4a223] text-4xl" id="hero-title">
          Empowering Africa’s Ideas to Find Form
        </h1>
        
        <div class="mt-8 prose-invert max-w-2xl text-xl leading-relaxed text-white" aria-describedby="hero-title">
          <?php echo the_content(); ?>
        </div>

        <!-- CTA Buttons -->
       <!-- CTA Buttons -->
<div class="mt-10 flex flex-wrap items-center gap-4">
  <!-- Primary Button -->
  <a href="<?php echo esc_url( home_url('/contact-aquilafrique') ); ?>"
     class="group inline-flex items-center justify-center rounded-lg bg-[#5b112a] px-8 py-4 text-base font-semibold text-white shadow-lg transition-all duration-300 hover:bg-[#6a1632] focus-visible:outline-none focus-visible:ring-4 focus-visible:ring-[#d4a223]/80 focus-visible:ring-offset-4 focus-visible:ring-offset-[#0b3435]"
     aria-label="Talk to an Aquilafrique advisor">
    <span>Talk to an advisor</span>
    <svg class="ml-2 h-5 w-5 transition-transform duration-300 group-hover:translate-x-1 motion-reduce:transition-none" 
         fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
    </svg>
  </a>

  <!-- Secondary Button -->
  <a href="/services"
     class="inline-flex items-center justify-center rounded-lg border-2 border-white/80 bg-white/10 px-8 py-4 text-base font-semibold text-white transition-all duration-300 hover:border-[#d4a223] hover:bg-white/20 focus-visible:outline-none focus-visible:ring-4 focus-visible:ring-[#d4a223]/70 focus-visible:ring-offset-4 focus-visible:ring-offset-[#0b3435]"
     aria-label="Explore Aquilafrique services">
    <span>Explore services</span>
  </a>
</div>


        <!-- Trust Badge -->
        <div class="mt-10 flex items-center gap-3">
          <div class="h-px w-12 bg-gradient-to-r from-transparent to-stone-100" aria-hidden="true"></div>
          <p class="text-sm font-medium text-white" aria-live="polite">
            Your partner in bridging the gap between vision and execution
          </p>
        </div>
      </div>

      <!-- Empty right column to keep breathing space on large screens -->
      <div class="lg:col-span-4"></div>
    </div>
  </div>
</section>
