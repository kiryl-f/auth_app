<?php

$xml = simplexml_load_file("users.xml");
$users = new SimpleXMLElement($xml->asXML());
$users->addChild("user");
$users->addChild("login", $_POST['login']);
$users->addChild("password", $_POST['password']);
$users->addChild("email", $_POST['email']);
$users->addChild("name", $_POST['name']);
$users->asXML("users.xml");
