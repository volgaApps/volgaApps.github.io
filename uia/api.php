<?php
$message = $_POST[‘message’]; Извлекаем присланные данные в переменные.
$cloudiness = $_POST['cloud_value'];
$timestamp = $_POST['timestamp'];
254   Глава 10. Подключение к интернету
$combined = $message." cloudiness=".$cloudiness." time=".$timestamp."\n";
$filename = "data.txt"; Определяем имя файла, в который будет выполняться запись.
file_put_contents($filename, $combined, FILE_APPEND | LOCK_EX); Записываем файл.
echo "Logged";
?>