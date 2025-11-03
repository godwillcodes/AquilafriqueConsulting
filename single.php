<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package PiedmontGlobal
 */

get_header();
get_template_part( 'components/secondary-banner' );
?>


<section class=" lg:pt-0 pt-10">
    <div class="max-w-7xl mx-auto px-4 lg:px-0">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"
            class="w-full h-auto lg:h-[600px] shadow-sm relative z-10  mt-0 md:-mt-48 object-cover object-center">
    </div>
</section>

<section class="py-12 lg:py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-0">
        <?php 
      $content = get_post_field('post_content', get_the_ID());
      $word_count = str_word_count( wp_strip_all_tags( $content ) );
      $min_words_for_toc = 500; 
      
      // Check if content has headings (h2-h6) for TOC
      $has_headings = preg_match('/<h([2-6])(.*?)>(.*?)<\/h[2-6]>/', $content);
      $has_toc = ($word_count >= $min_words_for_toc && $has_headings);
    ?>

        <div class="grid grid-cols-1 <?php echo $has_toc ? 'lg:grid-cols-3 gap-12 lg:gap-12' : ''; ?>">

            <!-- TOC -->
            <?php if ($has_toc): ?>
            <aside class="lg:col-span-1 lg:sticky lg:top-32 self-start order-1 lg:order-1">
                <div class="table-of-contents bg-white p-2  ">
                    <?php 
                    // Generate TOC if not already generated
                    if (empty($GLOBALS['pg_toc'])) {
                        pg_generate_toc($content);
                    }
                    echo $GLOBALS['pg_toc']; 
                    ?>
                </div>
            </aside>
            <?php endif; ?>

            <!-- Blog Content -->
            <article
                class="<?php echo $has_toc ? 'lg:col-span-2' : 'col-span-1'; ?> prose prose-lg max-w-none text-black order-2 lg:order-2">

                <?php the_content(); ?>
            </article>

        </div>
    </div>
</section>



<?php
get_footer();