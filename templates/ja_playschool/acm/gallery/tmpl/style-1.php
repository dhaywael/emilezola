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

	$count 					= $helper->getRows('data.img');
	$column 				= $helper->get('columns');

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

<div class="container">
	<div class="acm-gallery style-1">
		<?php if ($moduleSub): ?>
			<div class="sub-heading">
				<span <?php echo $styleSub; ?>><?php echo $moduleSub; ?></span>		
			</div>
		<?php endif; ?>

		<?php if($module->showtitle) : ?>
			<h2 <?php echo $colorTitle ;?>>
				<?php echo $moduleTitle ?>
			</h2>
		<?php endif ; ?>

		<div id="acm-gallery-<?php echo $module->id; ?>" class="acm-gallery-slide">
			<div class="owl-carousel owl-theme">
		  	<?php for ($i=0; $i<$count; $i++) : ?>
		  		<div class="item">
		    	<?php if($helper->get('data.img', $i)) : ?>
						<div class="img" style="transform: rotate(<?php echo $helper->get('data.img-rotate', $i); ?>);-webkit-transform: rotate(<?php echo $helper->get('data.img-rotate', $i); ?>)">
							<img src="<?php echo $helper->get('data.img', $i) ?>" alt="" />
						</div>
					<?php endif ; ?>
				</div>
		    <?php endfor ?>
		  </div>
		</div>
	</div>
</div>

<script>
(function($){
  jQuery(document).ready(function($) {
  	<?php if($helper->get('rows')) : ?>
  	$('#acm-gallery-<?php echo $module->id; ?> .owl-carousel .item').each(function(index) {
	    if (index % 2 == 0) {
	      $(this).add($(this).next('.item')).wrapAll('<div class="item__col" />');
	    }
	  });
	  <?php endif ; ?>

    $("#acm-gallery-<?php echo $module->id; ?> .owl-carousel").owlCarousel({
      addClassActive: true,
      items: <?php echo $column; ?>,
      loop: false,
      nav: true,
      margin: 32,
      dots: true,
      navText: ["<span class='fa fa-angle-left'></span>", "<span class='fa fa-angle-right'></span>"],
      responsive:{
        0:{
            items:1
        },
        480:{
            items:2
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