<?php

$xml = simplexml_load_file("users.xml");
$users = new SimpleXMLElement($xml->asXML());
$size = $xml->count();
$users->addChild("user");
$users->user[$size]->addChild("login", $_POST['login']);
$users->user[$size]->addChild("password", $_POST['password']);
$users->user[$size]->addChild("email", $_POST['email']);
$users->user[$size]->addChild("name", $_POST['name']);
$users->asXML("users.xml");
