<?php
/**
 * This is the FooThumbnail Gallery Shortcode
 * Probably the most important file in the whole plugin
 * Tread lightly!
 */
 
function foothumbnailgallery_shortcode($atts) {
	wp_enqueue_script( 'ftg-trigger' );
	
	$defaults = array(
                'id' => $post_id,
				'layout' => $ftg_layout,
				'title' => $ftg_title,
        );
	ob_start(); 
	
	$ftg_query = new WP_Query('post_type=foothumbnailgallery&p=' . $atts['id']);
		
		while ($ftg_query->have_posts()) : $ftg_query->the_post(); 
			
			$ftg_id = $atts['id'];
			$ftg_layout = get_post_meta( get_the_id(), 'ftg_layout', true ); 
			$ftg_title = get_post_meta( get_the_id(), 'ftg_gallery-title', true ); 
			$ftg_thumbsize = get_post_meta( get_the_id(), 'ftg_step3-imgsize', true ); 
			$ftg_thumb = wp_get_attachment_image( 
				get_post_meta( get_the_id(), 'ftg_step3-thumbnail', true ), ''. $ftg_thumbsize .'' );
			$ftg_description = get_post_meta( get_the_id(), 'ftg_description', true ); 
			$ftg_css = get_post_meta( get_the_id(), 'ftg_css', true );
			$ftg_getwrap = get_post_meta( get_the_id(), 'ftg_enable_textwrap', true ); 
			
			switch ($ftg_getwrap) {
				case 'left':
					$ftg_wrap = 'float: left; margin: 0 10px 10px 0;';
					break;
				case 'right':
					$ftg_wrap = 'float: right; margin: 0 0 10px 10px;';
					break;
				case 'none':
					$ftg_wrap = 'float: none;';
					break;
			}
			
			switch ($ftg_layout) {
				case 'title-thumb':
					include ( FTG_PATH . 'templates/title-thumb.php');
					break;
				case 'full-vertical':
					include ( FTG_PATH . 'templates/full-vertical.php');
					break;
				case 'full-horizontal':
					include ( FTG_PATH . 'templates/full-horizontal.php');
					break;
				case 'full-vertical-imagetop':
					include ( FTG_PATH . 'templates/full-vertical-imagetop.php');
					break;
				case 'thumb-title':
					include ( FTG_PATH . 'templates/thumb-title.php');
					break;
				case 'thumb-only':
					include ( FTG_PATH . 'templates/thumb-only.php');
					break;
				case 'custom':
					include ( get_template_directory() . '/foothumbnailgallery.php');
					break;
			}
			
		endwhile;
		wp_reset_query();
		
		$ftg_content = ob_get_contents();
		ob_end_clean();
		return $ftg_content;
}
add_shortcode("foothumbnailgallery", "foothumbnailgallery_shortcode");