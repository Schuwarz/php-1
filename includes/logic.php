<?php
// Инициализация переменных
$generatedNumber = null; // Переменная для сгенерированного числа
$failureMessage = "Ahaha goofy, try again."; // Сообщение, если не удалось сгенерировать нужное число

// Проверяем, была ли нажата кнопка для генерации числа
if (isset($_POST["generatedNumber"])) {
    $loopType = $_POST["generatedNumber"]; // Сохраняем тип цикла

    if ($loopType == "for") {


        // Цикл FOR, генерируем числа
        for ($i = 1; $i <= 100; $i++) {
            $generatedNumber = rand(1, 10);
            echo "<p>Generated number: $generatedNumber</p>";

            // Прерываем цикл, если число 3 или 5
            if ($generatedNumber == 3 || $generatedNumber == 5) {
                echo "<p>Stopped generating because we got: $generatedNumber</p>";
                break; // Прерываем цикл, если получили 3 или 5
            }
        }
    } elseif ($loopType == "while") {
        // Цикл WHILE, генерируем числа
        $i = 0;
        while ($i < 100) {
            $generatedNumber = rand(1, 10);
            $i++;

            // Пропускаем числа, не равные 3, 5 или 7
            if ($generatedNumber != 3 && $generatedNumber != 5 && $generatedNumber != 7) {
                continue;
            }

            echo "<p>Generated number: $generatedNumber</p>";
            break; // Останавливаем цикл, когда число равно 3, 5 или 7
        }
    }
}
?>