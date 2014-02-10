<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Estágios Unimontes</title>
    </head>
    <body>
        <div id="container">
            <div>
                <?php 
                    echo form_open("maincontroller/editar_usuario/".$usuario->id);     //Abre o formulário e aponta para o método editar_usuario. Seria a tag form com o action, com o method padrão Post
                    echo form_fieldset("Conjunto de Campos em nosso Form");
                    echo "Nome: ";
                    echo form_input("nome",set_value('nome',$usuario->nome));
                    echo "Email: ";
                    echo form_input("email",set_value('email',$usuario->email));
                    echo form_fieldset_close();
                    echo form_submit("submit", "Enviar");
                    echo form_close();
                ?>
            </div>
          
        </div>
    </body>
</html>