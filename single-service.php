<?php
get_header();
get_template_part( 'components/secondary-banner' );

?>

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

    <section class="max-w-5xl mx-auto px-6 py-20">
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
                        class="flex items-center mt-auto text-sm font-semibold text-gray-900 transition-colors duration-300 group-hover:text-[#D16555]">
                        Learn more
                        <span class="ml-2 text-lg transition-transform duration-300 group-hover:translate-x-1">→</span>
                    </div>
                    <div class="h-0.5 w-8 mt-1 bg-[#D16555] transition-all duration-300 group-hover:w-24"></div>
                </div>
            </a>
            <?php endwhile; wp_reset_postdata(); endif; ?>
        </div>
    </section>

</main>

<?php get_footer(); ?>