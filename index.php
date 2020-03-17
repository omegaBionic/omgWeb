<?php

// load every thigns installed 
require './vendor/autoload.php';

$smarty = new Smarty;
$smarty->debugging = true;

$smarty->assign('site_title', 'La fin du monde');
$smarty->assign('events', ['virus', 'home-office', 'confinement', 'formation PHP', 'famine', 'décès']);

$smarty->display('templates/index.tpl');