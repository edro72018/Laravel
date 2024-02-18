<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-gray-900 dark:text-gray-100">
                <div class="table-responsive">
                        <table class="table table-terciary">
                            <thead>
                            <caption class="p-4">Proyectos</caption>
                            <tr>
                                <th>ID</th>
                                <th>Nombre del Proyecto</th>
                                <th>Fuente de Fondos</th>
                                <th>Monto Planificado</th>
                                <th>Monto Patrocinado</th>
                                <th>Monto de Fondos Propios</th>
                                <th>Acción</th>
                            </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <?php
                                if (!empty($resultado)){
                                    while ($resp = mysqli_fetch_assoc($resultado)){
                                    echo"<tr class='table-terciary'>";
                                    echo"<td>" . $resp['id'] . "</td>";
                                    echo"<td>" . $resp['NombreProyecto'] . "</td>";
                                    echo"<td>" . $resp['FuenteFondos'] . "</td>";
                                    echo"<td>" . $resp['MontoPlanificado'] . "</td>";
                                    echo"<td>" . $resp['MontoFondosPropios'] . "</td>";
                                    ?>
                                    <a name="" id="" class="btn btn-primary" href="#" role="button"></a>
                                    <?php
                                    echo"<td><a href='editar.php?id=" . $resp['id'] . "'>Editar</a> / <a onclick='mostrarMensaje()' href='borrar.php?id=" . $resp['id'] . "'>Borrar</a></td>";
                                    }
                                }
                                    echo"<td>id</td>";
                                    echo"<td>NombreProyecto</td>";
                                    echo"<td>FuenteFondos</td>";
                                    echo"<td>MontoPlanificado</td>";
                                    echo"<td>MontoPatrocinado</td>";
                                    echo"<td>MontoFondosPropios</td>";
                                    ?>
                                    <?php
                                    echo"<td><a name='' id='' class='btn btn-primary' href='#' role='button'>Editar</a> <a name='' id='' class='btn btn-primary' href='#' role='button'>Eliminar</a>";
                                ?>
                            </tbody>
                    </table> 
                </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
  </script>
</body>
</html>