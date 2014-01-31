<?php
/**
 * @package     ImageZoomer
 * @author      Thomas Hunziker <admin@bakual.net>
 * @copyright   (C) 2014 - Thomas Hunziker
 * @license     http://www.gnu.org/licenses/gpl.html
 **/

defined('_JEXEC') or die();

JHtml::stylesheet('mod_image_zoomer/style.css', '', true);
JHtmlJquery::framework(true);
JHtml::script('mod_image_zoomer/jquery.jqzoom-core-pack.js', '', true);
$script = 'jQuery(document).ready(function($){'
			. 'var options = {'
				. 'zoomType:"' . $params->get('zoomType') . '",'
				. 'zoomWidth:' . $params->get('zoomWidth') . ','
				. 'zoomHeight:' . $params->get('zoomHeight') . ','
				. 'xOffset:' . $params->get('xOffset') . ','
				. 'yOffset:' . $params->get('yOffset') . ','
				. 'position:"' . $params->get('position') . '",'
				. 'imageOpacity:' . $params->get('imageOpacity') . ',';
$script .= 'preloadImages:' . ($params->get('preloadImages') ? 'true' : 'false') . ',';
$script .= 'preloadText:' . ($params->get('preloadText') ? 'true' : 'false') . ',';
$script .= 'title:' . ($params->get('showTitle') ? 'true' : 'false') . ',';
$script .= 'lens:' . ($params->get('showLens') ? 'true' : 'false') . ',';
$script .= 'alwaysOn:' . ($params->get('alwaysOn') ? 'true' : 'false') . ',';
$script .= '};'
			. "jQuery('.jqzoom_" . $zoomer_id . "').jqzoom(options);"
		. '});';
JFactory::getDocument()->addScriptDeclaration($script);
?>
<div class="zoom_content">
	<?php
	foreach($items as $item) : ?>
		<a href="<?php echo $item->large; ?>" class="jqzoom_<?php echo $zoomer_id; ?>" title="<?php echo $item->title; ?>">
			<img src="<?php echo $item->small; ?>" alt="<?php echo $item->title; ?>" />
		</a>
	<?php endforeach; ?>
</div>
<div style="clear:both"></div>
