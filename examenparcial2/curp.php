<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Curp</title>
    <link href="https://file.myfontastic.com/zmGVYTk8c485ktmePB4HkF/icons.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos_mostrar.css">
</head>
<body>
    
    

    
    
    
    <div class="contenedor">
        <header>
            <h1 class="titulo">CURP</h1>
            <h1>
            <?php
        
                include("procesar.php");
        
    
    
                ?>
            
            </h1>
        </header>
        <table>
            
            <tr>
              
               <?php
                    $servidor="localhost";
                    $usuario="root";
                    $contrasena="";
                    $db="form_curp";

                    $conexion=mysqli_connect($servidor,$usuario,$contrasena,$db);
                    if(!$conexion){
                        echo "Error: no se puede conectar a la base de datos de MySQL ".PHP_EOL;
                        echo "Errno de depuracion: ".mysqli_connect_errno().PHP_EOL;
                        echo "Errno de depuracion: ".mysqli_connect_error().PHP_EOL;
                        exit;
                    }
                    
                    $consulta="SELECT MAX(id) AS id FROM curpweb";
                    $cadena=mysqli_query($conexion,$consulta);
                    if($row=mysqli_fetch_row($cadena)){
                        $id_curp=trim($row[0]);
                        $curp=mysqli_query($conexion,"SELECT curp FROM curpweb WHERE id='$id_curp'");
                        $fila=mysqli_fetch_row($curp);
                        $micadena=$fila[0];
                        
                        for($i=0;$i<strlen($micadena);$i++){
                            
                            echo "<td>".$micadena[$i]."</td>";
                            
                        }
                        
                    }
                  
                  mysqli_close($conexion)
                ?>
                
      
                
                
            </tr>
            
        </table>
        <section class="imagenes">
            <img src="imagenes/fondo1.jpg" alt="" class="img1">
            <img src="imagenes/fondo2.jpg" alt="">
            
        </section>
    </div>
    
    <footer>
        <div class="botones">
        <button type="submit">Volver a consultar curp</button>
        </div>
        
        <section class="redes">
            <h1>Redes sociales</h1>
            <div class="iconos">
            <a href="facebook.com" class="icon-facebook"></a>
            <a href="twitter.com" class="icon-twitter"></a>
            <a href="instagram.com" class="icon-instagram"></a>
            <a href="whatsapp.com" class="icon-whatsapp"></a>
            </div>
            
            
            
            
            
            
            
        </section>
        
        
    </footer>
    
    
</body>
</html>