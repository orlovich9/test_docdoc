<?php

require_once __DIR__ . '/vendor/autoload.php';

use Lib\Database\Query;
use Lib\String\Manager;

$db = new Query;
var_dump($db);
$arResult = Manager::getFrequencyRepeatWords($db->getData());
