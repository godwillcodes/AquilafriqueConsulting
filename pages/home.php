<?php
/**
 * Template Name: Home
 * Description: 
 */
get_header();
?>

<?php get_template_part( 'components/primary-banner' ); ?>

<!-- Target Clients Section -->
<!-- Target Clients Section -->
<section aria-labelledby="targetclients-title" class="relative bg-white py-20">
    <div class="mx-auto w-full max-w-7xl px-6">
        <div class="mx-auto max-w-4xl text-center">
            <p class="text-sm font-semibold uppercase tracking-wider text-[#590925]">Who We Serve</p>
            <h2 id="targetclients-title" class="mt-3 font-serif font-bold text-[#0b3435] text-3xl lg:text-4xl">Target Clients</h2>
            <p class="mt-5 text-lg leading-relaxed text-stone-600">
                Our services are crafted for diverse organizations and changemakers across Africa. Explore our main client groups below.
            </p>
        </div>
        
        <?php if( have_rows('target_clients') ): ?>
        <div class="mt-16 grid grid-cols-1 gap-8 lg:grid-cols-3">
            <?php while( have_rows('target_clients') ): the_row(); 
                $icon      = get_sub_field('icon'); // array with url, alt, etc.
                $title     = get_sub_field('title');
                $desc      = get_sub_field('description');
            ?>
            <div class="group relative rounded-2xl border border-[#5b112a]/40 bg-white/5 p-8 backdrop-blur-sm transition-all hover:border-black/80 hover:bg-[#d4a223]/5">
                <div class="mb-6 inline-flex h-12 w-12 items-center justify-center rounded-[4px] bg-[#d4a223] text-white">
                    <?php if ($icon && isset($icon['url'])) : ?>
                        <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt'] ?: $title); ?>" class="h-8 w-8 object-contain mx-auto" />
                    <?php else : ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                        </svg>
                    <?php endif; ?>
                </div>
                <h3 class="font-serif text-xl font-bold text-black"><?php echo esc_html($title); ?></h3>
                <p class="mt-4 text-sm leading-relaxed text-black"><?php echo esc_html($desc); ?></p>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- End Target Clients Section -->

<section id="services" aria-labelledby="services-title" class="relative bg-gray-100 py-24">
    <div
        class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff08_1px,transparent_1px),linear-gradient(to_bottom,#ffffff08_1px,transparent_1px)] bg-[size:4rem_4rem]">
    </div>

    <div class="relative mx-auto w-full max-w-7xl px-6">
        <div class="mx-auto max-w-4xl text-center">
            <p class="text-sm font-semibold uppercase tracking-wider text-[#590925]">Our Expertise</p>
            <h2 id="services-title" class="mt-3 font-serif font-bold text-[#0b3435] text-3xl lg:text-4xl">Services</h2>
            <p class="mt-5 text-lg leading-relaxed text-black">Advisory built to bridge vision and execution —
                structured, collaborative, and results-focused.</p>
        </div>

        <?php
    $args = array(
      'post_type' => 'service',
      'posts_per_page' => 6,
      'post_status' => 'publish',
      'orderby' => 'menu_order',
      'order' => 'ASC'
    );
    $services = new WP_Query($args);
    if ($services->have_posts()) :
    ?>
        <div class="mt-16 grid grid-cols-1 gap-8 lg:grid-cols-3">
            <?php while ($services->have_posts()) : $services->the_post(); ?>
            <?php
            $icon_svg = get_field('icon_svg');
            $excerpt = get_the_excerpt();
          ?>
            <div
                class="group relative rounded-2xl border border-[#5b112a]/40 bg-white/5 p-8 backdrop-blur-sm transition-all hover:border-[#d4a223]/80 hover:bg-[#d4a223]/5">
                <div class="mb-6 inline-flex h-12 w-12 items-center justify-center rounded-lg bg-[#5b112a] text-white">
                    <?php if ($icon_svg) : ?>
                        <?php echo $icon_svg; ?>
                    <?php else : ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                        </svg>
                    <?php endif; ?>
                </div>

                <h3 class="font-serif text-xl font-bold text-black"><?php the_title(); ?></h3>
                <p class="mt-4 text-sm leading-relaxed text-black"><?php echo esc_html($excerpt); ?></p>

                <a href="<?php the_permalink(); ?>"
                   class="mt-6 inline-flex items-center text-sm font-semibold text-black transition-colors hover:text-[#f0b929]">
                    Learn more
                    <svg class="ml-2 h-4 w-4 transition-transform group-hover:translate-x-1" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
        <?php endif; ?>

        <div class="mt-12 flex justify-center">
            <a href="<?php echo esc_url( home_url('/services') ); ?>"
               class="inline-flex items-center justify-center rounded-lg border-2 border-[#590925] bg-[#590925] px-8 py-4 text-base font-semibold text-white shadow-lg transition-all hover:bg-red-700 hover:border-red-700 hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-offset-2 focus:ring-offset-stone-100">
                View all services
                <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </div>
</section>



<?php
// Insights / Blog section – latest posts
$insights_query = new WP_Query(
  array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'ignore_sticky_posts' => true,
  )
);
?>

<!-- Insights Section -->
<section aria-labelledby="insights-title" class="relative bg-white py-24">
    <div class="mx-auto w-full max-w-7xl px-6">
        <div class="mx-auto max-w-4xl text-center">
            <p class="text-sm font-semibold uppercase tracking-wider text-[#590925]">Knowledge Hub</p>
            <h2 id="insights-title" class="mt-3 font-serif  font-bold text-[#0b3435] sm:text-4xl">Insights</h2>
            <p class="mt-5 text-lg leading-relaxed text-stone-600">Practitioner notes on planning, execution, and
                capacity building for MSMEs and NGOs.</p>
        </div>

        <section class="bg-[#F9F8F6] py-20">
            <div class="">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mt-0  relative z-10 press-grid">
                    <?php if ( $insights_query->have_posts() ) : while ( $insights_query->have_posts() ) : $insights_query->the_post(); ?>
                    <a href="<?php the_permalink(); ?>"
                        class="group block shadow-md rounded border bg-white border-[#ffffff]/40 rounded-t-[4px] transition-transform duration-300 hover:shadow-lg">
                        <div class="overflow-hidden rounded-t-[4px]">
                            <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-auto object-contain object-top transition-transform duration-500 group-hover:scale-105')); ?>
                            <?php else : ?>
                            <img src="https://via.placeholder.com/460x280/EEE/666?text=No+Image"
                                class="w-full h-auto object-contain object-top"
                                alt="No image for <?php the_title_attribute(); ?>">
                            <?php endif; ?>
                        </div>
                        <div class="p-8 bg-white">
                            <div class="text-gray-500 text-sm mb-2"><?php echo get_the_date(); ?></div>
                            <h3 class="text-lg font-semibold text-[#1F3131] mb-2"><?php the_title(); ?></h3>
                            <div class="h-6 md:h-10"></div>
                            <span
                                class="inline-flex items-center lg:text-base text-sm font-medium border-b-2 border-[#5b112a]">
                                Read More <span class="ml-1 text-lg">→</span>
                            </span>
                        </div>
                    </a>
                    <?php endwhile; wp_reset_postdata(); endif; ?>
                </div>

            </div>
        </section>

        <div class="mt-12 flex justify-center">
        <a href="<?php echo esc_url( home_url('/blog') ); ?>"
               class="inline-flex items-center justify-center rounded-lg border-2 border-[#590925] bg-[#590925] px-8 py-4 text-base font-semibold text-white shadow-lg transition-all hover:bg-[#590925] hover:border-[#590925] hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-offset-2 focus:ring-offset-stone-100">
                View all insights
                <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </div>
</section>

<?php
get_footer();
?>