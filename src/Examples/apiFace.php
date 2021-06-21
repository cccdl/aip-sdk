<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use cccdl\aip_sdk\AipFace;

$api = new AipFace('', '', '');

$data = [
    [
        'image' => 'https://moyou-asset.oss-cn-hangzhou.aliyuncs.com/23.png',
        'image_type' => 'URL',
    ],
    [
        'image' => 'https://moyou-asset.oss-cn-hangzhou.aliyuncs.com/24.png',
        'image_type' => 'URL',
    ],
];


$res = $api->match($data);
var_dump($res);