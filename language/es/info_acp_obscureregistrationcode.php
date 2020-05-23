<?php
/**
*
* @package phpBB Extension - Obscure Contact Us
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
	'ACP_OBSCUREREGISTRATIONCODE'				=> 'Código de registro oscuro',
	'ACP_OBSCUREREGISTRATIONCODE_CONFIG'		=> 'Configuración del código de registro oscuro',

	'OBSCUREREGISTRATIONCODE_CONFIG'			=>'Código de registro oscuro',
	'OBSCUREREGISTRATIONCODE_CONFIG_EXPLAIN'	=>'Configure el código de registro que se utilizará en el phpBB Q&A CAPTCHA incorporado.<br />Se mostrará de una manera que sea difícil de acceder para los SPAMbots pero fácil de leer para los humanos.<br />Antes de continuar, DEBE leer las instrucciones y las preguntas frecuentes siguiendo este',
	'OBSCUREREGISTRATIONCODE_CONFIG_SET'		=>'Configuración',
	'OBSCUREREGISTRATIONCODE_CONFIG_SAVED'		=>'Opciones de código de registro oscuro guardadas',

	'RANDOMGENERATOR'							=>'Generador de código aleatorio',
	'CREATE'									=>'Crear nuevo código',
	'COPY'										=>'Copiar al portapapeles',

	'OBSCUREREGISTRATIONCODE'					=>'Código de registro',
	'OBSCUREREGISTRATIONCODE_EXPLAIN'			=>'Ingrese el código que creó arriba.<br />Recuerde agregar este código a la configuración de Q&A CAPTCHA.',

	'OBSCUREREGISTRATIONCODE_DIV'				=>'Primera capa adicional de Resistencia SPAMbot',
	'OBSCUREREGISTRATIONCODE_ORC'				=>'Segunda capa adicional de Resistencia SPAMbot',
	'OBSCUREREGISTRATIONCODE_CODE_EXPLAIN'		=>'Se recomienda que cambie este campo para aumentar la resistencia SPAMbot de esta extensión.',
	'OBSCUREREGISTRATIONCODE_CODE_LETTERS'		=>'Sin números, espacios o caracteres especiales.',

	'OBSCUREREGISTRATIONCODE_BG_ON'				=>'Colorea el fondo del código de registro',
	'OBSCUREREGISTRATIONCODE_BG_ON_EXPLAIN'		=>'Si se establece en "NO", es posible que deba cambiar el color de fuente predeterminado',

	'OBSCUREREGISTRATIONCODE_BG'				=>'Color de fondo del código de registro',
	'OBSCUREREGISTRATIONCODE_BG_EXPLAIN'		=>'Seleccione el color de fondo del código de registro',
	'OBSCUREREGISTRATIONCODE_COLOUR'			=>'Haga clic en el cuadro para seleccionar el color',
	'OBSCUREREGISTRATIONCODE_HASH'				=>'#',

	'OBSCUREREGISTRATIONCODE_FONT'				=>'Color de fuente de código de registro',
	'OBSCUREREGISTRATIONCODE_FONT_EXPLAIN'		=>'Seleccione el color de fuente del código de registro',

	'OBSCUREREGISTRATIONCODE_SIZE'				=>'Tamaño de la fuente del código de registro',
	'OBSCUREREGISTRATIONCODE_SIZE_EXPLAIN'		=>'Escriba el tamaño de la fuente en px',
));
