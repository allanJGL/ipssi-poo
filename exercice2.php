<?php

require_once('vendor/autoload.php');

use Ipssi\Evaluation\Document;
use Ipssi\Evaluation\Elements\StarFormElement;
use Ipssi\Evaluation\Elements\CloudFormElement;
use Ipssi\Evaluation\Elements\ImageElement;
use Ipssi\Evaluation\Elements\TextElement;

$textElement = new TextElement("text element", array(1, 1), "fff");
$formElement1 = new StarFormElement("star form element", array(2, 1), "fff");
$formElement2 = new CloudFormElement("cloud form element", array(2, 2), "fff");
$imageElement = new ImageElement("image element", array(3, 1));

$listElement = array($textElement, $formElement1, $formElement2, $imageElement);

$doc = new Document($listElement, "fff");

echo $doc->__toString();

//modifs couleurs pour les éléments texte et forme + document
$textElement->setColor("aaa");
$formElement2->setColor("bbb");
$doc->setBackgroundColor("ccc");

echo PHP_EOL . $doc->__toString();
