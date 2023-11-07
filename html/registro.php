<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar registros con PHP</title>
</head>
<body>
    <h3>Consultar los registros de la tabla Clientes con PHP</h3><br/><br/>
    <table border="2" cellpadding ="2" cellspacing ="0">
        <tr>
            <th colspan="6">Listado de Clientes</th>
        </tr>
        <tr>
            <th>Nit</th>
            <th>Empresa</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Ciudad</th>
            <th>Fecha</th>
        </tr>
        <?php
        require("conexion.php");
        $consulta_registros = "SELECT * FROM Clientes;";
        $registros = mysqli_query($conexion, $consulta_registros);
        
        while($fila = mysqli_fetch_row($registros))
        {
                echo ("<tr><td>".$fila[0]."</td>");
                echo ("<td>".$fila[1]."</td>");
                echo ("<td>".$fila[2]."</td>");
                echo ("<td>".$fila[3]."</td>");
                echo ("<td>".$fila[4]."</td>");
                echo ("<td>".$fila[5]."</td></tr>");
        }
        mysqli_close($conexion);
        ?>
    </table>
</body>
</html>