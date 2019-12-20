<?php 
	/*Template Name: front-page*/
	$postarray = [];
	$projects = new WP_Query(array(
		'posts_per_page' =>-1,
		'post_type' => 'projects',
		'orderby' => 'project_date',
		'order' => 'DESC',
		'meta_key' => 'project_date'	
	));
 	get_header(); 
?>
	<div class="container group">
		<?php while($projects->have_posts()){
			$projects->the_post(); 
			$postid= get_the_id();
			array_push($postarray, $postid);			
			$projectstate = 'complete';
		} 

?>		<!-- powered by Imagecarousel.js -->
		<a  id="front-image-link" href="<?php echo get_permalink($post = $postarray[0]); ?>">
			<img id="front-image" class="center-image-page" src="<?php echo get_the_post_thumbnail_url($post = $postarray[0],$size='large'); ?>">
		</a>
	</div>

	<?php get_footer(); ?>
		