<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web</title>
  <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/9477/9477422.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
  <link rel="stylesheet" href="./style.css" />
  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

</head>

<body>
  <!-- partial:index.partial.html -->
  <div class="app-container">
    <?php include './app_container/app-header.php'; ?>
    <div class="app-content">
      <?php
      include './app_container/app-sidebar.php';
      include './projects-section/projects-section.php';
      ?>

    </div>
  </div>
  <!-- partial -->
  <script src="./script.js"></script>
</body>
</html>