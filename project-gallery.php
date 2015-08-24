<?/*
Template Name: Project Gallery
*/?>

<?php while (have_posts()) : the_post(); ?>
<div class="project-gallery-top">
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
</div>
<?php
$projects = get_field('projects');
if($projects):
	foreach( $projects as $object):
		$post = $object['project'];
		setup_postdata($post);
		?>
<div class="project project-gallery-item">
	<div class="header">
		<h2><?php echo roots_title(); ?></h2>
	</div>
	<div class="content">
		<?php the_content(); ?>
	</div>
	<div class="nav navbar-project navbar-post"></div>
</div>
		<?php
	endforeach;
	wp_reset_postdata();
endif;
?>
<?php endwhile; ?>