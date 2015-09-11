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
		<h2><?php echo roots_title(); echo the_ID(); ?></h2>
	</div>
	<div class="body post-body parallax-background">
		<div class="content parallax-foreground">
			<?php the_content(); ?>
		</div>
	</div>
	<?php
	$gallery = get_field('gallery');
	if ($gallery && sizeof($gallery) > 0) :
		?>
	<div class="gallery post-gallery parallax-background">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

			<div class="carousel-inner" role="listbox">
		<?php
			$active = true;
			foreach($gallery as $slide):
				?>
		<div class="item <?php if ($active): echo 'active'; $active = false; endif; ?>">
			<img src="<?php echo $slide['image']['sizes']['thumbnail']; ?>" alt="" />
			<div class="caption"><?php echo $slide['caption']; ?></div>
 		</div>
				<?php
			endforeach;
		?>
			</div>
		</div><!-- / .carousel -->
	</div>
<?php endif; ?>
</div>
		<?php
	endforeach;
	wp_reset_postdata();
endif;
?>
<?php endwhile; ?>