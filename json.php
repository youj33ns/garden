<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    print "привет";
    // на какие данные рассчитан этот скрипт
    header("Content-Type: application/json");
    // разбираем JSON-строку на составляющие встроенной командой
    $data = json_decode(file_get_contents("php://input"));
    // отправляем в ответ строку с подтверждением
    echo "Сервер получил следующие данные: имя — $data->hello";
    ?>
</body>
</html>


