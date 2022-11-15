<?php

/**
 *   Modificado por Marcos Moreno
 * ---------------------------------------------------------------------
 * seagregó la linea 11
 */

include('../inc/includes.php');

Html::redirect($CFG_GLPI['root_doc'] . "/front/ticket.php");

// embed (anonymous) dashboard
if (isset($_GET["embed"]) && isset($_GET["dashboard"])) {
    $grid      = new Glpi\Dashboard\Grid($_GET["dashboard"]);
    $dashboard = $grid->getDashboard();
    Html::popHeader($dashboard->getTitle(), $_SERVER['PHP_SELF'], false, 'central', 'central');
    echo $grid->embed($_REQUEST);
    Html::popFooter();
    exit;
}

// Change profile system
if (isset($_REQUEST['newprofile'])) {
    if (isset($_SESSION["glpiprofiles"][$_REQUEST['newprofile']])) {
        Session::changeProfile($_REQUEST['newprofile']);
        if (Session::getCurrentInterface() == "helpdesk") {
            if ($_SESSION['glpiactiveprofile']['create_ticket_on_login']) {
                Html::redirect($CFG_GLPI['root_doc'] . "/front/helpdesk.public.php?create_ticket=1");
            } else {
                Html::redirect($CFG_GLPI['root_doc'] . "/front/helpdesk.public.php");
            }
        }
        $_SESSION['_redirected_from_profile_selector'] = true;
        Html::redirect($_SERVER['HTTP_REFERER']);
    }
    Html::redirect(preg_replace("/entities_id.*/", "", $_SERVER['HTTP_REFERER']));
}

// Manage entity change
if (isset($_GET["active_entity"])) {
    if (!isset($_GET["is_recursive"])) {
        $_GET["is_recursive"] = 0;
    }
    if (Session::changeActiveEntities($_GET["active_entity"], $_GET["is_recursive"])) {
        if (
            ($_GET["active_entity"] == $_SESSION["glpiactive_entity"])
            && isset($_SERVER['HTTP_REFERER'])
        ) {
            Html::redirect(preg_replace("/(\?|&|" . urlencode('?') . "|" . urlencode('&') . ")?(entities_id|active_entity).*/", "", $_SERVER['HTTP_REFERER']));
        }
    }
}

Session::checkCentralAccess();

Html::header(Central::getTypeName(1), $_SERVER['PHP_SELF'], 'central', 'central');

// Redirect management
if (isset($_GET["redirect"])) {
    Toolbox::manageRedirect($_GET["redirect"]);
}

$central = new Central();
$central->display();

Html::footer();
