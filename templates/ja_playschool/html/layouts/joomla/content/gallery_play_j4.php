<?php
/*
 * ------------------------------------------------------------------------
 * JA Focus Template
 * ------------------------------------------------------------------------
 * Copyright (C) 2004-2011 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
 * @license - Copyrighted Commercial Software
 * Author: J.O.O.M Solutions Co., Ltd
 * Websites:  http://www.joomlart.com -  http://www.joomlancers.com
 * This file may not be redistributed in whole or significant part.
 * ------------------------------------------------------------------------
*/

defined('_JEXEC') or die;
$item       = is_array($displayData) ? $displayData['item'] : $displayData;
$params     = json_decode($item->attribs, true);
$desc       = '';
//var_dump($item);
if (!isset($params['ctm_gallery'])) return;
$gallery = $params['ctm_gallery'];

if(is_array($gallery) && isset($gallery['src'])) {
  $thumbnail = $gallery['src'][0];
  $desc = $gallery['caption'][0];
}

if(!$thumbnail) {
  $images = json_decode($item->images);
  $thumbnail = @$images->image_intro;
}

$galleryId = 'ja-gallery-detail-'.$item->id;
?>

<?php if(is_array($gallery) && count($gallery['src']) > 1):
  ?>

  <div id="<?php echo $galleryId; ?>" class="carousel carousel-thumbnail carousel-fade slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <?php $cnt = -1; ?>
      <?php foreach($gallery['src'] as $index => $src): $cnt++; ?>
        <li data-target="#<?php echo $galleryId; ?>" data-slide-to="<?php echo $cnt; ?>" class="<?php if($cnt == 0) echo 'active'; ?>" itemprop="thumbnail"></li>
      <?php endforeach; ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <?php $cnt = -1; ?>
      <?php foreach($gallery['src'] as $index => $src): $cnt++; ?>
      <div class="carousel-item <?php if($index == 0) echo 'active'; ?>">
        <div class="item-image" itemprop="image">
          <img class="<?php echo htmlspecialchars($gallery['class'][$index]); ?>" src="<?php echo htmlspecialchars(JUri::root(true).'/'.$src); ?>" alt="<?php echo htmlspecialchars($gallery['caption'][$index]); ?>" itemprop="thumbnailUrl"/>
        </div>
        <?php if ($gallery['caption'][$index] !='') : ?>
        <div class="carousel-caption">
          <?php echo $gallery['caption'][$index]; ?>
        </div>
        <?php endif; ?>
      </div>
      <?php endforeach; ?>
    </div>
    
    <!-- Controls -->
    <a class="carousel-control-prev" href="#<?php echo $galleryId; ?>" role="button" data-slide="prev">
      <span class="fa fa-angle-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#<?php echo $galleryId; ?>" role="button" data-slide="next">
      <span class="fa fa-angle-right"></span>
      <span class="sr-only">Next</span>
    </a>
    <?php echo JLayoutHelper::render('joomla.content.image.gallery', array('item' => $item, 'context' => 'icon')); ?>
  </div>

<?php elseif (isset($thumbnail) && !empty($thumbnail)) : ?>
  <div class="item-image">
    <img
      <?php if ($desc):
        echo 'class="caption"' . ' title="' . htmlspecialchars($desc) . '"';
      endif; ?>
      src="<?php echo htmlspecialchars($thumbnail); ?>" alt="<?php echo htmlspecialchars($item->title); ?>" itemprop="thumbnailUrl"/>
  </div>
<?php endif; ?>