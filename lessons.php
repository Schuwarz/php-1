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

//Циклы
//Цикл For
for($i = 0; $i < 10; $i++)
echo $i.'<br>';
//Цикл While
$i = 1;
while($i <= 10) {
echo $i.'<br>';
$i++;
}
//Цикл Do While
$i = 100;
do {
  echo $i;
} while($i < 10);
//Перебор массива
$list = [4,65,7,3,46];

for ($i = 0; $i < count($list); $i++)
    echo "Element $i: $list[$i]";

$list = ["age" => 45, "name" => "Alex", "hobby" => "football"];
$arr = [2,4,4,23,4,3,4,3];

foreach ($arr as $value) 
  echo "Value: $value";

foreach ($list as $item => $value) {
  echo "Key: $item. Value: $value.<br>";
}
  ?>