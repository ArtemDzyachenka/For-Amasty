<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Ресторан "Веселая пицца"</title>
	<style>
  body { background: #c7b39b url(pizza.jpeg); }
	</style>
</head>
<body>

	<p><font size = 6 color = #1E90FF>Давайте оформим заказ!</font></p>
	<form action="bill.php" method="post">
   <p><select size="5" multiple name="pizza">
    <option disabled>Выберите пиццу</option>
    <option value="Деревенская">Деревенская</option>
    <option value="Гавайская">Гавайская</option>
    <option value="Грибная">Грибная</option>
    <option value="Пепперони">Пепперони</option>
   </select></p>
   <p><select size="5" multiple name="razmer">
    <option disabled>Выберите размер</option>
    <option value="21">21 см (базовый)</option>
    <option value="26">26 см (+15 руб)</option>
    <option value="31">31 см (+25 руб)</option>
    <option value="45">45 см (+40 руб)</option>
   </select></p>
   <p><select size="5" multiple name="sauce">
    <option disabled>Выберите соус</option>
    <option value="Барбекю">Барбекю</option>
    <option value="Сырный">Сырный</option>
    <option value="Кисло-сладкий">Кисло-сладкий</option>
    <option value="Чесночный">Чесночный</option>
   </select></p>

   <p><input type="submit"  value="Заказать"></p>
  </form>
</body>
</html>

