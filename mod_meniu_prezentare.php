<?php

// No direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
include_once dirname(__FILE__) . '/helper.php';

use Joomla\CMS\Factory;

$user = Factory::getUser();

//se instantiaza class
$ObjMeniu = new clsMeniu;
$codSubiect = $_GET["sb"];
$iduser = $user->id;
$CategoriiMeniu = $ObjMeniu->preia_categorii_meniu();
print_r($ProdusMeniu = $ObjMeniu->preia_date_meniu(1));

/*
if ($iduser <> 0) {
    $view = 'default';
} else {
    $view = 'nouser';
}
*/

$layout = $params->get('layout', $view);

require JModuleHelper::getLayoutPath('mod_meniu_prezentare', $layout);
