<?php
require_once "../helpers/function.php";
if (!empty($_SESSION['user'])){
    header ("Location: http://localhost:3000");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OIL</title>
    <link rel="icon" href="../images/oil.png">
</head>
<body>
    <header>
        <img src="../images/oil.png" alt="Логотип" width="90px" height="90px">
        <h1>OIL</h1>
</header>
</body>
</html>