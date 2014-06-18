<?php 
/*
Plugin Name: FooThumbnails for Galleries
Plugin URI: http://mattcromwell.com/foothumbnails
Description: The absolute easiest way to launch a gallery in FooBox from a Thumbnail. Ever.
Author: Matt Cromwell 
Version: 1.0.1
Author URI: http://mattcromwell.com
Text Domain: foothumbgallery
*/

//definitions
define( 'FTG_PATH', plugin_dir_path( __FILE__ ));
define( 'FTG_URL', plugins_url( '/' , __FILE__ ));

//include FooBase
require_once FTG_PATH . "includes/foopluginbase/bootstrapper.php";

//include the FTG shortcode
require_once FTG_PATH . "includes/shortcode.php";

//include the FTG cpt
require_once 'includes/post-types.php';

//include the FTG metaboxes and metabox whitelist
require_once 'includes/metaboxes/custom-meta-boxes.php';
require_once 'includes/ftg-metaboxes.php';
require_once 'includes/metawhitelist.php';

//settings to enable shortcodes in the following places:

	$ftg_settings = get_option( 'foothumbnail_gallery' );
	
	//@TODO -- Make setting for default gallery media link
	// function ftg_set_media_default() {
	// update_option('image_default_link_type', 'file' );
	// }
	
	if (isset($ftg_settings['ftg_enable_shortcodes|text-widgets'])) {
		add_filter( 'widget_text', 'shortcode_unautop');
		add_filter( 'widget_text', 'do_shortcode');
		}

	if (isset($ftg_settings['ftg_enable_shortcodes|post-excerpts'])) {
		add_filter( 'the_excerpt', 'shortcode_unautop');
		add_filter( 'the_excerpt', 'do_shortcode');
	}
	
	if (isset($ftg_settings['ftg_enable_shortcodes|tax-desc'])) {
		add_filter( 'term_description', 'shortcode_unautop');
		add_filter( 'term_description', 'do_shortcode' );
	}
	

	
//extend the FooBase class for FTG
class foothumbnail_gallery extends Foo_Plugin_Base_v2_1 {	
	
	function __construct() {
			$this->init( __FILE__, 'foothumbnail_gallery', '0.9', 'FooThumbnail Gallery' );
	
		if (is_admin()){
			add_filter('foothumbnail_gallery-admin_settings', array($this, 'create_settings_ftg')); 
			}
	}
		
	function newintrohtml(){
	ob_start();
	include(FTG_PATH . 'admin/settings/faqs.php');
	return ob_get_clean();	
	}
	
	
	function ftgrecommends(){
	ob_start();
	include(FTG_PATH . 'admin/settings/ftg_recommends.php');
	return ob_get_clean();	
	}
	
	
	function create_settings_ftg() {
		
		$newintro = $this->newintrohtml();
		
		$ftg_recommends = $this->ftgrecommends();
		
		//Intro Tab
		$tabs['intro'] = 'Intro to FTG';
		$settings[0] = array(
			 'id' => 'faq',
			 'title' => __('Frequently Asked Questions', 'foothumbgallery'),
			 'desc' => $newintro,
			 'type' => 'html',
			 'tab' => 'intro'
			 );
		$settings[1] = array(
			'id' => 'ftg_enable_shortcodes',
			'title' => __('Enable Shortcode usage in additional areas', 'foothumbgallery'),
			'tab' => 'intro',
			'desc' => __('By default, WordPress only supports shortcodes in posts and pages. Enable any of these options to use FTG in additional areas of your website.', 'foothumbgallery'),
			'type' => 'checkboxlist',
			'choices' => array(
				'text-widgets' => __('Text Widgets','foothumbgallery'),
				'post-excerpts' => __('Post Excerpts', 'foothumbgallery'),
				'tax-desc' => __('Category Descriptions', 'foothumbgallery'),
				)
		);
			 
		//Premium Support Tab	 
		$tabs['recommended'] = __('Recommendations', 'foothumbgallery');
		$settings[3] = array(
			'id' => 'recommended',
			'title' => __('Recommendations', 'foothumbgallery' ),
			'desc' => $ftg_recommends,
			'type' => 'html',
			'tab' => 'recommended',
		);
		
		return array(
			'tabs' => $tabs,
			'settings' => $settings
			);	
	}
}

new foothumbnail_gallery();

/*
 * Register FooTrigger
 * The Shortcode Enqueues it
 */

add_action( 'wp_enqueue_scripts', 'register_ftg_trigger' );

function register_ftg_trigger() {
	wp_register_script('ftg-trigger', plugins_url('js/ftg-trigger.js', __FILE__), array('jquery'), '1.0', true);
}
 

/*
 *  ADMIN RELATED FUNCTIONS
 */

require_once ('admin/columns-foothumbnailgallery.php');
 

/*
 *  This checks whether either version of FooBox --
 *  Free or Premium -- is activated. If not, it throws
 *  An admin notification, but ONLY for users who can
 *  activate plugins. No need to nag everyone ;-)
 */
 
function fooboxnotpresent_admin_notice() {
		if 	( class_exists('Foobox_Free') || class_exists('fooboxV2')) {
		} else {
			if (current_user_can( 'activate_plugins' )) {
				include(FTG_PATH . 'admin/settings/is_foobox_activated.php');
				}
			}
		}
		
add_action( 'admin_notices', 'fooboxnotpresent_admin_notice' );