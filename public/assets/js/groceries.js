//////////////////////////////////////////
///////// Con AJAX el filtrado ///////////
//////////////////////////////////////////
$(document).ready(init);

function init(){

    $("#btnLoadProducts").click(function(){
        $.getJSON("/api/products", function(data){
            $.each(data, function(index, dataObj){
                $("#tblProducts tbody:last-child").append(
                    "<tr>" +
                    "<td>" + dataObj.id + "</td>" +
                    "<td>" + dataObj.name + "</td>" +
                    "<td>" + dataObj.sale_price + "</td>" + 
                    "<td>" + dataObj.quantity + "</td>" + 
                    "<td>" + dataObj.category.name + "</td>" + 
                    "</tr>"
                );
            }); 
            let table = new DataTable('#tblProducts');
        });
    });  

    let allProducts;

    function loadAllProducts() {
        $.getJSON("/api/products", function(data) {
            allProducts = data;
            updateTable(data);
        });
    }

    function loadProductsByCategory(categoryId) {
        let filteredProducts;
        if (categoryId === 'all') {
            filteredProducts = allProducts;
        } else {
            filteredProducts = allProducts.filter(product => product.category.id == categoryId);
        }
        updateTable(filteredProducts);
    }

    // Función para actualizar la tabla con los productos recibidos
    function updateTable(products) {
        if ($.fn.DataTable.isDataTable('#tblProductsTD')) {
            $('#tblProductsTD').DataTable().clear().destroy();
        }

        $('#tblProductsTD').DataTable({
            data: products,
            columns: [
                { data: 'id' },
                { data: 'name' },
                { data: 'sale_price' },
                { data: 'quantity' },
                { data: 'category.name' }
            ]
        });
    }

    $('#categorySelect').on('change', function() {
        const selectedCategory = $(this).val();
        loadProductsByCategory(selectedCategory);
    });

    $.ajax({
        url: '/api/categories',
        success: function(response) {
            var options = response.data.map(function(category) {
                return {
                    id: category.id,
                    text: category.name,
                    icon: 'sb-bistro-' + category.icon
                };
            });

            options.unshift({
                id: 'all',
                text: 'Mostrar Todo',
                icon: null
            });

            $('#categorySelect').select2({
                data: options,
                templateResult: formatCategory,
                templateSelection: formatCategory
            });

            loadAllProducts();
        }
    });
}

function formatCategory(category) {
    if (!category.id) {
        return category.text;
    }

    var $category = $(
        '<span><i style="font-size: 20px;" class=" fw ' + category.icon + '"></i> ' + category.text + '</span>'
    );
    return $category;
}

$(".js-ejemplo-tema-single").select2({ 
    tema : "clásico"
});

/////////////////////////////////////////
// sin filtrado /////////////////////////
/////////////////////////////////////////

// $(document).ready(init);

// function init(){

//     $("#btnLoadProducts").click(function(){
//         $.getJSON("/api/products", function(data){
//             $.each(data, function(index, dataObj){
//                 $("#tblProducts tbody:last-child").append(
//                     "<tr>" +
//                     "<td>" + dataObj.id + "</td>" +
//                     "<td>" + dataObj.name + "</td>" +
//                     "<td>" + dataObj.sale_price + "</td>" + 
//                     "<td>" + dataObj.quantity + "</td>" + 
//                     "<td>" + dataObj.category.name + "</td>" + 
//                     "</tr>"
//                 );
//             }); 
//             let table = new DataTable('#tblProducts');
//         });
//     });

//     let tblProducts =  new DataTable('#tblProductsTD', {
//         ajax: '/api/product_td',
//         columns: [
//             { data: 'id' },
//             { data: 'name' },
//             { data: 'sale_price' },
//             { data: 'quantity' },
//             { data: 'category.name' }
//         ],
//         // processing: true
//     });   
// }

// $(document).ready(function() {
//     $.ajax({
//         url: '/api/categories',
//         success: function(response) {
//             var options = response.data.map(function(category) {
//                 return {
//                     id: category.id,
//                     text: category.name,
//                     icon: 'sb-bistro-' + category.icon
//                 };
//             });
//             options.unshift({
//                 id: 'all',
//                 text: 'Mostrar Todo',
//                 icon: null
//             });
//             $('#categorySelect').select2({
//                 data: options,
//                 templateResult: formatCategory,
//                 templateSelection: formatCategory
//             });
//         }
//     });
// });

// function formatCategory(category) {
//     if (!category.id) {
//         return category.text;
//     }

//     var $category = $(
//         '<span><i style="font-size: 20px;" class="text-primary fw ' + category.icon + '"></i> ' + category.text + '</span>'
//     );
//     return $category;
// }

// $ ( ".js-ejemplo-tema-single" ). select2 ({ 
//     tema : "clásico" }); 
    
