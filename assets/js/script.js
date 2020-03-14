$(document).ready(function() {
    /* alert('Hola'); */

    // AGREGANDO CLASE ACTIVE AL PRIMER ENLACE ====================
    $('.sidebar_categories li[category="all"]').addClass('ct_item-active');

    // FILTRANDO PRODUCTOS  ============================================

    $('li').click(function() {
        var catProduct = $(this).attr('category');
        console.log(catProduct);

        // AGREGANDO CLASE ACTIVE AL ENLACE SELECCIONADO
        $('li').removeClass('ct_item-active');
        $(this).addClass('ct_item-active');

        // OCULTANDO PRODUCTOS =========================
        $('.product_item').hide();
        /* $('.product_grid').css('transform', 'scale(0)');

        function hideProduct() {
            $('.product_grid').hide();
        }
        setTimeout(hideProduct, 400); */

        // MOSTRANDO PRODUCTOS =========================
        $('.product_item[category="' + catProduct + '"]').show();
        /* function showProduct() {
            $('.product_grid[category="' + catProduct + '"]').show();
            $('.product_grid[category="' + catProduct + '"]').css('transform', 'scale(1)');
        }
        setTimeout(showProduct, 400); */
    });

    // MOSTRANDO TODOS LOS PRODUCTOS =======================

    $('li[category="all"]').click(function() {
        $('.product_item').show();
        /* function showAll() {
            $('.product_grid').show();
            $('.product_grid').css('transform', 'scale(1)');
        }
        setTimeout(showAll, 400); */
    });
});