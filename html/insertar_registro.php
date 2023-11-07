<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8"/>
        <title> registros</title>
        <link rel ="stylesheet" href = "estiloformulario.css" type = "text/css">
    <body>
        <h4>registro</h4>
        <h3>
            <div id= "redondear">
                <form name = "formulario" method = "post" action="insertar_registro.php">
                    <br>nombre: <input type = "text" name = "nit" autofocus required placeholder = "Digite nit" size = "20">
                    <br>apellido: <input type = "text" name = "empresa" required placeholder = "Digite nombre empresa" size = "40">
                    <br>Dirección: <input type = "text" name = "direccion" required placeholder = "Digite dirección" size = "40">
                    <br>correo_electronico: <input type = "text" name = "telefono" required placeholder = "Digite teléfono" size = "20">
                    <br>contraseña: <input type = "text" name = "ciudad" required placeholder = "Digite ciudad" size = "30">
                    <br>
                    <input type = "submit" name = "enviar" value = "Guardar Registro">
                    <input type = "reset" name = "limpiar" value = "Reestablecer campos">
                </form>
            </div>
        </h3>
        <!-- Código PHP -->
        <?php
            if(isset($_POST['enviar']))
            {
                require('conexion.php');

                $nit = $_POST['nombre'];
                $empresa = $_POST['apellido'];
                $direccion = $_POST['direccion'];
                $telefono = $_POST['correo_electronico'];
                $ciudad = $_POST['contraseña'];

                
                $insertar_registro = "INSERT INTO Clientes (nombre, apellido, dirreccion, correo_electronico, contraseña ) VALUES ('$nit', '$empresa', '$direccion', '$telefono', '$ciudad', '$fecha')";

                $respuesta = mysqli_query($conexion, $insertar_registro) or trigger_error("Error en la consulta MySQL: ".mysqli_error($conexion));

                if($respuesta)
                {
                    echo '<h1>Registro grabado</h1>';
                }
                else
                {
                    echo '<<h1>No se ha GRABADO el registro</h1>';
                }

                mysqli_close($conexion);
            }
        ?>
    </body>
</html>