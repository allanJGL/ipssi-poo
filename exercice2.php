<?php

require_once('vendor/autoload.php');
use Ipssi\Evaluation\Document;
use Ipssi\Evaluation\Elements\TextElement;

$textElement1 = new TextElement("test", array(1,1), "fff");
$listElement1 = array($textElement1);
$doc1 = new Document($listElement1, "fff");

echo $doc1->__toString();