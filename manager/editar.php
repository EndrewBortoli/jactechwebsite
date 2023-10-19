<!-- editar.php -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    // Conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = '';
    $dbname = "bortoli_18";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    $id = $_GET["id"];
    // Consulta SQL para selecionar o registro com base no ID
    $sql = "SELECT * FROM usuarios WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        // Exiba um formulário de edição com os valores atuais do registro
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="dashboard.css">

        <style>
        body > div > main > div{
            display: flex;
            flex-direction: column;
        }

        body > div > main > div > form > div{
            display: flex;
            flex-direction: column;
        }
        
        form{
            gap: 15px;
        }

        body > div > main > div > form > div > input{
            height: 45px;
            border-radius: 15px;
            border: none;
        }

        body > div > main > div > form > div > input[type=submit]:nth-child(8){
            background-color: blue;
            color: white;
        }
    </style>
  </head>
  <body>
    <div class="grid-container">

      <!-- Header -->
      <header class="header">
        <div class="menu-icon" onclick="openSidebar()">
          <span class="material-icons-outlined">menu</span>
        </div>
        <div class="header-left">
                  <a href="../panel/logout.php" style="text-decoration: none;">Sair</a>
        </div>
        <div class="header-right">
          <h2 style="font-size: 14px;">Olá, bem vindo de volta</h2>
        </div>
      </header>
      <!-- End Header -->

      <!-- Sidebar -->
      <aside id="sidebar">
        <div class="sidebar-title">
          <div class="sidebar-brand">
            <a href="dashboard.php" id="logo"><img src="https://i.ibb.co/XsJshMF/jactech-escrita.png" alt="logo" style="width: 200px;"></a>
          </div>
          <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
        </div>

        <ul class="sidebar-list">
          <li class="sidebar-list-item">
            <a href="dashboard.php">
              <span class="material-icons-outlined">dashboard</span> Dashboard
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="usuarios.php">
              <span class="material-icons-outlined">person</span> Usuários
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="cadastrolivros.php">
              <span class="material-icons-outlined">description</span> Blog
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="usuarios.php">
              <span class="material-icons-outlined">link</span> Links úteis
            </a>
          </li>
          <!-- <li class="sidebar-list-item">
            <a href="#" target="_blank">
              <span class="material-icons-outlined">add_shopping_cart</span> Purchase Orders
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#" target="_blank">
              <span class="material-icons-outlined">shopping_cart</span> Sales Orders
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#" target="_blank">
              <span class="material-icons-outlined">poll</span> Reports
            </a>
          </li> -->
          <!-- <li class="sidebar-list-item">
            <a href="#" target="_blank">
              <span class="material-icons-outlined">settings</span> Configurações
            </a>
          </li> -->
        </ul>
      </aside>
      <!-- End Sidebar -->

      <!-- Main -->
<main class="main-container">
        <div class="main-title">
          <p class="font-weight-bold">DASHBOARD</p>
          <h1 style="color: black;">Editar Usuário</h1>
    <form method="POST" action="processar_criacao.php">
        <div class="form-content">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <label for="email">Nome:</label>
            <input type="text" name="nome" value="<?php echo $row['nome']; ?>">
            <br>
            <label for="email">Email:</label>
            <input type="text" name="email" value="<?php echo $row['email']; ?>">
            <br>
            <label for="senha">Senha:</label>
            <div style="display:flex;">
                <input type="password" name="senha" id="myInput" value="<?php echo $row['senha']; ?>">
                <input type="checkbox" onclick="myFunction()">Show Password
            </div>
            <br>
            <label for="nivel">Nivel:</label>
            <input type="text" name="nivel" value="<?php echo $row['nivel']; ?>" >

            <br>
            <!-- Adicione mais campos conforme necessário -->
            <input type="submit" value="Salvar">
            <br>
            <a href="usuarios.php" style="text-decoration: none; color: black;">Voltar</a>
        </div>
    </form>
     
</main>

    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script src="dashboard.js"></script>

    <script>
    function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<?php
    } else {
        echo "Registro não encontrado.";
    }

    $conn->close();
} else {
    echo "ID não especificado.";
}
?>
  </body>
</html>
