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
    

function esconderTodo(){
    var subCateg=document.getElementById("comboSubCategoria").options;
    for (index = 0; index < 35; ++index) {
        subCateg[index].setAttribute('hidden','true');
    }
}


function mostrarOpciones(optiontoshow){
    var subCateg=document.getElementById("comboSubCategoria").options;
    for (index = 0; index < optiontoshow.length; ++index) {
        subCateg[optiontoshow[index]].removeAttribute("hidden");
    }
}

function agregarPersonaAccV(){

    var items = [];
    var newTr = $("#tablaPersonaAcc tr.selected").clone();
    "<input type='button' value='delete'/><span class='material-icons-sharp'>clear</span>";
    var newButtonHTML = "<button class='btnBorrarTitular'><span class='material-icons-sharp'>clear</span></button>"
    $(newTr).children("td:last").html(newButtonHTML);
    items.push(newTr);
    newTr.appendTo($("#tablaPersonaAccSup"));
    $("#tablaPersonaAccSup tr:last").removeClass('selected');
}
$('#tablaPersonaAccSup').on('click', 'button', function(e){
    $(this).closest('tr').remove();
});

$("#tablaPersonaAcc tr").click(function(){

    $(this).addClass('selected').siblings().removeClass('selected');
    $(this).find('tr:first').html();
});



btnModificarMulta.addEventListener('click',function(){
    overlay2.classList.add('showPopUp');
    popup2.classList.add('showPopUp');
});
btnCerrarPopUp2.addEventListener('click',function(){
    overlay2.classList.remove('showPopUp');
    popup2.classList.remove('showPopUp');
});

btnEliminarMulta.addEventListener('click',function(){
    overlay.classList.add('showPopUp');
    popup.classList.add('showPopUp');
});
btnCerrarPopUp.addEventListener('click',function(){
    overlay.classList.remove('showPopUp');
    popup.classList.remove('showPopUp');
});
btnCerrarPopUp3.addEventListener('click',function(){
    overlay.classList.remove('showPopUp');
    popup.classList.remove('showPopUp');
});


function rellenarPopUpAcc(){
    var dato = $('#tablaModificarAcc tr.selected').find('td').eq(0).text();
    $("#nroReferenciaAcc").val(dato);
    dato = $('#tablaModificarAcc tr.selected').find('td').eq(1).text();
    $("#fechaAcc").val(dato);
    dato = $('#tablaModificarAcc tr.selected').find('td').eq(2).text();
    $("#Lugar").val(dato);
    dato=$('#tablaModificarAcc tr.selected').find('td').eq(3).text();
    $("#Hora").val(dato);
}

function rellenarPopUpEliminacionAcc(){
    var dato = $('#tablaModificarAcc tr.selected').find('td').eq(0).text();
    $("#nroReferenciaElim").val(dato);
}
