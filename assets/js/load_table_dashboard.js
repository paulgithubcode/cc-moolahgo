$(document).ready(function(){
    SalesGet();
/*    $('#sales tbody ').html(
        '<tr>'+
            '<td>'+'1'+'</td>'+
            '<td>'+'nama produk'+'</td>'+
            '<td>'+'qty produk'+'</td>'+
            '<td>'+'tgl'+'</td>'+
        '<tr>'
    );*/
    $('#sales').DataTable({
        "bPaginate": false,
        "bLengthChange": false,
        "bFilter": false,
        "bInfo": false,
        "bAutoWidth": false,
    });
});