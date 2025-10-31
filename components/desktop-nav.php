<?php
// Desktop Navigation (visible md+)
?>
<header class="sticky top-0 z-50 hidden border-b border-white/20 bg-white/80 shadow-sm backdrop-blur-xl md:block" role="banner">
  <div class="mx-auto w-full max-w-7xl">
    <div class="flex h-20 items-center justify-between">
      <!-- Logo & Brand -->
      <div class="flex items-center gap-10">
        <a href="<?php echo esc_url( home_url('/') ); ?>" class="group flex items-center gap-3 text-[#0b3435]" aria-label="<?php bloginfo('name'); ?> home">
          <?php if ( has_custom_logo() ) : ?>
            <div class="flex h-32 w-32 items-center overflow-hidden rounded-lg transition-transform group-hover:scale-105">
              <?php the_custom_logo(); ?>
            </div>
          <?php else : ?>
            <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-gradient-to-br from-[#d4a223] to-[#f0b929] shadow-md transition-transform group-hover:scale-105">
              <svg class="h-7 w-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
              </svg>
            </div>
          <?php endif; ?>
         
        </a>

        <!-- Main Navigation -->
        <?php
        wp_nav_menu([
          'menu'            => 4,
          'container'        => 'nav',
          'container_class'  => 'main-navigation',
          'container_aria_label' => 'Main navigation',
          'menu_class'       => 'flex items-center gap-1 text-md font-bold',
          'fallback_cb'      => false,
          'link_before'      => '<span class="relative inline-flex items-center gap-1 rounded-lg px-4 py-2 text-[#0b3435] transition-all hover:bg-[#0b3435]/5 hover:text-[#590925] focus:outline-none focus:ring-2 focus:ring-[#d4a223]/50 focus:ring-offset-2">',
          'link_after'       => '</span>',
        ]);
        ?>
      </div>

      <!-- Right Side Actions -->
      <div class="flex items-center gap-4">
       

        <!-- Contact CTA -->
        <a href="<?php echo esc_url( home_url('/contact-aquilafrique') ); ?>" class="group inline-flex items-center justify-center gap-2 rounded-lg bg-[#5b112a] px-6 py-2.5 text-base font-semibold text-white shadow-md transition-all hover:shadow-lg hover:scale-105 focus:outline-none focus:ring-2 focus:ring-[#d4a223] focus:ring-offset-2">
          <span>Contact Us</span>
          <svg class="h-4 w-4 transition-transform group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
          </svg>
        </a>
      </div>
    </div>
  </div>
</header>

<!-- Mobile Navigation -->
<header class="sticky top-0 z-50 border-b border-white/20 bg-white/80 shadow-sm backdrop-blur-xl md:hidden" role="banner">
  <div class="mx-auto w-full max-w-7xl px-4">
    <div class="flex h-16 items-center justify-between">
      <!-- Mobile Logo -->
      <a href="<?php echo esc_url( home_url('/') ); ?>" class="flex items-center gap-2.5 text-[#0b3435]" aria-label="<?php bloginfo('name'); ?> home">
        <?php if ( has_custom_logo() ) : ?>
          <div class="flex h-10 w-10 items-center overflow-hidden rounded-lg">
            <?php the_custom_logo(); ?>
          </div>
        <?php else : ?>
          <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-gradient-to-br from-[#d4a223] to-[#f0b929] shadow-md">
            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
            </svg>
          </div>
        <?php endif; ?>
        <span class="font-serif text-lg font-bold tracking-tight text-[#0b3435]"><?php bloginfo('name'); ?></span>
      </a>

      <!-- Mobile Menu Button -->
      <button type="button" class="flex h-10 w-10 items-center justify-center rounded-lg text-[#0b3435] transition-all hover:bg-stone-100 focus:outline-none focus:ring-2 focus:ring-[#d4a223]/50" aria-label="Open menu" id="mobile-menu-button">
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
  </div>

  <!-- Mobile Menu Panel (hidden by default) -->
  <div class="hidden border-t border-white/20 bg-white/95 backdrop-blur-xl" id="mobile-menu-panel">
    <div class="mx-auto w-full max-w-7xl px-4 py-6">
      <?php
      wp_nav_menu([
        'menu'            => 4,
        'container'        => 'nav',
        'container_class'  => 'mobile-navigation',
        'container_aria_label' => 'Mobile navigation',
        'menu_class'       => 'flex flex-col gap-1',
        'fallback_cb'      => false,
        'link_before'      => '<span class="block rounded-lg px-4 py-3 text-base font-medium text-[#0b3435] transition-all hover:bg-[#0b3435]/5 hover:text-[#590925]">',
        'link_after'       => '</span>',
      ]);
      ?>

      <!-- Mobile CTA -->
      <div class="mt-6 border-t border-stone-200 pt-6">
        <a href="<?php echo esc_url( home_url('/contact-aquilafrique') ); ?>" class="flex w-full items-center justify-center gap-2 rounded-lg bg-gradient-to-r from-[#d4a223] to-[#f0b929] px-6 py-3 text-base font-semibold text-white shadow-md">
          <span>Contact Us</span>
          <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
          </svg>
        </a>
      </div>
    </div>
  </div>
</header>

<!-- Mobile Menu Toggle Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  const menuButton = document.getElementById('mobile-menu-button');
  const menuPanel = document.getElementById('mobile-menu-panel');
  
  if (menuButton && menuPanel) {
    menuButton.addEventListener('click', function() {
      const isHidden = menuPanel.classList.contains('hidden');
      
      if (isHidden) {
        menuPanel.classList.remove('hidden');
        menuButton.setAttribute('aria-label', 'Close menu');
        menuButton.innerHTML = '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>';
      } else {
        menuPanel.classList.add('hidden');
        menuButton.setAttribute('aria-label', 'Open menu');
        menuButton.innerHTML = '<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>';
      }
    });
  }
});
</script>