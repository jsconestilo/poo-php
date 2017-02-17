<!DOCTYPE html>
<!-- saved from url=(0040)http://getbootstrap.com/examples/signin/ -->
<html lang="en" class="gr__getbootstrap_com"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/signin.css" rel="stylesheet">
</head>

<body data-gr-c-s-loaded="true">

<div class="container">

    <form class="form-signin" action="/usuario/login" method="post">
        <?= isset($errors['login']) ? '<div class="alert alert-danger" role="alert">'.$errors['login'].'</div>' : ''?>
        <label for="usuario" class="sr-only">Usuario</label>
        <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario" value="<?=isset($_POST['usuario']) ? $_POST['usuario'] :  ''?>" autofocus="">
        <small class="help-block" style="color:orangered;"><?=isset($errors['usuario']) ? $errors['usuario'] : ''?></small>

        <label for="clave" class="sr-only">Password</label>
        <input type="password" name="clave" id="clave" class="form-control" placeholder="Clave">
        <small class="help-block" style="color:orangered;"><?=isset($errors['clave']) ? $errors['clave'] : ''?></small>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
    </form>

</div> <!-- /container -->


</body></html>