<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="<?php echo Localization::activeLanguage() ?>">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<link rel="stylesheet" href="<?php echo $view->getThemePath()?>/css/bootstrap-modified.css">
	<?php echo $html->css($view->getStylesheet('main.less')) ?>
	<?php View::element('header_required', [
        'pageTitle' => isset($pageTitle) ? $pageTitle : '',
        'pageDescription' => isset($pageDescription) ? $pageDescription : '',
        'pageMetaKeywords' => isset($pageMetaKeywords) ? $pageMetaKeywords : ''
    ]);?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="<?php echo $view->getThemePath()?>/js/default.js"></script>
</head>
<body>

<div class="<?php echo $c->getPageWrapperClass()?>">