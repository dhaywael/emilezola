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
	$modTitle       = $module->title;
	$featuresTitle 	= $helper->get('block-title');
	$featuresIntro 	= $helper->get('block-intro');
	$count 					= $helper->getRows('data.title');
	$column 				= $helper->get('columns');
?>

<div class="acm-features style-1">
	<div id="acm-feature-<?php echo $module->id; ?>" class="acm-feature-slide">
		<div class="owl-carousel owl-theme">
			<?php 
				for ($i=0; $i<$count; $i++) : 
			?>
				<div class="features-item col">
					<div class="features-item-inner">
						<?php if($helper->get('data.img', $i)) : ?>
							<div class="features-img">
								<div class="img">
									<img src="<?php echo $helper->get('data.img', $i) ?>" alt="" />
								</div>
								<div class="mask-image bg-<?php echo $helper->get('data.type-color', $i) ?>"
									<?php if($helper->get('data.type-color', $i)) echo 'style="background-image: url('.$helper->get('data.mask', $i).')"';?>
								></div>
							</div>
						<?php endif ; ?>
						
						<?php if($helper->get('data.title', $i)) : ?>
							<h3 class="link-<?php echo $helper->get('data.type-color', $i) ?>">
								<?php if($helper->get('data.link', $i)) : ?>
									<a href="<?php echo $helper->get('data.link', $i) ?>" title="<?php echo $helper->get('data.title', $i) ?>">
								<?php endif ; ?>
									<?php echo $helper->get('data.title', $i) ?>

								<?php if($helper->get('data.link', $i)) : ?>
								</a>
								<?php endif ; ?>
							</h3>
						<?php endif ; ?>

						<?php if($helper->get('data.sub-title', $i)) : ?>
							<span><?php echo $helper->get('data.sub-title', $i) ?></span>
						<?php endif ; ?>
						
						<?php if($helper->get('data.description', $i)) : ?>
							<p><?php echo $helper->get('data.description', $i) ?></p>
						<?php endif ; ?>

						<?php if($helper->get('data.link', $i)) : ?>
							<div class="feature-action">
								<a class="btn btn-lg btn-<?php echo $helper->get('data.type-color', $i) ?>" href="<?php echo $helper->get('data.link', $i) ?>"><?php echo $helper->get('data.btn-value', $i) ?></a>
								</div>
						<?php endif ; ?>
					</div>
				</div>
			<?php endfor ?>
		</div>
	</div>
</div>

<script>
(function($){
  jQuery(document).ready(function($) {
    $("#acm-feature-<?php echo $module->id; ?> .owl-carousel").owlCarousel({
      addClassActive: true,
      items: <?php echo $column; ?>,
      loop: true,
      nav: true,
      dots: true,
      navText: ["<span class='fa fa-angle-left'></span>", "<span class='fa fa-angle-right'></span>"],
      responsive:{
        0:{
            items:1
        },
        767:{
            items:1
        },
        1024:{
            items:<?php echo $column; ?>
        }
    	}
    });
  });
})(jQuery);
</script>
<noscript>
  <?php echo JText::_('YOU MUST ENABLED JS'); ?>
</noscript>