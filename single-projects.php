<?php 
	/*Template Name: singleproject-page*/
?>

<?php get_header(); 
	while(have_posts()){
		the_post();
	}
	$image_gallery_1 = array();
	$image_gallery_1 = get_field('image_gallery_1');
	$i=0;
	$medium = get_field('project_medium');

	?> <div class="scrollcontainer">
			<div class="container group">
				<div class="wp-block-gallery">
					<div class="imagegallery">
						<?php	while(count($image_gallery_1) > $i){ ?>
								<img  class="projectimage" src=" <?php echo ($image_gallery_1[$i]) ?> ">
						<?php	
						$i++;
							} ?>
					</div>
					
					<div class="projectinfo texttoggleoff">
						<h3> <?php the_title(); ?></h3>
						<?php the_content();?>
					</div> 
				</div>

			</div>

		</div>
			<?php
				$parentPageID = wp_get_post_parent_id(get_the_ID());
				if($parentPageID){
					$findChildrenOF = $parentPageID;
				} else{
					$findChildrenOF = get_the_ID();
				}
					wp_list_pages(array(
					'title_li' => NULL,
					'child_of'=> $findChildrenOF
				));
			?>
		<button id="prevbutton"><b><</b></button>
		<button id="nextbutton"><b>></b></button>
		<div id="info">
			<input type="checkbox" id="moreinfobutton" name="" value="moreinfobutton">
			<label for="moreinfobutton" id="moreinfolabel">
			read more
			</label>
		</div>
<?php get_footer(); ?>