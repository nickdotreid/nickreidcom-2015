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
<div class="post post-project project-gallery-item parallax-container">
	<div class="container header post-header parallax-midground">
		<h2><?php echo roots_title(); echo the_ID(); ?></h2>
	</div>
	<div class="container">
		<div class="body post-body parallax-background">
			<div class="content parallax-foreground">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
	<?php
	$gallery = get_field('gallery');
	if ($gallery && sizeof($gallery) > 0) :
		?>
	<div class="gallery post-gallery parallax-background">
		<div id="carousel-example-generic" class="carousel slide" data-interval="false" data-ride="carousel">

			<!-- Indicators -->
			<ol class="carousel-indicators parallax-foreground">
				<?php foreach($gallery as $index => $slide): ?>
				<li data-target="#carousel-example-generic" data-slide-to="<?php echo $index; ?>" class="<?php if($index == 0): echo 'active'; endif; ?>"></li>
				<?php endforeach; ?>
			</ol>

			<div class="carousel-inner" role="listbox">
		<?php foreach($gallery as $index => $slide): ?>
		<div class="item <?php if($index == 0): echo 'active'; endif; ?>">
			<img src="<?php echo $slide['image']['url']; ?>" alt="" />
			<div class="caption"><?php echo $slide['caption']; ?></div>
 		</div>
		<?php endforeach; ?>
			</div><!-- / .carousel-inner -->
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