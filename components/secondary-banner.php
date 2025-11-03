<?php
// Primary Banner (Hero)
?>
<section class="relative overflow-hidden bg-[#d4a223]" aria-label="Aquilafrique Inner Page Banner">
  <!-- Background Pattern -->
  <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff08_1px,transparent_1px),linear-gradient(to_bottom,#ffffff08_1px,transparent_1px)] bg-[size:4rem_4rem]" aria-hidden="true"></div>
  
  <!-- Decorative Gradients -->
  <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
    <div class="absolute top-0 right-0 h-[500px] w-[500px] translate-x-1/3 -translate-y-1/3 rounded-full bg-gradient-to-br from-[#5b112a]/60 to-transparent blur-3xl"></div>
    <div class="absolute bottom-0 left-0 h-[500px] w-[500px] -translate-x-1/3 translate-y-1/3 rounded-full bg-gradient-to-tr from-[#5b112a]/60 to-transparent blur-3xl"></div>
  </div>

  <div class="relative mx-auto w-full max-w-4xl px-6 py-16 text-center">
    <h1 id="hero-title" class="font-serif font-bold leading-tight text-[#5b112a] text-4xl sm:text-5xl">
      <?php the_title(); ?>
    </h1>

    <p class="mt-6 text-lg leading-relaxed text-black">
  <?php 
    $subheadline = get_field('page_subheadline'); 
    echo $subheadline ? esc_html($subheadline) : 'We are a business advisory firm committed to co-creating bankable plans, strengthening internal capacity, and guiding execution for measurable impact across Africa.';
  ?>
</p>


    <!-- CTA Button -->
    <div class="mt-10 flex justify-center">
      <a href="<?php echo esc_url( home_url('/contact-aquilafrique') ); ?>"
         class="group inline-flex items-center justify-center rounded-lg bg-[#5b112a] px-8 py-4 text-base font-semibold text-white shadow-lg transition-all duration-300 hover:bg-[#590925] hover:shadow-xl focus-visible:outline-none focus-visible:ring-4 focus-visible:ring-[#d4a223]/80 focus-visible:ring-offset-4 focus-visible:ring-offset-[#d4a223]/30">
        Talk to an advisor
        <svg class="ml-2 h-5 w-5 transition-transform duration-300 group-hover:translate-x-1 motion-reduce:transition-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
        </svg>
      </a>
    </div>
  </div>
</section>
