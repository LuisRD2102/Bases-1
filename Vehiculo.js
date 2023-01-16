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

    function buscarPersona() {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("buscarPersona");
        filter = input.value.toUpperCase();
        table = document.getElementById("tablaPersona");
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

    $("#tablaPersona tr").click(function(){
  
        $(this).addClass('selected').siblings().removeClass('selected');    
        var value=$(this).find('td:first').html();   
        
    });

    $("#tablaVehiculo tr").click(function(){

        $(this).addClass('selected').siblings().removeClass('selected');
        $(this).find('tr:first').html();
    });

    
    function agregarTitular(){

        var items = [];
        var newTr = $("#tablaPersona tr.selected").clone();
        "<input type='button' value='delete' /><span class='material-icons-sharp'>clear</span>";
        var newButtonHTML = "<button class='btnBorrarTitular'><span class='material-icons-sharp'>clear</span></button>"
        $(newTr).children("td:last").html(newButtonHTML);
        items.push(newTr);
        newTr.appendTo($("#tablaTitular"));
        $("#tablaTitular tr:last").removeClass('selected');
    }

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

    $('#tabla-vehiculo').on('click', 'button', function(e){
        $(this).closest('tr').remove();
    });

    $('#tablaTitular').on('click', 'button', function(e){
        $(this).closest('tr').remove();
    });

    btnAbrirPopUp.addEventListener('click',function(){
        overlay.classList.add('showPopUp');
        popup.classList.add('showPopUp');
    });
    btnCerrarPopUp.addEventListener('click',function(){
        overlay.classList.remove('showPopUp');
        popup.classList.remove('showPopUp');
    });
    
    btnAbrirPopUp2.addEventListener('click',function(){
        overlay2.classList.add('showPopUp');
        popup2.classList.add('showPopUp');
    });
    btnCerrarPopUp2.addEventListener('click',function(){
        overlay2.classList.remove('showPopUp');
        popup2.classList.remove('showPopUp');
    });