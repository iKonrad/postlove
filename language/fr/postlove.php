<?php
/**
*
* Post Love extension for the phpBB Forum Software package.
* French translation by Galixte (http://www.galixte.com)
*
* @copyright (c) 2015 Stanislav Atanasov <http://anavaro.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'POSTLOVE_USER_LIKES'	=> 'Nombre de « J’aime » partagés',
	'POSTLOVE_USER_LIKED'	=> 'Nombre de « J’aime » reçus',

	'NOTIFICATION_POSTLOVE_ADD'	=> '%s <b>aime</b> votre message :',
	'NOTIFICATION_TYPE_POST_LOVE'	=> 'Un utilisateur aime un de vos messages.',

	// Ver 1.1
	'LIKE_LINE'	=> '%1$s - %2$s <b>a aimé</b> le message « %4$s » de %3$s dans le sujet « %5$s »',
	'POSTLOVE_LIST'	=> 'Liste de « J’aime »',
	'POSTLOVE_LIST_VIEW'	=> 'Permet d’afficher une liste de tous les « J’aime » partagés et reçus.',

	// Ver 2.0
	'CLICK_TO_LIKE' 	=> 'click to like this post',
	'CLICK_TO_UNLIKE'   => 'click to unlike this post',
	'LOGIN_TO_LIKE_POST' => 'login to like this post',
	'CANT_LIKE_OWN_POST' => 'sorry, you cant like your own post',
	'POST_OF_THE_DAY'	=> 'Most liked posts',
	'POST_LIKES'		=> 'Liked',
	'POSTED_AT'			=> 'Posted',
	'LIKED_BY'			=> 'post liked by: ',
	'POSTED_BY'			=> 'Author',
	'LIKES_TODAY'   	=> array(
		1	=> 'Once today',
		2	=> '%d times today',
	),
	'LIKES_THIS_WEEK'   	=> array(
		1	=> 'Once this week',
		2	=> '%d times this week',
	),
	'LIKES_THIS_MONTH'  	 => array(
		1	=> 'Once this month',
		2	=> '%d times this month',
	),
	'LIKES_THIS_YEAR'   	=> array(
		1	=> 'Once this year',
		2	=> '%d times this year',
	),
	'LIKES_EVER'	   => array(
		1	=> 'Once in total',
		2	=> '%d times in total',
	),
	'POSTLOVE_HIDE' 			=> 'Hide Like icons and summaries',
));

