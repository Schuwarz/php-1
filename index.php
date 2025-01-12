<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Random Number Generator</title>
</head>

<body>

  <h1>Try to generate random number: 3, 5 or 7!)))</h1>

  <form method="POST">
    <button type="submit" name="generatedNumber">Generate New Nimber</button>
  </form>
  <!-- Кнопка, которая отправляет данные о нажатии методом POST -->

  <?php
  // Подключаем файл с логикой генерации числа
  include __DIR__ . '/includes/logic.php';

  // Отображаем результат, если число было сгенерированно
  if ($generatedNumber !== null):
    echo "<p>Randomated number: $generatedNumber </p><br>";
  endif;

  // Подключаем файл с поздравлениями

  include __DIR__ . '/includes/Congratulations.php';

  // Подключаем файл для обработки сообщений
  include __DIR__ . '/includes/messages.php';
  ?>

</body>

</html>