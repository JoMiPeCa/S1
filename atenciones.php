<?php
require 'titles/title.php';
?>
<!DOCTYPE html>
<!--
-->
<html>
    <link type="text/css" rel="stylesheet" href="CSS/style.css" >
    <head>
        <meta charset="UTF-8">
        <title><?php echo $titulo; ?></title>
    </head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <body>

        <table border="0" width=100% >
            <tr>
                <td>
                    <?php
                    require 'menu.php';
                    ?>
                </td>
                <td>
                    <table border="0" width="100">

                        <tr>
                            <td><h1 class="title">Registro de información</h1></td>

                        </tr>
                        <tr>
                            <td>Usted a ingresado la siguiente información:</td>

                        </tr>
                        <tr>
                            <td><?php
                                $rut = $_POST["rut"];
                                ?>
                                <b>Rut:</b></td>
                            <td><?= $rut; ?></td>
                        </tr>
                        <tr>
                            <td><?php
                                $nombre = $_POST["nombre"];
                                ?>
                                <b>Nombre:</b></td>
                            <td><?= $nombre; ?></td>
                        </tr>
                        <tr>
                            <td><?php
                                $tipoAtencion = $_POST["tipoAtencion"];
                                
                                if ($tipoAtencion == "AT004") {
                                    
                                    ?>
                                    <script style="color: red">
                                        window.alert("DERIVAR A OTRO CENTRO ESPECIALIZADO\n RECOMENDACIONES ESPECIALISTA DE TURNO: \n Favor llamar al +569 12345678 ");
                                    </script>
                                <?php }
                                ?>
                                <b>Tipo de Atencion:</b></td>
                            <td><?= $tipoAtencion; ?></td>
                        </tr>

                        <tr>
                            <td><?php
                                $fecha = $_POST["fechaAtencion"];
                                ?>

                                <b>Fecha de Atencion:</b></td>
                            <td><?= $fecha; ?></td>
                        </tr>
                        <tr>
                            <td><?php
                                $namesp = $_POST["especialista"];
                                ?>
                                <b>Nombre Especialista:</b></td>
                            <td><?= $namesp; ?></td>
                        </tr>
                        <tr>
                            <td><?php
                                $comment = $_POST["comment"];
                                ?>
                                <b>Comentarios:</b></td>
                            <td><?= $comment; ?></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <footer>
            <?php
            require 'titles/titulo.php';
            ?>
        </footer>

    </body>

</html>