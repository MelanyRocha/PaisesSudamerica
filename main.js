$(document).ready(function() {
    $('#registro-form').submit(function(e) {
        e.preventDefault();

        // Recopilar datos del formulario
        var nombre = $('#nombre').val();
        var extension = $('#extension').val();

        // Enviar datos al servidor usando AJAX
        $.ajax({
            type: 'POST',
            url: 'procesar.php', // Cambia 'procesar.php' por el nombre de tu archivo PHP de procesamiento
            data: { nombre: nombre, extension: extension },
            success: function(response) {
                // Mostrar mensaje de respuesta del servidor en 'mensaje'
                $('#mensaje').html(response);
                // Limpiar el formulario
                $('#nombre').val('');
                $('#extension').val('');
            }
        });
    });
});
