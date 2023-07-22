<?php
$keys = array(
    "field1" => "first",
    "field2" => "second",
    "field3" => "third"
);
$values = array(
    "field1value" => "dinosaur",
    "field2value" => "pig",
    "field3value" => "platypus"
);

// Tạo mảng thứ ba từ hai mảng $keys và $values
$keysAndValues = array_combine($keys, $values);

// Hiển thị mảng kết quả
print_r($keysAndValues);
?>
