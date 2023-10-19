


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
        </div>

        <div class="main-cards">

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">LIVROS INSTALADOS</p>
              <span class="material-icons-outlined text-green">download</span>
            </div>
            <span class="text-primary font-weight-bold">0</span>
          </div>
        </div>

        <div class="charts">
          <div class="charts-card">
            <p class="chart-title">Top 5 Products</p>
            <div id="bar-chart"></div>
          </div>

          <div class="charts-card">
            <p class="chart-title">Purchase and Sales Orders</p>
            <div id="area-chart"></div>
          </div>
        </div>
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
