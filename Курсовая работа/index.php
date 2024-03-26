<?php
require_once "helpers/function.php";
if (!empty($_SESSION['user'])){
    header ("Location: http://localhost:3000/admpanel/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OIL</title>
    <link rel="icon" href="images/oil.png">
</head>
<body>
    <header>
        <img src="images/oil.png" alt="Логотип" width="90px" height="90px">
        <h1>OIL</h1>
</header>
        <nav>
        <a href="/">Главная</a>
        <a href="/admpanel">Административная панель</a>
    </nav>
    <main>
        <p class="error">
            <?php 
            $login = strip_tags($_GET['login'] ?? "");
            $password = strip_tags($_GET['password'] ?? "");
            if ($login && $password) {
            if (loge($login, $password)) {
                header ("Location: http://localhost:3000/admpanel");
                $_SESSION['user'] = $loge;
            }
        }
            ?>
        </p>
        <form>
            <label>
                Логин
                <input type="text" name="login">
            </label>
            <label>
                Пароль
                <input type="password" name="password">
            </label>
            <button>Войти</button>
        </form>
    </main>
    <script src="scripts/java.js"></script>
</body>
</html>