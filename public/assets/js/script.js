$(document).ready(function(){
    
    // Mostrar-ocultar cuadro de confirmacion
    $('#delete-btn').click(function (e) { 
        e.preventDefault();
        $('.delete-confirmation').removeClass('hide');
    });

    $('#cancel-btn').click(function (e) { 
        e.preventDefault();
        $('.delete-confirmation').addClass('hide');
    });


});