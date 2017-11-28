<?php 
/**
 * Template for a single person's bio "square" and its content.
 * This is called from functions.php where a query is generated by a shortcode. 
 */

global $post;

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
		<?php echo $thumb; ?>
		<div class="element-header">
			<h3><?php the_title();?></h3>
		</div>
		<div class="element-text">
			<?php the_content();?>
		</div>
	</div>
</div>