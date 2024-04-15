<?php
session_start();

if (isset($_SESSION['user'])) {
    header('Location: profile.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .container {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center">Авторизация</h2>
    <form action="vendor/signin.php" method="post">
        <div class="form-group">
            <label for="login">Логин</label>
            <input type="text" class="form-control" id="login" name="login" placeholder="Введите логин">
        </div>
        <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Введите пароль">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Войти</button>
    </form>
    <p class="mt-3 text-center">Нет аккаунта? <a href="register.php">Зарегистрируйтесь</a>!</p>
    <?php
    if (isset($_SESSION['message'])) {
        echo '<p class="text-center text-danger">' . $_SESSION['message'] . '</p>';
        unset($_SESSION['message']);
    }
    ?>
</div>

</body>
</html>
