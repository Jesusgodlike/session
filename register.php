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
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Montserrat, sans-serif;
        }
        form {
            display: flex;
            flex-direction: column;
            width: 100%;
            max-width: 400px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        input, select {
            margin: 10px 0;
            padding: 10px;
            border: none;
            border-bottom: 2px solid #e3e3e3;
            outline: none;
        }
        button {
            margin-top: 10px;
            padding: 10px;
            background: #e3e3e3;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #ddd;
        }
        .msg {
            margin-top: 10px;
            padding: 10px;
            border: 2px solid #ffa908;
            border-radius: 5px;
            text-align: center;
            font-weight: bold;
            color: #ffa908;
        }
        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>

    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <label for="s_name">Фамилия</label>
        <input type="text" id="s_name" name="s_name" placeholder="Введите свою фамилию">
        <label for="name">Имя</label>
        <input type="text" id="name" name="name" placeholder="Введите свое имя">
        <label for="p_name">Отчество</label>
        <input type="text" id="p_name" name="p_name" placeholder="Введите свое отчество">
        <label for="uniqueid">ИИН</label>
        <input type="text" id="uniqueid" name="uniqueid" placeholder="Введите свой ИИН">
        <label for="telephone">Номер телефона</label>
        <input type="text" id="telephone" name="telephone" placeholder="Введите свой номер телефона">
        <label for="sex">Пол</label>
        <select id="sex" name="sex">
            <option value="1">Мужской</option>
            <option value="2">Женский</option>
        </select>
        <label for="password">Пароль</label>
        <input type="password" id="password" name="password" placeholder="Введите пароль">
        <label for="password_confirm">Подтверждение пароля</label>
        <input type="password" id="password_confirm" name="password_confirm" placeholder="Подтвердите пароль">
        <button type="submit">Зарегистрироваться</button>
        <p class="text-center mt-3">
            У вас уже есть аккаунт? <a href="login.php">Войдите</a>!
        </p>
        <?php
            if (isset($_SESSION['message'])) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>
