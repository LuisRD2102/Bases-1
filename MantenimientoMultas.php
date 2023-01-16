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

                       
             
                <a href="#" class="mantenimiento-btn active">
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

               
                <a href="#">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Cerrar Sesión</h3>
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
                <h1>Mantenimiento de Multas</h1>
        </div>

            
            <div class="personas-vida">
               
                
               <div class="izquierda-vida">
                  
                   
                   <div class="buscadorDiv">  

                       <div class="izq">
                           <h2>Multas del Sistema</h2>
                       </div>

                       <div class="der">
                        
                           <button class="btnTitular" id="btnModificarMulta" onclick="rellenarPopUp()"><span class="material-icons-sharp" >edit</span><h4>Modificar</h4></button>
                           <button class="btnVida" id="btnEliminarMulta"><span class="material-icons-sharp">delete</span><h4>Eliminar</h4></button>                                                  
                           <span class="material-icons-sharp">search</span>
                           <input type="text" id ="buscarPorMatricula" class="buscador" placeholder="       Matricula..." onkeyup="buscarPorMatricula()" maxlength="8">
                       </div>

                   
                       
                   </div>                          

                       
                         <table class="content-tableMant" id="tablaModificarMulta">
                               <thead>
                                   <tr> 
                                       <th>Matricula</th>                                                  
                                       <th>Nro Multa</th>
                                       <th>Fecha de Multa</th>
                                       <th>Lugar</th>
                                       <th>Hora</th>    
                                       <th>Puntaje de Gravedad</th>                                                   
                                   </tr>
                               </thead>

                               <tbody class="scrollContent">
                                   <?php
                                        if (conectar())
                                       llenarTablaMantenimientoMulta();                            
                                   ?>
                               </tbody>
                               
                           </table>

               </div>

               <div class="derecha-vida">

               </div>                
               
           </div>

           <!------------------------------------POP UP------------------------------------->


           <div class="overlay" id="overlay2">
                <div class="signUpFrmPopUp" id="popup2">
                    
                    
                    
                    <!---------------------------------------------------->
                    
                        <div class="wrapperPop">
                            <form class="form" method="post" id="formPopUp2">
                                <a href="#" id="btn-Cerrar2" class="btn-Cerrar2"><span class="material-icons-sharp">close</span></a>
                                <h1 class="titlePopModificarMulta">Modificar Multa</h1>

                                <input type="hidden" id="nroReferencia" name="nroReferencia" >          
                                
                                <div class="inputContainer">
                                    <input type="date" class="inputPop" placeholder="a"  name="fechaMulta" id="fechaMulta" required>
                                    <label for="" class="label">Fecha de Multa</label>
                                </div>                                

                                <div class="inputContainer">
                                    <input type="text" class="inputPop" placeholder="a"  name="Lugar" id="Lugar" required>
                                    <label for="" class="label">Lugar</label>
                                </div>
                                
                                <div class="inputContainer">
                                    <input type="text" class="inputPop" placeholder="a"  name="Hora" id="Hora" required>
                                    <label for="" class="label">Hora</label>
                                </div>
                                
                                <div class="inputContainer2">
                                                        
                                                        <select name="puntaje" class="input2" onchange="changeMe(this)" id="puntaje" required>
                                                            <option value="" selected disabled hidden>Puntaje de Gravedad</option>      
                                                            <option value="1" placeholder="a">1</option>
                                                            <option value="2" placeholder="a">2</option>
                                                            <option value="3" placeholder="a">3</option>
                                                            <option value="4" placeholder="a">4</option>
                                                            <option value="5" placeholder="a">5</option>
                                                            <option value="6" placeholder="a">7</option>
                                                            <option value="8" placeholder="a">8</option>
                                                            <option value="9" placeholder="a">9</option>
                                                            <option value="10" placeholder="a">10</option>
                                                            <script type="text/javascript">
                                                                function changeMe(sel){
                                                                    sel.style.color = '#000';
                                                                }
                                                            </script>                                                
                                                        </select>
                                </div>                                                               
                                                           
                                <input type="submit" class="submitBtnPopModificarMulta" value="Guardar Cambios" >          
                            </form>
                        </div>

                        <?php
                            error_reporting(0);
                            if (isset($_POST["nroReferencia"])){
                            modificarMulta($_POST["nroReferencia"],$_POST["fechaMulta"],$_POST["Lugar"],$_POST["Hora"],$_POST["puntaje"],);
                            echo "<script type='text/javascript'>
                            window.location = 'http://localhost/Pruebas/MantenimientoMultas.php';
                            </script> ";
                            }
                        ?>
                      
                    <!------------------------HACER LO DE GENERAR ID ALEATORIO ---------------------------->
                </div>
            </div>

            <div class="overlay" id="overlay">
                <div class="signUpFrmPopUp" id="popup">
                    
                    
                    
                    <!---------------------------------------------------->
                    
                    <div class="wrapperPop">
                            <form class="form" method="post" id="formPopUp2">
                                <a href="#" id="btn-Cerrar" class="btn-Cerrar2"><span class="material-icons-sharp">close</span></a>
                                <label for="" class="labelEliminar">¿Está seguro que desea eliminar?</label>
                                <input type="hidden" id="nroReferenciaElim" name="nroReferenciaElim" > 
                                <div class="botones-si-no">
                                    <input type="submit" class="submitBtnPopEliminarMulta" value="Si" onclick="rellenarPopUpEliminacion()">
                                    <input type="button" class="submitBtnPopEliminarMulta" value="No" id="btnNo" >
                                </div>



                            </form>

                        </div>

                        <?php
                            error_reporting(0);
                            if (isset($_POST["nroReferenciaElim"])){
                                eliminarMulta($_POST["nroReferenciaElim"]);
                            echo "<script type='text/javascript'>
                            window.location = 'http://localhost/Pruebas/MantenimientoMultas.php';
                            </script> ";
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
   
    <script src="./dashboard.js"></script>
    <script src="./prueba.js"></script>
    
</body>
</html>