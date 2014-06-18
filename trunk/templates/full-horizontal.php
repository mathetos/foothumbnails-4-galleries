<style>
.ftg-fullhor-<?php echo $ftg_id; ?> {<?php echo $ftg_wrap; ?> cursor: pointer; }
<?php echo $ftg_css; ?>
</style>
<script>
jQuery(".ftg-fullhor").click(function($){
     window.location=$(this).find("a").attr("href"); 
     return false;
});
</script>

<div class="ftg-fullhor-<?php echo $ftg_id; ?>">
<h2><?php echo $ftg_title ; ?></h2>
	<div class="ftg-content">
		<a href="#ftg_<?php echo $ftg_id; ?>" class="foobox ftgtrigger" data-modal-class="ftg_<?php echo $ftg_id; ?>"><?php echo $ftg_thumb ; ?></a>
		<p><?php echo $ftg_description ; ?></p>
	</div>
</div>

<div id="ftg_<?php echo $ftg_id; ?>" style="display:none">
<?php
$ftg_gall = get_post_meta( get_the_id(), 'ftg_gallery', true );
echo do_shortcode($ftg_gall);
?>
</div>

