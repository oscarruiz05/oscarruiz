$("#envisar_mensaje").click(function(e){

    e.preventDefault();

    let nombre = $("input[name=nombre]").val();
    let correo = $("input[name=correo]").val();
    let asunto = $("input[name=asunto]").val();
    let mensaje = $("textarea#mensaje").val();

    $.ajax({
        type: 'POST',
        url: "{{route('contacto')}}",
        data: {nombre:nombre, correo:correo, asunto:asunto, mensaje:mensaje},
        success:function(data){
            console.log(data);
        }
    });
});