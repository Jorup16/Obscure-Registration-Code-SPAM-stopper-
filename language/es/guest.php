<?php
/**
*
* @package phpBB Extension - Obscure Registration Code
* @copyright (c) 2015 - HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'REGISTRATIONCODE'							=> 'Mostrar código de registro',
	'NOSCRIPT'									=> 'Debes de habilitar Javascript para ver el código de registro',
));
