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
  
  if ($align==1): 
  	$contentAlign = "content-right";
  	$featuresContentPull = "col-sm-12 col-xs-12 col-md-6 pull-right";
  	$featuresImgPull = " col-md-6 pull-left";
  else: 
  	$contentAlign = "content-left";
  	$featuresContentPull = "col-sm-12 col-xs-12 col-md-6 pull-left";
  	$featuresImgPull = " col-md-6 pull-right";
  endif;

  $moduleTitle = $module->title;
  $moduleSub = $params->get('sub-heading');
	$subColor = $params->get('color-heading');
	$subbgColor = $params->get('bg-color-heading');
	$patternImg = $helper->get('pattern-bg');

	$colorTitle = '';

	$styleSub = 'style="background-color:'.$subbgColor.';color:'.$subColor.';"';
	$patternBackground  = 'style="background-image: url('.$patternImg.'); background-position: center center;"';

	if($params->get('color-title')) {
		$colorTitle = 'style="color:'.$params->get('color-title').';"';
	}
?>

<div class="acm-features style-3 <?php echo $helper->get('features-style'); ?>">
	<div class="row <?php echo $contentAlign.' bg-'.$helper->get('type-color'); ?>">
		<?php if($helper->get('img-features')) : ?>
		<div class="features-image <?php echo $featuresImgPull; ?>">
			<img src="<?php echo $helper->get('img-features'); ?>" alt="<?php echo $moduleTitle; ?>"/>
		</div>
		<?php endif; ?>
		
		<div class="<?php echo $featuresContentPull; ?>" <?php echo $patternBackground ;?>>
			<div class="features-content <?php echo $helper->get('type-color'); ?>">
				<!--- Features Content -->
				<?php if ($moduleSub): ?>
					<div class="sub-heading">
						<span <?php echo $styleSub; ?>><?php echo $moduleSub; ?></span>		
					</div>
				<?php endif; ?>

				<?php if($module->showtitle) : ?>
					<h2>
						<?php if ($helper->get('title-link')): ?>
							<a href="<?php echo $helper->get('data-s6.title-link'); ?>" title="<?php echo $moduleTitle; ?>" <?php echo $colorTitle ;?>>
						<?php endif; ?>
						
						<?php echo $moduleTitle ?>
						
						<?php if ($helper->get('title-link')): ?>
							</a>
						<?php endif; ?>
					</h2>
				<?php endif ; ?>

				<?php if ($helper->get('description')): ?>
					<p>
						<?php echo $helper->get('description'); ?>
					</p>
				<?php endif ; ?>

				<?php if ($helper->get('btn-link')): ?>
				<div class="features-action">
					<a href="<?php echo $helper->get('btn-link') ;?>" title="<?php echo $helper->get('link-title') ;?>" class="btn btn-lg btn-<?php echo $helper->get('btn-color') ;?>">
						<?php echo $helper->get('btn-title') ;?>
					</a>
				</div>
				<?php endif ; ?>
				<!--- //Features Content -->
			</div>
		</div>
	</div>
</div>