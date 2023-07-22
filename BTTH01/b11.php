<?php
$array = array(1, 2, 3, 4, 5);

// Xóa phần tử thứ 3
unset($array[2]);

// Đảm bảo key tuần tự
$array = array_values($array);

// Hiển thị kết quả
print_r($array);
?>
