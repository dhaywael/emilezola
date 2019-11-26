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

  $align = $helper->get('align');
  
  if ($align == 1): 
  	$alignClass 	= "features-content-right";
  	$contentPull 	= "col-xs-12 col-md-6 pull-right";
  	$imgPull 			= "col-xs-12 col-md-6 pull-left";
  else:
  	$alignClass = "features-content-left";
  	$contentPull 	= "col-xs-12 col-md-6 pull-left";
  	$imgPull 			= "col-xs-12 col-md-6 pull-right";
  endif;

  $moduleTitle = $module->title;
  $moduleSub = $params->get('sub-heading');
	$subColor = $params->get('color-heading');
	$subbgColor = $params->get('bg-color-heading');

	$colorTitle = '';

	$styleSub = 'style="background-color:'.$subbgColor.';color:'.$subColor.';"';

	if($params->get('color-title')) {
		$colorTitle = 'style="color:'.$params->get('color-title').';"';
	}
?>

<div class="acm-features style-2 <?php echo $helper->get('features-style'); ?>">
	<div class="features-content <?php echo $alignClass; ?>">
		<div class="row">
			<?php if($helper->get('img-features')) : ?>
			<div class="features-image <?php echo $imgPull; ?>">
				<img src="<?php echo $helper->get('img-features'); ?>" alt="<?php echo $moduleTitle; ?>"/>
			</div>
			<?php endif ; ?>

			<div class="features-item <?php echo $contentPull; ?>">
				<?php if ($moduleSub): ?>
					<div class="sub-heading">
						<span <?php echo $styleSub; ?>><?php echo $moduleSub; ?></span>		
					</div>
				<?php endif; ?>

				<?php if($module->showtitle) : ?>
					<h2 <?php echo $colorTitle ;?>>
						<?php if ($helper->get('title-link')): ?>
							<a href="<?php echo $helper->get('data-s6.title-link'); ?>" title="<?php echo $moduleTitle; ?>">
						<?php endif; ?>
						
						<?php echo $moduleTitle ?>
						
						<?php if ($helper->get('title-link')): ?>
							</a>
						<?php endif; ?>
					</h2>
				<?php endif ; ?>
				
				<?php if($helper->get('description')) : ?>
					<p><?php echo $helper->get('description') ?></p>
				<?php endif ; ?>
				
				<?php if($helper->get('button')) : ?>
					<a class="btn btn-primary" href="<?php echo $helper->get('title-link'); ?>"><?php echo $helper->get('button') ?></a>
				<?php endif ; ?>
			</div>
		</div>
	</div>
</div>
