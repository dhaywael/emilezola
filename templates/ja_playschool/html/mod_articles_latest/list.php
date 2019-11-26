<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_latest
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$modCreated = $params->get('mod-created');
$modShow = $params->get('show-readmore');
$modMenu = $params->get('mod-menu');

?>
<div class="latestnews list<?php echo $params->get('moduleclass_sfx'); ?>">
	<div class="row">
		<?php foreach ($list as $item) : ?>
			<?php $images = json_decode($item->images); ?>

			<div class="col-sm-6" itemscope itemtype="https://schema.org/Article">
				<div class="item-wrap">
					<div class="img-wrap">
						<img src="<?php echo $images->image_intro ;?>" alt="<?php echo $item->title; ?>" />

						<div class="create">
							<?php echo JHtml::_('date', $item->created, JText::_('DATE_FORMAT_LC3')); ?>
						</div>
					</div>

					<h3>
						<a href="<?php echo $item->link; ?>" itemprop="url">
							<span itemprop="name">
								<?php echo $item->title; ?>
							</span>
						</a>
					</h3>

					<?php if($modCreated) :?>
					<div class="created-by">
						<?php echo JText::sprintf('COM_CONTENT_WRITTEN_BY', '').' '.'<span>'.$item->author.'</span>'; ?>
					</div>
					<?php endif ;?>

					<?php if($item->introtext) :?>
						<div class="intro">
							<?php echo $item->introtext; ?>
						</div>
					<?php endif ;?>
				</div>
			</div>
		<?php endforeach; ?>
	</div>

	<?php if($modShow) :?>
	<div class="mod-action text-center">
			<a class="btn btn-primary btn-lg" href="<?php  echo JRoute::_("index.php?Itemid={$modMenu}"); ?>" title="View More">
				<?php echo Jtext::_('TPL_VIEW_MORE') ;?>
			</a>
	</div>
	<?php endif ;?>
</div>
