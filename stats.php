<?php
// Чтение содержимого файла visits.txt
$visits = file_get_contents('visits.txt');
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Статистика посещаемости</title>
</head>
<body>
    <h1>Статистика посещаемости</h1>
    <pre><?php echo nl2br($visits); ?></pre>
</body>
</html>