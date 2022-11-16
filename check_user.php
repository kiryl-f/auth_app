<?php
$login = $_POST['login'];
$password = $_POST['password'];
$name = '';
$xml = simplexml_load_file('users.xml');
$users = new SimpleXMLElement($xml->asXML());
$size = $xml->count();
$found = false;
for($i = 0;$i < $size;$i++) {
    if($users->user[$i]->password == md5($password) . 'salt' && $users->user[$i]->login == $login) {
        $found = true;
        $name = $users->user[$i]->name;
        break;
    }
}
if($found) {
    echo json_encode(array('found' => 'true'));
    setcookie('name', $name);
} else {
    echo json_encode(array('found' => 'false'));
}