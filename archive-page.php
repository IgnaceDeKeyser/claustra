<?php 
	/*Template Name: archive-page*/
?>


<?php get_header(); 
	while(have_posts()){
		the_post();
	}
?>	<div class="scrollcontainer">
		<div class="container group">
			<?php
			$projectstate = 'archive';
			$projects = new WP_Query(array(
				'posts_per_page' =>-1,
				'post_type' => 'projects',
				'orderby' => 'project_date',
				'order' => 'DESC',
				'meta_key' => 'project_status',
				'meta_key' => 'project_date',
				'meta_query' => array(
					array(
						'key' => 'project_status',
						'compare' => '=',
						'value' => $projectstate
					)
				)	
				
			));
			?>			
					<div class="thumbnailgrid">
					<?php

					while($projects->have_posts()){
						$projects->the_post(); ?>
								<a class="thumbnailgrid__link" href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('medium', array('class' => 'thumbnailgrid__thumbnail'));?>								
									<h2 class="thumbnailgrid__title"> <?php the_title(); ?></h2>
								</a>
							<?php
						} ?>
					<?php

					while($projects->have_posts()){
						$projects->the_post(); ?>
								<a class="thumbnailgrid__link" href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('medium', array('class' => 'thumbnailgrid__thumbnail'));?>								
									<h2 class="thumbnailgrid__title"> <?php the_title(); ?></h2>
								</a>
							<?php
						} ?>
						<a class='thumbnailgrid__thumbnail' style="height:0px"></a>
						<a class='thumbnailgrid__thumbnail' style="height:0px" ></a>
						<a class='thumbnailgrid__thumbnail' style="height:0px"></a>
					</div>
		</div>
	</div>
<?php get_footer(); ?>
