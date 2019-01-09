<html>
    <head>
    
    </head>
    
    <body>
        <?php
        
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $dia = trim($_POST['dia']);
                if (preg_match ('/^(\d{1,2}[\/\. -]){2}\d{2,4}$/', $dia) ) {
                    echo 'TRUE!</p>';
                } else {
                    echo 'FALSE!</p>';
                }
            }
        ?>
        <form action="PracticaExamenb.php" method="post">
            <p><label>Introducir: <input type="text" name="dia" Placeholder="DIA/MES/ANNO"/></label></p>
            <input type="submit" name="submit" value="Enviar" />
        </form>
    </body>
</html>