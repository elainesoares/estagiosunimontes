<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Estágios Unimontes</title>
        <?php 
            
        ?>
    </head>
    <body>
        <div id="container">
            <h1>Login</h1>       
            <div>
                    <div class="container" style="box-shadow: 0px 15px 20px #9E9E9E; background: white; min-height:100%; width: 960px; position:relative; ">
                        <!--<div class="error" id="erro"><img src="img/icons/error.png" width="40" style="margin-right: 10px; ">Usuário e/ou Senha digitados errados!</div>-->
                        <form name='login' action="login/index" method='POST' class="form-horizontal" style='margin-left: auto; margin-right: auto; width: 452px; margin-top: 122px; border-radius: 10px; border: 3px solid #EBEBE7; padding: 26px; '>
<!--                            <fieldset>
                                <legend>Login</legend>
                            </fieldset>-->
                            <div class="control-group">
                                <label class="control-label" >Usuário</label>
                                <div class="controls">
                                    <input type="text" id="usuario" name='usuario' placeholder="Usuário">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="">Senha</label>
                                <div class="controls">
                                    <input type="password" id="senha" name='senha' placeholder="Senha">
                                </div>
                            </div>

                            <button name='entrar' type="submit" class="btn" style='float: right; margin-right: 52px; margin-bottom: 20px;'>Entrar</button>
                            <div class='clear'></div>

                            <p><a href="<?php echo base_url();?>/login/esquecisenha">Esqueci minha senha</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url();?>/login/esqueciusuario">Esqueci meu usuário</a></p>
                            <p style='margin-top: 10px;'><a href='cadastrar.php'>Criar uma conta</a>
                        </form>
                    </div>
            </div>
        </div>
    </body>
</html>