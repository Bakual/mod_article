<?php
/**
 * @package     Module.Admin
 * @subpackage  mod_article
 *
 * @copyright   Copyright (C) 2020 Thomas Hunziker.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JModelLegacy::addIncludePath(JPATH_ADMINISTRATOR . '/components/com_content/models', 'ContentModel');

/**
 * Helper for mod_article
 *
 * @since  1.0.0
 */
abstract class ModArticleHelper
{
	/**
	 * Get a list of articles.
	 *
	 * @param   \Joomla\Registry\Registry  &$params  The module parameters.
	 *
	 * @return  object|false  An article object, or false on error.
	 */
	public static function getItem(&$params)
	{
		// Get an instance of the generic articles model
		$model = JModelLegacy::getInstance('Article', 'ContentModel', array('ignore_request' => true));

		$item = $model->getItem($params->get('id'));

		if ($error = $model->getError())
		{
			JError::raiseError(500, $error);

			return false;
		}

		return $item;
	}
}
