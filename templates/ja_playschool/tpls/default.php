<?php
/**
 * ------------------------------------------------------------------------
 * JA Play School Template
 * ------------------------------------------------------------------------
 * Copyright (C) 2004-2018 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
 * @license - Copyrighted Commercial Software
 * Author: J.O.O.M Solutions Co., Ltd
 * Websites:  http://www.joomlart.com -  http://www.joomlancers.com
 * This file may not be redistributed in whole or significant part.
 * ------------------------------------------------------------------------
 */


defined('_JEXEC') or die;
?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>"
	  class='<jdoc:include type="pageclass" />'>

<head>
	<jdoc:include type="head" />
	<?php $this->loadBlock('head') ?>
</head>

<body>

<div class="t3-wrapper"> <!-- Need this wrapper for off-canvas menu. Remove if you don't use of-canvas -->

  <?php $this->loadBlock('topbar') ?>

  <?php $this->loadBlock('header') ?>

  <?php $this->loadBlock('mainnav') ?>

  <?php $this->loadBlock('slideshow') ?>

  <?php $this->loadBlock('masthead') ?>

  <?php $this->loadBlock('sections') ?>

  <?php $this->loadBlock('mainbody') ?>

  <?php $this->loadBlock('sections-bottom') ?>

  <?php $this->loadBlock('navhelper') ?>

  <?php $this->loadBlock('footer') ?>

</div>

</body>

</html>