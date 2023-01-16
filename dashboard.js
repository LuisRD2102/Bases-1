var btnAbrirPopUp = document.getElementById('btnAbrirPopUp'),
    btnAbrirPopUp2 = document.getElementById('btnAbrirPopUp2'),
    btnAbrirPopUpAcc = document.getElementById('btnVehiculoAcc'),
    overlay = document.getElementById('overlay'),
    popup = document.getElementById('popup'),
    overlay2 = document.getElementById('overlay2'),
    popup2 = document.getElementById('popup2'),
    btnCerrarPopUp = document.getElementById('btn-Cerrar'),
    btnCerrarPopUp2 = document.getElementById('btn-Cerrar2'),
    btnCerrarPopUp3 = document.getElementById('btnNo'),
    btnCerrarPopUp4 = document.getElementById('btnNo2'),
    btnTitular = document.getElementById('btnTitular'),
    btnBeneficiario = document.getElementById('btnBeneficiario'),
    btnVehiculoAcc = document.getElementById('btnVehiculoAcc'),
    btnModificarMulta = document.getElementById('btnModificarMulta'),
    btnEliminarAccidente = document.getElementById('btnEliminarAccidente'),
    btnEliminarMulta = document.getElementById('btnEliminarMulta'),
    btnModificarAccidente = document.getElementById('btnModificarAccidente');
    
const themeToggler = document.querySelector(".theme-toggler");

themeToggler.addEventListener('click', ()=>{
    document.body.classList.toggle('dark-theme-variables');

    themeToggler.querySelector('span:nth-child(1)').classList.toggle('active');
    themeToggler.querySelector('span:nth-child(2)').classList.toggle('active');
});

function rellenarPopUp(){
    var dato = $('#tablaModificarMulta tr.selected').find('td').eq(1).text();
    $("#nroReferencia").val(dato);
    dato = $('#tablaModificarMulta tr.selected').find('td').eq(2).text();
    $("#fechaMulta").val(dato);
    dato = $('#tablaModificarMulta tr.selected').find('td').eq(3).text();
    $("#Lugar").val(dato);
    dato=$('#tablaModificarMulta tr.selected').find('td').eq(4).text();
    $("#Hora").val(dato);
    dato=$('#tablaModificarMulta tr.selected').find('td').eq(5).text();
    $("#puntaje").val(dato);
    document.getElementById("puntaje").style.color = "#000"; 
}

function rellenarPopUpEliminacion(){
    var dato = $('#tablaModificarMulta tr.selected').find('td').eq(1).text();
    $("#nroReferenciaElim").val(dato);
}

$("#tablaModificarMulta tr").click(function(){

    $(this).addClass('selected').siblings().removeClass('selected');
    $(this).find('tr:first').html();
});



$("#tablaModificarAcc tr").click(function(){

    $(this).addClass('selected').siblings().removeClass('selected');
    $(this).find('tr:first').html();
});

btnModificarAccidente.addEventListener('click',function(){
    overlay2.classList.add('showPopUp');
    popup2.classList.add('showPopUp');
});
btnCerrarPopUp2.addEventListener('click',function(){
    overlay2.classList.remove('showPopUp');
    popup2.classList.remove('showPopUp');
});


btnEliminarAccidente.addEventListener('click',function(){
    overlay.classList.add('showPopUp');
    popup.classList.add('showPopUp');
});
btnCerrarPopUp.addEventListener('click',function(){
    overlay.classList.remove('showPopUp');
    popup.classList.remove('showPopUp');
});
btnCerrarPopUp4.addEventListener('click',function(){
    overlay.classList.remove('showPopUp');
    popup.classList.remove('showPopUp');
});




function getColumnAcc(table_id1) {

    $col=0;
    var tab = document.getElementById(table_id1);
    var n = tab.rows.length;
    var i, tr, td;
    var s=[];

    for (i = 1; i < n; i++) {
        tr = tab.rows[i];
        if (tr.cells.length > $col) { 
            td = tr.cells[$col];
            s[i-1] =td.innerText;
        } 
    }
    $("#cedulasTitulares").val(s);
    $col=2;
    var tab = document.getElementById(table_id1);
    var n = tab.rows.length;
    var i, tr, td;
    var d=[];

    for (i = 1; i < n; i++) {
        tr = tab.rows[i];
        if (tr.cells.length > $col) { 
            td = tr.cells[$col];
            d[i-1] =td.innerText;
        } 
    }
    $("#cedulasBeneficiarios").val(d);
}

$("#tablaPersonaAcc tr").click(function(){

    $(this).addClass('selected').siblings().removeClass('selected');
    $(this).find('tr:first').html();
    var tipoPersona=$(this).find('td:eq(2)').text();

    if (tipoPersona.localeCompare("Beneficiario")==0){
        btnVehiculoAcc.classList.add('desactivado');
        btnTitular.classList.remove('desactivado');
        btnVehiculoAcc.disabled = true;
        btnTitular.disabled = false;
    }
    else{        
        
        btnVehiculoAcc.classList.remove('desactivado');
        btnVehiculoAcc.disabled = false;
        btnTitular.disabled = false;
    }
});

$('#tablaBeneficiario').on('click', 'button', function(e){
    $(this).closest('tr').remove();
});

$('#tabla-vehiculo').on('click', 'button', function(e){
    $(this).closest('tr').remove();
});





function agregarPersonaAcc(){

    var items = [];
    var newTr = $("#tablaPersonaAcc tr.selected").clone();
    "<input type='button' value='delete'/><span class='material-icons-sharp'>clear</span>";
    var newButtonHTML = "<button class='btnBorrarTitular'><span class='material-icons-sharp'>clear</span></button>"
    $(newTr).children("td:last").html(newButtonHTML);
    items.push(newTr);
    newTr.appendTo($("#tablaTitular2"));
    $("#tablaTitular2 tr:last").removeClass('selected');
}

$('#tabla-vehiculo').on('click', 'button', function(e){
    $(this).closest('tr').remove();
});

function agregarVehiculo(){

    var items = [];
    var newTr = $("#tablaVehiculo tr.selected").clone();
    "<input type='button' value='delete'/><span class='material-icons-sharp'>clear</span>";
    var newButtonHTML = "<button class='btnBorrarTitular'><span class='material-icons-sharp'>clear</span></button>"
    $(newTr).children("td:last").html(newButtonHTML);
    items.push(newTr);
    newTr.appendTo($("#tabla-vehiculo"));
    $("#tabla-vehiculo tr:last").removeClass('selected');
}







function agregarTitular2(){

    var items = [];
    var newTr = $("#tablaPersona tr.selected").clone();
    "<input type='button' value='delete' /><span class='material-icons-sharp'>clear</span>";
    var newButtonHTML = "<button class='btnBorrarTitular'><span class='material-icons-sharp'>clear</span></button>"
    $(newTr).children("td:last").html(newButtonHTML);
    items.push(newTr);
    newTr.appendTo($("#tablaTitular2"));
    $("#tablaTitular2 tr:last").removeClass('selected');
}


$('#tablaTitular2').on('click', 'button', function(e){
    $(this).closest('tr').remove();
});


function buscarPorNroAccidente() {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("buscarPorNroAccidente");
    filter = input.value.toUpperCase();
    table = document.getElementById("tablaModificarAcc");
    tr = table.getElementsByTagName("tr");
  
    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
}

function buscarPorMatricula() {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("buscarPorMatricula");
    filter = input.value.toUpperCase();
    table = document.getElementById("tablaModificarMulta");
    tr = table.getElementsByTagName("tr");
  
    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
}

function buscarMatriculaAcc() {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("buscarMatriculaAcc");
    filter = input.value.toUpperCase();
    table = document.getElementById("tablaPersonaAcc");
    tr = table.getElementsByTagName("tr");
  
    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
}



btnAbrirPopUpAcc.addEventListener('click',function(){
    overlay2.classList.add('showPopUp');
    popup2.classList.add('showPopUp');
});
btnCerrarPopUp2.addEventListener('click',function(){
    overlay2.classList.remove('showPopUp');
    popup2.classList.remove('showPopUp');
});





function buscarMatricula() {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("buscarMatricula");
    filter = input.value.toUpperCase();
    table = document.getElementById("tablaVehiculo");
    tr = table.getElementsByTagName("tr");
  
    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
}

function buscarInmueble() {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("buscarInmueble");
    filter = input.value.toUpperCase();
    table = document.getElementById("tablaInmueble");
    tr = table.getElementsByTagName("tr");
  
    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
}

$(function(){
    $(document).on("click",".btnTitular", function(){
        var getSelectedValues = $(".tablaPersona ");
    })
});











function getColumn(table_id1,table_id2) {

    $col=0;
    var tab = document.getElementById(table_id1);
    var n = tab.rows.length;
    var i, tr, td;
    var s=[];

    for (i = 1; i < n; i++) {
        tr = tab.rows[i];
        if (tr.cells.length > $col) { 
            td = tr.cells[$col];
            s[i-1] =td.innerText;
        } 
    }
    $("#cedulasTitulares").val(s);
    $col=0;
    var tab = document.getElementById(table_id2);
    var n = tab.rows.length;
    var i, tr, td;
    var s=[];

    for (i = 1; i < n; i++) {
        tr = tab.rows[i];
        if (tr.cells.length > $col) { 
            td = tr.cells[$col];
            s[i-1] =td.innerText;
        } 
    }
    $("#cedulasBeneficiarios").val(s);
}









