<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title> <?= $title ?? 'Welcome' ?> </title> <!--STyling the navbar -->
    <style>
      body {
        background-color: #f5f5dc; 
      }
      .navbar-custom {
        background-color: #2e8b57; 
      }
      .navbar-custom .navbar-brand,
      .navbar-custom .nav-link {
        color: #fff; /* White text for navbar items */
      }
      .navbar-custom .navbar-brand:hover,
      .navbar-custom .nav-link:hover {
        color: #d4af37; /* Golden text on hover */
      }
      .navbar-custom img {
        height: 80px; /* Default height for desktop */
        width: auto;
      }
      @media (max-width: 576px) {
        .navbar-custom img {
          height: 40px; /* Smaller height for mobile */
        }
        .navbar-custom .nav-link {
          padding: 8px 10px; /* Adjust padding for smaller screens */
        }
      } 
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-custom">
      <div class="container-fluid">
        <a class="navbar-brand" href="./index.php" style="font-size: x-large;">
          <img src="./Logo/Logo.png" alt="Broadleigh Gardens Logo">
          Broadleigh Gardens
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="./index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./account_settings.php">Your Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./admin_dashboard.php">Reviews</a>
            </li>
          </ul>
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="./login.php">
            Register / Login
                <i class="bi bi-person-circle"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- The rest of your page content -->

    <script src="./js/bootstrap.bundle.js"></script>
  </body>
</html>
