<style>
	.ftg-imgonly-<?php echo $ftg_id; ?> {<?php echo $ftg_wrap; ?> max-width: <?php echo get_option( $ftg_thumbsize . '_size_w' );?>px; cursor: pointer;}
	<?php echo $ftg_css; ?>
</style>
<script>
jQuery(".ftg-imgonly").click(function($){
     window.location=$(this).find("a").attr("href"); 
     return false;
});
</script>
<div class="ftg-imgonly-<?php echo $ftg_id; ?>">
	<a href="#ftg_<?php echo $ftg_id; ?>" class="foobox ftgtrigger" data-modal-class="ftg_<?php echo $ftg_id; ?>">
		<?php echo $ftg_thumb ; ?>
	</a>
</div>

<div id="ftg_<?php echo $ftg_id; ?>" style="display:none">
	<?php
	$ftg_gall = get_post_meta( get_the_id(), 'ftg_gallery', true );
	echo do_shortcode($ftg_gall);
	?>
</div>