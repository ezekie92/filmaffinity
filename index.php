<?php session_start() ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Insertar una nueva película</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
      <nav class="navbar navbar-default navbar-inverse">
          <div class="container">
              <div class="navbar-header">
                  <a class="navbar-brand" href="#">FilmAffinity</a>
              </div>
              <div class="navbar-text navbar-right">
                  <a class="btn btn-success" href="login.php">Login</a>
              </div>
          </div>
      </nav>
        <div class="container">
            <div class="row col-md-6 col-md-offset-3">
              <a class="btn btn-primary btn-lg btn-block" href="peliculas/index.php">Películas</a>
                <a class="btn btn-primary btn-lg btn-block" href="generos/index.php">Géneros</a>
            </div>
          </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
