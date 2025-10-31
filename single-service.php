<?php
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
          <?php the_title(); ?>
          </h1>
        
        <p class="mt-8 max-w-2xl prose-invert text-lg leading-relaxed text-stone-300" aria-describedby="hero-title">
        <?php echo get_field('page_subheadline'); ?>
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

<main class="bg-white">

    <!-- Service Intro Section -->
    <section class="bg-white lg:pt-0 pt-10" aria-labelledby="why-piedmont-title">
        <div class="max-w-7xl mx-auto px-6 lg:px-0 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <!-- Left side: Title and Description -->
            <div>
                <h2 id="why-piedmont-title"
                    class="text-2xl mt-10 md:text-4xl lg:text-4xl max-w-sm font-bold mb-6 aos-init aos-animate"
                    data-aos="fade-up" data-aos-duration="400">
                    What is <?php the_title(); ?> ? </h2>
                <div class="text-base md:text-lg text-black max-w-xl mb-6 prose aos-init aos-animate" data-aos="fade-up"
                    data-aos-duration="400" data-aos-delay="50">
                    <?php echo get_field('definition'); ?>
                </div>
            </div>

            <!-- Right side: Image -->
            <div class="flex justify-center lg:justify-end aos-init aos-animate" data-aos="fade-up"
                data-aos-duration="400" data-aos-delay="100">
                <img src=" <?php echo get_field('definition_image'); ?>"
                    alt="<?php the_title(); ?>"
                    class="max-w-full h-[300px] lg:h-[500px] object-contain">
            </div>

        </div>
    </section>

    <section class="max-w-5xl mx-auto px-6 pb-20">
    <h2 class="font-serif text-4xl font-bold text-black mb-12 text-center leading-tight tracking-tight">
        Core Offerings
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
        <?php if( have_rows('offerings') ): ?>
            <?php while( have_rows('offerings') ): the_row(); ?>
            <div class="bg-white border border-black rounded-2xl px-10 py-14 flex flex-col items-center justify-between shadow-[0_2px_12px_0_rgba(0,0,0,0.04)] hover:shadow-lg transition-shadow duration-300 group">
                <div class="font-serif text-xl font-bold text-black mb-4 text-center tracking-tight leading-snug group-hover:underline underline-offset-4 transition-all">
                    <?php the_sub_field('title'); ?>
                </div>
                <div class="text-center text-base text-neutral-900 leading-relaxed max-w-xs opacity-85">
                    <?php the_sub_field('description'); ?>
                </div>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>



    <!-- Our Process -->
    <section class="max-w-5xl mx-auto px-6 py-16">
    <h2 class="font-serif text-4xl font-bold text-black mb-14 text-center tracking-tight">Our Process</h2>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
        <?php if( have_rows('process') ): $i = 1; ?>
            <?php while( have_rows('process') ): the_row(); ?>
            <div class="flex flex-col items-center bg-white border border-black rounded-xl px-7 py-10 shadow-sm hover:shadow-lg transition-shadow duration-300">
                <div class="flex items-center justify-center w-12 h-12 rounded-full border border-black bg-white font-mono text-2xl font-bold text-black mb-6 tracking-wide" style="letter-spacing:.05em;">
                    <?php echo $i; ?>
                </div>
                <div class="font-serif text-lg font-bold text-black mb-4 text-center leading-tight tracking-tight">
                    <?php the_sub_field('title'); ?>
                </div>
                <div class="text-center text-base text-neutral-900 leading-relaxed opacity-80">
                    <?php the_sub_field('description'); ?>
                </div>
            </div>
            <?php $i++; endwhile; ?>
        <?php endif; ?>
    </div>
</section>



    <!-- What You Gain -->
    <section class="bg-white lg:pt-0 pt-10" aria-labelledby="why-piedmont-title">
        <div class="max-w-7xl mx-auto px-6 lg:px-0 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <!-- Left side: Title and Description -->
            <div>
                <h2 id="why-piedmont-title"
                    class="text-2xl mt-10 md:text-3xl lg:text-4xl max-w-sm font-bold mb-6 aos-init aos-animate"
                    data-aos="fade-up" data-aos-duration="400">
                    What You Gain
                </h2>
                <div class="text-base md:text-lg text-black max-w-xl mb-6 prose aos-init aos-animate" data-aos="fade-up"
                    data-aos-duration="400" data-aos-delay="50">
                    <?php echo get_field('what_you_gain'); ?>

                </div>
            </div>

            <!-- Right side: Image -->
            <div class="flex justify-center lg:justify-end aos-init aos-animate" data-aos="fade-up"
                data-aos-duration="400" data-aos-delay="100">
                <img src="<?php echo get_field('gain_image'); ?>"
                    alt="<?php the_title(); ?>"
                    class="max-w-full h-[300px] lg:h-[500px] object-contain">
            </div>

        </div>
    </section>

    <!-- Related Services - Fetched Dynamically -->
    <section class="max-w-5xl mx-auto px-6 py-12">
        <h2 class="font-serif  text-2xl lg:text-4xl font-bold text-neutral-900 mb-8 text-center">Related Services</h2>
        <div class="grid gap-6 md:grid-cols-2">
            <?php
            $current_id = get_the_ID();
            $args = [
                'post_type' => 'service',
                'posts_per_page' => 2,
                'post__not_in' => [$current_id]
            ];
            $related_services = new WP_Query($args);
            if ($related_services->have_posts()) : while ($related_services->have_posts()) : $related_services->the_post(); ?>
            <a href="<?php the_permalink(); ?>"
                class="group relative bg-white border border-gray-200 shadow-sm overflow-hidden flex flex-col transform transition-all duration-500 hover:-translate-y-1 hover:shadow-md aos-init aos-animate"
                data-aos="fade-up">
                <div class="overflow-hidden">
                    <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail('large', array('class' => 'w-full h-60 object-cover transition-transform duration-700 ease-out group-hover:scale-105')); ?>
                    <?php else: ?>
                    <img src="https://via.placeholder.com/500x300/E3E6E1/aaa?text=Service" alt="No image"
                        class="w-full h-60 object-cover bg-gray-100" />
                    <?php endif; ?>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-2"><?php the_title(); ?></h3>
                    <div class="text-gray-700 mb-6 text-lg flex-1">
                        <?php echo wp_trim_words(get_the_excerpt(), 26, '...'); ?></div>
                    <div
                        class="flex items-center mt-auto text-sm font-semibold text-gray-900 transition-colors duration-300 group-hover:text-[#5b112a]">
                        Learn more
                        <span class="ml-2 text-lg transition-transform duration-300 group-hover:translate-x-1">→</span>
                    </div>
                    <div class="h-0.5 w-8 mt-1 bg-[#5b112a] transition-all duration-300 group-hover:w-24"></div>
                </div>
            </a>
            <?php endwhile; wp_reset_postdata(); endif; ?>
        </div>
    </section>

</main>

<?php get_footer(); ?>