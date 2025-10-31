<?php
/* Template Name: Services */
get_header();
get_template_part( 'components/secondary-banner' );
?>

<section class="bg-[#F7F7F5] py-12 sm:py-16 px-6 sm:px-8 lg:px-0">
    <div class="max-w-7xl mx-auto">
        <?php
        $service_query = new WP_Query(array(
            'post_type' => 'service',
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'orderby' => 'menu_order',
            'order' => 'ASC',
        ));
        if($service_query->have_posts()): ?>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8 sm:gap-10 lg:gap-12 max-w-7xl mx-auto">
            <?php while($service_query->have_posts()): $service_query->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="group relative bg-white border border-gray-200 shadow-sm overflow-hidden flex flex-col transform transition-all duration-500 hover:-translate-y-1 hover:shadow-md aos-init aos-animate" data-aos="fade-up">
                <div class="overflow-hidden">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail('large', array('class' => 'w-full h-60 object-cover transition-transform duration-700 ease-out group-hover:scale-105')); ?>
                    <?php else: ?>
                        <img src="https://via.placeholder.com/500x300/E3E6E1/aaa?text=Service" alt="No image" class="w-full h-60 object-cover bg-gray-100" />
                    <?php endif; ?>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-2"><?php the_title(); ?></h3>
                    <div class="text-gray-700 mb-6 text-lg flex-1"><?php echo wp_trim_words(get_the_excerpt(), 26, '...'); ?></div>
                    <div class="flex items-center mt-auto text-sm font-semibold text-gray-900 transition-colors duration-300 group-hover:text-[#5b112a]">
                        Learn more
                        <span class="ml-2 text-lg transition-transform duration-300 group-hover:translate-x-1">→</span>
                    </div>
                    <div class="h-0.5 w-8 mt-1 bg-[#5b112a] transition-all duration-300 group-hover:w-24"></div>
                </div>
            </a>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
        <?php else: ?>
            <p class="text-gray-700">No services found.</p>
        <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>
