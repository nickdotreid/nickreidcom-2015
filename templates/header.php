<div class="container container-header">
  <header class="banner" role="banner">
    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <?php if (is_front_page()) {
      dynamic_sidebar('sidebar-banner');
    } ?>
    <nav class="navbar navbar-default" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </header>
</div>

