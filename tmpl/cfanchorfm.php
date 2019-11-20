<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Fields.AnchorFM
 *
 * @copyright   Copyright (C) 2019 SergioIglesiasNET
 * @license     GNU General Public License v2.0
 * @author 		Sergio Iglesias (@sergiois)
 */

 defined('_JEXEC') or die;

if (!$field->value || $field->value == '-1')
{
	return;
}

$value = $field->value;
$url = '';
if(strpos($value, '/embed/') !== false)
{
	$url = $value;
}
else
{
	$url = str_replace('/episodes/','/embed/episodes/',$value);
}
?>
<iframe src="<?php echo $url; ?>" style="<?php echo $field->fieldparams->get('anchorfmstyles'); ?>" frameborder="0" scrolling="no"></iframe>