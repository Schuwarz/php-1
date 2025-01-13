<?php
// Функция для вывода поздравлений
function showCongratulation($generatedNumber, $congratulationsMessages, $randomCongratulation) {
  // Отображаем поздравление
  echo "<p class='result__text'>{$congratulationsMessages[$randomCongratulation]} $generatedNumber</p>";

}

switch ($generatedNumber) {
  case 3: // Показываем поздравление, если число 3
  case 5: // Показываем поздравление, если число 5
  case 7: // Показываем поздравление, если число 7
    showCongratulation($generatedNumber, $congratulationsMessages, $randomCongratulation);
    break;

  default:
    echo "<p class='result__text result__text--failure'>$failureMessage</p>";
    break;
}
?>
