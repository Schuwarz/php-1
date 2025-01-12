<?php
//Массив с возможными поздравлениями
$congratulationsMessages = [
  1 => "Great job, you generated:",
  2 => "Nice, here's your number:",
  3 => "Awesome, here's your lucky number:",
  4 => "Did you waste your time? Maybe not!",
  5 => "Congrats, your random number is:"
];

// Генерация случайного поздравления
$randomCongratulation = rand(1, 5);
?>