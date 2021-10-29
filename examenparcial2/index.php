<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario Examen</title>
    <link href="https://file.myfontastic.com/TgPtxhRgGLiA2k2hxypBJD/icons.css" rel="stylesheet">
    <link rel="stylesheet" href="./estilos.css">
</head>
<body>
    <div class="banda">
        <div class="img1">
            <img src="./imagenes/gob.png" alt="" height="30" width="130">
        </div>
        <p class="texto-banda">SECRETARÍA DE GOBERNACIÓN</p>
        <div class="img2">
            <img src="./imagenes/gob.png" alt="" height="30" width="130">
        </div>
    </div>
    <form action="curp.php" method="post" class="contact_form">
                <section class="encabezado">
                    <b><h2>FORMULARIO CURP</h2></b>
                </section>
                <!--**********************************************************************************-->
                <div class="contenedor">
                <div class="sec-izq">
                <div class="sec-nombre">
                  <div class="label-nombre">
                   <font color="white"><label for="names">Nombres:</label></font>
                   <font color="white"><label for="primerapellido">Primer Apellido:</label></font>
                   <font color="white"><label for="segundoapellido">Segundo Apellido:</label></font>
                   </div>
                   
                   
                   <div class="input-nombre">
                   <input type="text" name="nombres" id="nombres" placeholder="Escribe tu(s) nombre(s)" required>
                   <!--<span class="form_hint">Formato correcto: "Nombre(s)"</span>-->
                    <input type="text" name="apellido1" id="primerapellido" placeholder="Escribe tu primer apellido" required>
                    <!--<span class="form_hint">Formato correcto: "Primer Apellido"</span>-->
               
                    <input type="text" name="apellido2" id="segundoapellido" placeholder="Escribe tu segundo apellido" required>
                    <!--<span class="form_hint">Formato correcto: "Segundo Apellido"</span>-->
                </div>
                </div>
                <!--**********************************************************************************-->

               <div class="genero">
                    <font color="white"><label id="genero" for="genero">Genero:</label></font>
                       <section class="hombre">
                         <input id="radio-hombre" type="radio" name="genero" value="H">
                        <font color="white"><label class="label-hombre" id="radio-hombre" for="">Hombre</label></font>
                    </section>
                       <section class="mujer">
                        <input id="radio-mujer" type="radio" name="genero" value="M" checked>
                        <font color="white"><label class="label-radio" id="radio-mujer" for="">Mujer</label></font>
                        </section>
                    </div>
           
                

                <!--**********************************************************************************-->
            
                
                <div class="sec-fecha">
                    <div class="label-fecha">
                    <font color="white"><label for="fechanacimiento">Fecha de Nacimiento:</label></font>
                    </div>
                    <div class="select-option">
                    <select name="dia" id="dia" required>
                           <option disabled selected>Dia</option>
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
                    <select name="mes" id="mes" required>
                           <option disabled selected>Meses del Año </option>
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
                    <select name="anio" id="anio" required>
                            <option disabled selected>Año</option>
                           <?php
                               for($i=1950;$i<=date("Y");$i++){
                               echo '<option value="'.$i.'">'.$i.'</option>';
                               }
                           ?>
                       </select>
                       </div>
                  </div>
                </div>
                <!--**********************************************************************************--> 
                <div class="sec-der">
                   <div class="sec-other">
                      <div class="label-other">
                     <font color="white"><label for="entidad">Entidad Federativa:</label></font>
                    
                     <font color="white"><label for="correo">Correo Electrónico:</label></font>
                    
                    </div>
                    <div class="select-other">
                     <select name="enti" id="enti" required>
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
                
                
                    
                     <input type="text" name="correo" id="correo" placeholder="Escriba aqui su correo electrónico" required>
                </div>
                </div>
                    
                <div class="botones">
                    <button id="submit" name="enviar" type="submit">Enviar</button>
                    <button id="submit" name="borrar" type="reset">Borrar todo</button>
                </div>
                 <div class="icono">
                    
                    
                    
                    
                </div> 
                 
                </div>
                    
                </div>
                <!--**********************************************************************************-->
                 <!--HOLAAA-->
        <footer class="footer">
            <!--<h1>Redes sociales</h1>-->
            <div class="iconos">
            <a href="https://www.facebook.com" class="icon-facebook"></a>
            <a href="https://www.twitter.com" class="icon-twitter"></a>
            <a href="https://www.instagram.com" class="icon-instagram"></a>
            <a href="https://www.whatsapp.com" class="icon-whatsapp"></a>
            </div>
            
        </footer> 
    </form>
    <div class="frase">
        <b><p class="parrafo">&copy;Ingenieria en Sistemas Computacionales UAA 2021 - Todos los derechos reservados</p></b>
    </div>
</body>
</html>