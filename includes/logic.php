<?php

// function generatedNumber($loopType, $maxAttempts = 100) {
//     for ($i = 0; $i < $maxAttempts; $i++) {
//         $number = rand(1, 10);
//         if (in_array($number, [3, 5, 7])) {
//             return $number;
//         }
//     }
// }

$generatedNumber = null; // Переменная для сгенерированного числа
$failureMessage = "Ahaha goofy, try again."; // Сообщение, если не удалось сгенерировать нужное число

if (isset($_POST["generatedNumber"])) {
    $loopType = $_POST["generatedNumber"]; // Получаем тип цикла

    // Переменная, ограничивающая количество попыток
    $maxAttempts = 100;

    if ($loopType == "for") {
        // Цикл FOR
        for ($i = 1; $i <= $maxAttempts; $i++) {
            $generatedNumber = rand(1, 10); // Генерируем случайное число

            // Прерываем цикл, если число 3, 5 или 7
            if (in_array($generatedNumber, [3, 5, 7])) {
                break; // Прерываем цикл, если получили 3 или 5
            }
        }
    } elseif ($loopType == "while") {
        // Цикл WHILE
        $i = 0;
        while ($i < $maxAttempts) {
            $generatedNumber = rand(1, 10);
            $i++;

            // Пропускаем числа, не равные 3, 5 или 7
            if (!in_array($generatedNumber, [3, 5, 7])) {
                continue;
            }
            break; // Останавливаем цикл, когда нужное число найдено
        }
    }
}
