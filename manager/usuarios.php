


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

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="table.css">
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
      <main class="main-container" style="display:flex; flex-direction:column;">

      <a href="criar.php">Criar novo usuário</a>
<?php

    // Conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = '';
    $dbname = "bortoli_18";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Consulta SQL para selecionar todos os registros da tabela desejada
    $sql = "SELECT * FROM usuarios";
    $result = $conn->query($sql);

   if ($result->num_rows > 0) {
          echo '<table class="styled-table">';
          echo '<thead><tr><th>ID</th><th>Nome</th><th>Email</th><th>Senha</th><th>Nível</th><th>Ações</th></tr></thead>';
          echo '<tbody>';
          while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['nome'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['senha'] . '</td>';
            echo '<td>' . $row['nivel'] . '</td>';
            // Adicione links de edição e exclusão
            echo '<td><a href="editar.php?id=' . $row['id'] . '"><span class="material-symbols-outlined">
edit
</span></a>  <a href="excluir.php?id=' . $row['id'] . '"><span class="material-symbols-outlined">
delete
</span></a></td>';
            echo '</tr>';
          }
          echo '</tbody>';
          echo '</table>';
        } else {
          echo 'Nenhum resultado encontrado.';
        }

    $conn->close();
?>

      </main>
      <!-- End Main -->

    </div>

    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script src="dashboard.js"></script>
  </body>
</html>
