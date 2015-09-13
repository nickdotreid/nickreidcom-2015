<header class="banner" role="banner">
  <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
  <?php if (is_front_page()) {
    dynamic_sidebar('sidebar-banner');
  } ?>
  <nav class="navbar navbar-default sticky" role="navigation">
    <div class="stuck-only">
      <ul class="nav navbar-nav nav-page">
        <li class="icon icon-top">
          <a class="scroll-to-top" href="#"><i></i><span>Back to top</span></a>
        </li>
      </ul>
    </div>
    <div class="stuck-sm">
    <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav'));
      endif;
    ?>
    </div>
  </nav>
</header>
