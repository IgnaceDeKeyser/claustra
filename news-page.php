<?php 
	/*Template Name: news-page*/

	get_header(); 
	while(have_posts()){
	the_post();
	}
	$today = date('Ymd');
	$newsItems = new WP_Query(array(
		'paged' =>  get_query_var('paged','1'),
		'posts_per_page' =>-1,
		'post_type' => 'News',
		'orderby' => 'newsitem_date',
		'order' => 'DESC',
		'meta_key' => 'newsitem_date'
	)); ?>
	<div class="scrollcontainer">
		<?php
		while($newsItems->have_posts()){
			$newsItems->the_post(); ?>
			<div class="container group">
				<h3 class="newstitle"> <?php the_title(); ?></h3>
					<div>
						<img class="newsimage" src="<?php the_post_thumbnail_url() ?>">
					</div>
				<div class="newsinfo">	
					<!--<h6 class="newstitle"> <?php the_field('newsitem_date') ?> </h6>-->
					<h2> <?php if(has_excerpt()){
							echo get_the_excerpt();
						} else { 
							echo wp_trim_words (get_the_content(),18);
						} ?> </h2>
				</div>
			</div>
		<?php } ?> 
	</div>
				
	<div class="bottom-news-navigation">			

		 <?php
		echo paginate_links(array(
			'total' => $newsItems -> max_num_pages,
			'mid_size' => 1,
		    'prev_text' => __( 'prev', 'textdomain' ),
		   	'next_text' => __( 'next', 'textdomain' )
		));
		?>
	</div>


<?php get_footer(); ?>