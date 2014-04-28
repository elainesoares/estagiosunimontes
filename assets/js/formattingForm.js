function verificaSenha() {
    console.log('verificaSenha');
    var senha = $("#senha").val();  //Pega o valor do campo senha
    var repetirSenha = $("#repetirSenha").val();    //Pega o valor do campo repetirSenha
   
   console.log(senha);
   console.log(repetirSenha);
    //Verifica os dois campos, se são diferentes
    if(senha != repetirSenha){
        console.log('dif');
//        $("#repetirSenha").css('border', '1px solid red');
        $('.spanError').show();     //Exibe a informação de senhas não correspondentes
    }
    else{
        $('.spanError').empty();
    }
}

function verificaUsuario(){
    console.log('verificaUsuário');
    var usuario = new Array();
    usuario['u'] = $("#usuario").val();  //Pega o valor do campo usuario
    console.log(usuario);
    $.ajax({
        type: 'POST',
        url: "getUsuario",
        data: usuario,
        success: usuarioResponse
    });
}

function usuarioResponse(data, textStatus, jqXHR){
}

