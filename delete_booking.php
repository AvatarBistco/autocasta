<?php
// Подключение к базе данных
include 'db_connection.php';

// Получение id заказа из параметров запроса
$id = $_GET['id'];

// Удаление заказа из базы данных
$sql = "DELETE FROM bookings WHERE `bookings`.`booking_id`='$id'";
mysqli_query($conn, $sql);

// Перенаправление на страницу с заказами
header('Location: booking_log.php');
exit();
?>
