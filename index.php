<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="#" method="post">
            <?php
            
            //Definimos campos ocultos de formulario, con los datos del array        
            if(isset($_POST['nombres'])) {
                $nombres = $_POST['nombres'];
                    for($i=0; $i<count($_POST['nombres']); $i++){
                        echo "<input type='hidden' name='nombres[]' value='".$_POST['nombres'][$i]."'>"; 
                    }
            } else {
                echo "<input type='hidden' name='nombres[]' value=''>"; 
            }
        
            
            ?>
            Nombre: 
            <input type="text" name="nombre"> <br>
            <input type="submit" value="Enviar"> <br>
        
       
        <?php
           //Mostramos el array
           
              if (isset($_POST['nombre'])) {
                $nombres[] = $_POST['nombre'];
                echo "<input type='hidden' name='nombres[]' value='".$_POST['nombre']."'>"; 
                echo "<b> Nombres ingresados: </b> <br>";
                for($i=0; $i<count($nombres); $i++) {
                    echo($nombres[$i]. "<br>");
                }
            }
          
        ?>

        </form>
    </body>
</html>