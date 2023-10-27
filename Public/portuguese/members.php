<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Um portal para uso dos membros da equipe!">
    <meta name="author" content="Jactech">
    <meta name="keywords" content="Jactech, equipe, membros, portal, controle, login">
    <meta name = "robots" content = "index, follow">
    <link rel="shortcut icon" href="https://i.ibb.co/zh36pn3/logo.png">
    <title>Membros</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/members.css">

</head>
<body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo"><a href="index.php"><img src="../../Image/jactech.svg" alt=""></a></label>
      <ul>
        <li><a href="index.php" class="hover-underline-animation">HOME</a></li>
        <li><a href="about.php" class="hover-underline-animation">SOBRE</a></li>
        <li><a href="frc.php" class="hover-underline-animation">FRC</a></li>
        <li><a href="sponsorship.php" class="hover-underline-animation">PATROCÍNIOS</a></li>
        <!-- <li><a href="blog.php" class="hover-underline-animation">BLOG</a></li>
        <li><a href="mentors.php" class="hover-underline-animation">MENTORES</a></li> -->
        <li><a href="#" class="hover-underline-animation">MEMBROS</a></li>
            <div class="switch">
                <input id="language-toggle" class="check-toggle check-toggle-round-flat" type="checkbox" onchange="redirectPageMembers(this)">
                <label for="language-toggle"></label>
                <span class="on">PT</span>
                <span class="off">EN</span>
  	        </div>
      </ul>
    </nav>
    <div class="login">
	<!-- <img src="img/Banner.png" alt=""> -->
	<div class="form" style="border-radius: 20px; z-index: 0;">
		 <form class="registro" method="post" action="../authenticate.php"> <!--class="registro" -->
		 <h1 style="font-family: 'Montserrat';">Login</h1>

		 <br><br>

			<input type="email" name="usuario" placeholder="Coloque seu email:">
			<input type="password" name="senha" placeholder="Coloque sua senha:">
			<button action="submit">Login</button>

			<div class="container" style="font-family: 'Montserrat'; font-size: 12px; margin-top: 10px; ">
			<br>
            <!-- <span class="psw">Esqueceu sua senha? <a class="link1" href="forgetpassword.php" style="font-weight: bolder; cursor:pointer;">Clique aqui!</a></span> -->
        </div> 

		</form>
	</div>
</div>

    <footer>
        <div class="footerContainer">
            <div class="footerDiv1">
                <div class="socialIcons">
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-tiktok"></i></a>
            <a href=""><i class="fa-brands fa-youtube"></i></a>
        </div>
        <br><br>
        <div class="footerNav">
            <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.php">SOBRE</a></li>
            <li><a href="frc.php">FRC</a></li>
            <li><a href="sponsorship.php">PATROCÍNIOS</a></li>
            <li><a href="blog.php">BLOG</a></li>
            <li><a href="mentors.php">MENTORES</a></li>
            <li><a href="#">MEMBROS</a></li>
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

    <!-- Fim do Body -->

    <script src="../js/movepage-pt.js"></script>
    <script src="../js/scroll.js"></script>

</body>
</html>

