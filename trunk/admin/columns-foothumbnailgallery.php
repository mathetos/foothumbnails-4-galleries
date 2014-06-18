<?php

 /*This Creates the Columns without Data*/
add_filter( 'manage_edit-foothumbnailgallery_columns', 'ftg_admin_columns' ) ;

function ftg_admin_columns( $columns ) {

	$columns = array(
		'cb' => '<input type="checkbox" />',
		'ftg_gallery-title' => __( 'Gallery Name' ),
		'ftg_step3-thumbnail' => __('Gallery Thumbnail'),
		'shortcode' => __('Gallery Shortcode'),
	);

	return $columns;
}

/*This Inserts the Data into the Columns*/

add_action( 'manage_foothumbnailgallery_posts_custom_column', 'manage_ftg_columns', 10, 2 );

function manage_ftg_columns( $column, $post_id ) {
	global $post;

	switch( $column ) {
		/* Displaying the 'Gallery Title' column. */
		case 'ftg_gallery-title' :
			$post_id = $post->ID;
			
			$ftgtitle = get_post_meta( $post_id, 'ftg_gallery-title', true );
			
			echo '<div class="hover"><a href="post.php?post=' . $post_id . '&action=edit">' . $ftgtitle . '</a><div class="hide"><a href="post.php?post=' . $post_id . '&action=edit" class="edit">Edit</a> | <a href="';
			echo get_delete_post_link( $post_id );
			echo '" class="trash">Delete</a>';
			
			break;

		/* Displaying the 'Gallery Thumbnail' column. */
		case 'ftg_step3-thumbnail' :

			$ftg_thumb = wp_get_attachment_image( 
			get_post_meta( get_the_id(), 'ftg_step3-thumbnail', true ), array(100,100));
				
			/* If terms were found. */
			if ( !empty( $ftg_thumb ) ) {

				echo $ftg_thumb ;
						}
			
			break;
					
		/* Displaying the 'Gallery Shortcode' column. */
		case 'shortcode' :

		echo '<p><em>Click the shortcode to highlight it, then copy.</em></p><textarea rows="1" cols="26" onclick="this.focus();this.select()" readonly="readonly" style="resize: none; border: 0px; outline: none;" class="shortcode">[foothumbnailgallery id="' . $post_id . '"]</textarea>';
				}
		}


/*Add Quick Edit */