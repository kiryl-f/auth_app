<?php

$xml = simplexml_load_file('users.xml');
$users = new SimpleXMLElement($xml->asXML());
$size = $xml->count();

$res = '';
for($i = 0;$i < $size;$i++) {
    if($users->user[$i]->login == $_POST['login']) {
        echo json_encode(array('error' => 'login'));
        exit;
    }
}
for($i = 0;$i < $size;$i++) {
    if($users->user[$i]->email == $_POST['mail']) {
        echo json_encode(array('error' => 'email'));
        exit;
    }
}

echo json_encode(array('error' => 'no'));
setcookie('name', $_POST['name']);

$users->addChild('user');
$users->user[$size]->addChild('login', $_POST['login']);
$users->user[$size]->addChild('password', md5($_POST['password']) . 'salt');
$users->user[$size]->addChild('email', $_POST['mail']);
$users->user[$size]->addChild('name', $_POST['name']);
$users->asXML('users.xml');
