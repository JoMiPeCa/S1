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
                
                <td>RESUMENES</td>
            </tr>
        </table>
        <footer>
            <?php
            require 'titles/titulo.php';
            ?>
        </footer>

    </body>

</html>