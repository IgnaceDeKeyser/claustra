
<?php 
	/*Template Name: static-page */
?>

<?php get_header(); 
	while(have_posts()){
		the_post();
	}
?>
		<div class="container group">
			<?php 
				the_content();
			?>
		</div>
<?php get_footer(); ?>