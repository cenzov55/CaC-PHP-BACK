<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Usuarios</title>
    <!-- Agrega los enlaces a los archivos CSS de Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div class="container mt-4">
    <h2>CaC PHP-BACK END 2024 Proyecto final
 | Enzo VInella</h2>
        <hr>
        <h2>Tabla de Usuarios</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>Apelldio</th>
                    <th>Nro Documento</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($mensajeError)) {
                    echo '<div class="alert alert-danger" role="alert">' . $mensajeError . '</div>';
                } else {
                    if (empty($usuarios)) {
                        echo '<tr><td colspan="3">Sin resultados</td></tr>';
                    } else {
                        foreach ($usuarios as $usuario) {
                            echo '<tr>';
                            echo '<td>' . $usuario->usuario . '</td>';
                            echo '<td>' . $usuario->nombre . '</td>';
                            echo '<td>' . $usuario->apellido . '</td>';
                            echo '<td>' . $usuario->documento . '</td>';
                            echo '<td>' . $usuario->email . '</td>';
                            echo '</tr>';
                        }
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>