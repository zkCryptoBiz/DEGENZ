<?php
// Получаем IP-адрес пользователя
$ip_address = $_SERVER['REMOTE_ADDR'];

// Получаем данные о браузере из запроса
$user_agent = $_POST['user_agent'];

// Получаем текущее время
$visit_time = date('Y-m-d H:i:s');

// Записываем данные в файл visits.txt
$log_entry = "$visit_time - IP: $ip_address - Браузер: $user_agent\n";
file_put_contents('visits.txt', $log_entry, FILE_APPEND);

// Можно вернуть пустой ответ, так как данные отправляются в фоновом режиме
echo "ok";
?>