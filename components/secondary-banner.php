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
          <?php the_title(); ?>
          </h1>
        
        <p class="mt-8 max-w-2xl text-lg leading-relaxed text-stone-300" aria-describedby="hero-title">
        We are a business advisory firm committed to co-creating bankable plans, strengthening internal capacity, and guiding execution for measurable impact across Africa.
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