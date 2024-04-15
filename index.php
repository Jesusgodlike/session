<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Добавлен метатег для адаптации к мобильным устройствам -->
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
          <a class="nav-link " href="#services-section">Услуги</a>
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
</header>
<section class="hero-banner" id="home-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="banner-text-wrap">
          <h1 class="text-white">Медицинские услуги 24/7</h1>
          <a href="register.php" class="btn btn-primary">Зарегистрироваться</a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="about-section" id="about-section">
  <div class="container">
    <div class="row gx-5">
      <div class="col-md-6">
        <div class="about-media">
          <img src="images/about.jpg" alt="" class="img-fluid"> <!-- Добавлен класс для масштабирования изображения -->
        </div>
      </div>
      <div class="col-md-6">
        <div class="about-info">
          <h3>О нас</h3>
          <p class="lead">Медицина поистине есть самое благородное из всех искусств.</p>
          <p>Текст о клинике.</p>
          <a href="#" class="btn btn-primary">Связаться с нами</a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="team-section" id="team-section">
	     <div class="container">
		     <div class="row">
			      <div class="col-md-12">
				      <h2 class="section-title text-center">Наша команда</h2>
				 </div>
				 
				 
				 <div class="col-md-3">
				     <div class="team-box">
					     <div class="team-media">
						      <img src="images/team/1.jpg" alt="" >
						 </div>
						 <div class="team-info">
						     <h3>Johnathan Doe</h3>
							 <p>Cardiologist</p>
							 <ul class="team-social">
							    <li> <a href=""> <i class="fa fa-facebook" aria-hidden="true"></i> </a>  </li>
							    <li> <a href=""> <i class="fa fa-twitter" aria-hidden="true"></i> </a>  </li>
							    <li> <a href=""> <i class="fa fa-linkedin" aria-hidden="true"></i></a>  </li>
							    <li> <a href=""> <i class="fa fa-instagram" aria-hidden="true"></i></a>  </li>
							 </ul>
						 </div>
					 </div>
				 </div>
				 
			 <div class="col-md-3">
				     <div class="team-box">
					     <div class="team-media">
						      <img src="images/team/2.jpg" alt="" >
						 </div>
						 <div class="team-info">
						     <h3>Johnathan Doe</h3>
							 <p>Cardiologist</p>
							 <ul class="team-social">
							    <li> <a href=""> <i class="fa fa-facebook" aria-hidden="true"></i> </a>  </li>
							    <li> <a href=""> <i class="fa fa-twitter" aria-hidden="true"></i> </a>  </li>
							    <li> <a href=""> <i class="fa fa-linkedin" aria-hidden="true"></i></a>  </li>
							    <li> <a href=""> <i class="fa fa-instagram" aria-hidden="true"></i></a>  </li>
							 </ul>
						 </div>
					 </div>
				 </div>
				 
				 
				  <div class="col-md-3">
				     <div class="team-box">
					     <div class="team-media">
						      <img src="images/team/3.jpg" alt="" >
						 </div>
						 <div class="team-info">
						     <h3>Johnathan Doe</h3>
							 <p>Cardiologist</p>
							 <ul class="team-social">
							    <li> <a href=""> <i class="fa fa-facebook" aria-hidden="true"></i> </a>  </li>
							    <li> <a href=""> <i class="fa fa-twitter" aria-hidden="true"></i> </a>  </li>
							    <li> <a href=""> <i class="fa fa-linkedin" aria-hidden="true"></i></a>  </li>
							    <li> <a href=""> <i class="fa fa-instagram" aria-hidden="true"></i></a>  </li>
							 </ul>
						 </div>
					 </div>
				 </div>
				 
				 
				  <div class="col-md-3">
				     <div class="team-box">
					     <div class="team-media">
						      <img src="images/team/4.jpg" alt="" >
						 </div>
						 <div class="team-info">
						     <h3>Johnathan Doe</h3>
							 <p>Cardiologist</p>
							 <ul class="team-social">
							    <li> <a href=""> <i class="fa fa-facebook" aria-hidden="true"></i> </a>  </li>
							    <li> <a href=""> <i class="fa fa-twitter" aria-hidden="true"></i> </a>  </li>
							    <li> <a href=""> <i class="fa fa-linkedin" aria-hidden="true"></i></a>  </li>
							    <li> <a href=""> <i class="fa fa-instagram" aria-hidden="true"></i></a>  </li>
							 </ul>
						 </div>
					 </div>
				 </div>
				 
				 
			 </div>
		</div>
	</section>
<section class="blog-section" id="blog-section">
  <div class="container">
    <div class="row">
      <!-- Блоки с полезными статьями -->
    </div>
  </div>
</section>
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
