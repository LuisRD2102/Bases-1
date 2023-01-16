<?php 

    function conectar(){
        return pg_connect("host=localhost dbname=postgres user=postgres password=123");
    }

    function buscar($usuario,$pw){
        $consulta= pg_query(conectar(),"SELECT * FROM usuario WHERE nombre_usuario='$usuario' AND contraseña='$pw'");
        $obj=pg_fetch_object($consulta);
        if ($obj){
            echo "SE HA LOGUEADO";
        }
        else echo "Credenciales inválidas";
    }

    function idRepetido($id, $tabla, $campo){
        $sql = pg_query(conectar(),"SELECT * FROM $tabla WHERE $campo = $id");
        $obj=pg_fetch_object($sql);
        if ($obj){
            return true;
        }
        else
            return false;
    }

    function generarId($tabla, $campo){
        do {
            $id=rand(1,9999);
        } while (idRepetido($id,$tabla, $campo));
        
        return $id;
    }

    function registrarCuenta($idUsuario,$usuario,$email,$pw,$nombre,$apellido,$edad,$sexo,$nb_ciudad){
        $sql= "INSERT INTO usuario VALUES ($idUsuario,'$usuario','$email','$pw','$nombre','$apellido',$edad,'$sexo',$nb_ciudad)";
        return pg_query(conectar(), $sql);
    }

    function llenaCiudad(){
        
        if (conectar()){
            $query = "SELECT * FROM ciudad";
            $resultado = pg_query(conectar(),$query);
            $numFil = pg_num_rows($resultado);

            if ($numFil >0){
                ?>
                
                <div class="inputContainer2">
                <select name="nb_ciudad" class="input2" onchange="changeMe(this)" required>
                <option value="" selected disabled hidden>Ciudad</option>  
                <link rel="stylesheet" href="style.css">
               <script type="text/javascript">
                    function changeMe(sel){
                    sel.style.color = '#000';
                    }
                </script>

                <?php 
                    while ($fila = pg_fetch_array($resultado))
                    echo "<option value".$fila['id_ciudad'].">".$fila['nb_ciudad']."</option>";
                    ?>   

                    </select> 
                    </div> 

                    <?php    
            }
        }

    }

    function registrarPersona($idpersona,$ci,$nombpersona,$numtlfpersona,$tipo_persona){
        $sql= "INSERT INTO persona VALUES ($idpersona,'$ci','$nombpersona','$numtlfpersona','$tipo_persona')";
        return pg_query(conectar(), $sql);
    }

    function registrarCliente($id_cliente, $apellido_cliente, $nombre_cliente, $direc_cliente, $calle, $ciudad, $genero, $fecha_nac, $id_sucursal){
        $sql= "INSERT INTO cliente VALUES($id_cliente, '$apellido_cliente', '$nombre_cliente', '$direc_cliente', '$calle', '$ciudad', '$genero', '$fecha_nac', $id_sucursal)";
        return pg_query(conectar(), $sql);
    }

    function buscarIDCiudad($nb_ciudad){
        $sql = pg_query(conectar(),"SELECT * FROM ciudad WHERE nb_ciudad = '$nb_ciudad'");
        $obj=pg_fetch_object($sql);

        if ($obj){
            return $obj->id_ciudad;

        }
    }

    function buscarClientePorCI($CI){
        $sql = pg_query(conectar(),"SELECT id_cliente FROM cliente WHERE id_cliente IN(SELECT idpersona FROM persona WHERE ci = '$CI')");
        $obj=pg_fetch_object($sql);
        
        if ($obj){
            return $obj->id_cliente;

        }
    }

    function buscarPersonaPorCI($CI){
        $result = pg_query(conectar(),"SELECT idpersona FROM persona WHERE ci ='$CI'");
        $arr = pg_fetch_array($result);
        $id_persona=$arr["idpersona"];
        return $id_persona;
    }

    function agenteExiste($id_agente){
        $sql = pg_query(conectar(),"SELECT id_agente FROM agente WHERE id_agente = $id_agente");
        $obj=pg_fetch_object($sql);
        
        if ($obj){
            return true;
        }
        else return false;
    }

    function contrataVida($id_vida, $id_cliente,$idpersona, $id_agente, $fecha_contrato, $estado_contrato, $monto_comision_ag){
        $sql= "INSERT INTO contrata_vida VALUES ($id_vida, $id_cliente,$idpersona, $id_agente, '$fecha_contrato', '$estado_contrato', $monto_comision_ag)";
        return pg_query(conectar(), $sql);
    }

    function registrarPoliza($nro_poliza, $descrip_poliza, $prima){
        $sql= "INSERT INTO poliza VALUES ($nro_poliza, '$descrip_poliza', $prima)";
        return pg_query(conectar(), $sql);
    }

    function registrarTitular($id_cliente, $nro_poliza, $saldo_prima, $fecha_uso_reciente){
        $sql= "INSERT INTO titular VALUES ($id_cliente, $nro_poliza, $saldo_prima, $fecha_uso_reciente)";
        return pg_query(conectar(), $sql);
    }

    function registrarVida($id_vida_salud, $prima, $cobertura){
        $sql= "INSERT INTO vida VALUES ($id_vida_salud, $prima, $cobertura)";
        return pg_query(conectar(), $sql);
    }

    
    function registrarInmueble($id_inmueble, $direcinmueble, $valor, $contenido, $riesgos){
        $sql= "INSERT INTO inmueble VALUES ($id_inmueble, '$direcinmueble', $valor, '$contenido', '$riesgos')";
        return pg_query(conectar(), $sql);
    }
    
    function registrarCategoriaVehiculo($id_categoria, $descripcateg){
        $sql= "INSERT INTO categoria_vehiculo VALUES ($id_categoria, '$descripcateg')";
        return pg_query(conectar(), $sql);
    }

    function registrarTipoCobertura($id_tipo_cobertura, $descriptipocobertura){
        $sql= "INSERT INTO tipo_cobertura VALUES ($id_tipo_cobertura, '$descriptipocobertura')";
        return pg_query(conectar(), $sql);
    }

    function registrarVehiculo($matricula, $modelo, $annio, $id_categoria, $id_tipo_cobertura, $marca){
        $sql= "INSERT INTO vehiculo VALUES ('$matricula', '$modelo', $annio, $id_categoria, $id_tipo_cobertura, '$marca')";
        return pg_query(conectar(), $sql);
    }

    function registrarTitularVehiculo($id,$matricula){
        $sql= "INSERT INTO posee VALUES ($id, '$matricula')";
        return pg_query(conectar(), $sql);
    }


    function llenarTablaPersona(){
        $sql= pg_query("SELECT ci, nombpersona, tipo_persona FROM persona WHERE tipo_persona='Beneficiario' OR tipo_persona='Cliente'");
        

        if ($sql !=false){
            while ($rows = pg_fetch_array($sql)){
            echo "
            <tr>
                <td>".$rows["ci"]."</td> 
                <td>".$rows["nombpersona"]."</td>
                <td>".$rows["tipo_persona"]."</td>           
            
            </tr>           
            
            ";
            }
        }

    }

    function llenarTablaPersonaMantenimiento(){
        $sql= pg_query("SELECT ci, nombpersona, numtlfpersona ,tipo_persona FROM persona WHERE tipo_persona='Beneficiario' OR tipo_persona='Cliente'");
        

        if ($sql !=false){
            while ($rows = pg_fetch_array($sql)){
            echo "
            <tr>
                <td>".$rows["ci"]."</td> 
                <td>".$rows["nombpersona"]."</td>
                <td>".$rows["numtlfpersona"]."</td>
                <td>".$rows["tipo_persona"]."</td>           
            
            </tr>           
            
            ";
            }
        }

    }

    function llenarTablaPersonaHogar(){
        $sql= pg_query("SELECT ci, nombpersona, tipo_persona FROM persona WHERE tipo_persona='Cliente'");
        

        if ($sql !=false){
            while ($rows = pg_fetch_array($sql)){
            echo "
            <tr>
                <td>".$rows["ci"]."</td> 
                <td>".$rows["nombpersona"]."</td>
                <td>".$rows["tipo_persona"]."</td>           
            
            </tr>           
            
            ";
            }
        }

    }

    
    function llenarTablaVehiculo(){
        $sql= pg_query("SELECT matricula, marca, modelo FROM vehiculo");
        

        if ($sql !=false){
            while ($rows = pg_fetch_array($sql)){
            echo "
            <tr>
                <td>".$rows["matricula"]."</td> 
                <td>".$rows["marca"]."</td>
                <td>".$rows["modelo"]."</td>           
            
            </tr>           
            
            ";
            }
        }

    }


    function llenarTablaInmueble(){
        $sql= pg_query("SELECT id_inmueble, valor, riesgos_auxiliares FROM inmueble");
        

        if ($sql !=false){
            while ($rows = pg_fetch_array($sql)){
            echo "
            <tr>
                <td>".$rows["id_inmueble"]."</td> 
                <td>".$rows["valor"]."</td>
                <td>".$rows["riesgos_auxiliares"]."</td>           
            
            </tr>           
            
            ";
            }
        }

    }

    function contratoVida($temp,$temp2,$idAgente,$fecha_contrato,$estado_contrato,$monto_comision_ag,$saldo_prima,$fecha_uso_reciente,$prima){
        error_reporting(0);
        $idVida=generarID('contrata_vida','id_vida');
        $nro_poliza=1;
        $cedulas=explode( ',', $temp );
        $idbeneficiario=explode( ',', $temp2);
        for ($i=0; $i<count($cedulas); $i++) { 
            $result = pg_query(conectar(),"SELECT * FROM persona WHERE ci =$cedulas[$i]");
            if ($result){
                $arr = pg_fetch_array($result);
                $idPersona=$arr["idpersona"];
                $insertTitularesContrato = pg_query(conectar(),"INSERT INTO contrata_vida VALUES ($idVida, $idPersona,$idPersona, $idAgente, '$fecha_contrato', '$estado_contrato', $monto_comision_ag)");
                $insertTitularesPoliza=pg_query(conectar(),"INSERT INTO titular VALUES ($idPersona, $nro_poliza,$saldo_prima,$fecha_uso_reciente)");
                for ($j=0; $j<count($idbeneficiario); $j++) { 
                    $result = pg_query(conectar(),"SELECT * FROM persona WHERE ci =$idbeneficiario[$j]");
                    if ($result){
                        $arr = pg_fetch_array($result);
                        $idPersonaBeneficiario=$arr["idpersona"];
                        $insertTitulares = pg_query(conectar(),"INSERT INTO contrata_vida VALUES ($idVida, $idPersona,$idPersonaBeneficiario, $idAgente, '$fecha_contrato', '$estado_contrato', $monto_comision_ag)");
                    }
                }

            }
        }
 
    }

    function contratoInmueble($temp,$temp2,$idAgente,$fecha_contrato,$estado_contrato,$monto_comision_ag,$prima,$saldo_prima,$fecha_uso_reciente){
        error_reporting(0);
        $nro_poliza=2;
        $cedulas=explode( ',', $temp );
        $id_inmueble=explode( ',', $temp2);
        for ($i=0; $i<count($cedulas); $i++) {
            $result = pg_query(conectar(),"SELECT * FROM persona WHERE ci =$cedulas[$i]");
                if ($result){
                    $arr = pg_fetch_array($result);
                    $idPersona=$arr["idpersona"];
                    for ($j=0; $j<count($id_inmueble); $j++) {
                        $result = pg_query(conectar(),"SELECT * FROM inmueble WHERE id_inmueble =$id_inmueble[$j]");
                            if ($result){
                                $arr = pg_fetch_array($result);
                                $idDelInmueble=$arr["id_inmueble"];
                                $contrato = pg_query(conectar(),"INSERT INTO contrata_inmueble VALUES ($idDelInmueble, $idPersona,$idAgente,'$fecha_contrato','$estado_contrato',$monto_comision_ag)");
                            }
                    }
                   
                    $insertTitularesPoliza=pg_query(conectar(),"INSERT INTO titular VALUES ($idPersona, $nro_poliza,$saldo_prima,$fecha_uso_reciente)");

                }
        }
    }

    function contratoVehiculo($temp,$temp2,$idAgente,$fecha_contrato,$recargo,$descuento,$estado_contrato,$monto_comision_ag,$prima,$saldo_prima,$fecha_uso_reciente){
        error_reporting(0);
        $cedulas=explode( ',', $temp );
        $matricula=explode( ',', $temp2);
        $nro_poliza=3;
        for ($i=0; $i<count($cedulas); $i++) {
            $result = pg_query(conectar(),"SELECT * FROM persona WHERE ci =$cedulas[$i]");
            if ($result){
                $arr = pg_fetch_array($result);
                $idPersona=$arr["idpersona"];
                for ($j=0; $j<count($matricula); $j++) {
                    $result = pg_query(conectar(),"SELECT * FROM vehiculo WHERE matricula ='$matricula[$j]'");
                        if ($result){
                            $arr = pg_fetch_array($result);
                            $nroMatricula=$arr["matricula"];
                            $contrato = pg_query(conectar(),"INSERT INTO contrata_vehiculo VALUES ($idPersona, $idAgente, '$nroMatricula', '$fecha_contrato', $recargo, $descuento, '$estado_contrato',$monto_comision_ag)");
                        }
                    
                    $insertTitularesPoliza=pg_query(conectar(),"INSERT INTO titular VALUES ($idPersona, $nro_poliza,$saldo_prima,$fecha_uso_reciente)");
                }
            }
        }
    }
 

    function llenaCategoria(){
        
        if (conectar()){
            $query = "SELECT DISTINCT descripcateg FROM categoria_accidente";
            $resultado = pg_query(conectar(),$query);
            $numFil = pg_num_rows($resultado);


            if ($numFil >0){
                ?>
                    
                <div class="inputContainer2">
                <link rel="stylesheet" href="styleDashboard.css">
                <select name="nb_categoria" id="combocategoria" class="input2" onchange="verificar(this)" required>
                <option value="" selected disabled hidden>Categoría</option>  
                
                 <script type="text/javascript">
                        function verificar(sel){
                            $("#comboSubCategoria").prop("selectedIndex", 0);
                            document.getElementById("comboSubCategoria").style.color = "#ccc";

                            esconderTodo();
                            var categ=$("#combocategoria option:selected" ).text();
                            sel.style.color = '#000';
                            if (categ=='Accidentes en el hogar')
                                mostrarOpciones([1,2,3,4]);
                            else if (categ=='Accidentes en el trabajo') {
                                mostrarOpciones([5,6,7,8]);
                            }
                            else if (categ=='Accidentes en la calle') {
                                mostrarOpciones([9,10,11,12]);
                            }
                            else if (categ=='Accidentes en el campo') {
                                mostrarOpciones([13,14,15]);
                            }
                            else if (categ=='Accidentes en la infancia') {
                                mostrarOpciones([16,17,18,19]);
                            }
                            else if (categ=='Accidentes en la escuela') {
                                mostrarOpciones([20,21]);
                            }
                            else if (categ=='Accidentes en hospitales') {
                                mostrarOpciones([22,23]);
                            }
                            else if (categ=='Accidentes por animales') {
                                mostrarOpciones([24,25,26,27,28]);
                            }
                            else if (categ=='Accidentes por desastres naturales') {
                                mostrarOpciones([29,30,31,32,33,34]);
                            }
                        }
                </script>

                <?php 
                    while ($fila = pg_fetch_array($resultado))
                    echo "<option value".$fila['descripcateg'].">".$fila['descripcateg']."</option>";
                    ?>   

                    </select> 
                    </div> 

                    <?php    
            }
        }

    }


    function llenaSubCategoria(){

            if (conectar()){
                $query = "SELECT * FROM categoria_accidente ";
                $resultado = pg_query(conectar(),$query);
                $numFil = pg_num_rows($resultado);

                if ($numFil >0){
                    ?>
                    <link rel="stylesheet" href="styleDashboard.css">                    
                    <div class="inputContainer4">
                    <select name="nb_subCategoria" id="comboSubCategoria" class="input2" onchange="changeMe2(this)" required>
                    <option value="" selected disabled hidden>SubCategoría</option>  
                    
                <script type="text/javascript">
                        function changeMe2(sel){
                            sel.style.color = '#000';
                        }
                    </script>

                    <?php 
                        while ($fila = pg_fetch_array($resultado))
                        echo "<option value".$fila['id_categoria']." hidden>".$fila['descripsubcategoria']."</option>";
                        ?>   

                        </select> 
                        </div> 

                        <?php    
                }
            }
    }

    function idCategoria($categoria,$subCategoria){
        $result = pg_query(conectar(),"SELECT id_categoria FROM categoria_accidente WHERE descripcateg ='$categoria' AND descripsubcategoria ='$subCategoria'");
        $arr = pg_fetch_array($result);
        $id_categoria=$arr["id_categoria"];
        return $id_categoria;
    }

    function generarIdCorrelativo(){
        $result = pg_query(conectar(), "SELECT * from accidente");
        $rows = pg_num_rows($result);
        return $rows+1;
    }

    function registroAccidente($temp,$temp2,$fecha_accidente,$lugar_accidente,$hora_accidente,$id_categoria,$categoria,$subCategoria,$nro_poliza,$fecha_respuesta,$id_rechazo,$monto_reconocido,$monto_solicitado){
        //error_reporting(0);
        $nro_accidente=generarIdCorrelativo();        
        $descrip_siniestro=$categoria." - ".$subCategoria;
        $fecha_siniestro=$fecha_accidente." ".$hora_accidente;
        $cedulas=explode( ',', $temp );
        $matriculas=explode( ',', $temp2);
        $insertAccidente=pg_query(conectar(),"INSERT INTO accidente VALUES ($nro_accidente,'$fecha_accidente','$lugar_accidente','$hora_accidente',$id_categoria)");
        $insertSiniestro=pg_query(conectar(),"INSERT INTO siniestro VALUES ($nro_accidente,'$descrip_siniestro')");
        $insertRegistroSiniestro=pg_query(conectar(),"INSERT INTO registro_siniestro VALUES ($nro_accidente,$nro_poliza,'$fecha_siniestro','$fecha_respuesta','$id_rechazo',$monto_reconocido,$monto_solicitado)");
    }

    function verificarPoliza($idCliente,$idTipoPoliza){
        $consulta= pg_query(conectar(),"SELECT * FROM titular WHERE id_cliente='$idCliente' AND nro_poliza='$idTipoPoliza'");
        $obj=pg_fetch_object($consulta);
        if ($obj){
            return true;
        }
        else return false;
    }

    function llenarTablaPersonaAccV(){
        $sql= pg_query("Select persona.ci,persona.nombpersona,vehiculo.matricula,vehiculo.marca FROM persona,vehiculo,posee WHERE (posee.idpersona=persona.idpersona AND posee.matricula=vehiculo.matricula)");
        

        if ($sql !=false){
            while ($rows = pg_fetch_array($sql)){
            echo "
            <tr>
                <td>".$rows["ci"]."</td> 
                <td>".$rows["nombpersona"]."</td>
                <td>".$rows["matricula"]."</td> 
                <td>".$rows["marca"]."</td>           
            
            </tr>           
            
            ";
            }
        }

    }

    function registroAccidenteVehicular($temp,$temp2,$fecha_accidente,$lugar_accidente,$hora_accidente,$id_categoria,$categoria,$subCategoria,$nro_poliza,$fecha_respuesta,$id_rechazo,$monto_reconocido,$monto_solicitado){
        error_reporting(0);
        $nro_accidente=generarIdCorrelativo();
        
        $descrip_siniestro=$categoria." - ".$subCategoria;
        $fecha_siniestro=$fecha_accidente." ".$hora_accidente;
        $cedulas=explode( ',', $temp );
        $matricula=explode( ',', $temp2);
        $insertAccidente=pg_query(conectar(),"INSERT INTO accidente VALUES ($nro_accidente,'$fecha_accidente','$lugar_accidente','$hora_accidente',$id_categoria)");
        $insertSiniestro=pg_query(conectar(),"INSERT INTO siniestro VALUES ($nro_accidente,'$descrip_siniestro')");
        $insertRegistroSiniestro=pg_query(conectar(),"INSERT INTO registro_siniestro VALUES ($nro_accidente,$nro_poliza,'$fecha_siniestro','$fecha_respuesta','$id_rechazo',$monto_reconocido,$monto_solicitado)");

        for ($i=0; $i<count($cedulas); $i++) {
            $result = pg_query(conectar(),"SELECT * FROM persona WHERE ci =$cedulas[$i]");
            if ($result){
                $arr = pg_fetch_array($result);
                $idPersona=$arr["idpersona"];
                $result = pg_query(conectar(),"SELECT * FROM vehiculo WHERE matricula ='$matricula[$i]'");
                    if ($result){
                        $arr = pg_fetch_array($result);
                        $nroMatricula=$arr["matricula"];
                        $insertInvolucrados = pg_query(conectar(),"INSERT INTO involucra VALUES ($nro_accidente,'$nroMatricula',$idPersona)");
                    }
            }
        }
    }


    function verificarVehiculo($idPersona,$matricula){
        
        $consulta= pg_query(conectar(),"SELECT * FROM posee WHERE idpersona=$idPersona AND matricula='$matricula'");
        $obj=pg_fetch_object($consulta);
        if ($obj){
            return true;
        }
        else return false;
    }

    function registroMulta($fecha_multa,$lugar_multa,$hora_multa,$nro_poliza,$fecha_respuesta,$id_rechazo,$monto_reconocido,$monto_solicitado,$matricula,$importe,$puntaje){
        error_reporting(0);
        $nro_multa=generarId('multa','nro_referenciamulta');
        $descrip_siniestro="Multa del Vehículo: "." ".$matricula;
        $fecha_siniestro=$fecha_multa." ".$hora_multa;
        $insertSiniestro=pg_query(conectar(),"INSERT INTO siniestro VALUES ($nro_multa,'$descrip_siniestro')");
        $insertRegistroSiniestro=pg_query(conectar(),"INSERT INTO registro_siniestro VALUES ($nro_multa,$nro_poliza,'$fecha_siniestro','$fecha_respuesta','$id_rechazo',$monto_reconocido,$monto_solicitado)");
        $insertMulta=pg_query(conectar(),"INSERT INTO multa VALUES ($nro_multa,'$fecha_multa','$lugar_multa','$hora_multa',$importe,'$matricula',$puntaje)");
    }

    function llenarTablaMantenimientoMulta(){
        $sql= pg_query("SELECT matricula, nro_referenciamulta, fecha_multa, lugar_multa, hora_multa, puntajenivelgravedadacc FROM multa ");
        

        if ($sql !=false){
            while ($rows = pg_fetch_array($sql)){
            echo "
            <tr>
                <td>".$rows["matricula"]."</td> 
                <td>".$rows["nro_referenciamulta"]."</td> 
                <td>".$rows["fecha_multa"]."</td>
                <td>".$rows["lugar_multa"]."</td> 
                <td>".$rows["hora_multa"]."</td>
                <td>".$rows["puntajenivelgravedadacc"]."</td>            
            
            </tr>           
            
            ";
            }
        }

    }

    function llenarTablaMantenimientoAccidente(){
        $sql= pg_query("SELECT nro_referenciaacc, fecha_acc, lugar_acc, hora_acc FROM accidente");
        

        if ($sql !=false){
            while ($rows = pg_fetch_array($sql)){
            echo "
            <tr>
                <td>".$rows["nro_referenciaacc"]."</td> 
                <td>".$rows["fecha_acc"]."</td> 
                <td>".$rows["lugar_acc"]."</td>
                <td>".$rows["hora_acc"]."</td> 
                            
            </tr>           
            
            ";
            }
        }

    }

    function modificarMulta($nroReferencia,$fecha,$lugar,$hora,$puntaje){
        error_reporting(0);
        $fecha_siniestro=$fecha." ".$hora;
        $modificar=pg_query(conectar(),"UPDATE multa SET fecha_multa='$fecha',lugar_multa='$lugar',hora_multa='$hora',puntajenivelgravedadacc=$puntaje where nro_referenciamulta=$nroReferencia");
        $modificarRegSiniestro=pg_query(conectar(),"UPDATE registro_siniestro SET fecha_siniestro='$fecha_siniestro' where nro_siniestro=$nroReferencia");
    }

    function eliminarMulta($nroReferencia){
        $eliminarMulta=pg_query(conectar(),"DELETE FROM multa WHERE nro_referenciamulta=$nroReferencia");
        $eliminarRegistroSiniestro=pg_query(conectar(),"DELETE FROM registro_siniestro WHERE nro_siniestro=$nroReferencia");
        $eliminarSiniestro=pg_query(conectar(),"DELETE FROM siniestro WHERE nro_siniestro=$nroReferencia");
    }

    function modificarAccidente($nroReferencia,$fecha,$lugar,$hora){
        error_reporting(0);
        $fecha_siniestro=$fecha." ".$hora;
        $modificarAcc=pg_query(conectar(),"UPDATE accidente SET fecha_acc='$fecha',lugar_acc='$lugar',hora_acc='$hora'where nro_referenciaacc=$nroReferencia");
        $modificarRegSiniestro=pg_query(conectar(),"UPDATE registro_siniestro SET fecha_siniestro='$fecha_siniestro' where nro_siniestro=$nroReferencia");
    }

    function eliminarAcc($nroReferencia){
        $eliminarInvolucra = pg_query(conectar(),"DELETE FROM involucra WHERE nro_referenciaacc=$nroReferencia");
        $eliminarAcc=pg_query(conectar(),"DELETE FROM accidente WHERE nro_referenciaacc=$nroReferencia");
        $eliminarRegistroSiniestro=pg_query(conectar(),"DELETE FROM registro_siniestro WHERE nro_siniestro=$nroReferencia");
        $eliminarSiniestro=pg_query(conectar(),"DELETE FROM siniestro WHERE nro_siniestro=$nroReferencia");
    }

    function llenarTablaMantenimientoInmueble(){
        $sql= pg_query("SELECT id_inmueble, valor, contenido, riesgos_auxiliares FROM inmueble ");
        

        if ($sql !=false){
            while ($rows = pg_fetch_array($sql)){
            echo "
            <tr>
                <td>".$rows["id_inmueble"]."</td> 
                <td>".$rows["valor"]."</td> 
                <td>".$rows["contenido"]."</td>
                <td>".$rows["riesgos_auxiliares"]."</td> 
                          
            
            </tr>           
            
            ";
            }
        }

    }
?>