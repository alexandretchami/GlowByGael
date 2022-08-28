<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>réservation</title>

  <!-- swiper css link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

  <!-- font awesome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <!-- custom css file link -->
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <!-- header section starts -->

  <section class="header">
    <a href="index.php" class="logo"><img src="images/logo.png" alt=""></a>

    <nav class="navbar">
      <a href="index.php">acceuil</a>
      <a href="about.php">à propos</a>
      <a href="prestations.php">prestations</a>
      <a href="galerie.php">galerie</a>
      <a href="book.php" class="btn-reserve">prise de rdv en ligne</a>
    </nav>

    <div id="menu-btn" class="fa fa-bars"></div>
  </section>

  <!-- header section ends -->

  <div class="heading"
    style="background:url(images/header-img1.jpg),linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)) no-repeat">
    <h1>prise de rdv en ligne</h1>
  </div>

  <!-- booking section starts -->
  <section class="booking">

    <h1 class="heading-title">réserver dès maintenant</h1>

    <form action="book_form.php" method="post" class="book-form">

      <div class="flex">

        <div class="inputBox">
          <span>name :</span>
          <input type="text" placeholder="entrer votre nom" name="name">
        </div>
        <div class="inputBox">
          <span>e-mail :</span>
          <input type="email" placeholder="entrer votre adresse mail" name="email">
        </div>
        <div class="inputBox">
          <span>téléphone :</span>
          <input type="number" placeholder="entrer votre numéro" name="phone">
        </div>
        <div class="inputBox">
          <span>client :</span>
          <input type="number" placeholder="nombre de clients" name="guests">
        </div>
        <div class="inputBox">
          <span>choississez votre jour de réservation :</span>
          <input type="date" placeholder="dd-mm-yyyy" name="arrivals">
        </div>
      </div>

      <input type="submit" value="envoyer" class="btn" name="send">

    </form>
  </section>
  <!-- booking section ends -->

  <!-- footer section starts -->

  <section class="footer">
    <div class="box-container">
      <div class="box">
        <h3>liens rapides</h3>
        <a href="index.php"> <i class="fa fa-angle-right"></i> acceuil</a>
        <a href="prestations.php"> <i class="fa fa-angle-right"></i> prestations</a>
        <a href="galerie.php"> <i class="fa fa-angle-right"></i> galerie</a>
        <a href="book.php"> <i class="fa fa-angle-right"></i> Réserver maintenant</a>
      </div>

      <div class="box">
        <h3>liens supplémentaires</h3>
        <a href="about.php"> <i class="fa fa-angle-right"></i> à propos</a>
      </div>

      <div class="box">
        <h3>informations de contact</h3>
        <a href="#"> <i class="fa fa-phone"></i> +33-753-128-280 </a>
        <a href="#"> <i class="fa fa-envelope"></i> gaelnails@gmail.com </a>
        <a
          href="https://www.google.com/maps/place/150+Av.+Jean+Jaur%C3%A8s,+93700+Drancy/@48.9179804,2.4559457,3a,75y,344.08h,90t/data=!3m7!1e1!3m5!1s5rxpV_LEMbJnBOcyQIdUsQ!2e0!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fpanoid%3D5rxpV_LEMbJnBOcyQIdUsQ%26cb_client%3Dmaps_sv.tactile.gps%26w%3D203%26h%3D100%26yaw%3D195.25758%26pitch%3D0%26thumbfov%3D100!7i16384!8i8192!4m5!3m4!1s0x47e66cb68565a79f:0x52d170dd36febbe6!8m2!3d48.9174082!4d2.4559752">
          <i class="fa fa-map"></i> 150 avenue jean jaurès - 93700 drancy RER: le Bourget/Bus 143, arrêt: Square de la
          libération
        </a>
      </div>

      <div class="box">
        <h3>suivez-nous</h3>
        <a href="https://www.facebook.com/Gael-vip-ongles-et-cils-2086434591576648"> <i class="fa fa-facebook"></i>
          facebook </a>
        <a href="#"> <i class="fa fa-twitter"></i> twitter </a>
        <a href="#"> <i class="fa fa-instagram"></i> instagram </a>
        <a href="#"> <i class="fa fa-linkedin"></i> linkedin </a>
      </div>

    </div>

    <div class="credit"> conçu par <span>mr. alexandre tchami</span> | tous les droits sont réservés! </div>

  </section>

  <!-- footer section ends -->

  <!-- swiper js link -->
  <script src=" https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

  <!-- custom js file link -->
  <script src="js/script.js"></script>
</body>

</html>