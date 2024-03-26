<?php
session_start(); // Сервер понимает какая страница открыта в браузере
$BD = mysqli_connect("localhost", "root", "", "oil");
if (!$BD) {
    die ("Ошибка подключения");
}

function loge($login, $password)
{
    global $BD;
    $result = mysqli_query($BD, "SELECT * FROM `users` where Login = '$login' and Password = '$password';");
    return mysqli_num_rows($result);
}
function getOrders()
{
    global $BD;
    $result = mysqli_query($BD, "SELECT * FROM `users`;");
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}