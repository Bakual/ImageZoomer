<?php

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

// no direct access

defined( '_JEXEC' ) or die( 'Restricted access' );
$mosConfig_absolute_path = JPATH_SITE;
$mosConfig_live_site = JURI :: base();
if(substr($mosConfig_live_site, -1)=="/") { $mosConfig_live_site = substr($mosConfig_live_site, 0, -1); }

// get parameters from the module's configuration
	$loadJquery=$params->get( 'loadJquery',"" );
	$zoomer_id = $params->get( 'zoomer_id',"" );

	$zoomType	= $params->get( 'zoomType', "" );
	$zoomWidth	= $params->get( 'zoomWidth', "" );
	$zoomHeight	= $params->get( 'zoomHeight', "" );
	$xOffset	= $params->get( 'xOffset', "" );
	$yOffset	= $params->get( 'yOffset', "" );
	$position	= $params->get( 'position', "" );
	$preloadImages = $params->get( 'preloadImages',"" );
	$preloadText=$params->get( 'preloadText',"" );
	$showTitle=$params->get( 'showTitle',"" );
	$showLens=$params->get( 'showLens',"" );
	$imageOpacity	= $params->get( 'imageOpacity', "" );
	$alwaysOn	= $params->get( 'alwaysOn', "" );

	$zoomnumber=$params->get( 'zoomnumber',"" );

	$linkTitle1=$params->get( 'linkTitle1',"" );
	$linkTitle2=$params->get( 'linkTitle2',"" );
	$linkTitle3=$params->get( 'linkTitle3',"" );
	$linkTitle4=$params->get( 'linkTitle4',"" );
	$linkTitle5=$params->get( 'linkTitle5',"" );
	$linkTitle6=$params->get( 'linkTitle6',"" );
	$linkTitle7=$params->get( 'linkTitle7',"" );
	$linkTitle8=$params->get( 'linkTitle8',"" );
	$linkTitle9=$params->get( 'linkTitle9',"" );
	$linkTitle10=$params->get( 'linkTitle10',"" );

	$small_image1	= $params->get( 'small_image1', "" );
	$large_image1	= $params->get( 'large_image1', "" );
	$small_image2	= $params->get( 'small_image2', "" );
	$large_image2	= $params->get( 'large_image2', "" );
	$small_image3	= $params->get( 'small_image3', "" );
	$large_image3	= $params->get( 'large_image3', "" );
	$small_image4	= $params->get( 'small_image4', "" );
	$large_image4	= $params->get( 'large_image4', "" );
	$small_image5	= $params->get( 'small_image5', "" );
	$large_image5	= $params->get( 'large_image5', "" );
	$small_image6	= $params->get( 'small_image6', "" );
	$large_image6	= $params->get( 'large_image6', "" );
	$small_image7	= $params->get( 'small_image7', "" );
	$large_image7	= $params->get( 'large_image7', "" );
	$small_image8	= $params->get( 'small_image8', "" );
	$large_image8	= $params->get( 'large_image8', "" );
	$small_image9	= $params->get( 'small_image9', "" );
	$large_image9	= $params->get( 'large_image9', "" );
	$small_image10	= $params->get( 'small_image10', "" );
	$large_image10	= $params->get( 'large_image10', "" );



require(JModuleHelper::getLayoutPath('mod_lv_image_zoomer_2'));

?>