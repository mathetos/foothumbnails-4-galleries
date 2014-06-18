<?php

/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 * plugin.php requires this and the main CMB this like so:
 * require_once 'humanmade/custom-meta-boxes.php';
 * require_once 'humanmade/ftg-metaboxes.php';
 */


add_filter( 'cmb_meta_boxes' , 'ftg_metaboxes' );
	
function ftg_metaboxes( $meta_boxes ) {
	
	$meta_boxes['ftg_metabox_1'] = array(
		'id' => 'ftg_metabox_1',
		'title' => __('STEP 1: Set Your Thumbnail Gallery Title', 'foothumbgallery'),
		'pages' => array('foothumbnailgallery'),
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => false,
		'fields' => array(
			array(
				'id' => 'ftg_gallery-title',
				'type' => 'text',
			),
			array(
                'id' => 'ftg_step1-note',
                'type' => 'step1-note',
            ),
		),
	); // END Step 1


	$meta_boxes['ftg_metabox_2'] = array(
		'id' => 'ftg_metabox_2',
		'title' => __('STEP 2: Insert Your Gallery', 'foothumbgallery'),
		'pages' => array('foothumbnailgallery'),
		'context' => 'normal',
		'priority' => 'core',
		'show_names' => false,
		'fields' => array(
			array(
						'id' => 'ftg_gallery',
						'type' => 'wysiwyg',
						'options' => array(
							'wpautop' => false, // use wpautop?
							'media_buttons' => true, // show insert/upload button(s)
							'quicktags' => false,
							'textarea_rows' => 20,
							),
			),
			array(
                'id' => 'ftg_step2-note',
                'type' => 'step2-note',
            ),
			)
	); // END Step 2


	$meta_boxes['ftg_metabox_3'] = array(
		'id' => 'ftg_metabox_3',
		'title' => __('STEP 3: Configure Your Thumbnail Image', 'foothumbgallery'),
		'pages' => array('foothumbnailgallery'),
		'context' => 'normal',
		'priority' => 'core',
		'show_names' => false,
		'fields' => array(
			array(
                'id' => 'ftg_step3-thumbnail',
                'type' => 'image',
				'cols' => 3,
            ),
			array(
                'id' => 'ftg_step3-imgsize',
				'name' => __('Choose your Thumbnail Image size', 'foothumbgallery'),
				'desc' => __('Note: Size change only reflected on your page or post, not here.', 'foothumbgallery'),
                'type' => 'image-sizes',
				'cols' => 9,
            ),
			array(
                'id' => 'ftg_step3-note',
                'type' => 'step3-note',
            ),
		),
	); // End Step 3

	$meta_boxes['ftg_metabox_4'] = array(
		'id' => 'ftg_metabox_4',
		'title' => __('STEP 4: Give Your Gallery a Description', 'foothumbgallery'),
		'pages' => array('foothumbnailgallery'),
		'context' => 'normal',
		'priority' => 'core',
		'show_names' => false,
		'fields' => array(
			array(
                'id' => 'ftg_description',
                'type' => 'textarea',
            ),
			array(
                'id' => 'ftg_step4-note',
                'type' => 'step4-note',
            ),
		),
	); // End Step 4

	$meta_boxes['ftg_metabox_5'] = array(
		'id' => 'ftg_metabox_5',
		'title' => __('STEP 5: Choose Your Layout', 'foothumbgallery'),
		'pages' => array('foothumbnailgallery'),
		'context' => 'normal',
		'priority' => 'core',
		'show_names' => true,
		'fields' => array(
				array(
				'id' => 'ftg_layout',
				'type' => 'radio',
				'cols' => 9,
				'options' => array(
						'full-horizontal' => __('Full Horizontal', 'foothumbgallery'),
						'full-vertical' => __('Full Vertical', 'foothumbgallery'),
						'full-vertical-imagetop' => __('Full Vertical Image Top', 'foothumbgallery'),
						'title-thumb' => __('Title and Thumb Only', 'foothumbgallery'),
						'thumb-title' => __('Thumb and Title Only', 'foothumbgallery'),
						'thumb-only' => __('Thumbnail Only', 'foothumbgallery'),
						'custom' => __('Custom', 'foothumbgallery'),
					)
				),
				array( 
					'id'      => 'ftg_enable_textwrap', 
					'name' => __('Enable Text Wrap?', 'foothumbgallery'),
					'desc' => __('This allows the text of your blog post to wrap around the thumbnail image. ', 'foothumbgallery'),
					'type'    => 'select', 
					'cols' => 3,
					'options' => array( 
						'left' => __('Yes, wrap around the right of the image', 'foothumbgallery'),
						'right' => __('Yes, wrap around the left of the image', 'foothumbgallery'),
						'none' => __('No text wrap at all, thank you.', 'foothumbgallery'),
						),
					'default' => 'left'
				),
				array(
				'id' => 'ftg_step5-note',
				'type' => 'step5-note',
				),
				array(
				'id' => 'ftg_generate_css',
				'type' => 'generate-css',
				),
				array(
				'id' => 'ftg_css',
				'type' => 'textarea_code',
				'desc' => __('To edit the default CSS styles for your chosen layout, click it above (again), and the styles will be populated in the field below. BE CAREFUL! If you change the values, then click a different layout, your changes will be lost.', 'foothumbgallery'),
				),

			),
		); // END Step 5


	$meta_boxes['ftg_shortcode'] = array(
		'id' => 'ftg_shortcode',
		'title' => __('Your Shortcode:', 'foothumbgallery'),
		'pages' => array('foothumbnailgallery'),
		'context' => 'side',
		'priority' => 'default',
		'show_names' => true,
		'fields' => array(
			array(
                'id' => 'ftg_shortcode',
                'type' => 'ftg-shortcode',
            ),
			array(
				'id' => 'ftg_step5-alert',
				'type' => 'step5-alert',
				// 'cols' => 3,
			),
		),
	);
	return $meta_boxes;
}


/*
 *
 * CUSTOM Field Types
 * These are primarily just the HTML
 * Text provided as walkthrough guides
 *
 */

function echo_note() {
echo __('NOTE:', 'foothumbgallery');
}
function echo_yeah() {
echo __('Yeah!', 'foothumbgallery'); 
}

//Step 1 Note
class FTG_Step1Note extends CMB_Field {

    public function html() {
	
        ?>
		<div class="ftg-note">
		<div class="dashicons dashicons-sos"></div><h3><?php echo_note() ; ?></h3>
		<p><?php _e('This generates the title that you see when you view all your galleries. It can also be displayed together with your thumbnail depending on the layout you choose (in Step 5).', 'foothumbgallery'); ?></p>
		</div>
		 <?php
    }
}


//Step 2 Note
class FTG_Step2Note extends CMB_Field {

    public function html() {
        ?>
		<div class="ftg-note">
		<div class="dashicons dashicons-sos"></div><h3><?php echo_note() ; ?></h3>
		<p><?php _e('This field is <b>ONLY</b> for inserting your Gallery. You can add other items if you\'re just having fun, but in the end they\'ll just be totally ignored.', 'foothumbgallery'); ?></p>
		<p><?php _e('This is just the default WordPress Gallery. If you are not familiar with creating a Gallery in WordPress, please review their <a href="http://codex.wordpress.org/The_WordPress_Gallery" target="_blank">excellent tutorial on that here</a>.', 'foothumbgallery'); ?></p>
		<p><?php _e('One really important step to remember, is that FooBox only works when you link your images to the "Media File". The WordPress default for this is "Attachment", which will NOT work with FooBox. You can either set it manually with each gallery you create, or go to "Settings > FooThumbnail Gallery" and the last setting allows you to set the Media File as the default for your Galleries.', 'foothubgallery'); ?></p>
		<p><?php echo '<img src="' . FTG_URL . 'images/link-to-media-file.png" class="alignnone" style="max-height: 200px; margin: 0 .65em .5em 0;"> '; ?>
			</p>
		</div>
        <?php
    }
}


//Step3 Image Sizes
class FTG_Step3ImageSizes extends CMB_Field {

	public function html() {
	?>
		<?php
	 function list_thumbnail_sizes(){
	 $ftg_thumbsize = get_post_meta( get_the_id(), 'ftg_step3-imgsize', true );
     global $_wp_additional_image_sizes;
     	$sizes = array();
		echo '<select class="img-sizes" name="ftg_step3-imgsize[cmb-field-0]">';
 		foreach( get_intermediate_image_sizes() as $s ){
 			$sizes[ $s ] = array( 0, 0 );
 			if( in_array( $s, array( 'thumbnail', 'medium', 'large' ) ) ){
 				$sizes[ $s ][0] = get_option( $s . '_size_w' );
 				$sizes[ $s ][1] = get_option( $s . '_size_h' );
 			}else{
 				if( isset( $_wp_additional_image_sizes ) && isset( $_wp_additional_image_sizes[ $s ] ) )
 					$sizes[ $s ] = array( $_wp_additional_image_sizes[ $s ]['width'], $_wp_additional_image_sizes[ $s ]['height'], );
 			}
 		}

 		foreach( $sizes as $size => $atts ){
			if ($ftg_thumbsize == $size) {
				$selected = 'selected';
			} else {
				$selected = '';
			}
			
 			echo '<option value="'. $size . '" ' . $selected . ' >' . ucwords($size) .' (' . implode( 'x', $atts ) . ')</option>';
 		}
		echo '</select>';
 }

 list_thumbnail_sizes();
	?>
	<?php
	}
}


//Step3 Note
class FTG_Step3Note extends CMB_Field {

    public function html() {
	?>
	<div class="ftg-note">
		<div class="dashicons dashicons-sos"></div><h3><?php echo_note(); ?></h3>
		<p><?php _e('If an image size in the dropdown above has dimensions like "9999", that typically means it\'s a responsive image size. This is intended to only set the width or only the height of the image but allow it to be infinitely tall or wide.', 'foothumbgallery'); ?></p>
		<p><?php _e('The "Thumbnail Size" option only pulls from your registered image sizes. If you want to create custom sizes just for your FooThumbnail Gallery images, here are two options, depending on your skill set:', 'foothumbgallery') ;?></p>
		<ul>
		<li><a href="http://www.wpbeginner.com/wp-tutorials/how-to-create-additional-image-sizes-in-wordpress/" target="_blank"><?php _e('WPBeginner Explains how to manually create them in your functions.php file.', 'foothumbgallery'); ?></li>
		<li><a href="http://wordpress.org/plugins/simple-image-sizes/" target="_blank"><?php _e('Use this plugin to create as many as you like', 'foothumbgallery'); ?></a></li>
		</ul>
	</div>
	<?php
	}

}

//Step4 Note
class FTG_Step4Note extends CMB_Field {

    public function html() {
	
	?>
	<div class="ftg-note">
		<div class="dashicons dashicons-sos"></div><h3><?php echo_note(); ?></h3>
		<p><?php _e('This is optional. In Step 5 you choose your layout, and there are several layout options that don\'t include the description at all.', 'foothumbgallery'); ?></p>
	</div>
	<?php
	}
}


//Step5 Note
class FTG_Step5Note extends CMB_Field {

    public function html() {
	?>
	<div class="ftg-note">
		<div class="dashicons dashicons-sos"></div><h3><?php echo_note(); ?></h3>
		<p><?php _e('If you\'d like to use your own custom layout, just place a file called "foothumbnailgallery.php" into your (child)theme folder and select "Custom" above, and WHAMO! Your own layout will appear for this gallery.', 'foothumbgallery'); ?></p>
	</div>
	<?php
	}
}


//Step5 Alert
class FTG_Step5Alert extends CMB_Field {

    public function html() {
		global $current_screen;
			if( $current_screen->post_type =='foothumbnailgallery' && $current_screen->action == 'add'){
	?>
	<script type="text/javascript">
	jQuery( function($) {
    $('input[type=radio]').click(function () {
        $('.step5alert').fadeIn(1000);
		});
	});
	</script>
	<div class="step5alert" style="display:none;">
		<div class="dashicons dashicons-yes"></div><h3><?php _e('You\'re All Done!', 'foothumbgallery'); ?></h3>
		<p><?php _e('You\'ve set all the settings for your Thumb Gallery. Just hit "Publish" on the right, then copy your shortcode (Ctrl + C, or Command + C) from the blue box on the right and paste that straight into your post, page, widget, wherever and you\'re done!', 'foothumbgallery'); ?></p>
		<div class="dashicons dashicons-smiley"></div><h3><?php echo_yeah(); ?></h3>
	</div>
	<?php
	} else {
	?>
		<div class="step5alert">
		<div class="dashicons dashicons-yes"></div><h3><?php _e('Done with Changes?', 'foothumbgallery'); ?></h3>
		<p><?php _e('Just hit "Update" on the right, and if you already pasted your shortcode somewhere on your site, then changes will be reflected there immediately.', 'foothumbgallery'); ?></p>
		<div class="dashicons dashicons-smiley"></div><h3><?php echo_yeah(); ?></h3>
	</div>
	<?php
	}
	}
}


//Step5 Generate CSS in Textarea based on Layout Selection
class FTG_GenerateCSS extends CMB_Field {

  public function html() {
	?>
<script>
 jQuery(function($) {
    $("#ftg_css").hide();
	$("#customize").change(function() {
		if($(this).find("option:selected").val() == "yes") {
		$("#ftg_css").show();
		} else {
		$("#ftg_css").hide();
		}
	});

});
</script>
<h4>Do you want to customize the CSS of this Gallery?</h4>
<Select id="customize">
   <option value=""></option>
   <option value="no"><?php _e('No', 'foothumbgallery'); ?></option>
   <option value="yes"><?php _e('Yes', 'foothumbgallery'); ?></option>
</Select>

<script>
/*
 *
 *  Dynamically Generate CSS
 *  based on the Layout selection
 *
 */
 jQuery(function($) {
	$('#ftg_layout-cmb-field-0-item-full-horizontal').click(fullhorcss);
	$('#ftg_layout-cmb-field-0-item-full-vertical').click(fullvertcss);
	$('#ftg_layout-cmb-field-0-item-full-vertical-imagetop').click(fullvertimgtopcss);
	$('#ftg_layout-cmb-field-0-item-title-thumb').click(titlethumbcss);
	$('#ftg_layout-cmb-field-0-item-thumb-title').click(thumbtitlecss);
	$('#ftg_layout-cmb-field-0-item-thumb-only').click(thumbcss);
	$('#ftg_layout-cmb-field-0-item-custom').click(customcss);


	function fullhorcss() {
		var css = '.ftg-fullhor .ftg-content img {display: block; float: left; margin: 0 .5em .5em 0;}	a.ftgtrigger {overflow: visible; border: 0px; text-decoration: none; display:block;}';
		 $('textarea.code').val(css);
	}

	function fullvertcss() {
		var css = '.ftg-fullvert .ftg-content img {display: block; float: none; margin: 0 .5em .5em 0;} a.ftgtrigger {overflow: visible; border: 0px; text-decoration: none;}';
		 $('textarea.code').val(css);
	}

	function fullvertimgtopcss() {
		var css = '.ftg-fullvertimgtop .ftg-content img {display: block; float: none; margin: 0 .5em .5em 0;} a.ftgtrigger {overflow: visible; border: 0px; text-decoration: none;}';
		 $('textarea.code').val(css);
	}

	function titlethumbcss() {
		var css = '.ftg-titlethumb .ftg-content img {display: block; float: none; margin: 0 .5em .5em 0;} a.ftgtrigger {overflow: visible; border: 0px; text-decoration: none;}';
		 $('textarea.code').val(css);
	}

	function thumbtitlecss() {
		var css = '.ftg-thumbtitle .ftg-content img {display: block; float: none; margin: 0 .5em .5em 0;} a.ftgtrigger {overflow: visible; border: 0px; text-decoration: none;}';
		 $('textarea.code').val(css);
	}

	function thumbcss() {
		var css = 'a.ftgtrigger {overflow: visible; border: 0px; text-decoration: none;}';
		 $('textarea.code').val(css);
	}

	function customcss() {
		var css = 'Add a foothumbnailgallery-template.php template in your theme to customize these CSS styles.';
		 $('textarea.code').val(css);
	}
});
</script>


<?php
	}
}


//Show Shortcode in Sidebar
class FTG_ShowShortcode extends CMB_Field {

    public function html() {

	global $post;
	$post_id = $post->ID;
	$ftg_title = get_post_meta( get_the_id(), 'ftg_gallery-title', true );
	?>
	<p class="side-ftg-title"><?php _e('Here\'s your shortcode for:', 'foothumbgallery'); ?><br /><em>"<?php echo $ftg_title ;?>"</em></p>
	<?php
	echo '<p><textarea rows="1" cols="20" onclick="this.focus();this.select()" readonly="readonly" style="resize: none; border: 0px; outline: none;" class="shortcode">[foothumbnailgallery id="' . $post_id . '"]</textarea><p style="margin: 0; font-size: .9em"><em>', _e('Click the shortcode, then hit Ctrl + C (Command + C for Macs) to copy it.', 'foothumbgallery'),'</p><p>',_e('Paste it into any content area on your site and you\'re done!','foothumbgallery').'</em></p>';
	?>
	<?php
	}
}

add_filter( 'cmb_field_types', function( $cmb_field_types ) {
	$cmb_field_types['step1-note'] = 'FTG_Step1Note';
	$cmb_field_types['step2-note'] = 'FTG_Step2Note';
	$cmb_field_types['step3-note'] = 'FTG_Step3Note';
	$cmb_field_types['image-sizes'] = 'FTG_Step3ImageSizes';
	$cmb_field_types['step4-note'] = 'FTG_Step4Note';
	$cmb_field_types['step5-note'] = 'FTG_Step5Note';
	$cmb_field_types['step5-alert'] = 'FTG_Step5Alert';
	$cmb_field_types['generate-css'] = 'FTG_GenerateCSS';
	$cmb_field_types['ftg-shortcode'] = 'FTG_ShowShortcode';

    return $cmb_field_types;
} );

/**
 *
 *    Whitelist ONLY FTG Metaboxes
 *    Care of Thomas Griffin Metabox Sanity
 *    https://github.com/thomasgriffin/metabox-sanity
 *
 **/

 add_action( 'add_meta_boxes', 'tgm_metabox_sanity', 999 );
function tgm_metabox_sanity() {

    if ( ! class_exists( 'TGM_Metabox_Sanity' ) ) {
        require get_stylesheet_directory() . '/class-tgm-metabox-sanity.php';
    }

    $config = array(
        'foothumbnailgallery' => array(
            'whitelist'  => array(
				'submitdiv',
				'ftg_metabox_1',
				'ftg_metabox_2',
				'ftg_metabox_3',
				'ftg_metabox_4',
				'ftg_metabox_5',
				'ftg_shortcode',
				),
            'contexts'   => array( 'normal', 'side' ),
            'priorities' => array( 'high', 'core' )
        ),
    );
    $tgm_metabox_sanity = new TGM_Metabox_Sanity( $config );
    $tgm_metabox_sanity->init();
}

// DISABLE SAVING METABOX ORDER
add_action('check_ajax_referer', 'prevent_meta_box_order');
function prevent_meta_box_order($action)
{
   if ('meta-box-order' == $action ) {
      die('-1');
   }
}