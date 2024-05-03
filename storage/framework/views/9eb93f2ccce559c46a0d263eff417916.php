<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
<title>Laravel курсова работа</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <h1 class="w3-xxlarge w3-center">MUSIC LIBRARY</h1>


    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-center w3-hide-small">

      <a href="./musics/" class="w3-bar-item w3-button">Music list</a>
      <a href="#about" class="w3-bar-item w3-button">About me</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
      <div class="w3-right w3-hide-small">
      <?php if(Route::has('login')): ?>
                        <nav class="w3-bar-item w3-button">
                            <?php if(auth()->guard()->check()): ?>
                                <a href="<?php echo e(url('./musics')); ?>" class="w3-bar-item w3-button">Dashboard&nbsp;</a>
                            <?php else: ?>
                                <a href="<?php echo e(route('login')); ?>" class="w3-bar-item w3-button">Log in &nbsp;</a>
                                <?php if(Route::has('register')): ?>
                                    <a href="<?php echo e(route('register')); ?>" class="w3-bar-item w3-button">Register&nbsp;</a>
                                <?php endif; ?>
                            <?php endif; ?>
                        </nav>
                    <?php endif; ?>
</div>
    </div>
  </div>
</div>


<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img class="w3-image" src="https://images.inc.com/uploaded_files/image/1920x1080/getty_626660256_2000108620009280158_388846.jpg" alt="Hamburger Catering" width="1600" height="800">

</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">




  <hr>

  <!-- Menu Section -->


  <hr>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-64" id="contact">
    <h1>Contact</h1><br>
     <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="number" placeholder="Phone" required name="People"></p>

      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message \ Special requirements" required name="Message"></p>
      <p><button class="w3-button w3-light-grey w3-section" type="submit">SEND MESSAGE</button></p>
    </form>
  </div>

<!-- End page content -->
</div>
<br><br><br><br>
<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-32 w3-padding-large w3-opacity" id="about">
  <p style="font-size:150%;">Курсова работа по Laravel на Силвия Момчева 2024&nbsp;&nbsp;&nbsp;
  <a href="#top" title="up" class="w3-button" position: fixed;><img src="https://img.icons8.com/color/up" width="30"></a></p>
</footer>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\music\resources\views/welcome.blade.php ENDPATH**/ ?>