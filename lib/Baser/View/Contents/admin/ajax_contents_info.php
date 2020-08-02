<?php
/**
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright (c) baserCMS Users Community <http://basercms.net/community/>
 *
 * @copyright		Copyright (c) baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			Baser.View
 * @since			baserCMS v 0.1.0
 * @license			http://basercms.net/license/index.html
 */
?>


<?php foreach($sites as $site): ?>
<h3><?php echo $site['Site']['display_name'] ?></h3>
<ul style="margin-bottom:15px;">
	<li><?php echo sprintf(__d('baser', '公開中： %s ページ'), $site['published']) ?><br>
		<?php echo sprintf(__d('baser', '非公開： %s ページ'), $site['unpublished']) ?><br>
		<?php echo sprintf(__d('baser', '合計： %s ページ'), $site['total']) ?>
	</li>
</ul>
<?php endforeach ?>