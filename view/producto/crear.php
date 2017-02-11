<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li class="active"><a href="/admin.php">Productos <span class="sr-only">(current)</span></a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Crear Producto</h1>

            <form class="form-horizontal" action="/producto/crear" method="post">
                <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label">Nombre: </label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="nombre" id="nombre">
                        <small class="help-block" style="color:orangered;"><?=$errors['nombre'] ?? ''?></small>
                    </div>
                </div>
                <div class="form-group">
                    <label for="descripcion" class="col-sm-2 control-label">Password: </label>
                    <div class="col-sm-9">
                        <textarea name="descripcion" id="descripcion" class="form-control" rows="4"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-9">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>