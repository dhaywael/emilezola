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

$headright = $this->countModules('head-right');

?>

<!-- MAIN NAVIGATION -->
<nav id="t3-mainnav" class="wrap navbar navbar-default t3-mainnav">
	<div class="container">
		<!-- MAIN NAVIGATION -->
		<nav class="t3-navbar-wrap">
			
				<?php if ($this->getParam('navigation_collapse_enable')) : ?>
					<div class="t3-navbar-collapse navbar-collapse collapse"></div>
				<?php endif ?>

				<div class="t3-navbar navbar-collapse collapse">
					<jdoc:include type="<?php echo $this->getParam('navigation_type', 'megamenu') ?>" name="<?php echo $this->getParam('mm_type', 'mainmenu') ?>" />
				</div>
		</nav>
		<!-- //MAIN NAVIGATION -->

		<?php if ($headright || $this->getParam('addon_offcanvas_enable')): ?>
			<div class="head-actions">
					<!-- HEAD RIGHT -->
					<div class="head-right <?php $this->_c('head-right') ?>">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						
							<?php if ($this->getParam('navigation_collapse_enable', 1) && $this->getParam('responsive', 1)) : ?>
								<?php $this->addScript(T3_URL.'/js/nav-collapse.js'); ?>
								<button aria-label="navbar-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".t3-navbar-collapse">
									<span class="fa fa-bars"></span>
								</button>
							<?php endif ?>
						</div>
						
						<?php if ($this->getParam('addon_offcanvas_enable')) : ?>
							<div class="off-canvas">
								<?php $this->loadBlock ('off-canvas') ?>
							</div>
						<?php endif ?>

						<jdoc:include type="modules" name="<?php $this->_p('head-right') ?>" style="raw" />
					</div>
					<!-- //HEAD RIGHT -->
			</div>
		<?php endif ?>
	</div>
</nav>
<!-- //MAIN NAVIGATION -->
