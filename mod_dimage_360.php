<?php
	/**
      * @package DImage
      * @subpackage mod_dimage_360
      * @copyright Copyright (C) 2011 - 2018 D'arteweb, All rights reserved.
      * @license GNU General Public License version 2 or later; see LICENSE.txt
   */

// No direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';
require JModuleHelper::getLayoutPath('mod_dimage_360');
$mid = DImage360Helper::myFunction($module->id); // call the function in helper.