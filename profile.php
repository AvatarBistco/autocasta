<?php
session_start();
if (!$_SESSION['user'])
 {
    header('Location: /index.php');
}

?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Профиль</title>
    <link rel="stylesheet" href="/assets/css/profile.css">
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
        
    </style>

<style>
   .card {
     margin-bottom: 20px;
     padding: 20px;
     background-color: #fff;
     border: 1px solid #d8eaf3;
     box-shadow: 0px 2px 5px rgba(0,0,0,0.05);
   }
   .card h3 {
     margin-top: 0;
     font-size: 24px;
   }
   .card p {
     margin-bottom: 10px;
   }
   .card .highlight {
     font-weight: bold;
     color: #1c7cd6;
   }

   html, body {
  width: 100%;
  height:100%;
}

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

.city-selector label {
  margin-right: 10px;
  font-weight: bold;}


.city-selector {
  display: inline-block;
  margin-left: 500px; /* изменено значение марджина */
  margin-top: -3px; /* добавлено свойство margin-top */
}
select {
  padding: 5px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid #ccc;
  width: 200px;}

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

    <!-- Профиль -->

    <form>
    <div class="form_block">
    <div class="avatar_block">
    <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" height="200" alt="">
    </div>
    <div class="colum_box">
    <div class="name">
    <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
    </div>
    <div class="email">
    <a href="#"><?= $_SESSION['user']['email'] ?></a>
    </div>
    <div class="exit">
       
    
        <a href="vendor/logout.php" class="logout">Выход</a><br><br><br>
       
 
        
    </div>
    </div>
   
    </div>
   

        
    </form>

<style>
  
</style>
    <div class="orders">

        <?php
        
   require_once "db_connection.php";

   
   
   
   
   
   if (isset($_SESSION['user'])) {
     $email = $_SESSION['user']['email'];
     $sql = "SELECT * FROM bookings WHERE email = '$email'";
     $result = mysqli_query($conn, $sql);

     if (mysqli_num_rows($result) > 0) {
       while ($row = mysqli_fetch_assoc($result)) {

    ?>
         <div class="card">
           <h3>Заказ № <?php echo $row['id']; ?></h3>
           <p>Автомобиль: <span class="highlight"><?php echo $row['car_id']; ?></span></p>
           <p>Дата начала аренды: <span class="highlight"><?php echo $row['start_date']; ?></span></p>
           <p>Дата окончания аренды: <span class="highlight"><?php echo $row['end_date']; ?></span></p>
           <p>Имя: <span class="highlight"><?php echo $row['name']; ?></span></p>
           <p>Email: <span class="highlight"><?php echo $row['email']; ?></span></p>
           <p>Телефон: <span class="highlight"><?php echo $row['phone']; ?></span></p>
         </div>

   <?php 
       }
     } else {
  
     }
   } else {
     echo "Для просмотра заказов необходимо авторизоваться.";
   }

  
   ?>
   

    </div>

   

</body>

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
    padding-top: 200px;
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

</html>