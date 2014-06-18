<?php 
//______________________________________________________
// SAMPLE FOOTHUMBNAILS TEMPLATE
// Use this to create your own template
// for more details go to:
// http://foothumbnails.mattcromwell.com/custom-template-how-to
// _____________________________________________________


// _____________________________________________________
// ##  AVAILBLE PHP VARIABLES  ##
// $ftg_id is the unique ID of the current gallery
// $ftg_wrap echos the float and default margins when floating.
//  -- "left" outputs: float: left; margin: 0 10px 10px 0;
//  -- "right" outputs: float: right; margin: 0 0 10px 10px;
//  -- "none" outputs: float:none;
// $ftg_title is the title of the gallery
// $ftg_thumbsize echoes the name of the thumbnail size chosen
// $ftg_thumb outputs the actual thumbnail based on $ftg_thumbsize
// $ftg_description outputs the description
// $ftg_css outputs the content of the custom CSS field. You can use this in your <style> if you like.
// $ftg_gall outputs the actual gallery. For these purposes, it should always be inside the hidden div.

// _____________________________________________________
// ##  REQUIRED PHP VARIABLES  ##
// Of the variables above, the following are required for your thumbnail gallery to work:
// -- $ftg_id
// -- $ftg_thumb
// -- $ftg_gall

// You can add your styles into your theme if you like;
// But in order to inherit the text wrapping settings
// And identify each gallery uniquely, you'll need to use
// some php in your styles, which is only possible by
// including them inline here.

// _____________________________________________________
// ##  ANATOMY OF THE TEMPLATE  ##
// The templates are purposely simple. They consist of three major parts:
// 1. The <style> section, for adding your own custom CSS styles
// 2. The Thumbnail Secion which includes the thumbnail/title/description block
// 3. The Hidden Div Section, where the Gallery is output.
//
// The <style> section is not required. You could just style your galleries from your theme if you prefer.
// But the thumbnail and hidden div sections are required if you want your galleries to function as the other galleries do.

// _____________________________________________________
// ## THE TEMPLATE ##

// 1. THE <style> SECTION
?>
<style>
<?php 
// Echoing the id appended to your class name allows you to have multiple
// galleries on the same page each with unique styles. ?>
.ftg-fullhor-<?php echo $ftg_id; ?> {<?php echo $ftg_wrap; ?> cursor: pointer; }
<?php 
// If you want to have the ability to use the Custom CSS field from each gallery,
// include this line here: ?>
<?php echo $ftg_css; ?>
</style>

<?php
// 2. THE THUMBNAIL SECTION

// I include this short piece of JS in my templates to make the whole div
// clickable. If you'd like to use it, just replace ".ftg-fullhor" with your
// div's class name. ?>
<script>
jQuery(".ftg-fullhor").click(function($){
     window.location=$(this).find("a").attr("href"); 
     return false;
});
</script>

<?php
// This is where the thumbnail is output. Notice $ftg_id appended here as well
// Of course the $ftg_title and $ftg_description are optional ?>
<div class="ftg-fullhor-<?php echo $ftg_id; ?>">
<h2><?php echo $ftg_title ; ?></h2>
	<div class="ftg-content">
		// In order for FooBox to be triggere from your thumbnail image, it needs to be wrapped like this and have the class "foobox ftgtrigger".
		<a href="#ftg_<?php echo $ftg_id; ?>" class="foobox ftgtrigger" data-modal-class="ftg_<?php echo $ftg_id; ?>"><?php echo $ftg_thumb ; ?></a>
		<p><?php echo $ftg_description ; ?></p>
	</div>
</div><!-- end of thumbnail div -->

<?php
// 3. THE HIDDEN DIV SECTION
// In order for FooBox to launch the whole gallery from the thumbnail link, you need to wrap the gallery shortcode in a hidden div.
// You can read about this technique here: http://docs.fooplugins.com/foobox/hidden-gallery/
// Notice that the div id has to match the thumbnail href exactly. 
// Also notice that the style HAS to have display:none. FooBox takes care of making it visible.
// Lastly, using do_shortcode ensures that the only thing output in this area is the gallery. ?>

<!-- Start of hidden gallery div -->
<div id="ftg_<?php echo $ftg_id; ?>" style="display:none">
<?php
$ftg_gall = get_post_meta( get_the_id(), 'ftg_gallery', true );
echo do_shortcode($ftg_gall);
?>
</div><!-- END of hidden gallery div -->