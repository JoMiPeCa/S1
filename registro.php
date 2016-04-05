
<?php
require 'titles/title.php';
?>

<!DOCTYPE html>
<!--
Solicitudes de Atencion
rut , nombre , tipo de Atencion, fecha de atencion(fecha actual), Nombre especialista a cargo y un espacio de comentario.
-->


<html>
    <head>
        <link type="text/css" rel="stylesheet" href="CSS/style.css" >
        <meta charset="UTF-8">
        <title><?php echo $titulo; ?></title>
    </head>
    <body>
        <table border="0" width=100% >
            <tr>
                <td>
                    <?php
                    require 'menu.php';
                    ?>
                </td>
                <td>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
                    <form action="atenciones.php" method="post">
                        <table border="0">
                            <tbody>
                                <tr>
                                    <td>Run: </td>
                                    <td><input type="number" name="rut" id="rut" required="true" ></td>
                                </tr>
                                <tr>
                                    <td>Nombre: </td>
                                    <td><input type="text" name="nombre" id="nombre" required="true" ></td>
                                </tr>
                                <tr>
                                    <td>Tipo de Atencion: </td>
                                    <td><select name="tipoAtencion" id="tipoAtencion" required="true">
                                            <option value="default">Selecciona</option>
                                            <option value="AT001">Desarrollador Dolores leves(AT001)</option>
                                            <option value="AT002">Complicaciones Menores(AT002)</option>
                                            <option value="AT003">Grave(AT003)</option>
                                            <option value="AT004">Muy Grave(AT004)</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td>Fecha de Atencion: </td>
                                    <td><input type="date" name="fechaAtencion" id="fecha" readonly="true" ></td>
                                </tr>
                                <tr>
                                    <td>Nombre especialista a cargo: </td>
                                    <td><input type="text" name="especialista" id="especialista" required="true"></td>
                                </tr>
                                <tr>
                                    <td>Comentarios: </td>
                                    <td><input type="text" name="comment"></td>
                                </tr>
                                <tr>
                                    <td><input type="reset" value="Limpiar" ></td>
                                    <td><input type="submit" value="Enviar" onclick="validacion();"></td>
                                </tr>
                            </tbody>
                        </table>

                    </form>
                </td>
            </tr>
        </table>
        <footer>
            <?php
            require 'titles/titulo.php';
            ?>
        </footer>
    </body>
    <script type="text/javascript">
        function validacion() {
        var run = $("#rut").val();
        if (run == "") || (run.contains(" ")) {
        alert("Debe escribir su RUN");
        return false;
        }
        var name = $("#nombre").val();
        if (name == "") || (name == " ") {
        alert("Debe escribir su NOMBRE");
        return false;
        }
        var esp = $("#especialista").val();
        if (esp == "") || (esp == " ") {
        alert("Debe escribir el ESPECIALISTA");
        return false;
        }
        var ddl = $("#tipoAtencion").val();
        if (ddl == "default"){
        alert("Debe seleccionar el Tipo de Atencion");
        return false;
        }

        var f = new Date();
        var fecha = f.getDay() + "/" + f.getMonth() + "/" + f.getFullYear();
        $("p").on({
        mouseenter: function () {
        $(this).css("background-color", "lightgray");
        },
                mouseleave: function () {
                $(this).css("background-color", "lightblue");
                },
                click: function () {
                $(this).css("background-color", "yellow");
                }
        });
        return true;
        }

    </script>

</html>