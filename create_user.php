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

function add_attr($xw, $name, $value) {
    xmlwriter_start_attribute($xw, $name);
    xmlwriter_text($xw, $value);
    xmlwriter_end_attribute($xw);
}

//file_put_contents("users.xml", md5($_POST['password']) . "salt");

$xw = xmlwriter_open_memory();
xmlwriter_set_indent($xw, 1);
$res = xmlwriter_set_indent_string($xw, ' ');

if(filesize("/users.xml") == 0){
    xmlwriter_start_document($xw, '1.0', 'UTF-8');
}


// A first element
xmlwriter_start_element($xw, $_POST['login']);

add_attr($xw, 'name', $_POST['name']);
add_attr($xw, 'login', $_POST['login']);
add_attr($xw, 'password', md5($_POST['password']) . "salt");
add_attr($xw, 'email', $_POST['email']);

xmlwriter_end_document($xw);
file_put_contents("users.xml", xmlwriter_output_memory($xw), FILE_APPEND);
//echo xmlwriter_output_memory($xw);