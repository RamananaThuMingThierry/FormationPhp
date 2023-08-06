<!DOCTYPE html>
<html lang="fr" class="h-100">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <title><?= $titre ?? "Mon Site"; ?></title>
</head>
<body class="d-flex flex-column h-100">
   <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a href="#" class="navbar-brand">Mon site</a>
    </nav>  

    <div class="container mt-4">
      <?= $content ?>
    </div>

    <footer class="bg-light py-4 footer mt-auto">
      <div class="container">
        Page générée en <?= round(1000 * (microtime(true) - DEBUG_TIME)) ?> ms
      </div>
    </footer>
</body>
</html>