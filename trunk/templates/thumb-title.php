<style>
	.ftg-thumbtitle-<?php echo $ftg_id; ?> {<?php echo $ftg_wrap; ?> max-width: <?php echo get_option( $ftg_thumbsize . '_size_w' );?>px; cursor: pointer; display: block; margin: 1em 0;}
	<?php echo $ftg_css; ?>
</style>
<script>
jQuery(".ftg-thumbtitle").click(function($){
     window.location=$(this).find("a").attr("href"); 
     return false;
});
</script>
<div class="ftg-thumbtitle-<?php echo $ftg_id; ?>">
	<a href="#ftg_<?php echo $ftg_id; ?>" class="foobox ftgtrigger" data-modal-class="ftg_<?php echo $ftg_id; ?>">
		<?php echo $ftg_thumb ; ?>
		<h2><?php echo $ftg_title ; ?></h2>
	</a>
</div>

<div id="ftg_<?php echo $ftg_id; ?>" style="display:none">
	<?php
	$ftg_gall = get_post_meta( get_the_id(), 'ftg_gallery', true );
	echo do_shortcode($ftg_gall);
	?>
</div>