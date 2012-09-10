<?php
/**
 * This file is part of the Nella Framework (http://nellafw.org).
 *
 * Copyright (c) 2006, 2012 Patrik Votoček (http://patrik.votocek.cz)
 *
 * For the full copyright and license information,
 * please view the file LICENSE.txt that was distributed with this source code.
 */

namespace Nella\Localization;

/**
 * Localization storage interface
 *
 * @author	Patrik Votoček
 */
interface IStorage
{
	/**
	 * @param Dictionary
	 */
	public function save(Dictionary $dictionary);

	/**
	 * @param string
	 * @param string|NULL
	 * @return Dictionary
	 */
	public function load($lang, $module = NULL);
}

