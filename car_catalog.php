<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Каталог</title>
  <link rel="stylesheet" href="../assets/css/catalog.css">
</head>
<body>


<style>
         
         body {
            background-color: #f1f1f1;
            color: #333;
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.5;
            margin: 0;
        }
        
        header {
            background-color: #00bcd4;
            color: #fff;
            padding: 20px;
            text-align: center;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        h1 {
            margin: 0;
            font-size: 36px;
        }
        
        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }
        
        nav li {
            margin: 0 10px;
        }
        
        nav a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
          
  transition: color 0.2s ease-in-out;
        }

        nav a:hover {
          
          
            color: #8A2BE2;
            
        }


 




        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        
        footer p {
            margin: 0;
            font-size: 14px;
        }

        .pagination {
  display: flex;
  list-style: none;
  justify-content: center;
  margin-top: 20px;
 
}

.pagination li {
  margin: 0 5px;
}

.pagination a {
  display: inline-block;
  padding: 5px 10px;
  text-decoration: none;
  color: #333;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.pagination a:hover {
  background-color: #ccc;
}

.pagination .active a {
  background-color: #333;
  color: #fff;
  border-color: #333;
}




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


footer{
  margin-top: 10px;
  padding-top: 10px;
}

.car-card {
  transition: transform 0.2s ease-in-out;
}

.car-card:hover {
  transform: scale(1.05);
}

select {
  padding: 5px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid #ccc;
  width: 200px;
}

.city-selector label {
  margin-right: 10px;
  font-weight: bold;
}

.city-selector {
  display: inline-block;
  margin-left: 500px; /* изменено значение марджина */
  margin-top: -3px; /* добавлено свойство margin-top */
}
        
    </style>
<header>
        <h1>AUTO CASTA</h1>
        <div class="city-selector">
            <label for="city">Ваш город:</label>
            <select id="city">
                <option value="chlb">Челябинск</option>
                <option value="spb">Санкт-Петербург</option>
                <option value="ekb">Екатеринбург</option>
            </select>
        </div>
        <nav>
            <ul>
                <li><a href="car_catalog.php">Автомобили</a></li>
                <li><a href="homepage.php">Новости</a></li>
                <li><a href="profile.php">Профиль</a></li>
                <li><a href="reviews.php">Отзывы</a></li>
            </ul>
        </nav>
    </header>


  
</body>
</html>

<?php



?>

<?php
// Подключение к базе данных
$host = "localhost";
$username = "root";
$password = "";
$dbname = "AUTO_CASTA_BD";

$conn = mysqli_connect($host, $username, $password, $dbname);

// Установка количества элементов на странице
$items_per_page = 10;

// Получение общего количества элементов в базе данных
$sql_count = "SELECT COUNT(*) FROM cars";
$result_count = mysqli_query($conn, $sql_count);
$row_count = mysqli_fetch_row($result_count);
$total_items = $row_count[0];

// Вычисление количества страниц
$total_pages = ceil($total_items / $items_per_page);

// Определение текущей страницы
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;

// Вычисление смещения для LIMIT
$offset = ($current_page - 1) * $items_per_page;

// Получение параметра сортировки из URL
$sort = isset($_GET['sort']) ? $_GET['sort'] : '';


// Проверка параметра сортировки и формирование запроса SQL
if ($sort == 'price_asc') {
  $sql = "SELECT * FROM cars ORDER BY price_per_day ASC LIMIT $items_per_page OFFSET $offset";
} else if ($sort == 'price_desc') {
  $sql = "SELECT * FROM cars ORDER BY price_per_day DESC LIMIT $items_per_page OFFSET $offset";
} else if ($sort == 'name_asc') {
  $sql = "SELECT * FROM cars ORDER BY car_name ASC LIMIT $items_per_page OFFSET $offset";
} else if ($sort == 'name_desc') {
  $sql = "SELECT * FROM cars ORDER BY car_name DESC LIMIT $items_per_page OFFSET $offset";
} else {
  $sql = "SELECT * FROM cars LIMIT $items_per_page OFFSET $offset";
}

$result = mysqli_query($conn, $sql);


?>


<div class="cotalof_box">

<div class="sort">
  <button class="sort-button"></button>
  <ul class="sort-menu">
    <li>
      <a href="?sort=" <?php if ($sort == ''){ ?> class="active" <?php } ?>>По умолчанию</a>
    </li>
    <li>
      <a href="?sort=price_asc" <?php if ($sort == 'price_asc') { ?> class="active" <?php } ?>>Цена: от меньшей к большей</a>
    </li>
    <li>
      <a href="?sort=price_desc" <?php if ($sort == 'price_desc') { ?> class="active" <?php } ?>>Цена: от большей к меньшей</a>
    </li>
    <li>
      <a href="?sort=name_asc" <?php if ($sort == 'name_asc') { ?> class="active" <?php } ?>>Название: от А до Я</a>
    </li>
    <li>
      <a href="?sort=name_desc" <?php if ($sort == 'name_desc') { ?> class="active" <?php } ?>>Название: от Я до А</a>
    </li>
  </ul>
</div>

<style>
  .sort {
    position: relative;
    padding-top: 20px;
    padding-left:20px;}
  
  .sort-button {
    background: url(/imgs/sort-down.png);
    padding: 30px 30px 30px;
    border: none;
    border: 1px solid none;
  border-radius: 4px;
  cursor: pointer;
  }
  .sort-menu {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
    list-style: none;
    z-index: 1;
  }
  .sort-menu li {
    margin: 0;
  }
  .sort-menu a {
    display: block;
    padding: 8px;
    color: #333;
    text-decoration: none;
  }
  .sort-menu a:hover {
    background-color: #00bcd4;
  }
  .sort-menu .active {
    background-color: #00bcd4;
    color: #fff;
  }
  .sort-menu:active {
    display: none;
  }
</style>

<script>
  const button = document.querySelector('.sort-button');
  const menu = document.querySelector('.sort-menu');
  button.addEventListener('click', function() {
    menu.style.display = menu.style.display === 'none' ? 'block' : 'none';
  });
</script>



<div class="car-catalog">
  <?php while($row = mysqli_fetch_assoc($result)) { ?>
  <div class="car-card">
      <a href="car.php?id=<?php echo $row['id']; ?>">
        <img src="./images/<?php echo $row['image']; ?>" alt="Car Image">
      <h3><?php echo $row['car_name']; ?></h3>
      <p>Цена: <?php echo $row['price_per_day']; ?> руб в день</p>
      
    </a>
  </div>
  <?php } ?>
</div>

<div class="pagination">
  <?php for($i = 1; $i <= $total_pages; $i++) { ?>
    <li <?php if($current_page == $i) { ?>class="active"<?php } ?>>
      <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
    </li>
  <?php } ?>
</div>
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
    padding-top: 130px;
}
</style>

<div class="foot">

<footer class="footer">
    <div class="waves">
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
      <div class="wave" id="wave3"></div>
      <div class="wa  ve" id="wave4"></div>
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








<?php mysqli_close($conn); ?> 

