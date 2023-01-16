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
    <div class="containerAcc">
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

                <a href="#" id="btn2" onclick="seleccionar2()" class="polizas-btn " >
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

                
                <a href="#" id="btn3" onclick="seleccionar3()"  class="siniestros-btn active"> 
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
                <h1>Gestión de Accidentes</h1>
            </div>

            <div class="personas">
               
                
               <div class="izquierda-vida">
                  
                   
                   <div class="buscadorDiv">  

                       <div class="izq">
                            <h2>Lista de Personas con Vehiculos</h2>
                       </div>
                      
                   </div>                             

                   

                       
                         <table class="content-tableAcc" id="tablaPersonaAccSup">
                               <thead>
                                   <tr>                                                   
                                       <th>Cédula</th>
                                       <th>Nombre</th> 
                                       <th>Matricula</th>                                       
                                       <th></th>                                                    
                                   </tr>
                               </thead>

                               <tbody>
                                        <tr>

                                        </tr>
                               </tbody>
                               
                           </table>
                               
                         

                    
                   
                   

               </div>

                             
               
           </div>

           
            <div class="personas">
               
                
                <div class="izquierda-vida">
                   
                    
                    <div class="buscadorDiv">  

                        <div class="izq">
                            <h2>Lista de Personas con Vehiculos</h2>
                        </div>

                        <div class="der">
                           
                            
                            <button class="btnTitular" onclick="agregarPersonaAccV()" id="btnTitular"><span class="material-icons-sharp">add_task</span><h4>Persona</h4></button>
                                                                             
                            <span class="material-icons-sharp">search</span>
                            <input type="text" id ="buscarMatriculaAcc" class="buscador" placeholder="       Cédula..." onkeyup="buscarMatriculaAcc()" maxlength="8">
                        </div>

                    
                        
                    </div>                             

                    

                        
                          <table class="content-table" id="tablaPersonaAcc">
                                <thead>
                                    <tr>                                                   
                                        <th>Cédula</th>
                                        <th>Nombre</th> 
                                        <th>Matricula</th>
                                        <th>Marca</th>                                                   
                                    </tr>
                                </thead>

                                <tbody >
                                    <?php 
                                        if (conectar())
                                        llenarTablaPersonaAccV();                            
                                    ?>
                                </tbody>
                                
                            </table>
                                
                          

                     
                    
                    

                </div>

                              
                
            </div>

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

                <div class="formAcc">
                    <h2>Registrar Accidente</h2>

                    <div class="wrapperAcc">
                        
                        <form class="formAccV" method="post">
                          <h1 class="titleAcc">Datos Accidente</h1>

                          <div class="fechaAccidente">
                            <h3>Fecha del Accidente</h3>
                            <input type="date" class="date" name="fechaAccidente" required>
                          </div>

                          <div class="fechaRespuesta">
                            <h3>Fecha de respuesta</h3>
                            <input type="date" class="date" name="fechaRespuesta" required>
                          </div>

                          <div class="inputContainer">
                            <input type="text" class="input" placeholder="a" name="cedulaAcc" maxlength="8" required>
                            <label for="" class="label">Cedula del Involucrado</label>
                          </div>

                          <div class="inputContainer">
                            <input type="text" class="input" placeholder="a" name="lugar_accidente" required>
                            <label for="" class="label">Lugar de accidente</label>
                          </div>

                          <div class="inputContainer">
                            <input type="text" class="input" placeholder="a" name="hora_accidente" maxlength="5" required>
                            <label for="" class="label">Hora de accidente</label>
                          </div>

                          <div class="inputContainer2">
                                            
                                            <select name="id_rechazo" class="input2" onchange="changeMe(this)" required>
                                                <option value="" selected disabled hidden>Rechazado</option>      
                                                <option value="Si" placeholder="a">Si</option>
                                                <option value="No" placeholder="a">No</option>
                                                <script type="text/javascript">
                                                    function changeMe(sel){
                                                        sel.style.color = '#000';
                                                    }
                                                </script>                                                
                                            </select>
                           </div>

                          
                                <?php
                                    llenaCategoria(); 
                                ?>
                       
                              
                          
                                <?php
                                    llenaSubCategoria(); 
                                ?>

                        <div class="inputContainer">
                            <input type="number" class="input" placeholder="a" name="monto_reconocido" required>
                            <label for="" class="label">Monto Reconocido</label>
                        </div>

                        <div class="inputContainer">
                            <input type="number" class="input" placeholder="a" name="monto_solicitado" required>
                            <label for="" class="label">Monto Solicitado</label>
                        </div>

                            <input type="hidden" id="cedulasTitulares" name="campoTitulares">
                            <input type="hidden" id="cedulasBeneficiarios" name="campoBeneficiarios">
                            <input type="submit" class="submitBtn" value="Crear Accidente" onclick="getColumnAcc('tablaPersonaAccSup')">
                        </form>

                       
                        
                    </div>

                    <?php 
                        if (isset($_POST["cedulaAcc"])){
                            if (verificarPoliza(buscarClientePorCI($_POST["cedulaAcc"]),3)){
                                if (conectar()){
                                    registroAccidenteVehicular($_POST["campoTitulares"],$_POST["campoBeneficiarios"],$_POST["fechaAccidente"],$_POST["lugar_accidente"],$_POST["hora_accidente"],idCategoria($_POST["nb_categoria"],$_POST["nb_subCategoria"]),$_POST["nb_categoria"],$_POST["nb_subCategoria"],3,$_POST["fechaRespuesta"],$_POST["id_rechazo"],$_POST["monto_reconocido"],$_POST["monto_solicitado"]);
                                }
                            }
                            else{
                                echo '<script>alert("Verifique si la cédula es del titular de una póliza.")</script>';
                            }
                        }
                    ?>
                    
                     
                   


                </div>


                   
    </div>
   
    <script src="./dashboard.js"></script>
    <script src="./prueba.js"></script>
</body>
</html>