<?php
session_start();

if (!isset($_SESSION['user']['id'])) {
    header('Location: login.php');
    exit();
}

// Подключаем файл connect.php, если он еще не подключен
require_once 'vendor/connect.php';

// Проверяем, что в сессии установлен id пользователя и является числом
if (isset($_SESSION['user']['id']) && is_numeric($_SESSION['user']['id'])) {
    // Подключаемся к базе данных
    $connect = mysqli_connect('localhost', 'root', '', 'emirmed');

    if (!$connect) {
        die('Error connect to DataBase');
    }

    // Формируем запрос к базе данных для получения данных пользователя
    $userId = $_SESSION['user']['id'];
    $query = "SELECT * FROM clients WHERE id = $userId";
    $result = mysqli_query($connect, $query);

    // Если запрос выполнен успешно и есть результаты, сохраняем данные пользователя
    if ($result && mysqli_num_rows($result) > 0) {
        $userData = mysqli_fetch_assoc($result);
    } else {
        echo "Данные пользователя не найдены.";
    }
} else {
    echo "Неверный идентификатор пользователя.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emir MED</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Обнуляем внешние отступы и поля */
        body, html {
            margin: 0;
            padding: 0;
            overflow-x: hidden; /* Чтобы избежать горизонтального скролла */
        }

        /* Фиксированное позиционирование для навбара */
        header {
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000; /* Чтобы навбар находился выше других элементов */
        }

    </style>
</head>
<body>
<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about-section">О нас</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services-section">Услуги</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#team-section">Наши врачи</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#blog-section">Полезные статьи</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#booking-section">Запись к врачу</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profile.php">
                                <i class="fa fa-user-circle-o" aria-hidden="true"></i> Личный кабинет
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

<div class="container mt-5">
    <h1>Добро пожаловать в ваш личный кабинет</h1>

    <section id="settings-profile" class="mt-4">
        <h2>Настройки профиля</h2>
        <form id="profile-form">
            <div class="form-group">
                <label for="username">Имя пользователя:</label>
                <input type="text" class="form-control" id="username" name="username" value="<?php echo isset($userData['fio_pacient']) ? $userData['fio_pacient'] : ''; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo isset($userData['telephone']) ? $userData['telephone'] : ''; ?>">
            </div>
            <!-- Other form fields -->
            <button type="submit" class="btn btn-primary">Сохранить изменения</button>
        </form>
    </section>

    <section id="appointment-history" class="mt-4">
        <h2>История записей к врачу</h2>
        <table id="appointment-history-table" class="table">
            <thead>
                <tr>
                    <th>Врач</th>
                    <th>Дата и время</th>
                    <th>Состояние</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Доктор Смит</td>
                    <td>10 марта 2024, 10:00</td>
                    <td>Завершено</td>
                </tr>
                <tr>
                    <td>Доктор Джонсон</td>
                    <td>15 марта 2024, 14:30</td>
                    <td>Отменено</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section id="contact-us" class="mt-4">
        <h2>Связаться с нами</h2>
        <form id="contact-form">
            <div class="form-group">
                <label for="name">Имя:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Введите ваше имя">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Введите ваш email">
            </div>
            <div class="form-group">
                <label for="message">Сообщение:</label>
                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Введите ваше сообщение"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
    </section>

    <button id="logout-button" class="btn btn-danger mt-4" onclick="logout()">Выйти из учётной записи</button>

    <script>
        function logout() {
            window.location.href = 'vendor/logout.php';
        }
    </script>

</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>