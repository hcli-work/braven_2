<?php 
/**
 * Template for a single person's bio "square" and its content.
 * This is called from functions.php where a query is generated by a shortcode. 
 */

global $post;
$excerpt = get_the_excerpt();
// Reset the thumbnail in case this bio doesn't have one:
$thumb = '';


?>
<div class="mosaic-element bio has-content">
	<div class="element-img">
		<?php 
		if ( has_post_thumbnail() ) {
			$thumbatts = array(
				'title' => get_the_title(),
			);
			$thumb = get_the_post_thumbnail($post->ID, 'headshot', $thumbatts);
			echo $thumb;
		} 
		?>
	</div>
	<div class="element-content hover-toggle">
		<div class="close-this">&#x2715;</div>
		<div class="element-content-img"><?php echo $thumb; ?></div>
		<div class="element-header">
			<h3><?php the_title();?></h3>
			<?php if ($excerpt) { ?>
				<div class="excerpt">
					<?php echo apply_filters('the_content', $excerpt); ?>
				</div>
			<?php } ?>
		</div>
		<div class="element-text">
			<?php the_content();?>
		</div>
	</div>
</div>