<?php
/**
 * @package     ImageZoomer
 * @author      Thomas Hunziker <admin@bakual.net>
 * @copyright   (C) 2014 - Thomas Hunziker
 * @license     http://www.gnu.org/licenses/gpl.html
 **/

defined('_JEXEC') or die();

// Get parameters
$zoomer_id  = $params->get('zoomer_id');
$zoomnumber = $params->get('zoomnumber', 1);

$items = array();
for ($i = 1; $i <= $zoomnumber; $i++)
{
	$item = new stdClass;
	$item->title = $params->get('linkTitle' . $i);
	$item->small = $params->get('small_image' . $i);
	$item->large = $params->get('large_image' . $i);

	$items[] = $item;
}

require JModuleHelper::getLayoutPath('mod_image_zoomer', $params->get('layout', 'default'));
