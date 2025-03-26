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

//Функции
function info($word) {
  echo "$word<br>";
}

info("Hellow"); // Вызов функции с параметром

function math($x, $y) {
  $res = $x + $y;
  info ($res);
}

math(2, 5);

//Подключение файлов

require "папка/файл.пхп"; //выдаст ошибку, код остановится
include "папка/файл.пхп"; //выдаст ошибку, код продолжится
include_once "папка/файл.пхп"; //Подключится 1 раз
require_once "папка/файл.пхп"; //Подключится 1 раз

// работа с формой

//<form method="post"></form> //Передача данных методом POST
$_POST; //Прием данных в виде массива
$_POST['value']; //Прием данных в виде конкретной позиции масива

//<form method="get"></form> //Передача данных методом GET
$_GET;

//Разница в том, что при GET данные в url передаются. При POST передаются скрытно

// Переадресация

header('location: /адрес.пхп');
exit; // код останавливается

// Дата и время

//Смотрим php datatime manual

date('символ из мануала');
time(''); //показывает кол-во секунд от точки отсчета

date('',time()+100); // будущая дата через 100 секунлд
date('', strtotime('+1 hour'));

//Работа с файлами 

$file = fopen('text.txt',"w"); // открыть файл, создать и открыть, если нету. "w" записывает. "a" добавляет. "r" для чтения
fwrite(); //записать в файл
fread(); // считать файл
filesize(); // чтобы обратиться к файлу по названию переменной
file_put_contents(); // поместить текст в файл
file_get_contents(); // получить данные из файлы
file_exists(); // Существует ли файл
rename(); // переименовать файл
unlink(); // Удалить файл
fclose(); // закрыть файл

// Урок №16

phpinfo(); // Узнать про версию и настройки пхп
$_SERVER // массив с данныи про сервер + пользователя

// Отправка почты с сайта

mail(); //Подробно в инете потом найдешь