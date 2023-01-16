function buscarInmueble() {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("buscadorInmueble");
    filter = input.value.toUpperCase();
    table = document.getElementById("tablaModificarInmueble");
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

$("#tablaModificarPersona tr").click(function(){

    $(this).addClass('selected').siblings().removeClass('selected');
    $(this).find('tr:first').html();
});

$("#tablaModificarInmueble tr").click(function(){

    $(this).addClass('selected').siblings().removeClass('selected');
    $(this).find('tr:first').html();
});


