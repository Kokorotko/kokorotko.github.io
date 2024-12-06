<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group work</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body>
    <div class="alert" id="alert-bad">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" height="1.2rem" width="1.2rem"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
        <span id="alert-bad-text"></span>
    </div>
    <div class="alert" id="alert-ok">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="1.2rem" width="1.2rem"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
        <span>Form succesfully submited.</span>
    </div>
    <div class="form-container">
        <h1>Kontaktní formulář</h1>
        <form id="contact-form" name="contact-form" method="POST">
            <h2>Jméno</h2>
            <input type="text" id="name" name="name" >
            <h2>Přijmení</h2>
            <input type="text" id="surname" name="surname" >
            <h2>E-mail</h2>
            <input type="email" id="mail" name="mail" >
            <h2>Telefon</h2>
            <input type="tel" id="tel" name="tel"  placeholder="123 456 789">
            <h2>Adresa</h2>
            <input type="text" id="address" name="address" >
            <h2>Město</h2>
            <input type="text" id="town" name="town" >
            <h2>Zpráva</h2>
            <textarea type="textarea" id="message" name="message"> </textarea>
            <button type="submit" id="btnSubmit">Odeslat</button>
        </form> 
    </div>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
      $errors = [];
      $namus = $_POST['name'];
      $surname = $_POST['surname'];
      $email = $_POST['mail'];
      $tel = $_POST['tel'];
      $address = $_POST['address'];
      $town = $_POST['town'];
      $message = $_POST['message'];
      
      // Validation checks
      if (empty($namus) || empty($surname) || empty($email) || empty($tel) || empty($address) || empty($town)) {
          $errors[] = "Please fill out all the fields.";
      }
      
      if (strpos($email, '@') === false || strpos($email, '.') === false) {
          $errors[] = "Please fill out the e-mail address properly.";
      }
      
      if (!preg_match('/^\+?[\d\s]+$/', $tel)) 
      {
        $errors[] = "Please enter a valid telephone number.";
      } 
          
      if (!preg_match('/\d/', $address)) { //!preg_match('/\d/', $address) == checks if it contains atleast one digit
          $errors[] = "Please fill out the address properly.";
      }
      
      if (strlen($message) > 255) {
          $errors[] = "Maximum length of 255 exceeded in message.";
      }
      if (!empty($errors)) {
          foreach ($errors as $error) 
          {
              echo "ERROR: " . $error . "<br>";
          }
      } 
      else echo "Validation successful.";   
    } 
    ?>

    <div class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="https://www.w3schools.com/w3images/lights.jpg" alt="Slide 1">
          </div>
          <div class="swiper-slide">
            <img src="https://www.w3schools.com/w3images/nature.jpg" alt="Slide 2">
          </div>
          <div class="swiper-slide">
            <img src="https://www.w3schools.com/w3images/mountains.jpg" alt="Slide 3">
          </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-scrollbar"></div>
      </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="./swiper.js"></script>
<script src="script.js"></script>
</html>