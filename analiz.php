<?php
// Подключаем файл connect.php
require_once 'vendor/connect.php';

// Запрос к базе данных для получения услуг
$sql = "SELECT * FROM sp_analiz";
$result = mysqli_query($connect, $sql);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Услуги</title>
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
          <a class="nav-link " href="analiz.php">Услуги</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#team-section">Наши врачи</a>
        </li>
          
        <li class="nav-item">
          <a class="nav-link " href="#blog-section">Полезные статьи</a>
        </li>
          
       <li class="nav-item">
          <a class="nav-link " href="#booking-section">Запись к врачу</a>
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
</header> <!-- Закрывающий тег header -->

<div class="container">
    <h2 class="mt-5">Услуги</h2>
    <div class="row">
        <?php
        // Проверка наличия результатов
        if (mysqli_num_rows($result) > 0) {
            // Вывод каждой услуги
            while($row = mysqli_fetch_assoc($result)) {
                echo '<div class="col-md-4 mt-4">';
                echo '<div class="card shadow">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $row["name"] . '</h5>';
                echo '<p class="card-text">' . $row["description"] . '</p>';
                echo '<p class="card-text">Цена: ' . $row["price"] . '</p>';
                echo '<a href="#" class="btn btn-primary btn-sm">Подробнее</a>'; // Изменили размер и цвет кнопки
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "Нет доступных услуг.";
        }
        ?>
    </div>
</div>



<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="js/custom.js"></script>
<script>
$('.reviews-slide').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
</script>
</body>
</html>
