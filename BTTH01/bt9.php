//dùng print_r
<?php
$arrs = ['1', 'B', 'C', 'E'];
$arrs = array_map('strtolower', $arrs);

// Hiển thị kết quả
print_r($arrs);
?>

// dùng var_dump
<?php
function convertToLowercase($arr) {
    return array_map('strtolower', $arr);
}

$arrs = ['1', 'B', 'C', 'E'];
$result = convertToLowercase($arrs);

// Hiển thị kết quả sử dụng var_dump
var_dump($result);
?>
