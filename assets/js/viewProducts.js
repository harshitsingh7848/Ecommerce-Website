$(document).ready(function(){
    $('#example').DataTable();
    // Edit record
    var table = $('#example').DataTable();    
    $('#example tbody').on( 'click', '#delete', function () {
    var data = table.row( $(this).parents('tr') ).data();
    
    $.ajax({
        type: 'get',
        url: '/Ecommerce/delete-product',
        data: {'id':data[0]},
        success:function(response){
            alert(response);
        },
    });
} );    



});

