<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <div class="wrapper-top">
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>

    <div class="wrap" role="document">
      <main class="main" role="main">
        <?php include roots_template_path(); ?>
      </main><!-- /.main -->
    </div><!-- /.wrap -->
  </div><!-- /.container-wrap -->

  <?php get_template_part('templates/footer'); ?>

  <?php wp_footer(); ?>

</body>
</html>
