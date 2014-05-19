<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>&laquo; <?= get_page_clean_title(); ?> - <?= get_site_name(); ?> &raquo;</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><!--UTF8 Schweiz-->
	<link rel="stylesheet" href="<?= get_theme_url(); ?>/schloff.css" type="text/css" media="screen" />
</head>
	
<body>
<div id="kopf">
		<img src="<?= get_theme_url(); ?>/bild/banner_<?= get_page_slug(false) ?>.jpg" id="banner" alt="Schlofftheater">
		<a href="<?= get_site_url(); ?>"><img src="<?= get_theme_url(); ?>/bild/logo_390.png" alt="logo" id="logo"></a>

	<div id="navigation">
		<ul>
            <?php get_navigation(get_page_slug(false)); ?>
		</ul>
	</div>
</div>
<div id="hauptteil" style="position: relative;">
	<div id="inhalt">
    <?= get_page_content(); ?>
	</div>
</div>
<div id="fusszeile">
	<div id="signatur">	
		<p>Schlofftheater &laquo;&raquo; Beatrice Mock &laquo;&raquo; Theologin &laquo;&raquo; Theaterpädagogin MAS &laquo;&raquo; Weberstrasse&nbsp;5&nbsp;&laquo;&raquo;&nbsp;CH&nbsp;-&nbsp;9400&nbsp;Rorschach</p>
	</div>
</div>
</body>
</html>
