<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$url = $_POST['url'];

function decodeQueryString($get) {
    $_tmp = base64_decode($get);
    $_tmp = strrev($_tmp);
    $_tmp = str_rot13($_tmp);
    $_tmp = json_decode($_tmp);

    return $_tmp;
}

print_r(decodeQueryString($url));

?>