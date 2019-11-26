<?php
/**
 * ------------------------------------------------------------------------
 * JA Masthead Module 
 * ------------------------------------------------------------------------
 * Copyright (C) 2004-2018 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
 * @license - Copyrighted Commercial Software
 * Author: J.O.O.M Solutions Co., Ltd
 * Websites:  http://www.joomlart.com -  http://www.joomlancers.com
 * This file may not be redistributed in whole or significant part.
 * ------------------------------------------------------------------------
 */

defined( '_JEXEC' ) or die( 'Restricted access' );
require_once (dirname(__FILE__).'/helper.php');
$helper = ModJAMastheadHelper::getInstance();

//Load style
JHTML::stylesheet('modules/' . $module->module . '/asset/css/style.css');

// Get masshead information
$masthead = $helper->getMasthead($params);
// Display
require JModuleHelper::getLayoutPath($module->module, $params->get('layout', 'default'));