<?/*
Template Name: Project Gallery
*/?>

<?php while (have_posts()) : the_post(); ?>
<div class="post post-large post-top project-gallery-top">
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
	<div class="header post-header parallax-midground">
		<h2><?php echo roots_title(); ?></h2>
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
	<div class="gallery post-gallery">
		<div id="carousel-example-generic" class="carousel slide" data-interval="false" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<?php foreach($gallery as $index => $slide): ?>
				<li data-target="#carousel-example-generic" data-slide-to="<?php echo $index; ?>" class="<?php if($index == 0): echo 'active'; endif; ?>"></li>
				<?php endforeach; ?>
			</ol>

			<div class="carousel-inner" role="listbox">
		<?php foreach($gallery as $index => $slide): ?>
		<div class="item <?php if($index == 0): echo 'active'; endif; ?>">
			<img src="<?php echo $slide['image']['sizes']['large']; ?>" alt="" />
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