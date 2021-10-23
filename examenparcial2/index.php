<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario Examen</title>
    
    <link rel="stylesheet" href="./estilos.css">
</head>
<body>

    
    

   
    <h1>CURP</h1>
    <p>Formulario para tramite de la CURP</p>

    <form action="procesar.php" method="post" class="contact_form">
                <section class="encabezado">
                    <h2>Formulario CURP</h2>
                    <span id="requeridos" class="required_notification">*Datos Requeridos</span>
                </section>
                <!--**********************************************************************************-->
                <div class="contenedor">
                <div class="sec-izq">
                <div class="sec-nombre">
                   <label for="names">Nombres:</label>
                   <input type="text" name="nombres" id="nombres" placeholder="Escribe tu(s) nombre(s)" required>
                   <!--<span class="form_hint">Formato correcto: "Nombre(s)"</span>-->
                    <label for="primerapellido">Primer Apellido:</label>
                    <input type="text" name="apellido1" id="primerapellido" placeholder="Escribe tu primer apellido" required>
                    <!--<span class="form_hint">Formato correcto: "Primer Apellido"</span>-->
               
                    <label for="segundoapellido">Segundo Apellido:</label>
                    <input type="text" name="apellido2" id="segundoapellido" placeholder="Escribe tu segundo apellido" required>
                    <!--<span class="form_hint">Formato correcto: "Segundo Apellido"</span>-->
                
                <!--**********************************************************************************-->

               
                <label id="radio" for="genero">Genero:</label>
                <input id="radio" type="radio" name="genero" value="Hombre">
                <label id="radio" for="">Hombre</label>
                <input id="radio" type="radio" name="genero" value="Mujer">
                <label id="radio" for="">Mujer</label>

           
                

                <!--**********************************************************************************-->
                </div>
                
                <div class="sec-fecha">
                    <label for="fechanacimiento">Fecha de Nacimiento:</label>
                    <select name="dia" id="dia">
                           <option>Dia</option>
                           <?php
                            $num='00';
                               for($i=1;$i<=31;$i++){
                                   if($i<10){
                                       $num='0'.$i;
                                   }else{
                                       $num=$i;
                                   }
                                   echo '<option value="'.$num.'">'.$num.'</option>';
                               }
                           ?>
                       </select>
                    <select name="mes" id="mes">
                           <option>Meses del Año </option>
                           <option value="01">Enero</option>
                           <option value="02">Febrero</option>
                           <option value="03">Marzo</option>
                           <option value="04">Abril</option>
                           <option value="05">Mayo</option>
                           <option value="06">Junio</option>
                           <option value="07">Julio</option>
                           <option value="08">Agosto</option>
                           <option value="09">Septiembre</option>
                           <option value="10">Octubre</option>
                           <option value="11">Noviembre</option>
                           <option value="12">Diciembre</option>
                       </select>
                    <select name="anio" id="anio">
                            <option disabled selected>Año</option>
                           <?php
                               for($i=1950;$i<=2021;$i++){
                               echo '<option value="'.$i.'">'.$i.'</option>';
                               }
                           ?>
                       </select>
                  </div>
                </div>
                <!--**********************************************************************************--> 
                <div class="sec-der">
                   <div class="sec-other">
                  
                    <label for="entidad">Entidad Federativa:</label>
                     <select name="enti" id="enti">
                          <option disabled selected>-Selecciona una opción-</option>
                           <option value="AS">AGUASCALIENTES</option>
                           <option value="BC">BAJA CALIFORNIA</option>
                           <option value="BS">BAJA CALIFORNIA SUR</option>
                           <option value="CC">CAMPECHE</option>
                           <option value="CL">COAHUILA</option>
                           <option value="CM">COLIMA</option>
                           <option value="CS">CHIAPAS</option>
                           <option value="CH">CHIHUAHUA</option>
                           <option value="DF">DISTRITO FEDERAL</option>
                           <option value="DG">DURANGO</option>
                           <option value="GT">GUANAJUATO</option>
                           <option value="GR">GUERRERO</option>
                           <option value="HG">HIDALGO</option>
                           <option value="JC">JALISCO</option>
                           <option value="MC">MEXICO</option>
                           <option value="MN">MICHOACAN</option>
                           <option value="MS">MORELOS</option>
                           <option value="NT">NAYARIT</option>
                           <option value="NL">NUEVO LEON</option>
                           <option value="OC">OAXACA</option>
                           <option value="PL">PUEBLA</option>
                           <option value="QT">QUERETARO</option>
                           <option value="QR">QUINTANA ROO</option>
                           <option value="SP">SAN LUIS POTOSI</option>
                           <option value="SL">SINALOA</option>
                           <option value="SR">SONORA</option>
                           <option value="TC">TABASCO</option>
                           <option value="TS">TAMAULIPAS</option>
                           <option value="TL">TLAXCALA</option>
                           <option value="VZ">VERACRUZ</option>
                           <option value="YN">YUCATAN</option>
                           <option value="ZS">ZACATECAS</option>
                       </select>
                <!--**********************************************************************************-->
                
                
                    <label for="correo">Correo Electrónico:</label>
                     <input type="text" name="correo" id="correo" placeholder="Escriba aqui su correo electrónico" required>
                
                </div>
                    </div>
                <div class="botones">
                    <button id="submit" name="enviar" type="submit">Enviar</button>
                    <button id="submit" name="borrar" type="reset">Borrar todo</button>
                </div>
                </div>
                <!--**********************************************************************************-->

             
            

    
    </form>
    
</body>
</html>