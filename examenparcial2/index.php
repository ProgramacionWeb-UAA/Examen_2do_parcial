<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario Examen</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>CURP</h1>
    <p>Formulario para tramite de la CURP</p>
    <form action="procesar.php" method="post" class="contact_form">
        <div>
            <ul>
                <li>
                    <h2>Formulario CURP</h2>
                    <span class="required_notification">*Datos Requeridos</span>
                </li>
                
                <!--**********************************************************************************-->
                <li>
                   <label for="names">Nombres:</label>
                   <input type="text" name="nombres" id="nombres" placeholder="Escribe tu(s) nombre(s)" required>
                   <!--<span class="form_hint">Formato correcto: "Nombre(s)"</span>-->
                </li>
                <li>
                    <label for="primerapellido">Primer Apellido:</label>
                    <input type="text" name="apellido1" id="primerapellido" placeholder="Escribe tu primer apellido" required>
                    <!--<span class="form_hint">Formato correcto: "Primer Apellido"</span>-->
                </li>
                <li>
                    <label for="segundoapellido">Segundo Apellido:</label>
                    <input type="text" name="apellido2" id="segundoapellido" placeholder="Escribe tu segundo apellido" required>
                    <!--<span class="form_hint">Formato correcto: "Segundo Apellido"</span>-->
                </li>
                
                <!--**********************************************************************************-->
                <li>
                <label for="genero">Genero:</label>
                <input type="radio" name="genero" value="Hombre">Hombre <br>
                <input type="radio" name="genero" value="Mujer">Mujer <br>
                </li>
                <!--**********************************************************************************-->
                
                <li>
                    <label for="fechanacimiento">Fecha de Nacimiento:</label>
                    <select name="dia" id="dia">
                           <option>Dias de la semana </option>
                           <option value="lunes">Lunes</option>
                           <option value="martes">Martes</option>
                           <option value="miercoles">Miercoles</option>
                           <option value="jueves">Jueves</option>
                           <option value="viernes">Viernes</option>
                           <option value="sabado">Sabado</option>
                           <option value="domingo">Domingo</option>
                       </select>
                    <select name="mes" id="mes">
                           <option>Meses del Año </option>
                           <option value="enero">Enero</option>
                           <option value="febrero">Febrero</option>
                           <option value="marzo">Marzo</option>
                           <option value="abril">Abril</option>
                           <option value="mayo">Mayo</option>
                           <option value="junio">Junio</option>
                           <option value="julio">Julio</option>
                           <option value="agosto">Agosto</option>
                           <option value="septiembre">Septiembre</option>
                           <option value="octubre">Octubre</option>
                           <option value="noviembre">Noviembre</option>
                           <option value="diciembre">Diciembre</option>
                       </select>
                    <select name="año" id="año">
                           <option value="0">Año</option>
                           <?php
                               for($i=1990;$i<=2021;$i++){
                               echo '<option value="'.$i.'">'.$i.'</option>';
                               }
                           ?>
                       </select>
                </li>
                <!--**********************************************************************************--> 
                <li>
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
                </li>
                <!--**********************************************************************************-->
                
                <li>
                    <label for="correo">Correo Electrónico:</label>
                     <input type="text" name="correo" id="correo" placeholder="Escriba aqui su correo electrónico" required>
                </li>
                
                <!--**********************************************************************************-->
                 <!--HOLAAA-->
            </ul>
        </div>
    </form>
</body>
</html>