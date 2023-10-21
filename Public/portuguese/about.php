<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre - JacTech</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/about.css">
    
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
        <li><a href="#" class="hover-underline-animation">SOBRE</a></li>
        <li><a href="frc.php" class="hover-underline-animation">FRC</a></li>
        <li><a href="sponsorship.php" class="hover-underline-animation">PATROCÍNIOS</a></li>
        <li><a href="blog.php" class="hover-underline-animation">BLOG</a></li>
        <li><a href="mentors.php" class="hover-underline-animation">MENTORES</a></li>
        <li><a href="members.php" class="hover-underline-animation">MEMBROS</a></li>
            <div class="switch">
                <input id="language-toggle" class="check-toggle check-toggle-round-flat" type="checkbox" onchange="redirectPageAbout(this)">
                <label for="language-toggle"></label>
                <span class="on">PT</span>
                <span class="off">EN</span>
  	        </div>
      </ul>
    </nav>
    <br><br><br><br><br><br>
<!-- Inicio do body -->
        <section id="who-section">
            <div class="left">
                <img src="https://i.ibb.co/zh36pn3/logo.png" alt="">
            </div>
            <div class="right">
                <h1>
                QUEM NÓS SOMOS?
                </h1>
                <p>
                A JacTech é uma equipe que tem como missão unir a inovação tecnológica ao seu compromisso com a cidade de Jacareí e 
                região, buscando constantemente transformar a comunidade por meio de projetos e iniciativas. O nome da organização 
                faz alusão tanto a ligação com a nossa cidade quanto a busca por avanços na tecnologia.
                </p>
            </div>
        </section>

        <section id="mission-section">
            <div class="fade-item esquerda left">
                <h1>
                    MISSÃO
                </h1>
                <p>
                A nossa missão é levar a robótica para o maior número de pessoas, utilizando a tecnologia para impactar positivamente
                 a sociedade. O lema "Muito mais que robôs" retrata a grandiosidade não só da competição, mas de todo o trajeto, 
                 buscando influenciar e demonstrar a tecnologia e ações sociais!
                </p>
            </div>
            <div class="fade-item direita right">
                <img src="https://i.ibb.co/qjz2QsQ/robologo.png" alt="">
            </div>
        </section>

        <section id="contact-section">
            <div class="fade-item esquerda left">
                <img src="https://i.ibb.co/98ztnB1/team-photo-1.png" alt="">
            </div>
            <div class="fade-item direita right">
               <div class="right">
                 <h1 style="color: white; font-size: 30px;">
                    CONTATE-NOS
                </h1>
            <form class="form">
        <div class="flex">
        <label>
            <input class="input" type="text" placeholder="" required="">
            <span>Firstname</span>
        </label>

        <label>
            <input class="input" type="text" placeholder="" required="">
            <span>Lastname</span>
        </label>
    </div>  
            
    <label>
        <input class="input" type="email" placeholder="" required="">
        <span>Email</span>
    </label> 
        
    <label>
        <input class="input" type="tel" placeholder="" required="">
        <span>Telefone</span>
    </label>
    <label>
        <input class="input" type="message" placeholder="" required="">
        <span>Mensagem</span>
    </label>
    <button class="submit">Submit</button>
</form>
               </div>
        </div>
        </section>

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
            <li><a href="about.php">#</a></li>
            <li><a href="frc.php">FRC</a></li>
            <li><a href="sponsorship.php">PATROCÍNIOS</a></li>
            <li><a href="blog.php">BLOG</a></li>
            <li><a href="mentors.php">MENTORES</a></li>
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