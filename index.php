<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<!-- Форма авторизации -->


<div class="forms1">

<div class="logo1">
<img src="/imgs/55555555555.png" alt="">
</div>

<div class="container_LAB2">
    <h1>ФОРМА АВТОРИЗАЦИИ</h1>
</div>


<form action="vendor/signin.php" method="post">
     
        <input type="text" name="login" placeholder="ЛОГИН">
      
        <input type="password" name="password" placeholder="ПАРОЛЬ">
        <button type="submit">АВТОРИЗОВАТЬСЯ</button>
        <p>
            У вас нет аккаунта? - <a href="/register.php">зарегистрируйтесь</a>!
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

</div>
    

</body>
</html>