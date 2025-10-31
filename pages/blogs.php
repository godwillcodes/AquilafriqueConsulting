<?php
/* Template Name: Blogs */
get_header();
get_template_part( 'components/secondary-banner' );
?>
<section class="bg-[#F9F8F6] py-20">
  <div class="max-w-7xl mx-auto px-6 lg:px-0">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mt-0 relative z-10 press-grid">
      <?php
      $blogs_query = new WP_Query([
        'post_type' => 'post',
        'posts_per_page' => -1,
        'ignore_sticky_posts' => true,
      ]);
      if ($blogs_query->have_posts()) : while ($blogs_query->have_posts()) : $blogs_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="group block shadow-md rounded border bg-white border-[#ffffff]/40 rounded-t-[4px] transition-transform duration-300 hover:shadow-lg">
          <div class="overflow-hidden rounded-t-[4px]">
            <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-auto object-contain object-top transition-transform duration-500 group-hover:scale-105')); ?>
            <?php else : ?>
              <img src="https://via.placeholder.com/460x280/EEE/666?text=No+Image" class="w-full h-auto object-contain object-top" alt="No image for <?php the_title_attribute(); ?>">
            <?php endif; ?>
          </div>
          <div class="p-8 bg-white">
            <div class="text-gray-500 text-sm mb-2"><?php echo get_the_date(); ?></div>
            <h3 class="text-lg font-semibold text-[#1F3131] mb-2"><?php the_title(); ?></h3>
            <div class="h-6 md:h-10"></div>
            <span class="inline-flex items-center lg:text-base text-sm font-medium border-b-2 border-[#5b112a]">
              Read More <span class="ml-1 text-lg">→</span>
            </span>
          </div>
        </a>
      <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>
