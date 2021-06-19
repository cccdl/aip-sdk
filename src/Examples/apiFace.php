<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use cccdl\aip_sdk\AipFace;

$api = new AipFace('24401562', '8ztH45IiFcG0TGobti41wlw1', 'ANIQTntcTi3clEbZXkvRgETf3Gk8CLFe');
$res = $api->personIdmatch('陈德龙', '441701199206010019');
var_dump($res);