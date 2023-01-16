<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UCAB Continental</title>
    <link rel="stylesheet" href="styleDashboard.css">
  
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet">
      <?php
        include('control.php');
  ?>
</head>
<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="img/mundo.png">
                    <h2>UCAB <span class = "danger">Continental</span></h2>
                </div>
               
            </div>

            <div class="sidebar">
                <a href="http://127.0.0.1:5500/dashboard.html"  id="btn1" onclick="seleccionar()">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>

                <a href="#" id="btn2" onclick="seleccionar2()" class="polizas-btn active" >
                    <span class="material-icons-sharp" id="icono">person_outline</span>
                    <h3>Pólizas</h3>
                    <span class="material-icons-sharp expand">expand_more</span>
                </a>
             
                        <a href="http://localhost/Pruebas/Vida.php" class="sub-menu showSub">
                            <span class="material-icons-sharp">favorite_border</span>
                            <h5>Vida</h5>
                        </a>

                        <a href="http://localhost/Pruebas/Hogar.php" class="sub-menu showSub">
                            <span class="material-icons-sharp">roofing</span> 
                            <h5>Hogar</h5>
                        </a>

                        <a href="http://localhost/Pruebas/Vehiculo.php" class="sub-menu showSub">
                            <span class="material-icons-sharp">directions_car</span> 
                            <h5>Vehiculo</h5>
                        </a>

                
                <a href="#" id="btn3" onclick="seleccionar3()"  class="siniestros-btn "> 
                    <span class="material-icons-sharp">receipt_long</span>
                    <h3>Siniestros</h3>
                    <span class="material-icons-sharp expand2">expand_more</span>
                </a>

                        <a href="http://localhost/Pruebas/Multa.php" class="sub-menu showSub2">
                            <span class="material-icons-sharp">price_change</span>
                            <h5>Multas</h5>
                        </a>

                        <a href="http://localhost/Pruebas/Accidente.php" class="sub-menu showSub2">
                            <span class="material-icons-sharp">personal_injury</span> 
                            <h5>Accidentes</h5>
                        </a>

                        <a href="http://localhost/Pruebas/AccidenteVehicular.php" class="sub-menu showSub2">
                            <span class="material-icons-sharp">local_fire_department</span> 
                            <h5>Accidente Vehicular</h5>
                        </a>

                       
             
                <a href="#" class="mantenimiento-btn">
                    <span class="material-icons-sharp">settings</span>
                    <h3>Control</h3>
                    <span class="material-icons-sharp expand3">expand_more</span>
                </a>

                        <a href="http://localhost/Pruebas/MantenimientoMultas.php" class="sub-menu showSub3">
                            <span class="material-icons-sharp">price_change</span>
                            <h5>Multas</h5>
                        </a>

                        <a href="http://localhost/Pruebas/MantenimientoAccidentes.php" class="sub-menu showSub3">
                            <span class="material-icons-sharp">personal_injury</span> 
                            <h5>Accidentes</h5>
                        </a>


                <a href="#">
                    <span class="material-icons-sharp">mail_outline</span>
                    <h3>Mensajes</h3>
                    <span class="message-count">26</span>
                </a>

                <a href="#">
                    <span class="material-icons-sharp">inventory</span>
                    <h3>Productos</h3>
                </a>

                <a href="#">
                    <span class="material-icons-sharp">report_gmailerrorred</span>
                    <h3>Reportes</h3>
                </a>

                <a href="#">
                    <span class="material-icons-sharp">settings</span>
                    <h3>Ajustes</h3>
                </a>
            </div>
        </aside>

        <script>
             $('.polizas-btn').click(function(){
             $('aside .sidebar .showSub').toggleClass("show");
             $('aside .sidebar .expand').toggleClass("rotate");
            
           });
           
        </script>

        <script>
             $('.siniestros-btn').click(function(){
             $('aside .sidebar .showSub2').toggleClass("show");
             $('aside .sidebar .expand2').toggleClass("rotate");
            
           });
           
        </script>

        <script>
             $('.mantenimiento-btn').click(function(){
             $('aside .sidebar .showSub3').toggleClass("show");
             $('aside .sidebar .expand3').toggleClass("rotate");
            
           });
           
        </script>

        <!--------------------------------FINAL DEL ASIDE--------------------------->
        
        <main>

            <div class="topPolizas">
                <h1>Póliza Vehiculo</h1>
            </div>
           

            <div class="content">
                
                <div class="tabla-cliente">
                    <h2>Registrar Titular</h2>

                    <table class="content-table" id="tablaTitular">
                    <thead>
                        <tr>
                                                   
                            <th>Cédula</th>
                            <th>Nombre</th>
                            <th><s/th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            
                          
                            
                        </tr>
                   
                        
                    </tbody>
                    
                </table>   
                   
            </div>

                <div class="tabla-vehiculo">
                    <h2>Registrar Vehiculo</h2>

                    <table class="content-table" id="tabla-vehiculo">
                    <thead>
                        <tr>
                                                   
                        <th>Matricula</th>
                        <th>Marca</th> 
                         <th></th> 
                           
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            
                            
                        </tr>
                        
                    </tbody>
                    
                </table> 



                </div>
                
                <div class="form-poliza">
                    <h2>Registrar Poliza</h2>

                    <div class="wrapperVehiculo">
                        
                        <form class="formV" method="post">
                          <h1 class="titleVehiculo">Contrata Vehiculo</h1>
                    
                                        
                          <div class="inputContainer">
                            <input type="number" class="input" placeholder="a" name="id_agente" required>
                            <label for="" class="label">ID Agente</label>
                          </div>
                    
                          <div class="inputContainer">
                            <input type="number" class="input" placeholder="a" name="recargos">
                            <label for="" class="label">Recargos</label>
                          </div>
                    
                          <div class="inputContainer">
                            <input type="number" class="input" placeholder="a" name="descuentos">
                            <label for="" class="label">Descuentos</label>
                          </div>


                            <input type="hidden" id="cedulasTitulares" name="campoTitulares">
                            <input type="hidden" id="cedulasBeneficiarios" name="campoBeneficiarios">
                            <input type="submit" class="submitBtnVehiculo" value="Crear Contrato" onclick="getColumn('tablaTitular','tabla-vehiculo')">
                        </form>

                       
                        
                    </div>

                    <?php 
                        date_default_timezone_set('America/Caracas');
                            if (conectar()){
                                if (!empty($_POST["campoTitulares"]) && !empty($_POST["campoBeneficiarios"]) )
                                contratoVehiculo($_POST["campoTitulares"],$_POST["campoBeneficiarios"] ,$_POST["id_agente"],date('Y/m/d h:i:s a', time()),$_POST["recargos"],$_POST["descuentos"],'Activo',33,20,50,"NULL");
                            }
                        ?>
                    
                     
                   


                </div>



            </div>

            <div class="personas-vidaHogar">
               
                
               <div class="izquierda-vida">
               <h2>Lista de Personas</h2>
                   
                   <div class="buscadorDiv">  

                       <div class="izq">
                      
                       </div>

                       <div class="der">
                           <button class="btnAddClient" onclick="aviso()" id="btnAbrirPopUp"><span class="material-icons-sharp">person_add</span><h4>Agregar Cliente</h4></button>
                           <button class="btnBeneficiario" id="btnAbrirPopUp2"><span class="material-icons-sharp">person_add</span><h4>Agregar Vehiculo</h4></button>
                           <button class="btnTitular2" onclick="agregarTitular()" id="btnTitular"><span class="material-icons-sharp">add_task</span><h4>Titular</h4></button>
                           <span class="material-icons-sharp">search</span>
                           <input type="text" id ="buscarPersona" class="buscador" placeholder="       Cédula..." onkeyup="buscarPersona()" maxlength="8">
                       </div>

                   
                       
                   </div>                             

                   

                       
                         <table class="content-table" id="tablaPersona">
                               <thead>
                                   <tr>                                                   
                                       <th>Cédula</th>
                                       <th>Nombre</th> 
                                       <th>Tipo de Persona</th>                                                   
                                   </tr>
                               </thead>

                               <tbody class="scrollContent">
                                   <?php 
                                       llenarTablaPersonaHogar();                            
                                   ?>
                               </tbody>
                               
                           </table>
                               
                         

                    
                   
                   

               </div>

               <div class="derecha-vida">
                   <h2>Lista de Vehiculos</h2>
                                   
                       <div class="buscadorDiv">  
                           
                               <div class="izq">
                                   
                               </div>

                               <div class="der">
                                   <button class="btnTitular2" onclick="agregarVehiculo()" id="btnTitular"><span class="material-icons-sharp">add_task</span><h4>Vehiculo</h4></button>
                                   <span class="material-icons-sharp">search</span>
                                   <input type="text" id ="buscarMatricula" class="buscador" placeholder="      Matricula..." onkeyup="buscarMatricula()">
                               </div>

                       </div>                          

                               <table class="content-table2" id="tablaVehiculo">
                                       <thead>
                                           <tr>                                                   
                                               <th>Matricula</th>
                                               <th>Marca</th> 
                                               <th>Modelo</th>                                                   
                                           </tr>
                                       </thead>

                                       <tbody>
                                           <?php 
                                               llenarTablaVehiculo();                            
                                           ?>
                                       </tbody>
                                       
                               </table>
           

               </div>                
               
           </div>

            <div class="overlay" id="overlay">
                <div class="signUpFrmPopUp" id="popup">
                    
                    
                    
                    <!---------------------------------------------------->
                    
                        <div class="wrapperPop">
                            <form class="form" method="post" id="formPopUp">
                                <a href="#" id="btn-Cerrar" class="btn-Cerrar"><span class="material-icons-sharp">close</span></a>
                                <h1 class="titlePop">Registrar Cliente</h1>

                                <div class="fechaNacimiento">
                                <h3>Fecha de Nacimiento</h3>
                                <input type="date" class="date" name="fecha-nacimiento" placeholder="Fecha de nacimiento" required>
                                </div>

                                <div class="column">

                                    <div class="left">
                                        
                                    <div class="inputContainer">

                                        <input type="text" class="inputPop" placeholder="a"  name="nombre" required>
                                        <label for="" class="label">Nombre</label>
                                        </div>

                                        <div class="inputContainer">
                                        <input type="text" class="inputPop" placeholder="a"  name="apellido" required>
                                        <label for="" class="label">Apellido</label>
                                        </div>

                                                                           
                                        <div class="inputContainer">
                                        <textarea class="inputPopTextArea" name="direccion" rows="4" cols="50" placeholder="a" required></textarea>
                                         <label for="" class="label">Dirección</label>
                                        </div>                                   


                                    </div>

                                    <div class="right">

                                    <div class="inputContainer">
                                        <input type="text" class="inputPop" placeholder="a"  name="CI" maxlength="8" required>
                                        <label for="" class="label">Cédula de Identidad</label>
                                        </div>

                                        <div class="inputContainer">
                                        <input type="tel" class="inputPop" placeholder="a"  name="telefono" pattern="[0-9]{4}[0-9]{3}[0-9]{4}" maxlength="11" required>
                                        <label for="" class="label">Numero de Teléfono</label>
                                        </div>

                                    
                                        <div class="inputContainer">
                                        <input type="" class="inputPop" placeholder="a"  name="calle" required>
                                        <label for="" class="label">Calle</label>
                                        </div>


                                        <div class="comboBox">

                                            <div class="inputContainer2">            
                                                <?php
                                                llenaCiudad(); 
                                                ?>                
                                            </div>

                                            <div class="inputContainer2">
                                            
                                                <select name="sexo" class="input2" onchange="changeMe(this)" required>
                                                    <option value="" selected disabled hidden>Sexo</option>      
                                                    <option value="M" placeholder="a">M</option>
                                                    <option value="F" placeholder="a">F</option>
                                                    <option value="N/A" placeholder="a">N/A</option>
                                                    <script type="text/javascript">
                                                        function changeMe(sel){
                                                            sel.style.color = '#000';
                                                        }
                                                    </script>                                                
                                                </select>
                                            </div>
                                        </div>   
                                        
                                        
                                       
                                                                  
                                    </div>

                                </div>

                            
                                <input type="submit" class="submitBtnPop" value="Registrar">
                            </form>
                        </div>

                        <?php
                            
                                if (isset($_POST["nombre"],$_POST["apellido"],$_POST["CI"],$_POST["telefono"],$_POST["direccion"],$_POST["calle"],$_POST["sexo"],$_POST["nb_ciudad"],$_POST["fecha-nacimiento"])
                                && !empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["CI"]) && !empty($_POST["telefono"]) && !empty($_POST["direccion"] && !empty($_POST["sexo"]) && !empty($_POST["nb_ciudad"]) && !empty($_POST["fecha-nacimiento"]))){
                                        $id = generarId("persona","idpersona");
                                        registrarPersona($id,$_POST["CI"],$_POST["nombre"], $_POST["telefono"],'Cliente');
                                        registrarCliente($id,$_POST["apellido"],$_POST["nombre"],$_POST["direccion"],$_POST["calle"],$_POST["nb_ciudad"],$_POST["sexo"],$_POST["fecha-nacimiento"],1);
                                    }
                                    
                        ?>
                      
                    <!------------------------HACER LO DE GENERAR ID ALEATORIO ---------------------------->
                </div>
            </div>
            
            <!-------------------------------------------------------------------------------------------------------->

            <div class="overlay" id="overlay2">
                <div class="signUpFrmPopUp" id="popup2">
                    
                    
                    
                    <!---------------------------------------------------->
                    
                        <div class="wrapperPop">
                            <form class="form" method="post" id="formPopUp2">
                                <a href="#" id="btn-Cerrar2" class="btn-Cerrar2"><span class="material-icons-sharp">close</span></a>
                                <h1 class="titlePop2">Registrar Vehiculo</h1>

                                <div class="inputContainer">
                                    <input type="text" class="inputPop" placeholder="a"  name="cedula"  maxlength="8" required>
                                    <label for="" class="label">Cedula del Titular del Vehiculo</label>
                                </div>   

                                <div class="inputContainer">
                                    <input type="text" class="inputPop" placeholder="a"  name="matricula"  maxlength="8" required>
                                    <label for="" class="label">Matricula del Vehiculo</label>
                                </div>   
                                          
                                <div class="inputContainer">
                                    <input type="text" class="inputPop" placeholder="a"  name="marca" required>
                                    <label for="" class="label">Marca del Vehiculo</label>
                                </div>                                

                                <div class="inputContainer">
                                    <input type="text" class="inputPop" placeholder="a"  name="modelo" required>
                                    <label for="" class="label">Modelo del Vehiculo</label>
                                </div>                                                                                                    

                                <div class="inputContainer">
                                    <input type="number" class="inputPop" placeholder="a"  name="annio" required>
                                    <label for="" class="label">Año del Vehiculo</label>
                                </div> 
                                
                                <div class="inputContainer">
                                    <input type="text" class="inputPop" placeholder="a"  name="categoria_vehiculo" required>
                                    <label for="" class="label">Categoria del Vehiculo</label>
                                </div>

                                <div class="inputContainer">
                                    <input type="text" class="inputPop" placeholder="a"  name="tipo_cobertura" required>
                                    <label for="" class="label">Tipo de Cobertura</label>
                                </div>  
                                                           
                                <input type="submit" class="submitBtnPop2" value="Registrar">          
                            </form>
                        </div>

                        <?php
                                if (isset($_POST["matricula"],$_POST["marca"],$_POST["modelo"],$_POST["annio"],$_POST["categoria_vehiculo"],$_POST["tipo_cobertura"])){
                                        $idTipoCobertura = generarId("tipo_cobertura","id_tipo_cobertura");
                                        $idCategoriaVehiculo = generarId("categoria_vehiculo","id_categoria");
                                        registrarCategoriaVehiculo($idCategoriaVehiculo, $_POST["categoria_vehiculo"]);
                                        registrarTipoCobertura($idTipoCobertura, $_POST["tipo_cobertura"]);                                        
                                        registrarVehiculo($_POST["matricula"],$_POST["modelo"],$_POST["annio"],$idCategoriaVehiculo, $idTipoCobertura,$_POST["marca"]);
                                        registrarTitularVehiculo(buscarPersonaPorCI($_POST["cedula"]),$_POST["matricula"]);
                                        
                                        
                                    }
                                       
                        ?>
                      
                    <!------------------------HACER LO DE GENERAR ID ALEATORIO ---------------------------->
                </div>
            </div>


        </main>

        <!------------------------------FIN DEL MAIN----------------------->
       
        <div class="right">
                    <div class="top">
                       
                        <div class="theme-toggler">
                            <span class="material-icons-sharp active">light_mode</span>
                            <span class="material-icons-sharp">dark_mode</span>
                        </div>
        
                        <div class="profile">
                            <div class="info">
                                <p>Hey, <b>Daniel</b></p>
                                <small class = "text-muted">Admin</small>
                            </div>
                            <div class="profile-photo">
                                <img src="img/user2.jpg">
                            </div>
                        </div>
                    </div>
        
                    <!---FINAL DEL TOP-->
               
        </div>
  

    </div>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>
    <script src="./dashboard.js"></script>
    <script src="./Vehiculo.js"></script>
</body>
</html>