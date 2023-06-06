<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Аренда внедорожников</title>
</head>
<body>
    <style>
        /* установка дефолтных стилей для всего документа */
        
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

        
        .news {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        
     
        
        h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        
        article {
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 18px;
            background-color: #fff;
            box-shadow: 0px 0px 5px rgba(0,0,0,0.3);
            margin-top: 15px;
            
        }
        
        article h3 {
            margin-top: 0;
            font-size: 20px;
        }
        
        article p {
            margin-bottom: 0;
        }
        
        article .date {
            font-size: 14px;
            color: #999;
        }
        
        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            
            
        }

        .adress{
            width: 400px;
        }
        .lable{align-items: center;
        display: flex;}
    
        
        footer p {
            margin: 0;
            font-size: 14px;
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
        .news h2    {
color: white;
        }

        #about {
  background-image: url('images/back.jpeg');
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
  background-color: rgba(0, 0, 0, 0.5);
  color: white;
  text-shadow: 0 0 5px rgba(0,0,0,0.5);
  padding: 10px 50px 10px;
  border-radius: 20px;
}




        /* Адаптивность для мобильных устройств */
@media only screen and (max-width: 767px) {
  section#news {
    flex-direction: column;
  }

  section#news article {
    flex-basis: 100%;
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
  width: 200px;
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

    <main>
        

    <div class="all">


    <div class="news">

    <section id="about">
        <h2>О нас</h2>
        <p>Мы специализируемся на аренде внедорожников для тех, кто хочет путешествовать по бездорожью и наслаждаться красотами дикой природы. Наш автопарк состоит из современных внедорожников различных марок и моделей.</p>
    </section>

    
    <style>


.flip-container {
  
  margin: 50px;
}

.flipper {
  position: relative;
  width: 700px;
  height: 40px;
  transform-style: preserve-3d;
  transition: transform 0.6s;
}

.front, .back {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.front {
  z-index: 2;
  transform: rotateY(0deg);
 
}

.back {
  transform: rotateY(180deg);
 
}

.flip-container:hover .flipper {
  transform: rotateY(180deg);
}

.flip-btn {
  margin-top: 20px;
  padding: 10px;
  background-color: #ccc;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
  display: none;
}

.flip-btn:focus {
  outline: none;
}
.front P{
    color: white;
    font-size: 26px;
    text-align: center;
}
.back P{
    color: white;
    font-size: 26px;
    text-align: center;
}

.links {
  color: white;
  display: flex;
  flex-direction: column;
padding-top: 50px;}



.links a {
  text-decoration: none;
  margin-bottom: 10px;
  color: white;
}

.links a:last-child {
  margin-bottom: 0;
}


    </style>
   
    <div class="flip-container">
  <div class="flipper">
    <div class="front">
   <p>Свобода на колесах: арендуйте внедорожник и откройте новые горизонты!</p>
    </div>
    <div class="back">
        <p>dscWEAFwVSVWV</p>
      
    </div>
  </div>
  <button class="flip-btn">Flip</button>
</div>
   <div class="news">
<section id="news">


        <h2>Новости</h2>
        <?php
            // Подключение к базе данных
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "AUTO_CASTA_BD";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Выборка новостей из базы данных
            $sql = "SELECT title, content, date FROM news ORDER BY date DESC LIMIT 5";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Вывод новостей
                while($row = $result->fetch_assoc()) {
                    echo "<article>";
                    echo "<h3>" . $row["title"] . "</h3>";
                    echo "<p>" . $row["content"] . "</p>";
                    echo "<p class='date'>" . $row["date"] . "</p>";
                    echo "</article>";
                }
            } else {
                echo "<p>Нет новостей</p>";
            }

            $conn->close();
        ?>
        
     
    </section>

   </div>
         
    </div>
   

    </div>
   
</main>

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


</body>