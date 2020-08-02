<?php
/**
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright (c) baserCMS Users Community <http://basercms.net/community/>
 *
 * @copyright		Copyright (c) baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			Uploader.Config
 * @since			baserCMS v 4.0.5
 * @license			http://basercms.net/license/index.html
 */


Router::connect('/rss/index', ['plugin' => 'blog', 'controller' => 'blog', 'action' => 'index']);
Router::connect('/tags/*', ['plugin' => 'blog', 'controller' => 'blog', 'action' => 'tags']);
$request = new CakeRequest();
$site = BcSite::findByUrl($request->url);
if($site) {
	Router::connect("/{$site->alias}/tags/*", ['prefix' => $site->name, 'plugin' => 'blog', 'controller' => 'blog', 'action' => 'tags'], 'Blog');
}
