<?php

print "привет";

// на какие данные рассчитан этот скрипт
header("Content-Type: application/json");
// разбираем JSON-строку на составляющие встроенной командой
$data = json_decode(file_get_contents("php://input"));
print "foo — это $data";
// отправляем в ответ строку с подтверждением
echo "Сервер получил следующие данные: имя — $data->hello";
?>
