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
                <li class="active"><a href="/pagina/productos">Productos</a></li>
                <li><a href="/pagina/contacto">Contacto</a></li>
            </ul>
        </nav>
    </div>

    <!-- Jumbotron -->
    <div class="jumbotron">
        <h1>Productos</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.</p>
    </div>

    <!-- Example row of columns -->
    <div class="row">
        <?php foreach ($productos as $producto): ?>
        <div class="col-lg-4">
            <h2><?= $producto->getNombre() ?></h2>
            <p><a class="btn btn-primary" href="/paginas/producto/<?= $producto->getId() ?>" role="button">Mas detalles »</a></p>
        </div>
        <?php endforeach; ?>

    </div>

    <!-- Site footer -->
    <footer class="footer">
        <p>© 2017 Programa tu Futuro</p>
    </footer>

</div> <!-- /container -->
</body>
</html>