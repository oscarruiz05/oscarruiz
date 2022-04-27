$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function ver(id){
    $.ajax({
        url: '/admin/proyectos/ver/'+id,
        type: 'POST',
        success: function(data){
            ({data} = data);
            console.log(data);
        }, error(error){
            console.log(error);
        }
    });
}

function eliminar(id){

}
