<?php
$length = 7;

function pcode_random_string($length) {
    $key = '';
    $keys = array_merge(range(0, 9), range('A', 'Z'));

    for ($i = 0; $i < $length; $i++) {
        $key .= $keys[array_rand($keys)];
    }
    return $key;

}

$pcode = pcode_random_string($length);
$key = '';
?>