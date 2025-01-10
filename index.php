<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Number randomatin'</title>
</head>

<body>

  <h1>Try to randomate number 3 or 5 or 7!)))</h1>

  <form method="POST">
    <button type="submit" name="Pipa">Randomate a new nimber</button>
  </form>
  <!-- Кнопка с именем Pipa, которая отправляет данные о нажатии методом POST -->

  <?php
  // Подключаем файл с логикой из папки includes
  include __DIR__ . '/includes/logic.php';

  // Отображаем результат
  if ($Jopa !== null):
    echo "<p>Randomated number: $Jopa </p><br>";
  endif;

  // Подключаем файл для обработки результата
  include __DIR__ . '/includes/messages.php';
  ?>

</body>

</html>