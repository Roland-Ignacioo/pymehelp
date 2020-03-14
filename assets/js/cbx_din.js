$(document).ready(function() {
    $.ajax({
            type: 'POST',
            url: '../php/cargar_region.php'
        })
        .done(function(lista_reg) {
            $('#lista_region').html(lista_reg)
        })
        .fail(function() {
            alert('Hubo un error al cargar las lista_reg')
        })

    $('#lista_comuna').on('change', function() {
        var id = $('#lista_comuna').val()
        $.ajax({
                type: 'POST',
                url: '../php/cargar_comuna.php',
                data: { 'id_comuna': id_comuna }
            })
            .done(function(listas_com) {
                $('#comuna').html(listas_com)
            })
            .fail(function() {
                alert('Hubo un errror al cargar las comuna')
            })
    })

    /* $('#enviar').on('click', function() {
        var resultado = 'Lista de reproducción: ' + $('#lista_reproduccion option:selected').text() +
            ' Video elegido: ' + $('#videos option:selected').text()

        $('#resultado1').html(resultado)
    }) */

})