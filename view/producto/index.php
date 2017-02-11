<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li class="active"><a href="">Productos <span class="sr-only">(current)</span></a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">
                Productos
                <a href="/producto/crear" class="pull-right btn btn-sm btn-default">Nuevo</a>
            </h1>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($productos as $producto): ?>
                    <tr>
                        <td><?=$producto->getId()?></td>
                        <td><?=$producto->getNombre()?></td>
                        <td>
                            <a class="btn btn-xs btn-primary" href="/producto/editar/<?=$producto->getId()?>">Edit</a>
                            <a class="btn btn-xs btn-danger" href="/producto/borrar/<?=$producto->getId()?>">Borrar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>