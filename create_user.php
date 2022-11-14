<?php

$xml = simplexml_load_file('users.xml');
$users = new SimpleXMLElement($xml->asXML());
$size = $xml->count();

$res = '';
$failed = false;
for($i = 0;$i < $size;$i++) {
    if($users->user[$i]->login == $_POST['login']) {
        echo 'login';
        $failed = true;
        break;
    }
}
for($i = 0;$i < $size;$i++) {
    if($users->user[$i]->email == $_POST['mail']) {
        echo 'email';
        $failed = true;
        break;
    }
}

if(!$failed) {
    echo 'good';
    setcookie('name', $_POST['name']);

    $users->addChild('name');
    $users->user[$size]->addChild('login', $_POST['login']);
    $users->user[$size]->addChild('password', md5($_POST['password']) . 'salt');
    $users->user[$size]->addChild('email', $_POST['mail']);
    $users->user[$size]->addChild('name', $_POST['name']);
    $users->asXML('users.xml');
}
