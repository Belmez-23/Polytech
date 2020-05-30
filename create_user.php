<?php
//Создать соединение с сервером
$link = mysqli_connect ("localhost", "root", "");
if ($link) {
 echo "Соединение с сервером установлено", "<br>";
} else {
echo "Нет соединения с сервером";
}
//Создать юзера БД MySiteDB
//Сначала формирование запроса на создание
$db = "MySiteDB";
$query = "GRANT ALL PRIVILEGES ON *.* TO 'admin'@'localhost'
IDENTIFIED BY 'admin'
 WITH GRANT OPTION"; 
//Затем реализация запроса на создание. Важна последовательность
аргументов функции: соединение с сервером, SQL-запрос.
$add_user = mysqli_query($link, $query);
if ($add_user) {
 echo " Юзерка $db успешно создана";
} else {
echo "Юзерка не создана";
}
?>
