<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Отзывы</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }
    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
      border-radius: 10px;
      
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
    .reviews {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      grid-gap: 20px;
    }
    .review {
      padding: 20px;
      background-color: #fff;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
      border-radius: 10px;
      overflow: hidden;
    }
    .review h3 {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 10px;
    }
    .review p {
      font-size: 16px;
      line-height: 1.5;
      margin-bottom: 20px;
    }
    .review .user {
      font-size: 14px;
      font-style: italic;
    }
    .add-review {
      margin-top: 20px;
    }
    .add-review textarea {
      width: 100%;
      height: 100px;
      font-size: 16px;
      padding: 10px;
      border-radius: 10px;
      border: none;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
      resize: vertical;
    }
    .add-review input[type="submit"] {
      display: block;
      width: 100%;
      padding: 10px;
      font-size: 16px;
      font-weight: bold;
      text-align: center;
      color: #fff;
      background-color: #007bff;
      border: none;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
      cursor: pointer;
      transition: background-color 0.3s ease-in-out;
    }
    .add-review input[type="submit"]:hover {
      background-color: #0062cc;
    }

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
</head>

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
    </header> <br> <br>

<body>
  <div class="container">
    <h1>Отзывы</h1>
    <div class="reviews">
      <?php
      // Установка соединения с базой данных
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "AUTO_CASTA_BD";

      $conn = mysqli_connect($servername, $username, $password, $dbname);

      // Проверка соединения
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      // Получение списка отз
      $sql = "SELECT * FROM reviews";
      $result = mysqli_query($conn, $sql);
    
      // Отображение списка отзывов
      if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          echo "<div class='review'>";
           echo "<div class='user'>Отзыв написал: " . $row["user_email"] . "</div>";
          echo "<p>" . $row["comment"] . "</p>";
         
          echo "</div>";
        }
      } else {
        echo "<p>No reviews yet.</p>";
      }
    
      mysqli_close($conn);
      ?>
    </div>
    <div class="add-review">
      <form method="post" action="">
        <textarea name="comment" placeholder="Оставьте свой отзыв!"></textarea> <br><br>
        <input type="submit" name="submit" value="Отправить">
      </form>
      <?php
      // Добавление нового отзыва
      if (isset($_POST["submit"])) {
        session_start();
        $user_email = $_SESSION['user']['email'];
        $comment = $_POST["comment"];
    
        // Установка соединения с базой данных
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "AUTO_CASTA_BD";
    
        $conn = mysqli_connect($servername, $username, $password, $dbname);
    
        // Проверка соединения
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
    
        // Вставка нового отзыва в базу данных
        $sql = "INSERT INTO reviews (user_email, comment) VALUES ('$user_email', '$comment')";
        if (mysqli_query($conn, $sql)) {
          echo "<p>Your review has been added.</p>";
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    
        mysqli_close($conn);
      }
      ?>
    </div>
    </div>
</body>
</html>    