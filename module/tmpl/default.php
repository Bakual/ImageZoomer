<?php defined('_JEXEC') or die('Restricted access'); // no direct access

/**
 * LV Image Zoomer 2, a Ajax Image Zoomer Module
 *
 * @version 1.0
 * @package LV Image Zoomer 2
 * @author Juergen Koller
 * @copyright (C) http://www.lernvid.com
 * @license GNU/GPL: http://www.gnu.org/copyleft/gpl.html
 *
 **/

// get the document object
$doc =& JFactory::getDocument();

// add your stylesheet
$doc->addStyleSheet( 'modules/mod_lv_image_zoomer_2/css/style.css' );

?>

<?php if ($loadJquery == 1) {?>
	<script type="text/javascript" src="modules/mod_lv_image_zoomer_2/js/jquery-1.6.4.min.js"></script>
<?php }; ?>
<script type="text/javascript" src="modules/mod_lv_image_zoomer_2/js/jquery.jqzoom-core-pack.js"></script>
<script type="text/javascript">
var jQQQ = jQuery.noConflict()

    jQQQ(document).ready(function($){  
        var options = {  
                zoomType: '<?php echo ($zoomType) ; ?>',
                zoomWidth: <?php echo ($zoomWidth) ; ?>,  
                zoomHeight: <?php echo ($zoomHeight) ; ?>,  
                xOffset: <?php echo ($xOffset) ; ?>,  
                yOffset: <?php echo ($yOffset) ; ?>,  
                position:'<?php echo ($position) ; ?>',
				<?php if ($preloadImages==1) {?> 
	                preloadImages: true,
				<?php } else {?> 
	                preloadImages: false,
				<?php }; ?>    
				<?php if ($preloadText==1) {?> 
	                preloadText: true,
				<?php } else {?> 
	                preloadText: false,
				<?php }; ?>    
				<?php if ($showTitle==1) {?> 
	                title: true,
				<?php } else {?> 
	                title: false,
				<?php }; ?>    
				<?php if ($showLens==1) {?> 
	                lens: true,
				<?php } else {?> 
	                lens: false,
				<?php }; ?>    
                imageOpacity: <?php echo ($imageOpacity) ; ?>,
				<?php if ($alwaysOn==1) {?> 
	                alwaysOn: true
				<?php } else {?> 
	                alwaysOn: false
				<?php }; ?>    
        };  
        jQQQ('.jqzoom_<?php echo $zoomer_id; ?>').jqzoom(options);  
    });  

</script>



<div class="zoom_content">

  <?php if ($zoomnumber>0) {?>
	<a href="<?php echo ($large_image1) ; ?>" class="jqzoom_<?php echo $zoomer_id; ?>" title="<?php echo ($linkTitle1) ; ?>">
		<img src="<?php echo ($small_image1) ; ?>" alt="<?php echo ($linkTitle1) ; ?>" />
	</a>
  <?php }; ?>
  
  <?php if ($zoomnumber>1) {?>
	<div class="distance"></div>
	<a href="<?php echo ($large_image2) ; ?>" class="jqzoom_<?php echo $zoomer_id; ?>" title="<?php echo ($linkTitle2) ; ?>">
		<img src="<?php echo ($small_image2) ; ?>" alt="<?php echo ($linkTitle2) ; ?>" />
	</a>
  <?php }; ?>
  
  <?php if ($zoomnumber>2) {?>
	<div class="distance"></div>
	<a href="<?php echo ($large_image3) ; ?>" class="jqzoom_<?php echo $zoomer_id; ?>" title="<?php echo ($linkTitle3) ; ?>">
		<img src="<?php echo ($small_image3) ; ?>" alt="<?php echo ($linkTitle3) ; ?>" />
	</a>
  <?php }; ?>
  
  <?php if ($zoomnumber>3) {?>
	<div class="distance"></div>
	<a href="<?php echo ($large_image4) ; ?>" class="jqzoom_<?php echo $zoomer_id; ?>" title="<?php echo ($linkTitle4) ; ?>">
		<img src="<?php echo ($small_image4) ; ?>" alt="<?php echo ($linkTitle4) ; ?>" />
	</a>
  <?php }; ?>
  
  <?php if ($zoomnumber>4) {?>
	<div class="distance"></div>
	<a href="<?php echo ($large_image5) ; ?>" class="jqzoom_<?php echo $zoomer_id; ?>" title="<?php echo ($linkTitle5) ; ?>">
		<img src="<?php echo ($small_image5) ; ?>" alt="<?php echo ($linkTitle5) ; ?>" />
	</a>
  <?php }; ?>
  
  <?php if ($zoomnumber>5) {?>
	<div class="distance"></div>
	<a href="<?php echo ($large_image6) ; ?>" class="jqzoom_<?php echo $zoomer_id; ?>" title="<?php echo ($linkTitle6) ; ?>">
		<img src="<?php echo ($small_image6) ; ?>" alt="<?php echo ($linkTitle6) ; ?>" />
	</a>
  <?php }; ?>
  
  <?php if ($zoomnumber>6) {?>
	<div class="distance"></div>
	<a href="<?php echo ($large_image7) ; ?>" class="jqzoom_<?php echo $zoomer_id; ?>" title="<?php echo ($linkTitle7) ; ?>">
		<img src="<?php echo ($small_image7) ; ?>" alt="<?php echo ($linkTitle7) ; ?>" />
	</a>
  <?php }; ?>
  
  <?php if ($zoomnumber>7) {?>
	<div class="distance"></div>
	<a href="<?php echo ($large_image8) ; ?>" class="jqzoom_<?php echo $zoomer_id; ?>" title="<?php echo ($linkTitle8) ; ?>">
		<img src="<?php echo ($small_image8) ; ?>" alt="<?php echo ($linkTitle8) ; ?>" />
	</a>
  <?php }; ?>
  
  <?php if ($zoomnumber>8) {?>
	<div class="distance"></div>
	<a href="<?php echo ($large_image9) ; ?>" class="jqzoom_<?php echo $zoomer_id; ?>" title="<?php echo ($linkTitle9) ; ?>">
		<img src="<?php echo ($small_image9) ; ?>" alt="<?php echo ($linkTitle9) ; ?>" />
	</a>
  <?php }; ?>
  
  <?php if ($zoomnumber>9) {?>
	<div class="distance"></div>
	<a href="<?php echo ($large_image10) ; ?>" class="jqzoom_<?php echo $zoomer_id; ?>" title="<?php echo ($linkTitle10) ; ?>">
		<img src="<?php echo ($small_image10) ; ?>" alt="<?php echo ($linkTitle10) ; ?>" />
	</a>
  <?php }; ?>
  	
</div>
<div style="clear:both"></div>
