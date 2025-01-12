<?php
// Messages.php
switch ($generatedNumber) {

  case 3: // Показываем поздравление, если число 3
  case 5: // Показываем поздравление, если число 5
  case 7: // Показываем поздравление, если число 7
    echo "<p class='result__text'>{$congratulationsMessages[$randomCongratulation]} $generatedNumber</p>";
    break;

  default: // Сообщение на случай, если число не 3, 5 или 7
    echo "<p class='result__text result__text--failure'>$failureMessage</p>";
    break;
}
?>
