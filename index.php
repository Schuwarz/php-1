<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Random Number Generator</title>
</head>

<body>
  <main class="main">
    <section class="section">
      <div class="wrapper">
        <div class="title">
          <h1>Try to generate random number: 3, 5 or 7!</h1>
        </div>

        <div class="form">
          <form method="POST">
            <div class="form__btn">
              <button type="submit" name="generatedNumber" value="for">Generate using FOR loop</button>
              <button type="submit" name="generatedNumber" value="while">Generate using WHILE loop</button>
            </div>
          </form>
        </div>

        <div class="result">
          <?php

          //Автозагрузка классов
          spl_autoload_register(function ($className) {
            //Преобразуем имя класса в путь к файлу
            $file = __DIR__ . '/classes/' . $className . '.php';

            //Если файл существует, подключаем его
            if (file_exists($file)) {
              require_once $file;
            } else {
              die("Class $className not found.");
            }
          });

          //Подключаем логики и других файлов
          include __DIR__ . '/includes/logic.php';
          include __DIR__ . '/includes/congratulations.php';
          include __DIR__ . '/includes/messages.php';

          // Отображаем результат, если число было сгенерированно
          if ($generatedNumber !== null):
            echo "<p class='result__text'>Randomated number: " . htmlspecialchars($generatedNumber) . "</p>";
          endif;

          ?>
        </div>
      </div>
    </section>
  </main>

  <footer></footer>

</body>

</html>