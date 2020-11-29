<?php
/**
 * レイアウト
 * 呼出箇所：全ページ
 */
?>
<html lang="ja">
<?php $this->BcBaser->docType('html5') ?>
<head>
	<?php $this->BcBaser->charset() ?>
	<?php $this->BcBaser->title() ?>
	<?php $this->BcBaser->metaDescription() ?>
	<?php $this->BcBaser->metaKeywords() ?>
	<?php $this->BcBaser->icon() ?>
	<?php $this->BcBaser->css(array(
		'style',
		'workspace',
		'https://fonts.googleapis.com/icon?family=Material+Icons',
		'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css'
	)) ?>
	<?php $this->BcBaser->js(array(
		'https://code.jquery.com/jquery-3.5.1.min.js',
		'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js',
		'https://unpkg.com/scrollreveal',
		'init.js',
	)) ?>
	<?php $this->BcBaser->scripts() ?>
	<!-- /Elements/google_analytics.php -->
	<?php $this->BcBaser->googleAnalytics() ?>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
</head>
<body>
  
  <?php $this->BcBaser->header() ?>
  
  <?php if($this->BcBaser->isHome()):?>
	<?php $this->BcBaser->element('top');?>
  <?php else:?>
	<?php $this->BcBaser->content();?>
  <?php endif;?>
  
  <?php $this->BcBaser->footer() ?>
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">
  <div id="page_top"><a href="#top"></a></div>


  <?php $this->BcBaser->func() ?>
  </body>
</html>
