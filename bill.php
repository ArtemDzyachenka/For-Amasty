<?php


if ($_POST['pizza'] == "Деревенская"){
	$price = 50;
} else if ($_POST['pizza'] == "Гавайская"){
	$price = 40;
} else if ($_POST['pizza'] == "Грибная"){
	$price = 60;
} else if ($_POST['pizza'] == "Пепперони"){
	$price = 70;
}

if ($_POST['razmer'] == "21"){
	$price1 = 0;
} else if ($_POST['razmer'] == "26"){
	$price1 = 15;
} else if ($_POST['razmer'] == "31"){
	$price1 = 25;
} else if ($_POST['razmer'] == "45"){
	$price1 = 40;
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<style>
  body { background: #c7b39b url(pitsa.jpg); background-repeat: no-repeat ; background-size: 100%; }
	</style>
</head>
<body>
	<font size = 8 color = green>Вы заказали пиццу!</br>
	<font size = 6 color = #FF8C00>Ваша пицца: <?php echo htmlspecialchars($_POST['pizza']); ?>.</br>
	Размер: <?php echo htmlspecialchars($_POST['razmer']); ?> см.</br>
	Соус: <?php echo htmlspecialchars($_POST['sauce']); ?>.</br>
	Итоговая сумма к оплате: <?php echo ($price + $price1); ?> руб.</br>
</body>
</html>
