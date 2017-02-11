<!DOCTYPE html>
<!-- saved from url=(0048)http://getbootstrap.com/examples/justified-nav/# -->
<html lang="en" class="gr__getbootstrap_com">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Justified Nav Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/justified-nav.css" rel="stylesheet">

    <style>
        .col-lg-4 {
            min-height: 300px;
        }
    </style>
</head>

<body data-gr-c-s-loaded="true">

<div class="container">

    <!-- The justified navigation menu is meant for single line per list item.
         Multiple lines will require custom code not provided by Bootstrap. -->
    <div class="masthead">
        <h3 class="text-muted">PTF</h3>
        <nav>
            <ul class="nav nav-justified">
                <li><a href="/">Inicio</a></li>
                <li><a href="/pagina/productos">Productos</a></li>
                <li><a href="/pagina/contacto">Contacto</a></li>
            </ul>
        </nav>
    </div>

    <!-- Jumbotron -->
    <div class="jumbotron">
        <h1><?= $producto->getNombre() ?></h1>
    </div>

    <!-- Example row of columns -->
    <div class="row">
        <div class="col-lg-12">
            <?= $producto->getDescripcion() ?>
        </div>
    </div>

    <!-- Site footer -->
    <footer class="footer">
        <p>© 2017 Programa tu Futuro</p>
    </footer>

</div> <!-- /container -->
</body>
</html>