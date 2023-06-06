<?php

session_start();
require_once "db_connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = trim($_POST["name"]);
  $email = trim($_POST["email"]);
  $message = trim($_POST["message"]);

  $sql = "INSERT INTO messages (name, email, message) VALUES (?, ?, ?)";
//   $stmt = $pdo->prepare($sql);
//   $stmt->execute([$name, $email, $message]);

}
?>






<style>
    body {
        background-color: #f1f1f1;
        color: #333;
        font-family: Arial, sans-serif;
        font-size: 16px;
        line-height: 1.5;
        margin: 0;
    }

    form {
        background-color: #00bcd4;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        color: #fff;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 50px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    h2 {
        margin: 0 0 20px;
        font-size: 24px;
    }

    label {
        display: block;
        margin-bottom: 10px;
        font-size: 18px;
    }

    input[type="text"],
    input[type="email"],
    textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: none;
        background-color: #fff;
        font-size: 16px;
    }

    input[type="submit"] {
        background-color: #fff;
        color: #00bcd4;
        border-radius: 5px;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        font-size: 18px;
    }

    input[type="submit"]:hover {
        background-color: #00bcd4;
        color: #fff;
    }

    textarea {
        resize: none;
    }
</style>

<form method="post" action="support.php">
    <h2>Свяжитесь с технической поддержкой</h2>
    <label for="name">Имя:</label>
    <input type="text" name="name" required>
    <label for="email">Email:</label>
    <input type="email" name="email" required>
    <label for="message">Сообщение:</label>
    <textarea name="message" rows="5" required></textarea>
    <input type="submit" value="Отправить"> 
</form>
