<?php 
	/*Template Name: info-page*/
	get_header(); 
?>	<div class="scrollcontainer">
		<div class="container group">
			<div class="wp-block-gallery">
				<div class="projectinfo">
					<?php echo get_post_field('post_content', get_the_ID()); ?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>