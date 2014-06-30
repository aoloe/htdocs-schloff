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
		<a href="<?= get_site_url(); ?>"><img src="<?= get_theme_url(); ?>/bild/<?= false && get_page_slug(false) == 'verein' ? 'logo_verein_392.png' : 'logo_390.png' ?>" alt="logo" id="logo<?= false && get_page_slug(false) == 'verein' ? '_verein' : '' ?>"></a>

	<div id="navigation">
		<ul>
            <?php get_navigation(get_page_slug(false)); ?>
		</ul>
	</div>
</div>
<div id="hauptteil" style="position: relative;">
	<div id="inhalt">
    <?= false && get_page_slug(false) ?>
    <?php
    // this should stay in, as long as projekte and kontakt are not correctly implemented
    switch (get_page_slug(false)) {
     case ('projekte') :
        include_once(GSTHEMESPATH .$TEMPLATE."/".'old/projekte.php');
     break;
     case ('kontakt') :
        // echo "<pre>".print_r($_POST, 1)."</pre>";
        if (!empty($_POST) && (!empty($_POST['mitteilung']) || !empty($_POST['email']))) {

            // Debugger::structure('_POST', $_POST);
            /*
        [name] => ale
            [adresse] => spatenstrasse 23
        8050 zÃ¼rich
            [telefon] => 043 288 50 43
            [email] => ale@ideale.ch
            [mitteilung] => test mitteilung
            [schicken] => schicken
        )
        */
            $content = "";
            if (!empty($_POST['name'])) {
                $content .= "Name: ".$_POST['name']."\n\n";
            }
            if (!empty($_POST['mitteilung'])) {
                $content .= "Mitteilung: ".$_POST['mitteilung']."\n\n";
            }
            $email = $_POST['email'];
            if (!empty($_POST['email'])) {
                $content .= "Email: ".$_POST['email']."\n\n";
            }
            if (!empty($_POST['telefon'])) {
                $content .= "Telefon: ".$_POST['telefon']."\n\n";
            }
            if (!empty($_POST['adresse'])) {
                $content .= "Adresse:\n".$_POST['adresse']."\n\n";
            }
            if (array_key_exists('adresse', $_POST)) {
                $content .= "Mitgliedschaft: ich möchte Mitglied werden\n";
            }
            // echo($content);
            // Debugger::structure('content', $content);
            if (!empty($content)) {
                // mail("beatrice.mock@schlofftheater.ch","Kontaktformular",$content,"", (empty($email) ? "" : "-f ".$email));
                mail("a.l.e@xox.ch","Kontaktformular",$content,"", (!empty($email) && (strpos($mail, '@') !== false) ? "" : "-f ".$email));
                mail("beatrice.mock@schlofftheater.ch","Kontaktformular",$content,"", (!empty($email) && (strpos($mail, '@') !== false) ? "" : "-f ".$email));
            }
            echo("<p><strong>Danke für die Mitteilung</strong></p>\n<pre>".$content."</pre>");
        }
        get_page_content();
     break;
     default :
        get_page_content();
    }
    ?>
	</div>
</div>
<div id="fusszeile">
	<div id="signatur">	
		<p>Schlofftheater &laquo;&raquo; Beatrice Mock &laquo;&raquo; Theologin &laquo;&raquo; Theaterpädagogin MAS &laquo;&raquo; Weberstrasse&nbsp;5&nbsp;&laquo;&raquo;&nbsp;CH&nbsp;-&nbsp;9400&nbsp;Rorschach</p>
	</div>
</div>
</body>
</html>
