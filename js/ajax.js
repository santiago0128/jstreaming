

function updategastos() {

    nombre = $('#nombres_admin').val();

    $.ajax({
        type: "POST",
        url: "../controller/admincontroller.php",
        dataType: "json",
        data:{
            nombre_gasto : nombre
        },
        success: function (response) {
          console.log(response);

        }
    });




}