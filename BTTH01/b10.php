<?php
function convertToUppercase($arr) {
    return array_map('strtoupper', $arr);
}

$arrs = ['1', 'b', 'c', 'd'];
$result = convertToUppercase($arrs);

// Hiển thị kết quả sử dụng var_dump
var_dump($result);

// Hiển thị kết quả sử dụng print_r
print_r($result);
?>
