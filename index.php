<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Your Big Profit</title>
  <?php include('mail_handler.php'); ?>
  <link rel="stylesheet" href="scss/main.min.css">
</head>

<body>
  <header>
    <div id="logo" onclick="slowScroll('#top')">
      <span>Your Big Profit</span>
    </div>
    <div id="menu">
      <div id="nav-icon">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <ul class="menu">
        <li><a href="#" onclick="slowScroll('#main')">O NAS</a></li>
        <li><a href="#" onclick="slowScroll('#overview')">OFERTA</a></li>
        <li><a href="#" onclick="slowScroll('#contacts')">KONTAKT</a></li>
        <!-- TODO:
        <li><a href="#" onclick="slowScroll('#comments')">REFERENCJE</a></li>
        -->
      </ul>
    </div>
  </header>

  <div id="top">
    <h1>International relations</h1>
    <h3>is our style of life</h3>
  </div>

  <div id="main">
    <div class="intro">
      <h2>KILKA SŁÓW O NAS…</h2>
    </div>
    <div class="text">
      <span>Nasza firma pojawiła się na rynku niedawno. Tworzy ją grupa ludzi, którzy mają doświadczenie w wielu dziedzinach - transport i logistyka, eksport i import, gospodarka międzynarodowa, audyt i rachunkowość, cło i odprawy celne, handel hurtowy i detaliczny. Współtworzyliśmy i prowadzimy firmę z pasją. Oferujemy usługi na podstawie indywidualnych umów z klientem. Podejmujemy się przewozu większości towarów. Umowy mogą być jednorazowe, lub długofalowe. Współpraca z nami to same profity.</span>
    </div>
  </div>

  <div id="overview">
    <h2>Co oferujemy:</h2>
    <h4>Z nami wszystko staje się proste</h4>
    <div class="img">
      <img src="img/1.jpeg" alt="">
      <span>Poszukiwanie klientów zagranicznych</span>
    </div>
    <div class="img">
      <img src="img/2.jpeg" alt="">
      <span>Mailing i ofertowanie</span>
    </div>
    <div class="img">
      <img src="img/3.jpeg" alt="">
      <span>Pośrednictwo eksportowe/importowe</span>
    </div>
    <div class="img">
      <img src="img/4.jpeg" alt="">
      <span>Kompleksowa obsługa handlowa</span>
    </div>
  </div>

  <div id="contacts">
      <div class="kontaktForm">
        <center><h5>NAPISZ DO NAS</h5></center>
        <a id="form"></a>
        <form action="#form" method="post" name="form" id="form_input" >
          <label for="name">Imię <span>*</span></label><br>
          <input type="text" name="name" placeholder="Wpisz swoje imię" id="name" value="<?= $name ?>"><br>
          <span class="error"><?= $name_error ?></span>
          <label for="email">E-mail <span>*</span></label><br>
          <input type="text" name="email" placeholder="Wpisz swój e-mail" id="email" value="<?= $email ?>"><br>
          <span class="error"><?= $email_error ?></span>
          <label for="url">Strona www </label><br>
          <input type="text" name="url" placeholder="http://" id="url" value="<?= $url ?>"><br>
          <span class="error"><?= $url_error ?></span>
          <label for="message">Wiadomość </label><br>
          <textarea type="text" name="message" placeholder="Wpisz treść wiadomosści..." id="message" value="<?= $message ?>"></textarea><br>
          <input type="submit" name="submit" value="Wyślij" id="mess_send" class="btn"><br>
          <span class="success"><?= $success; ?></span>
        </form>
      </div>
      <div class="kontaktInfo">
        <div>
          <h5>KONTAKT</h5><br>
          <h3>Your Big Profit</h3>
          <p>ul. Skwierzyńska 26/5</p>
          <p>Wrocław, 53-522</p>
          <p>Tel: +48 535 477 046</p>
          <p>E-mail: vandy_invectors@yahoo.com</p>
        </div>
      </div>

  </div>

  <!-- TODO:
  <div id="comments">
    <div>
      <span class="title">Referencje</span><br>
      <span class="heading">Opinie o Your Big Profit</span>
      <p>Place for opinions...</p>
      <span class="heading">Zaufali nam:</span>
      <p>Place for company icons</p>
    </div>
  </div> -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="script.js"></script>
  <script>
    function slowScroll(id) {
      $('html, body').animate({
        scrollTop: $(id).offset().top
      }, 500);
    }
  </script>
</body>

</html>
