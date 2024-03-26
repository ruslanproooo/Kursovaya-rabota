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
<main>
    <h2>Заказы</h2>
    <table>
        <tr>
            <th>Номер пользователя</th>
            <th>Логин</th>
            <th>Пароль</th>
</tr>
<?php
foreach (getOrders() as $order) {
    ?>
    <tr>
            <td><?= $order['ID'] ?></td>
            <td><?= $order['Login'] ?></td>
            <td><?= $order['Password'] ?></td>
</tr>
<?php } ?>
</table>

<h1 class="page-title">Пример работы слайдера</h1>
	  <div class="slider-container">
	    <div class="slider">
        <?php
foreach (getOrders() as $order) {
    ?>
	      <img src="<?= $order['Photo'] ?>" width="600" height="400" alt="Белый пушистый кот">
          <?php } ?>
	    </div>
	    <button class="prev-button" type="button" aria-label="Посмотреть предыдущий слайд">&lt;</button>
	    <button class="next-button" type="button" aria-label="Посмотреть следующий слайд">&gt;</button>
	  </div>

</main>
<script src="../scripts/java.js"></script>
</body>
</html>