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

    <!-- Форма регистрации -->


<div class="forms2">

<div class="logo1">
<img src="/imgs/55555555555.png" alt="">
</div>

<div class="container_LAB">
    <h1>ФОРМА РЕГИСТРАЦИИ</h1>
</div>


<form action="vendor/signup.php" method="post" enctype="multipart/form-data">
       
        <input type="text" name="full_name" placeholder="ИМЯ">
       
        <input type="text" name="login" placeholder="ЛОГИН">
       
        <input type="email" name="email" placeholder="ПОЧТА">
      
        <input type="file" name="avatar">
        
        <input type="password" name="password" placeholder="ПАРОЛЬ">
   
        <input type="password" name="password_confirm" placeholder="ПОДТВЕРДИТЕ ПАРОЛЬ">
        <button type="submit">ЗАРЕГЕСТРИРОВАТЬСЯ</button>
        <p>
            У вас уже есть аккаунт? - <a href="/">авторизируйтесь</a>!
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