<?php
//Соединение с сервером
$link = mysqli_connect ('localhost', 'admin', 'admin');
//Выбор БД
$db = "mySiteDB";
$select = mysqli_select_db($link, $db);
if ($select){
 echo " База успешно выбрана", "<br>";
 el} se {
echo "База не выбрана";
 }
//Создание таблицы
//Формирование запроса
$query = "CREATE TABLE notes
(i d INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY (id),
cr eated DATE,
title VARCHAR (20),
ar ticle VARCHAR (255))"; 
//Реализация запроса
$create_tbl = mysqli_query ($link, $query);
if ($create_tbl){
 echo "Таблица успешно создана", "<br>";
 } else {
echo "Таблица не создана";
 }
?>
