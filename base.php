<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <div class="wrapper-top">
    <div class="wrap" role="document">
      <?php
        do_action('get_header');
        get_template_part('templates/header');
      ?>
      <main class="main" role="main">
        <?php include roots_template_path(); ?>
      </main><!-- /.main -->
    </div><!-- /.wrap -->
  </div><!-- /.wrapper-top -->

  <?php get_template_part('templates/footer'); ?>

  <?php wp_footer(); ?>

</body>
</html>
