<?php

session_start();
include('../model/db.php');

$simplexml = new SimpleXMLElement('
<?xml version = "1.0"?>
<details />');
$book1 = $simplexml->addChild('book');
$book1->addChild("Booktittle", "OZ");
$book1->addChild("PublicationsDate", 2007);

$book2 = $simplexml->addChild('book');
$book2->addChild("Booktittle", "Harry Potter");
$book2->addChild("PublicationsDate", 2008);

file_put_contents('details.xml', $simplexml->asXML());