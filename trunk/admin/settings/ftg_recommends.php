<?php
 $get = __('Get', 'foothumbgallery');
 $now = __('Now', 'foothumbgallery');
?>
<div class="articles">
<h2><?php _e('Recommended Articles', 'foothumbgallery'); ?></h2> 
<p><?php _e('I\'ve written pretty extensively on the subject of optimizing your images and your WordPress installation. I highly suggest reading these article so your FooThumbnail Galleries load up quickly and beautifully.', 'foothumbgallery'); ?></p>
<ul>
	<li><a href="http://mattcromwell.com/optimizing-images-for-wordpress-like-a-pro-for-free/" target="_blank">Optimizing Images in WordPress Like a Pro for Free</a></li>
	<li><a href="http://www.mattcromwell.com/image-optimization-automation-wordpress/" target="_blank">Image Automation and Optimization in WordPress</a></li>
	<li><a href="http://www.mattcromwell.com/wordpress-media-library-your-friend/" target="_blank">Making the WordPress Media Library Your Friend</a></li>
</ul>
</div>

<h2><?php _e('Recommended Plugins', 'foothumbgallery'); ?></h2> 
<div class="recommended jig">
	<a href="http://codecanyon.net/item/justified-image-grid-premium-wordpress-gallery/2594251?ref=webdevmattcrom" target="_blank"><img src="<?php echo FTG_URL . 'admin/settings/images/jig.jpg'; ?>"></a>
	<h2>Justified Image Grid</h2>
	<p class="desc"><?php _e('Justified Image Grid is great for creating a grid of images and/or videos. It also has really robust settings for filtering and sorting your images or videos. Think of Pinterest on steroids and that\'s what you can do with your images and videos. The best part is it\'s totally seemlessly integrated with FooBox as well.', 'foothumbgallery'); ?></p>
	<a class="getit button button-primary button-large" href="http://codecanyon.net/item/justified-image-grid-premium-wordpress-gallery/2594251?ref=webdevmattcrom" target="_blank"><div class="dashicons dashicons-share-alt2"></div><?php echo $get ; ?> JIG <?php echo $now ; ?></a>
</div>
<div class="recommended wp-inject">
	<a href="https://wordpress.org/plugins/wp-inject/" target="_blank"><img src="<?php echo FTG_URL . 'admin/settings/images/wp-inject.jpg'; ?>"></a>
	<h2>WP-Inject</h2>
	<p class="desc"><?php _e('WP_Inject is the easiest way I\'ve found to insert quality images into your blog with author attributes. It puts a Flickr search bar below your post/page edit screen that allows you to search Flickr for relevant images, then add them directly into your post or page with author attributes. You can even designate it as your Featured Image. You can read my post about it <a href="http://www.mattcromwell.com/image-optimization-automation-wordpress/" target="_blank">here</a>.', 'foothumbgallery'); ?></p>
	<a class="getit button button-primary button-large" href="https://wordpress.org/plugins/wp-inject/" target="_blank"><div class="dashicons dashicons-share-alt2"></div><?php echo $get ; ?> WP-Inject <?php echo $now ; ?></a>
</div>
<div class="recommended eml">
	<a href="http://wordpress.org/plugins/enhanced-media-library/" target="_blank"><img src="<?php echo FTG_URL . 'admin/settings/images/enhanced-media-library.jpg'; ?>"></a>
	<h2>Enhanced Media Library</h2>
	<p class="desc"><?php _e('You probably have A LOT of images in your WordPress installation. That\'s honestly the achilles heel of WordPress, there\'s just not a good way to organize your media. Enhanced Media Library is the ONE tool I use for organizing media for every website. It\'s smart, flexible, extensible, intuitive. All the things you need for good organization. Use it today, before your images get REALLY out of hand.', 'foothumbgallery'); ?></p>
	<a class="getit button button-primary button-large" href="http://wordpress.org/plugins/enhanced-media-library/" target="_blank"><div class="dashicons dashicons-share-alt2"></div><?php echo $get ; ?> Enhanced Media Library <?php echo $now ; ?></a>
</div>
<div class="recommended jetpack">
	<a href="http://wordpress.org/plugins/jetpack/" target="_blank"><img src="<?php echo FTG_URL . 'admin/settings/images/jetpack.jpg'; ?>"></a>
	<h2>Jetpack</h2>
	<p class="desc"><?php _e('Jetpack is a service that helps you leverage the immense power of the WordPress.com eco-system for your own self-hosted website. For example, related post plugins are often very resource intensive -- unless you have Jetpack. Another example, images can make your pages load really slowly -- unless you have Jetpack. Another example, giving your readers the ability to follow the comments on a post or your whole blog can be a bit complicated -- unless you have Jetpack. It answers a lot of the common issues every website faces. I specifically suggest it for the Image CDN (Photon), the subscribe to comments, the social sharing, and the tiled galleries features. It\'s a valuable tool.', 'foothumbgallery'); ?></p>
	<a class="getit button button-primary button-large" href="http://wordpress.org/plugins/jetpack/" target="_blank"><div class="dashicons dashicons-share-alt2"></div><?php echo $get ; ?> Jetpack <?php echo $now ; ?></a>
</div>