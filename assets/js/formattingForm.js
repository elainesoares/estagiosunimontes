function verificaSenha() {
    console.log('verificaSenha');
    var senha = $("#senha").val();  //Pega o valor do campo senha
    var repetirSenha = $("#repetirSenha").val();    //Pega o valor do campo repetirSenha
    $("#senha").focus(function() {
        
    });
    
    //Verifica os dois campos, se são diferentes
    if(senha != repetirSenha){
//        $("#repetirSenha").css('border', '1px solid red');
        $('.spanError').show();     //Exibe a informação de senhas não correspondentes
    }
    else{
        $('.spanError').empty();
    }
}

