<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RESULTADOS CURP</title>
    <link rel="stylesheet" href="estilos2.css">
</head>
<body>
   
    <?php
    /*PROCESAR LOS DATOS*/
    $nombres=$_POST['nombres'];
    $apellido1=$_POST['apellido1'];
    $apellido2=$_POST['apellido2'];
    $genero=$_POST['genero'];
    $dia=$_POST['dia'];
    $mes=$_POST['mes'];
    $anio=$_POST['anio'];
    $dia=$_POST['dia'];
    $entidad=$_POST['enti'];
    $correo=$_POST['correo'];
    $var=0;
    $nombres=strtoupper($nombres);
    $i=strlen($nombres);
    $apellido1=strtoupper($apellido1);
    $apellido2=strtoupper($apellido2);
    $parte1='';

    for($i=0;$i<strlen($apellido1);$i++){
        if($var<2){
            if($apellido1[$i]=='A' || $apellido1[$i]=='E' || $apellido1[$i]=='I' || $apellido1[$i]=='O' || $apellido1[$i]=='U'){
                $parte1=$parte1.$apellido1[$i];
                $var=$var+1;
            }
        }else{
            break;
        }
    }
    $parte1=$parte1.$apellido2[0].$nombres[0];
    $parte2=$anio[2].$anio[3].$mes.$dia;
    $parte3='';
    for($i=1;$i<strlen($apellido1);$i++){
        if ($apellido1[$i]=='A' || $apellido1[$i]=='E' || $apellido1[$i]=='I' || $apellido1[$i]=='O' || $apellido1[$i]=='U'){
            /*Es una VOCAL*/
        }else{
            $parte3=$parte3.$apellido1[$i];
            break;
        }
    }
    for($i=1;$i<strlen($apellido2);$i++){
       if ($apellido2[$i]=='A' || $apellido2[$i]=='E' || $apellido2[$i]=='I' || $apellido2[$i]=='O' || $apellido2[$i]=='U'){
           /*Es una VOCAL*/
        }else{
            $parte3=$parte3.$apellido2[$i];
            break;
        }
    }
    for($i=1;$i<strlen($nombres);$i++){
        if ($nombres[$i]=='A' || $nombres[$i]=='E' || $nombres[$i]=='I' || $nombres[$i]=='O' || $nombres[$i]=='U'){
            /*Es una VOCAL*/
        }else{
            $parte3=$parte3.$nombres[$i];
            break;
        }
    }
    $curp=$parte1.$parte2.$genero.$entidad.$parte3.'0'.rand(1,9);
    /*echo "La CURP del C. ".$nombres." ".$apellido1." ".$apellido2." es: ".$curp;*/
    switch ($mes) {
        case '01':
            $mesle='enero';
            break;
        case '02':
            $mesle='febrero';
            break;
        case '03':
            $mesle='marzo';
            break;
        case '04':
            $mesle='abril';
            break;
        case '05':
            $mesle='mayo';
            break;
        case '06':
            $mesle='junio';
            break;
        case '07':
            $mesle='julio';
            break;
        case '08':
            $mesle='agosto';
            break;
        case '09':
            $mesle='septiembre';
            break;
        case '10':
            $mesle='octubre';
            break;
        case '11':
            $mesle='noviembre';
            break;
        case '12':
            $mesle='diciembre';
            break;
    }
    echo $nombres." ".$apellido1." ".$apellido2.", nació en ".$entidad.", el ".$dia." de ".$mesle." de ".$anio.".";
    
    /*ENVIAR LA CURP POR CORREO*/
    $envio=mail($correo,"Consulta de CURP",$curp);
    if($envio){
        echo "<h1>Se envió el correo correctamente</h1>";
    }else{
        echo "<h1>No se envió el correo correctamente</h1>";
    }
    
    /*CONECTAR A LA BASE DE DATOS*/
    /*/$servidor="localhost";
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
    echo "La conexion se realizo correctamente a la base de datos";
    $query="INSERT INTO curpweb (nombres,p_apellido,s_apellido,genero,dia,mes,anio,entidad,correo,curp)VALUES ('$nombres','$apellido1','$apellido1','$genero','$dia','$mes','$anio','$entidad','$correo','$curp')";
    mysqli_query($conexion,$query);
    */
    ?>
    
</body>
</html>
