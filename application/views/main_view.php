<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Estágios Unimontes</title>
    </head>
    <body>
        <div id="container">
            <h1> Bem Vindo(a)!</h1>
            
            <!--Exibe mensagem se foi adiciona o registro ou não-->
            <div>
                <?php 
                    if($this->session->flashdata('msg'))
                        echo $this->session->flashdata('msg');
                ?>
            </div>
            
            <div>
                <?php 
                    echo form_open("maincontroller/login");     //Abre o formulário e aponta para o método login. Seria a tag form com o action, com o method padrão Post
                    echo form_fieldset("Conjunto de Campos em nosso Form");
                    echo "Usuário: ";
                    echo form_input("usuario");
                    echo "Senha: ";
                    echo form_password("senha");
                    echo form_fieldset_close();
                    echo form_submit("submit", "Enviar");
                    echo form_close();
                ?>
            </div>
            
            <div>
                <?php 
                    foreach ($usuarios as $a){
                        echo "<li>".anchor("maincontroller/delete_usuario/$a->id", "Deletar ")." - ".$a->nome." - ".$a->email."</li>";    //anchor é uma função do CodeIgniter
                    }
                ?>
            </div>
            
            <div>
                <?php 
                    echo form_open("maincontroller/create_usuario");     //Abre o formulário e aponta para o método login. Seria a tag form com o action, com o method padrão Post
                    echo form_fieldset("Novo Usuário");
                    echo "Nome: ";
                    echo form_input("nome");
                    echo "Email: ";
                    echo form_input("email");
                    echo "Senha: ";
                    echo form_password("senha");
                    echo form_fieldset_close();
                    echo form_submit("submit", "Enviar");
                    echo form_close();
                ?>
            </div>
        </div>
    </body>
</html>