<?php
// Одномерные массивы
$nums = array(1, 5, 2, 1254, -24);
echo $nums[0];
$arr = [3, 56, "LOH", true];
$arr[0] = "SIGMA";
echo $arr[0];

//Ассоциативные массивы
$list = [
  "Age" => 50,
  "Name" => "Alex",
  "Hobby" => "Football"
];
$list["Name"] = "Nikita";
echo $list["Name"];

//Многомерные массивы
$matrix = [
  [1, 5, 567,],
  [746, 463, -235],
  [4, 0, 543],
];

echo $matrix[1][2];
?>