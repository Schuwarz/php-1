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
          // Подключаем файл с логикой генерации числа
          include __DIR__ . '/includes/logic.php';
          // Отображаем результат, если число было сгенерированно
          if ($generatedNumber !== null):
            echo "<p class='result__text'>Randomated number: " . htmlspecialchars($generatedNumber) . "</p>";
          endif;

          // Подключаем файл с поздравлениями
          include __DIR__ . '/includes/Congratulations.php';

          // Подключаем файл для обработки сообщений
          include __DIR__ . '/includes/messages.php';

          ?>
        </div>
      </div>
    </section>
  </main>

  <footer></footer>

</body>

</html>