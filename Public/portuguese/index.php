<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Uma nova equipe! Tantos sonhos!">
    <meta name="author" content="Jactech">
    <meta name="keywords" content="Jactech, equipe, home, robótica">
    <meta name = "robots" content = "index, follow">
    <link rel="shortcut icon" href="https://i.ibb.co/zh36pn3/logo.png">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/style.css">
    
</head>
<body>
    <nav id="menu">
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo"><a href="#"><img src="../../Image/jactech.svg" alt=""></a></label>
      <ul>
        <li><a href="#" class="hover-underline-animation">HOME</a></li>
        <li><a href="about.php" class="hover-underline-animation">SOBRE</a></li>
        <li><a href="frc.php" class="hover-underline-animation">FRC</a></li>
        <li><a href="sponsorship.php" class="hover-underline-animation">PATROCÍNIOS</a></li>
        <!-- <li><a href="blog.php" class="hover-underline-animation">BLOG</a></li>
        <li><a href="mentors.php" class="hover-underline-animation">MENTORES</a></li> -->
        <li><a href="members.php" class="hover-underline-animation">MEMBROS</a></li>
            <div class="switch">
            <input id="language-toggle" class="check-toggle check-toggle-round-flat" type="checkbox" onchange="redirectPageIndex(this)">
                <label for="language-toggle"></label>
                <span class="on">PT</span>
                <span class="off">EN</span>
  	        </div>
      </ul>
    </nav>
    <br><br><br><br><br><br>
<!-- Inicio do body -->
        <section id="main-banner">
            <div class="left">
                <p> A Jactech, é a primeira equipe da cidade de Jacarei-SP na participação da FIRST Robotics Competition! 
                    Participar dessa competição é um marco importante para a Jactech, que acredita que a robótica e a tecnologia 
                    têm o potencial de transformar positivamente a sociedade.Nossa primeira participação oficial pela FIRST será 
                    em 2024, estamos extremamente ansiosos e conscientes da importância de nossa estreia!
</p>
            </div>
            <div class="right">
                <img src="https://i.ibb.co/T02DNZs/jacare-branco.png" alt="">
            </div>
        </section>

        <section id="sesi-senai">
            <div class="fade-item esquerda left">
                <img src="https://i.ibb.co/q5sTTM9/sesi.png" alt="">
            </div>
            <div class="fade-item direita right">
                <img src="https://i.ibb.co/t4Xvcn0/senai.png" alt="">
            </div>
        </section>

        <section id="season">
            <div class="fade-item esquerda left">
                <img src="https://i.ibb.co/98ztnB1/team-photo-1.png" alt="">
            </div>
            <div class="fade-item direita right">
               <p>A competição enfatiza a colaboração, no qual os participantes aprendem a resolver problemas, tarefas 
                e comunicação.</p>
            </div>
        </section>

        <section id="first">
            <div class="fade-item esquerda left">
                <img src="https://i.ibb.co/WDVmcfn/first.png" alt="">
            </div>
            <div class="fade-item direita right">
                <p>A FIRST (For Inspiration and Recognition of Science and Technology) é uma renomada organização 
                    internacional que se dedica a inspirar jovens a se interessarem por ciência, tecnologia, engenharia, 
                    artes e matemática, conhecidas como as disciplinas STEAM. A organização promove uma série de programas 
                    educacionais e competições de robótica que desafiam estudantes a aplicar seus conhecimentos em projetos
                     práticos, como a construção de robôs. Os programas visam não apenas o desenvolvimento 
                     de habilidades técnicas, mas também a promoção de valores como cooperação, trabalho em equipe, 
                     liderança e responsabilidade.

</p>
            </div>
        </section>
<!-- Fim do body -->
    <footer>
        <div class="footerContainer">
            <div class="footerDiv1">
                <div class="socialIcons">
            <!-- <a href=""><i class="fa-brands fa-facebook"></i></a> -->
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-tiktok"></i></a>
            <a href=""><i class="fa-brands fa-youtube"></i></a>
            <a href=""><i class="fa-brands fa-linkedin"></i></a>
        </div>
        <br><br>
        <div id="footertext">
            <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="about.php">SOBRE</a></li>
            <li><a href="frc.php">FRC</a></li>
            <li><a href="sponsorship.php">PATROCÍNIOS</a></li>
            <!-- <li><a href="blog.php">BLOG</a></li>
            <li><a href="mentors.php">MENTORES</a></li> -->
            <li><a href="members.php">MEMBROS</a></li>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/movepage-pt.js"></script>
    <script src="../js/scroll.js"></script>
</body>
</html>