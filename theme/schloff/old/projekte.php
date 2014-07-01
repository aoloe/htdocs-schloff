<?php
include('library/Debugger.php');
include('library/Template.php');
$template = new Template();
$template->set('title', "Schlofftheater");
$template->set('banner', "projekt");
// $template->set('content', file_get_contents('html/projekte.html'));
// $template->set('content', file_get_contents('html/projekte.html'));
// Debugger::structure('substr', substr(file_get_contents('data/projekte.php'), 6));
// $projet = unserialize(substr(file_get_contents('data/projekte.php'), 6));
// Debugger::structure('projet', $projet);

if (!function_exists('get_uploads_url')) {
    function get_uploads_url() {
        return get_site_url(false).'data/uploads/';
    }
}

include_once('data/projekte.php');
// $template_project = new Template(GSTHEMESPATH .$TEMPLATE."/"'old/html/projekte.php');
$template_project = new Template(GSTHEMESPATH .$TEMPLATE."/".'old/html/projekte.php');
// Debugger::structure('projet', $project);
$template_project->set('project', $project);
echo($template_project->fetch());
/*
$template->set('content', $template_project->fetch());
echo($template->fetch('html/schlofftheater.html'));
*/
?>
