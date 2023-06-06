<?php
  // Подключение к базе данных
  $db = new mysqli('localhost', 'root', '', 'AUTO_CASTA_BD');
  
  // Получение данных из формы
  $car_id = $_POST['car_id'];
  $price_per_day = $_POST['price_per_day'];
  $image = $_POST['image'];
  $description = $_POST['description'];
  
  // Запрос на обновление данных автомобиля в базе данных
  $query = "UPDATE cars SET price_per_day = '$price_per_day', image = '$image', description = '$description' WHERE id = '$car_id'";
  $result = $db->query($query);
  
  if ($result) {
    // Вывод сообщения об успешном изменении данных
    echo 'Данные автомобиля успешно изменены!';
  } else {
    // Вывод сообщения об ошибке
    echo 'Произошла ошибка при изменении данных автомобиля.';
  }
?>