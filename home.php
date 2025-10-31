<?php
get_header();
?>

<section class="bg-[#0b3435] pt-20 pb-12">
  <div class="mx-auto max-w-4xl px-6 text-center">
    <h1 class="font-serif text-4xl font-bold text-white sm:text-5xl mb-4">Insights & Articles</h1>
    <p class="text-lg text-stone-300">Analysis, guides, and case notes for MSMEs, NGOs, and Africa’s advisory leaders.</p>
  </div>
</section>

<section class="relative bg-white py-20">
  <div class="mx-auto max-w-6xl px-6">
    <?php if ( have_posts() ) : ?>
      <div class="grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-3">
        <?php while ( have_posts() ) : the_post(); ?>
          <article class="group overflow-hidden rounded-2xl border border-stone-200 bg-white shadow transition hover:shadow-lg">
            <?php if ( has_post_thumbnail() ) : ?>
              <a href="<?php the_permalink(); ?>" class="block aspect-[16/9] overflow-hidden bg-stone-100">
                <img src="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'large' ) ); ?>" alt="" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy" />
              </a>
            <?php endif; ?>
            <div class="p-5">
              <div class="mb-2 flex flex-wrap gap-2">
                <?php $cats = get_the_category(); if($cats): foreach($cats as $cat): ?>
                  <span class="inline-block rounded-full bg-[#d4a223]/20 px-3 py-1 text-xs font-semibold text-[#0b3435]"> <?php echo esc_html($cat->name); ?> </span>
                <?php endforeach; endif; ?>
              </div>
              <h2 class="font-serif text-xl font-bold text-[#0b3435] mb-2">
                <a href="<?php the_permalink(); ?>" class="hover:text-[#590925]"> <?php the_title(); ?> </a>
              </h2>
              <p class="text-sm text-stone-600 line-clamp-3 mb-3"> <?php echo esc_html( wp_strip_all_tags(get_the_excerpt()) ); ?> </p>
              <div class="flex items-center gap-2 text-xs text-stone-400">
                <span><?php echo esc_html(get_the_date()); ?></span>
              </div>
              <a href="<?php the_permalink(); ?>" class="mt-4 inline-block font-semibold text-[#d4a223] hover:text-[#f0b929]">Read more →</a>
            </div>
          </article>
        <?php endwhile; ?>
      </div>
      <div class="mt-12 flex justify-center">
        <?php the_posts_pagination([ 'prev_text' => 'Previous', 'next_text' => 'Next', 'mid_size' => 2 ]); ?>
      </div>
    <?php else: ?>
      <div class="text-center text-stone-500">No articles available yet.</div>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
