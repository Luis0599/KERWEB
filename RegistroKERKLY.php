<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css" />
    <link rel="stylesheet" href="estilosFoot.css">
    <title>KERKLY</title>
</head>

<body>
    <header>
        <div id="brand">KERKLY</div>
        <nav>
            <ul>
                <li><a href="inicio.html">Inicio</a></li>
                <li><a href="index.html" id="Registro">Registro</a></li>
                <li><a href="/about">Nosotros</a></li>
                <!--<li id="login"><a href="/login">Login</a></li>-->
                <!--<li id="signup"><a href="/signup">Signup</a></li>-->
            </ul>


        </nav>
        <div id="hamburger-icon" onclick="toggleMobileMenu(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
            <ul class="mobile-menu">
                <hr id="linea">
                <li><a href="index.html">Informacion Personal</a></li>
                <li><a href="InfoDom.html">Informacion Domicilio</a></li>
                <li><a href="Oficios.html">Oficio</a></li>
                <li><a href="documentosEscaneados.html">Documentos Escaneados</a></li>
                <li><a href="creacionCuenta.html">Creacion de la cuenta</a></li>
                <!-- <li id="login"><a href="/login">Login</a></li>-->
                <!-- <li id="signup"><a href="/signup">Signup</a></li>-->
                <hr id="linea">
            </ul>
        </div>
    </header>
    <script src="funciones.js"></script>


    <div id="curvaE">
        <section class="curved">
            <nav id="titulo-form-centrar">
                <h1 id="titulo-form">Formulario Registro</h1>
            </nav>

        </section>
    </div>


    <!-- visible en movil -->
    <div id="TituloO">
        <section class="curved">
            <nav id="titulo-form-centrar">
                <h1 id="titulo-form">Informacion personal</h1>
            </nav>

        </section>
    </div>

    <form data-toggle="validator" action="Registrar.php" method="POST" enctype="multipart/form-data">

        <!-- FORMULARIO 1  -->
        <fieldset id="Formulario1">
            <nav id="form">

                <!-- Text input -->
                <script src="validarSoloTexto.js"></script>
                <div class="form-outline mb-3">
                    <input type="text" id="nombre" name="Nombre" autocapitalize="words" oninput="validarTextoEntrada(this, '[a-záéíóúñ ]')" class="form-control" placeholder="---" />
                    <label class="form-label" for="form1">Nombre(s)</label> <label for="form1" id="campoO">*</label>
                    <pre id="resultadoTexto"></pre>
                </div>
                <div class="form-outline mb-3">
                    <input type="text" id="APaterno" name="ApellidoP" autocapitalize="words" oninput="validarTextoEntrada(this, '[a-záéíóúñ ]')" class="form-control" placeholder="---" />
                    <label class="form-label" for="form1">Apellido Paterno</label> <label for="form1" id="campoO">*</label>
                </div>
                <div class="form-outline mb-3">
                    <input type="text" id="AMaterno" name="ApellidoM" autocapitalize="words" oninput="validarTextoEntrada(this, '[a-záéíóúñ ]')" class="form-control" placeholder="---" />
                    <label class="form-label" for="form1">Apellido Materno</label> <label for="form1" id="campoO">*</label>
                </div>
                <!-- Text input -->
                <script src="limitacionCurp.js"></script>
                <link rel="stylesheet" href="estiloLimitacionDatos.css">
                <div class="form-outline mb-3">
                    <input type="text" id="Curp" name="Curp" oninput="validarInput(this)" class="form-control" placeholder="---" />
                    <label class="form-label" for="form1">CURP</label> <label for="form1" id="campoO">*</label>
                    <pre id="resultado"></pre>
                </div>
                <!-- Email input -->
                <div class="form-outline mb-3">
                    <input type="date" id="FechaN" name="FechaN" class="form-control" />
                    <label class="form-label" for="form1">Fecha de Nacimiento</label> <label for="form1" id="campoO">*</label>
                </div>
                <!-- Number input -->
                <div class="form-outline mb-3">
                    <select name="selectGenero[]" id="Genero" class="form-control">
                        <option value="Masculino" selected>Masculino</option>
                        <option value="Femenino">Femenino</option>
                        <option value="Otro">Otro</option>
                    </select>
                    <label class="form-label" for="form1">Genero</label> <label for="form1" id="campoO">*</label>
                </div>
                <!-- Message input -->
                <div class="form-outline mb-3">
                    <input type="text" name="Nacionalidad" id="Nacionalidad" autocapitalize="words" oninput="validarTextoEntrada(this, '[a-záéíóúñ ]')" class="form-control" placeholder="---" />
                    <label class="form-label" for="form1">Nacionalidad</label> <label for="form1" id="campoO">*</label>
                </div>
                <!-- Number input -->
                <div class="form-outline mb-3">
                    <select name="selectEstadoCivil[]" id="ECivil" class="form-control">
                        <option value="soltero" selected>Soltero</option>
                        <option value="casado">Casado</option>
                        <option value="otro">Otro</option>
                    </select>
                    <label class="form-label" for="form1">Estado Civil</label> <label for="form1" id="campoO">*</label>
                </div>
                <!-- Email input -->
                <script src="validarEmail.js"></script>
                <div class="form-outline mb-3">
                    <input type="text" name="email" id="CElectronico" class="form-control" placeholder="EmpleadoId@kerkly.com" />
                    <label class="form-label" for="form1">Correo Electronico</label> <label for="form1" id="campoO">*</label>
                    <span id="emailOK"></span>
                </div>
                <!-- Email input -->
                <div class="form-outline mb-3">
                    <input type="number" name="Telefonofijo" id="Tfijo" maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="form-control" placeholder="747-47-1-68-92" />
                    <label class="form-label" for="form1">Teléfono fijo</label> <label for="form1" id="campoO">*</label>
                </div>
                <!-- Email input -->
                <div class="form-outline mb-3">
                    <input type="number" name="TelefonoMovil" id="Tmovil" maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="form-control" placeholder="74-71-25-85-96" />
                    <label class="form-label" for="form1">Teléfono movil</label> <label for="form1" id="campoO">*</label>
                </div>
                <div>
                    <h1 id="camposO">* Campos obligatorios</h1>
                </div>
                <!-- Submit button -->
                <div id="botondiv">
                    <!-- <input id="botonGuardar" type="submit" value="Siguiente" class="btn btn-primary btn-block mb-3"
                        onclick="validar();">
                    barra de progreso -->
                    <!--<button onclick="location.href='InfoDom.html'"> Siguiente</button>-->
                </div>



            </nav>
        </fieldset>


        <!-- OCULTAR FORMULARIO 1  -->
        <nav id="form2">
            <!-- Ocultamos el formulario al dar en siguiente -->
            <script src="ocultarForm.js"></script>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="validar.js"></script>
            <script src="ocultarValidar.js"></script>
            <div id="botondiv">
                <button type="button" id="botonGuardar" onclick="check();">Siguiente</button>
                
            </div>
        </nav>


        <!-- FORMULARIO 2 -->
        <fieldset id="Formulario2">
            <nav id="form">

                <!-- Text input -->
                <script src="validarSoloTexto.js"></script>
                <div class="form-outline mb-3">
                    <input type="text" id="estado" name="Estado" class="form-control" placeholder="---" />
                    <label class="form-label" for="form1">Estado</label> <label for="form1" id="campoO">*</label>
                </div>
                <div class="form-outline mb-3">
                    <input type="text" id="municipio" name="Municipio" class="form-control" placeholder="---" />
                    <label class="form-label" for="form1">Municipio</label> <label for="form1" id="campoO">*</label>
                </div>
                <div class="form-outline mb-3">
                    <input type="text" id="localidad" name="Localidad" class="form-control" placeholder="---" />
                    <label class="form-label" for="form1">Localidad</label> <label for="form1" id="campoO">*</label>
                </div>
                <!-- Text input -->
                <div class="form-outline mb-3">
                    <input type="text" id="codigoP" name="codigoP" class="form-control" placeholder="---" />
                    <label class="form-label" for="form1">Código postal</label> <label for="form1" id="campoO">*</label>
                </div>
                <!-- Text input -->
                <div class="form-outline mb-3">
                    <input type="text" id="colonia" name="Colonia" class="form-control" placeholder="---" />
                    <label class="form-label" for="form1">Colonia</label> <label for="form1" id="campoO">*</label>
                </div>
                <!-- Text input -->
                <div class="form-outline mb-3">
                    <input type="text" id="calle" name="calle" class="form-control" placeholder="---" />
                    <label class="form-label" for="form1">Calle</label> <label for="form1" id="campoO">*</label>
                </div>
                <!-- Text input -->
                <div class="form-outline mb-3">
                    <input type="number" id="NoExt" name="NoExt" maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="form-control" placeholder="232" />
                    <label class="form-label" for="form1">Número exterior</label> <label for="form1" id="campoO">*</label>
                </div>
                <!-- Text input -->
                <div class="form-outline mb-3">
                    <input type="number" id="NoInt" name="NoInt" maxlength="3" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="form-control" placeholder="232" />
                    <label class="form-label" for="form1">Número interior</label>
                </div>
                <div>
                    <h1 id="camposO">* Campos obligatorios</h1>
                </div>
                <!-- Submit button -->
                <!-- Submit button -->
                <!--<div id="botondiv"> <a id="botonGuardar" class="btn btn-primary btn-block mb-3"
                       href="Oficios.html">Guardar</a> </div>-->
                <!--<input id="botonGuardar" type="submit" value="Siguiente" class="btn btn-primary btn-block mb-3">-->

            </nav>
        </fieldset>

        <!-- OCULTAR FORMULARIO 2  -->
        <nav id="form3">
            <!-- Ocultamos el formulario al dar en siguiente -->
            <div id="botondiv">
                <script src="ocultarForm.js"></script>
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script src="validar.js"></script>
                <script src="ocultarValidar.js"></script>
                <!--<button type="button" id="botonGuardar" onclick="ocultarFommulario2();">Siguiente</button> -->
                <!-- <button type="submit" value="Siguiente" class="btn btn-primary btn-block mb-3" onclick="validar();">Guardar</button>-->
                <!-- <input id="botonGuardar" type="submit" value="Siguiente" class="btn btn-primary btn-block mb-3">-->
                <!--<button onclick= "location.href='prueba.html'">HOLIWIS</button>-->
                <button type="button" id="botonGuardar" onclick="check2();">Siguiente</button>
               <!-- <button type="button" id="botonRegresar" onclick="volver1();">Atras</button>-->
            </div>
        </nav>


        <!-- FORMULARIO 3 -->
        <fieldset id="Formulario3">
            <nav id="form">
                <!-- Text input -->
                <div class="form-outline mb-3">
                    <input type="text" id="NoOficio" name="NoOficio" class="form-control" placeholder="---" />
                    <label class="form-label" for="form1">Numero de oficio</label> <label for="form1" id="campoO">*</label>
                </div>
                <!--<div class="form-outline mb-3">
                    <input type="text" id="Oficio" name="oficio" class="form-control" placeholder="---" />
                    <label class="form-label" for="form1">Oficio</label> <label for="form1" id="campoO">*</label>
                </div>-->

                <div id="selectOficios" class="form-outline mb-3">
                    <label> 
                        <select name="selectOficios[]" id="oficios" class="form-control">
                            <?php 
                                include_once "conexionDB.php";
                                $consultaOficios="SELECT oficios.nombreO from oficios";
                                $ejecutar=mysqli_query($con,$consultaOficios) or die(mysqli_error($con));
                            ?>
                            <?php foreach ($ejecutar as $opciones):?>
                                <option value="<?php echo $opciones['nombreO']?>"><?php echo $opciones['nombreO']?></option>
                            <?php endforeach?>
                        </select>
                         Seleccione oficio: 
                    </label><label for="form1" id="campoO">*</label>

                    
                </div>


                <div class="form-outline mb-3">
                    <input type="number" id="telNegocio" name="telNegocio" maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="form-control" placeholder="74-71-25-85-96" />
                    <label class="form-label" for="form1">Telefono de negocio</label> <label for="form1" id="campoO">*</label>
                </div>

                <div id="referencias">
                    <h1 id="textReferencias"> -- Referencias --</h1>
                </div>

                <div class="form-outline mb-3">
                    <label class="form-label" for="form1">Referencias de trabajo (1): </label> <label for="form1" id="campoO">*</label>
                    <span id="alineador3"></span>
                    <a class="css-button">
                        <span class="css-button-icon"><svg width="21" height="16" viewBox="2 2 16 16"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.887 8.2l-.964-.165A2.5 2.5 0 105.5 13H8v1H5.5a3.5 3.5 0 11.59-6.95 5.002 5.002 0 119.804 1.98A2.501 2.501 0 0115.5 14H12v-1h3.5a1.5 1.5 0 00.237-2.982L14.7 9.854l.216-1.028a4 4 0 10-7.843-1.587l-.185.96z" />
                                <path fill-rule="evenodd"
                                    d="M7 10.854a.5.5 0 00.707 0L10 8.56l2.293 2.293a.5.5 0 00.707-.707L10.354 7.5a.5.5 0 00-.708 0L7 10.146a.5.5 0 000 .708z"
                                    clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M10 8a.5.5 0 01.5.5v8a.5.5 0 01-1 0v-8A.5.5 0 0110 8z"
                                    clip-rule="evenodd" />
                            </svg></span>
                        <!-- Text input -->
                        <!--<span id="refTrabajo1" name="RefTrabajo1" class="css-button-text">Cargar Archivo</span>-->
                        <input type="file" name="ReferenciaTrabajo1" id="ReferenciaTrabajo1">
                    </a>
                </div>

                <div class="form-outline mb-3">
                    <label class="form-label" for="form1">Referencias de trabajo (2):</label> <label for="form1" id="campoO">*</label>
                    <span id="alineador2"></span>
                    <a class="css-button">
                        <span class="css-button-icon"><svg width="16" height="16" viewBox="2 2 16 16"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.887 8.2l-.964-.165A2.5 2.5 0 105.5 13H8v1H5.5a3.5 3.5 0 11.59-6.95 5.002 5.002 0 119.804 1.98A2.501 2.501 0 0115.5 14H12v-1h3.5a1.5 1.5 0 00.237-2.982L14.7 9.854l.216-1.028a4 4 0 10-7.843-1.587l-.185.96z" />
                                <path fill-rule="evenodd"
                                    d="M7 10.854a.5.5 0 00.707 0L10 8.56l2.293 2.293a.5.5 0 00.707-.707L10.354 7.5a.5.5 0 00-.708 0L7 10.146a.5.5 0 000 .708z"
                                    clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M10 8a.5.5 0 01.5.5v8a.5.5 0 01-1 0v-8A.5.5 0 0110 8z"
                                    clip-rule="evenodd" />
                            </svg></span>
                            <input type="file" name="ReferenciaTrabajo2" id="ReferenciaTrabajo2">
                    </a>

                </div>

                <div class="form-outline mb-3">
                    <label class="form-label" for="form1">Referencias familiar:</label> <label for="form1" id="campoO">*</label>

                    <span id="alineador1"></span>
                    <a class="css-button">
                        <span class="css-button-icon"><svg width="16" height="16" viewBox="2 2 16 16"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.887 8.2l-.964-.165A2.5 2.5 0 105.5 13H8v1H5.5a3.5 3.5 0 11.59-6.95 5.002 5.002 0 119.804 1.98A2.501 2.501 0 0115.5 14H12v-1h3.5a1.5 1.5 0 00.237-2.982L14.7 9.854l.216-1.028a4 4 0 10-7.843-1.587l-.185.96z" />
                                <path fill-rule="evenodd"
                                    d="M7 10.854a.5.5 0 00.707 0L10 8.56l2.293 2.293a.5.5 0 00.707-.707L10.354 7.5a.5.5 0 00-.708 0L7 10.146a.5.5 0 000 .708z"
                                    clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M10 8a.5.5 0 01.5.5v8a.5.5 0 01-1 0v-8A.5.5 0 0110 8z"
                                    clip-rule="evenodd" />
                            </svg></span>
                            <input type="file" name="ReferenciaFamiliar" id="ReferenciaFamiliar">
                    </a>

                </div>

                <div>
                    <h1 id="camposO">* Campos obligatorios</h1>
                </div>
                <!-- Submit button -->
                <!-- Submit button -->
                <!--<div id="botondiv"> <a id="botonGuardar" class="btn btn-primary btn-block mb-3" href="documentosEscaneados.html">Guardar</a> </div>-->


            </nav>
        </fieldset>

        <!-- OCULTAR FORMULARIO 3  -->
        <nav id="form4">
            <!-- Ocultamos el formulario al dar en siguiente -->
            <div id="botondiv">
                <script src="ocultarForm.js"></script>
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script src="validar.js"></script>
                <!--<button type="button" id="botonGuardar" onclick="ocultarFommulario2();">Siguiente</button> -->
                <!-- <button type="submit" value="Siguiente" class="btn btn-primary btn-block mb-3" onclick="validar();">Guardar</button>-->
                <!-- <input id="botonGuardar" type="submit" value="Siguiente" class="btn btn-primary btn-block mb-3">-->
                <!--<button onclick= "location.href='prueba.html'">HOLIWIS</button>-->
                <button type="button" id="botonGuardar" onclick="check3();">Siguiente</button>

            </div>
        </nav>


        <!-- FORMULARIO 4 -->
        <fieldset id="Formulario4">
            <nav id="form">
                <!-- Text input -->

                <div class="form-outline mb-3">
                    <label class="form-label" for="form1">Foto: </label> <label for="form1" id="campoO">*</label>
                    <span id="alineador11"></span>
                    <a class="css-button">
                        <span class="css-button-icon"><svg width="16" height="16" viewBox="2 2 16 16"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.887 8.2l-.964-.165A2.5 2.5 0 105.5 13H8v1H5.5a3.5 3.5 0 11.59-6.95 5.002 5.002 0 119.804 1.98A2.501 2.501 0 0115.5 14H12v-1h3.5a1.5 1.5 0 00.237-2.982L14.7 9.854l.216-1.028a4 4 0 10-7.843-1.587l-.185.96z" />
                                <path fill-rule="evenodd"
                                    d="M7 10.854a.5.5 0 00.707 0L10 8.56l2.293 2.293a.5.5 0 00.707-.707L10.354 7.5a.5.5 0 00-.708 0L7 10.146a.5.5 0 000 .708z"
                                    clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M10 8a.5.5 0 01.5.5v8a.5.5 0 01-1 0v-8A.5.5 0 0110 8z"
                                    clip-rule="evenodd" />
                            </svg></span>
                        <span id="foto" class="css-button-text">Cargar Archivo</span>
                        <input type="file" name="fotoKerkly">
                    </a>
                </div>

                <div class="form-outline mb-3">
                    <label class="form-label" for="form1">INE:</label> <label for="form1" id="campoO">*</label>
                    <span id="alineador22"></span>
                    <a class="css-button">
                        <span class="css-button-icon"><svg width="16" height="16" viewBox="2 2 16 16"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.887 8.2l-.964-.165A2.5 2.5 0 105.5 13H8v1H5.5a3.5 3.5 0 11.59-6.95 5.002 5.002 0 119.804 1.98A2.501 2.501 0 0115.5 14H12v-1h3.5a1.5 1.5 0 00.237-2.982L14.7 9.854l.216-1.028a4 4 0 10-7.843-1.587l-.185.96z" />
                                <path fill-rule="evenodd"
                                    d="M7 10.854a.5.5 0 00.707 0L10 8.56l2.293 2.293a.5.5 0 00.707-.707L10.354 7.5a.5.5 0 00-.708 0L7 10.146a.5.5 0 000 .708z"
                                    clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M10 8a.5.5 0 01.5.5v8a.5.5 0 01-1 0v-8A.5.5 0 0110 8z"
                                    clip-rule="evenodd" />
                            </svg></span>
                        <span id="ine" class="css-button-text">Cargar Archivo</span>
                        <input type="file" name="INEKerkly">
                    </a>

                </div>

                <div class="form-outline mb-3">
                    <label class="form-label" for="form1">C.U.R.P:</label> <label for="form1" id="campoO">*</label>

                    <span id="alineador33"></span>
                    <a class="css-button">
                        <span class="css-button-icon"><svg width="16" height="16" viewBox="2 2 16 16"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.887 8.2l-.964-.165A2.5 2.5 0 105.5 13H8v1H5.5a3.5 3.5 0 11.59-6.95 5.002 5.002 0 119.804 1.98A2.501 2.501 0 0115.5 14H12v-1h3.5a1.5 1.5 0 00.237-2.982L14.7 9.854l.216-1.028a4 4 0 10-7.843-1.587l-.185.96z" />
                                <path fill-rule="evenodd"
                                    d="M7 10.854a.5.5 0 00.707 0L10 8.56l2.293 2.293a.5.5 0 00.707-.707L10.354 7.5a.5.5 0 00-.708 0L7 10.146a.5.5 0 000 .708z"
                                    clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M10 8a.5.5 0 01.5.5v8a.5.5 0 01-1 0v-8A.5.5 0 0110 8z"
                                    clip-rule="evenodd" />
                            </svg></span>
                        <span id="curp" class="css-button-text">Cargar Archivo</span>
                        <input type="file" name="curpKERKLY">
                    </a>

                </div>

                <div class="form-outline mb-3">
                    <label class="form-label" for="form1">Comprobante de domicilio:</label> <label for="form1" id="campoO">*</label>

                    <span id="alineador4"></span>
                    <a class="css-button">
                        <span class="css-button-icon"><svg width="16" height="16" viewBox="2 2 16 16"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.887 8.2l-.964-.165A2.5 2.5 0 105.5 13H8v1H5.5a3.5 3.5 0 11.59-6.95 5.002 5.002 0 119.804 1.98A2.501 2.501 0 0115.5 14H12v-1h3.5a1.5 1.5 0 00.237-2.982L14.7 9.854l.216-1.028a4 4 0 10-7.843-1.587l-.185.96z" />
                                <path fill-rule="evenodd"
                                    d="M7 10.854a.5.5 0 00.707 0L10 8.56l2.293 2.293a.5.5 0 00.707-.707L10.354 7.5a.5.5 0 00-.708 0L7 10.146a.5.5 0 000 .708z"
                                    clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M10 8a.5.5 0 01.5.5v8a.5.5 0 01-1 0v-8A.5.5 0 0110 8z"
                                    clip-rule="evenodd" />
                            </svg></span>
                        <span id="comprobanteDomicilio" class="css-button-text">Cargar Archivo</span>
                        <input type="file" name="comprobanteDomicilio">
                    </a>
                </div>

                <div class="form-outline mb-3">
                    <label class="form-label" for="form1">Certificado medico:</label> <label for="form1" id="campoO">*</label>

                    <span id="alineador5"></span>
                    <a class="css-button">
                        <span class="css-button-icon"><svg width="16" height="16" viewBox="2 2 16 16"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.887 8.2l-.964-.165A2.5 2.5 0 105.5 13H8v1H5.5a3.5 3.5 0 11.59-6.95 5.002 5.002 0 119.804 1.98A2.501 2.501 0 0115.5 14H12v-1h3.5a1.5 1.5 0 00.237-2.982L14.7 9.854l.216-1.028a4 4 0 10-7.843-1.587l-.185.96z" />
                                <path fill-rule="evenodd"
                                    d="M7 10.854a.5.5 0 00.707 0L10 8.56l2.293 2.293a.5.5 0 00.707-.707L10.354 7.5a.5.5 0 00-.708 0L7 10.146a.5.5 0 000 .708z"
                                    clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M10 8a.5.5 0 01.5.5v8a.5.5 0 01-1 0v-8A.5.5 0 0110 8z"
                                    clip-rule="evenodd" />
                            </svg></span>
                        <span id="certificadoMedico" class="css-button-text">Cargar Archivo</span>
                        <input type="file" name="certificadoMedico">
                    </a>
                </div>

                <div class="form-outline mb-3">
                    <label class="form-label" for="form1">Carta de antecendentes penales:</label> <label for="form1" id="campoO">*</label>

                    <span id="alineador6"></span>
                    <a class="css-button">
                        <span class="css-button-icon"><svg width="16" height="16" viewBox="2 2 16 16"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.887 8.2l-.964-.165A2.5 2.5 0 105.5 13H8v1H5.5a3.5 3.5 0 11.59-6.95 5.002 5.002 0 119.804 1.98A2.501 2.501 0 0115.5 14H12v-1h3.5a1.5 1.5 0 00.237-2.982L14.7 9.854l.216-1.028a4 4 0 10-7.843-1.587l-.185.96z" />
                                <path fill-rule="evenodd"
                                    d="M7 10.854a.5.5 0 00.707 0L10 8.56l2.293 2.293a.5.5 0 00.707-.707L10.354 7.5a.5.5 0 00-.708 0L7 10.146a.5.5 0 000 .708z"
                                    clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M10 8a.5.5 0 01.5.5v8a.5.5 0 01-1 0v-8A.5.5 0 0110 8z"
                                    clip-rule="evenodd" />
                            </svg></span>
                        <span id="antecedentesPenales" class="css-button-text">Cargar Archivo</span>
                        <input type="file" name="cartaAntePenales">
                    </a>
                </div>

                <div class="form-outline mb-3">
                    <label class="form-label" for="form1">Registro SAT:</label> <label for="form1" id="campoO">*</label>

                    <span id="alineador7"></span>
                    <a class="css-button">
                        <span class="css-button-icon"><svg width="16" height="16" viewBox="2 2 16 16"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.887 8.2l-.964-.165A2.5 2.5 0 105.5 13H8v1H5.5a3.5 3.5 0 11.59-6.95 5.002 5.002 0 119.804 1.98A2.501 2.501 0 0115.5 14H12v-1h3.5a1.5 1.5 0 00.237-2.982L14.7 9.854l.216-1.028a4 4 0 10-7.843-1.587l-.185.96z" />
                                <path fill-rule="evenodd"
                                    d="M7 10.854a.5.5 0 00.707 0L10 8.56l2.293 2.293a.5.5 0 00.707-.707L10.354 7.5a.5.5 0 00-.708 0L7 10.146a.5.5 0 000 .708z"
                                    clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M10 8a.5.5 0 01.5.5v8a.5.5 0 01-1 0v-8A.5.5 0 0110 8z"
                                    clip-rule="evenodd" />
                            </svg></span>
                        <span id="regSat" class="css-button-text">Cargar Archivo</span> 
                        <input type="file" name="regSatKERKLY">
                    </a>
                </div>

                <div class="form-outline mb-3">
                    <label class="form-label" for="form1">Comprobante de vacunación:</label> <label for="form1" id="campoO">*</label>

                    <span id="alineador8"></span>
                    <a class="css-button">
                        <span class="css-button-icon"><svg width="16" height="16" viewBox="2 2 16 16"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.887 8.2l-.964-.165A2.5 2.5 0 105.5 13H8v1H5.5a3.5 3.5 0 11.59-6.95 5.002 5.002 0 119.804 1.98A2.501 2.501 0 0115.5 14H12v-1h3.5a1.5 1.5 0 00.237-2.982L14.7 9.854l.216-1.028a4 4 0 10-7.843-1.587l-.185.96z" />
                                <path fill-rule="evenodd"
                                    d="M7 10.854a.5.5 0 00.707 0L10 8.56l2.293 2.293a.5.5 0 00.707-.707L10.354 7.5a.5.5 0 00-.708 0L7 10.146a.5.5 0 000 .708z"
                                    clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M10 8a.5.5 0 01.5.5v8a.5.5 0 01-1 0v-8A.5.5 0 0110 8z"
                                    clip-rule="evenodd" />
                            </svg></span>
                        <span id="comprobanteVacunacion" class="css-button-text">Cargar Archivo</span>
                        <input type="file" name="comprobanteVacuna">
                    </a>
                </div>

                <div class="form-outline mb-3">
                    <label class="form-label" for="form1">Fotos del domicilio particular:</label> <label for="form1" id="campoO">*</label>

                    <span id="alineador9"></span>
                    <a class="css-button">
                        <span class="css-button-icon"><svg width="16" height="16" viewBox="2 2 16 16"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.887 8.2l-.964-.165A2.5 2.5 0 105.5 13H8v1H5.5a3.5 3.5 0 11.59-6.95 5.002 5.002 0 119.804 1.98A2.501 2.501 0 0115.5 14H12v-1h3.5a1.5 1.5 0 00.237-2.982L14.7 9.854l.216-1.028a4 4 0 10-7.843-1.587l-.185.96z" />
                                <path fill-rule="evenodd"
                                    d="M7 10.854a.5.5 0 00.707 0L10 8.56l2.293 2.293a.5.5 0 00.707-.707L10.354 7.5a.5.5 0 00-.708 0L7 10.146a.5.5 0 000 .708z"
                                    clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M10 8a.5.5 0 01.5.5v8a.5.5 0 01-1 0v-8A.5.5 0 0110 8z"
                                    clip-rule="evenodd" />
                            </svg></span>
                        <span id="fotoDomicilio" class="css-button-text">Cargar Archivo</span>
                        <input type="file" name="fotoDomicilioPart">
                    </a>
                </div>

                <div class="form-outline mb-3">
                    <label class="form-label" for="form1">Fotos del negocio o local:</label> <label for="form1" id="campoO">*</label>

                    <span id="alineador10"></span>
                    <a class="css-button">
                        <span class="css-button-icon"><svg width="16" height="16" viewBox="2 2 16 16"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.887 8.2l-.964-.165A2.5 2.5 0 105.5 13H8v1H5.5a3.5 3.5 0 11.59-6.95 5.002 5.002 0 119.804 1.98A2.501 2.501 0 0115.5 14H12v-1h3.5a1.5 1.5 0 00.237-2.982L14.7 9.854l.216-1.028a4 4 0 10-7.843-1.587l-.185.96z" />
                                <path fill-rule="evenodd"
                                    d="M7 10.854a.5.5 0 00.707 0L10 8.56l2.293 2.293a.5.5 0 00.707-.707L10.354 7.5a.5.5 0 00-.708 0L7 10.146a.5.5 0 000 .708z"
                                    clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M10 8a.5.5 0 01.5.5v8a.5.5 0 01-1 0v-8A.5.5 0 0110 8z"
                                    clip-rule="evenodd" />
                            </svg></span>
                        <span id="fotoNegocio" class="css-button-text">Cargar Archivo</span>
                        <input type="file" name="fotoLocal">
                    </a>
                </div>


                <div>
                    <h1 id="camposO">* Campos obligatorios</h1>
                </div>

            </nav>
        </fieldset>


        <!-- OCULTAR FORMULARIO 4 -->
        <nav id="form5">
            <!-- Ocultamos el formulario al dar en siguiente -->
            <div id="botondiv">
                <script src="ocultarForm.js"></script>
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script src="validar.js"></script>
                <!--<button type="button" id="botonGuardar" onclick="ocultarFommulario2();">Siguiente</button> -->
                <!-- <button type="submit" value="Siguiente" class="btn btn-primary btn-block mb-3" onclick="validar();">Guardar</button>-->
                <!-- <input id="botonGuardar" type="submit" value="Siguiente" class="btn btn-primary btn-block mb-3">-->
                <!--<button onclick= "location.href='prueba.html'">HOLIWIS</button>-->
                <button type="button" id="botonGuardar" onclick="check4();">Siguiente</button>
            </div>
        </nav>

        <!-- FORMULARIO 5 -->
        <fieldset id="Formulario5">
            <nav id="form">

                <!-- Text input -->
                <div class="form-outline mb-3">
                    <input type="password" id="contrasena" class="form-control" placeholder="Password" name="Contrasena"/>
                    <label class="form-label" for="form1">Crear contraseña</label> <label for="form1" id="campoO">*</label>
                </div>



                <!-- Icons by https://heroicons.com/ -->
                <div class="form-outline mb-3">
                    <input type="password" id="contrasenaConfirm" class="form-control" placeholder="Password" data-lpignore="true" name="Contrasena">
                    <label class="form-label" for="form1">Confirmar contraseña</label> <label for="form1" id="campoO">*</label>
                    <!--<svg xmlns="http://www.w3.org/2000/svg" class="input-icon password" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                    <path fill-rule="evenodd"
                        d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                        clip-rule="evenodd" />
                </svg>-->
                </div>

                <div>
                    <h1 id="camposO">* Campos obligatorios</h1>
                </div>
            </nav>
        </fieldset>

        <!-- OCULTAR FORMULARIO 5 -->
        <nav id="form6">
            <!-- Ocultamos el formulario al dar en siguiente -->
            <div id="botondiv">
                <script src="ocultarForm.js"></script>
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script src="validar.js"></script>
                <!--<button type="button" id="botonGuardar" onclick="ocultarFommulario2();">Siguiente</button> -->
                <!-- <button type="submit" value="Siguiente" class="btn btn-primary btn-block mb-3" onclick="validar();">Guardar</button>-->
                <!-- <input id="botonGuardar" type="submit" value="Siguiente" class="btn btn-primary btn-block mb-3">-->
                <!--<button onclick= "location.href='prueba.html'">HOLIWIS</button>-->
                <button type="button" id="botonGuardar" onclick="check5();">Siguiente</button>
            </div>
        </nav>

        <div id="botondiv">
            <h1 id="mostrarLetrero">Listo para mandar el formulario</h1>
            <br>
            <br>
            <input type="submit" value="Guardar" id="botonGuardarFinal">
        </div>

    </form>


    <br>
    <br>
    <br>
    <br>

    <!--Efecto pie de pagina-->
    <footer>
        <svg class="editorial" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax1">
                <use xlink:href="#gentle-wave" x="50" y="3" fill="#2A5E6B" />
                <!--rosa ola-->
            </g>
            <g class="parallax2">
                <use xlink:href="#gentle-wave" x="50" y="0" fill="#EAFBE7" />
                <!--azul ola-->
            </g>
            <g class="parallax3">
                <use xlink:href="#gentle-wave" x="50" y="9" fill="#70F3CC" />
                <!--azul ola-->
            </g>
            <g class="parallax4">
                <use xlink:href="#gentle-wave" x="50" y="6" fill="#70F3CC" />
                <!--blanco ola-->
            </g>

        </svg>

    </footer>
</body>

</html>