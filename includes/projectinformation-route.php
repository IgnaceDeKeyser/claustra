<?php
add_action('rest_api_init','claustraRegisterContent');


function claustraRegisterContent(){
	register_rest_route('claustra/v1','projectinfo',array(
		'methods' => WP_REST_SERVER::READABLE,
		'callback' => 'claustraContentListing'
	));
}

function claustraContentListing($data){
	$content = new WP_Query(array(
		'orderby' => 'project_date',
		'meta_key' => 'project_date',
		'post_type' => array('Projects','News'),
		's'=> sanitize_text_field($data['term'])
	));

	$contentinfo = array(
		'projects' => array(),
		'news' => array()
	);

	while($content->have_posts()){
		$content->the_post();
		if (get_post_type() == 'projects'){
			array_push($contentinfo['projects'], array(
				'title' => get_the_title(),
				'project status' => get_post_meta(get_the_id(),'project_status',true),
				'permalink' => get_the_permalink(),
				'thumbnail' => get_the_post_thumbnail_url(),
				'posttype' => get_post_type(),
				'project date'=> get_post_meta(get_the_id(),'project_date',true),

			));
		}
		if (get_post_type() == 'news'){
			array_push($contentinfo['news'], array(
				'title' => get_the_title(),
				'project status' => get_post_meta(get_the_id(),'project_status',true),
				'permalink' => get_the_permalink(),
				'thumbnail' => get_the_post_thumbnail_url(),
				'posttype' => get_post_type(),
				'post date'=> get_post_meta(get_the_id(),'post_date',true)
			));
		}
		
	}

	return $contentinfo;

}