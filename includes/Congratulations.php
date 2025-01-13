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

// Перебор массива с поздравлениями и вывод каждого
echo "<h2>All possible congratulations messages:</h2>";
foreach ($congratulationsMessages as $key => $message) {
  echo "<p>Message $key: $message</p>";
}
?>