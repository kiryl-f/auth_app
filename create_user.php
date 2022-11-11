<?php

function return_var_dump(...$args): string
{
    ob_start();
    try {
        var_dump(...$args);
        return ob_get_clean();
    } catch (\Throwable $ex) {
        // PHP8 ArgumentCountError for 0 arguments, probably..
        // in php<8 this was just a warning
        ob_end_clean();
        throw $ex;
    }
}

file_put_contents("users.xml", $_POST);
/*$xml = new DOMDocument();
$xml->load("/users.xml");
$root = $xml->firstChild;
$newElement = $xml->createElement('activity');
$root->appendChild($newElement);
$xml->save("/users.xml");*/