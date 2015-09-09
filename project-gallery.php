<?/*
Template Name: Project Gallery
*/?>

<?php while (have_posts()) : the_post(); ?>
<div class="project-gallery-top container">
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
<div class="container post post-project project-gallery-item parallax-container">
	<div class="header post-header parallax-midground">
		<h2><?php echo roots_title(); ?></h2>
	</div>
	<div class="body post-body parallax-background">
		<div class="content parallax-foreground">
			<?php the_content(); ?>
		</div>
	</div>
</div>
		<?php
	endforeach;
	wp_reset_postdata();
endif;
?>
<?php endwhile; ?>