<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is our blog that have some notices for you!">
    <meta name="author" content="Jactech">
    <meta name="keywords" content="Jactech, team, robotics, blog, information, blog, know">
    <meta name = "robots" content = "index, follow">
    <link rel="shortcut icon" href="https://i.ibb.co/zh36pn3/logo.png">
    <title>BLOG - JACTECH</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/blog.css">
    
</head>
<body>
    <nav id="menu">
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo"><a href="index.php"><img src="../../Image/jactech.svg" alt=""></a></label>
      <ul>
        <li><a href="index.php" class="hover-underline-animation">HOME</a></li>
        <li><a href="about.php" class="hover-underline-animation">ABOUT</a></li>
        <li><a href="frc.php" class="hover-underline-animation">FRC</a></li>
        <li><a href="sponsorship.php" class="hover-underline-animation">SPONSORSHIP</a></li>
        <li><a href="#" class="hover-underline-animation">BLOG</a></li>
        <li><a href="mentors.php" class="hover-underline-animation">MENTORS</a></li>
        <li><a href="members.php" class="hover-underline-animation">MEMBERS</a></li>
            <div class="switch">
                <input id="language-toggle" class="check-toggle check-toggle-round-flat" type="checkbox" onchange="redirectPageBlog(this)">
                <label for="language-toggle"></label>
                <span class="on">EN</span>
                <span class="off">PT</span>
  	        </div>
      </ul>
    </nav>
    <br><br><br><br><br><br>
<!-- Inicio do body -->



    <footer>
        <div class="footerContainer">
            <div class="footerDiv1">
                <div class="socialIcons">
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-tiktok"></i></a>
            <a href=""><i class="fa-brands fa-youtube"></i></a>
            <a href=""><i class="fa-brands fa-linkedin"></i></a>
        </div>
        <br><br>
        <div id="footertext">
            <ul>
            <li><a href="index.php">HOME</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="frc.php">FRC</a></li>
                <li><a href="sponsorship.php">SPONSORSHIP</a></li>
                <li><a href="#">BLOG</a></li>
                <li><a href="mentors.php">MENTORS</a></li>
                <li><a href="members.php">MEMBERS</a></li>
            </ul>
        </div>
            </div>
        <div class="footerDiv2">
                <div class="footerLogo">
                <img src="https://i.ibb.co/zh36pn3/logo.png" alt="">
            </div>
            </div>
    </div>
    <div class="footerBottom">
            <p>Copyright &copy;2023; Design by <span class="designer">JacTech</span></p>
        </div>
    </footer>

    <!-- Fim do body -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/movepage-en.js"></script>
    <script src="../js/scroll.js"></script>
</body>
</html>