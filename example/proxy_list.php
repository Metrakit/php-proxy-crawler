<?php

use Metrakit\ProxyCrawler\ProxyCrawler;

require_once __DIR__ . '/../vendor/autoload.php';

$crawler = new ProxyCrawler;

var_dump($crawler->get());