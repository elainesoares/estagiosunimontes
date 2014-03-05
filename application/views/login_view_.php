<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Estágios Unimontes</title>
    </head>
    <body>
        <div id="container">
            <h1>Login</h1>       
            <div>
                <?php 
                    echo form_open("maincontroller/login");     //Abre o formulário e aponta para o método login. Seria a tag form com o action, com o method padrão Post
                    echo form_fieldset("Login");
                    echo "Email: ";
                    echo form_input("email");
                    echo form_error('email');
                    echo "Senha: ";
                    echo form_password("senha");
                    echo form_error('senha');
                    echo form_fieldset_close();
                    echo form_submit("submit", "Enviar");
                    echo form_close();
                    
//                    echo anchor('maincontroller/enviaEmail', 'Enviar Email');
                ?>
            </div>
        </div>
    </body>
</html>