<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books Player</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Custom styles -->
    <link href="main.css" rel="stylesheet">
    <script src="playerjs.js" type="text/javascript"></script>
  </head>


  <body class="d-flex flex-column h-100">
    
    <div class="container" style="padding-top: 1rem;">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
          <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
          </a>
    
          <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="main.php" class="nav-link px-2 link-dark">Главная</a></li>
            <!-- <li><a href="catalog.php" class="nav-link px-2 link-dark">Каталог</a></li> -->
            <!-- <li><a href="#" class="nav-link px-2 link-secondary">О проекте</a></li> -->
          </ul>
    
          <div class="col-md-3 text-end">
              <form class="mt-5" method="post" action="do_logout.php">
        <button type="submit" class="btn btn-primary">Выход</button>
             </form>
          </div>

        </header>
      </div>