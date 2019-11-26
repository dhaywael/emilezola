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

	if($params->get('color-title')) {
		$colorTitle = 'style="color:'.$params->get('color-title').';"';
	}
?>

<div class="acm-features style-4 row">
	<div class="<?php echo $contentAlign; ?>">
		<?php if($helper->get('title-link')) : ?>
		<div class="features-content <?php echo $featuresImgPull; ?>">
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

			<?php if ($helper->get('features-des')): ?>
				<p>
					<?php echo $helper->get('features-des'); ?>
				</p>
			<?php endif ; ?>

			<?php if ($helper->get('btn-title')): ?>
			<div class="features-action">
				<a href="<?php echo $helper->get('btn-link') ;?>" title="<?php echo $helper->get('btn-title') ;?>" class="btn btn-lg btn-<?php echo $helper->get('btn-color') ;?>">
					<?php echo $helper->get('btn-title') ;?>
				</a>
			</div>
			<?php endif ; ?>
			<!--- //Features Content -->
		</div>
		<?php endif; ?>
		
		<div class="features-image <?php echo $featuresContentPull; ?>">
			<!--- Features image -->				
			<?php if($helper->get('img-icon') || $helper->get('title') || $helper->get('description')) : ?>
				<?php 
					$count = $helper->getRows('title'); 
					if (!$helper->get('columns')): $numberColumn = 3; else: $numberColumn = $helper->get('columns'); endif;
				?>
					
					<?php for ($i=0; $i<$count; $i++) : ?>
					<?php  if ($i%$numberColumn==0) echo '<div class="row">'; ?>
						<div class="col-xs-12 col-sm-<?php echo 12/$numberColumn; ?>">
						
							<?php if($helper->get('img', $i)): ?>
								<div class="image" style="transform: rotate(<?php echo $helper->get('img-rotate', $i); ?>);-webkit-transform: rotate(<?php echo $helper->get('img-rotate', $i); ?>)">
									<img class="img-responsive" src="<?php echo $helper->get('img', $i); ?>" alt="" />
								</div>
							<?php endif; ?>
							
							<?php if($helper->get('title', $i)): ?>
								<div class="title">
									<?php if ($helper->get('title-link', $i)): ?>
										<h4><a href="<?php echo $helper->get('title-link',$i); ?>"><?php echo $helper->get('title', $i); ?></a></h4>
										<?php else : ?>
										<h4><?php echo $helper->get('title', $i); ?></h4>
									<?php endif; ?>
								</div>
							<?php endif; ?>
							
							<?php if($helper->get('description', $i)): ?>
								<div class="description">
									<?php echo $helper->get('description', $i); ?>
								</div>
							<?php endif; ?>
						</div>
						<?php if ( ($i%$numberColumn==($numberColumn-1)) || $i==($count-1) )  echo '</div>'; ?>
					<?php endfor; ?>
			<?php endif; ?>
			<!--- //Features image -->
		</div>
	</div>
</div>