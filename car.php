
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../assets/css/book.css">
</head>
<body>
  
</body>
</html>





<?php
// Подключение к базе данных
$host = "localhost";
$username = "root";
$password = "";
$dbname = "AUTO_CASTA_BD";

$conn = mysqli_connect($host, $username, $password, $dbname);

// Получение информации о выбранном автомобиле
if(isset($_GET['id'])) {
    $car_id = $_GET['id'];
    
    $sql = "SELECT * FROM cars WHERE id=$car_id";
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $car_name = $row['car_name'];
        $price_per_day = $row['price_per_day'];
        $image = $row['image'];
    } else {
        echo "Автомобиль не найден";
        exit();
    }
} else {
    echo "Автомобиль не выбран";
    exit();
}

// Обработка бронирования автомобиля
if(isset($_POST['book_car'])) {
  $start_date = $_POST['start_date'];
  $end_date = $_POST['end_date'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $name = $_POST['name'];
  
  $sql = "INSERT INTO bookings (car_id, start_date, end_date, email, phone, name) 
          VALUES ('$car_id', '$start_date', '$end_date', '$email', '$phone', '$name')";
  
  mysqli_query($conn, $sql);
  
  echo "Автомобиль успешно забронирован!";
}
?>

<!--  -->




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Каталог внедорожников - <?php echo $car_name; ?></title>
  <link rel="stylesheet" href="assets/css/book.css">
</head>
<style>
  html, body {
  width: 100%;
  height:100%;}


body {
    background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
    background-size: 400% 400%;
    animation: gradient 15s ease infinite;
}

@keyframes gradient {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}
  body {
  font-family: Arial, sans-serif;
  background-color: #f0f8ff; /* голубой цвет фона */
  color: #333; /* темно-серый цвет текста */
}



.container {
  max-width: 600px;
  margin: 0 auto;
  text-align: center; /* выравнивание по центру */
}

.car-details {
  margin: 50px auto;
  text-align: center;
}

.car-details img {
  width: 300px; /* фиксированная ширина изображения */
  height: 200px; /* фиксированная высота изображения */
}

.book-form {
  margin: 50px auto;
  padding: 20px;
  border: 1px solid #ccc; /* четкие границы */
  border-radius: 10px; /* закругленные углы */
  background-color: #fff; /* белый цвет фона */
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* тень */
  text-align: center;
}

.book-form label {
  display: block;
  margin: 10px 0;
}

.book-form input[type="date"],
.book-form input[type="text"],
.book-form input[type="email"],
.book-form input[type="tel"] {
  padding: 5px;
  border-radius: 5px;
  border: 1px solid #ccc;
  width: 100%;
  max-width: 400px;
}

.book-form button[type="submit"] {
  background-color: #4CAF50; /* зеленый цвет фона */
  color: #fff; /* белый цвет текста */
  padding: 10px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  margin-top: 10px;
}

.book-form a {
  display: block;
  margin-top: 20px;
}
p{
  color: white;
}
h1{
  color: white;
}
h2{
  color: white;
}
  
</style>
<?  
session_start();

?>

<body>
  <div class="container">
    <div class="textone">
      <h1><?php echo $car_name; ?></h1>
    </div>

    <div class="car-details">
      <img src="../images/<?php echo $image; ?>" alt="Car Image"><br><br>
      <p>Цена: <?php echo $price_per_day; ?> руб в день</p><br><br>
      <p>  <?php echo $row['description']; ?></p> 
    </div>
<p>
<p>
  Забрать Авто можно по адресам: <br><br>
  Санкт-Петербург:<br><br>

Адрес: пр. Королева, д. 20<br>
Телефон: +7 (812) 123-45-67<br>
Электронная почта: spb@carrentalcompany.ru<br>
Челябинск:<br><br>

Адрес: ул. Кирова, д. 10<br>
Телефон: +7 (351) 123-45-67v
Электронная почта: chel@carrentalcompany.ru<br>
Екатеринбург:<br><br>

Адрес: ул. Ленина, д. 15<br>
Телефон: +7 (343) 123-45-67<br>
Электронная почта: ekb@carrentalcompany.ru<br>
</p>

</p>
    <div class="textone">
      <h2>Бронирование</h2>
    </div>

    <form class="book-form" method="POST">
      <input type="hidden" name="car_id" value="<?php echo $car_id; ?>">
      <html>
        
      </html>



      <label>Дата начала аренды:</label>
      <input type="date"name="start_date" style="padding: 10px; border: 2px solid #69c5ff; border-radius: 5px; width: 250px; margin-bottom: 20px;">
      <label>Дата окончания аренды:</label>
  <input type="date" name="end_date" style="padding: 10px; border: 2px solid #69c5ff; border-radius: 5px; width: 250px; margin-bottom: 20px;">

  <label>ФИО:</label>
  <input type="text" name="name" style="padding: 10px; border: 2px solid #69c5ff; border-radius: 5px; width: 250px; margin-bottom: 20px;">

  <input type="hidden" name="email" value="<?php echo $_SESSION['user']['email'] ?? ''; ?>" style="padding: 10px; border: 2px solid #69c5ff; border-radius: 5px; width: 250px; margin-bottom: 20px;">

  <label>Номер телефона:</label>
  <input type="tel" name="phone" style="padding: 10px; border: 2px solid #69c5ff; border-radius: 5px; width: 250px; margin-bottom: 20px;"> <br>

  <button type="submit" name="book_car" style="padding: 10px; border: none; background-color: #69c5ff; color: white; border-radius: 5px;">Заказать</button>
  <a href="car_catalog.php" style="color: #69c5ff; text-decoration: none; margin-left: 10px;">назад</a>
    </form>
  </div>/
</body>
</html>

<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}



.footer {
  position: relative;
  width: 100%;
  background: #3586ff;
  min-height: 0px;
  padding: 20px 10px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.social-icon,
.menu {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 10px 0;
  flex-wrap: wrap;
}

.social-icon__item,
.menu__item {
  list-style: none;
}

.social-icon__link {
  font-size: 2rem;
  color: #fff;
  margin: 0 10px;
  display: inline-block;
  transition: 0.5s;
}
.social-icon__link:hover {
  transform: translateY(-10px);
}

.menu__link {
  font-size: 1.2rem;
  color: #fff;
  margin: 0 10px;
  display: inline-block;
  transition: 0.5s;
  text-decoration: none;
  opacity: 0.75;
  font-weight: 300;
}

.menu__link:hover {
  opacity: 1;
}

.footer p {
  color: #fff;
  margin: 15px 0 10px 0;
  font-size: 1rem;
  font-weight: 300;
}

.wave {
  position: absolute;
  top: -100px;
  left: 0;
  width: 100%;
  height: 100px;
  background: url("https://i.ibb.co/wQZVxxk/wave.png");
  background-size: 1000px 100px;
}

.wave#wave1 {
  z-index: 1000;
  opacity: 1;
  bottom: 0;
  animation: animateWaves 4s linear infinite;
}

.wave#wave2 {
  z-index: 999;
  opacity: 0.5;
  bottom: 10px;
  animation: animate 4s linear infinite !important;
}

.wave#wave3 {
  z-index: 1000;
  opacity: 0.2;
  bottom: 15px;
  animation: animateWaves 3s linear infinite;
}

.wave#wave4 {
  z-index: 999;
  opacity: 0.7;
  bottom: 20px;
  animation: animate 3s linear infinite;
}

@keyframes animateWaves {
  0% {
    background-position-x: 1000px;
  }
  100% {
    background-positon-x: 0px;
  }
}

@keyframes animate {
  0% {
    background-position-x: -1000px;
  }
  100% {
    background-positon-x: 0px;
  }
}

.foot{
    padding-top: 100px;
}
</style>

<div class="foot">

<footer class="footer">
    <div class="waves">
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
      <div class="wave" id="wave3"></div>
      <div class="wave" id="wave4"></div>
    </div>
    <ul class="social-icon">
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-vk"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-youtube"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-whatsapp"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-instagram"></ion-icon>
        </a></li>
    </ul>
    <ul class="menu">
      <li class="menu__item"><a class="menu__link" href="homepage.php">Главная</a></li>
      <li class="menu__item"><a class="menu__link" href="car_catalog.php">Каталог</a></li>
      <li class="menu__item"><a class="menu__link" href="profile.php">Профиль</a></li>
      <li class="menu__item"><a class="menu__link" href="reviews.php">Отзывы</a></li>

    </ul>
    <p>&copy;2023 AUTO CASTA | Все права защищены</p>
  </footer>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</div>



  


