
<!--Menu da página da página de login e cadastro-->

<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <a class="logo" href="<?php echo base_url(); ?>">ESTÁGIOS UNIMONTES</a>
        <div class="redesSociaisTop">
            <a href="http://www.facebook.com" target="_link"><div class="facebook"></div></a>
            <a href="http://www.twitter.com" target="_link"><div class="twitter"></div></a>
        </div>
        <div class="navbar-collapse collapse buttonLogin">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle login" data-toggle="dropdown" style="">Entrar</a>
                    <ul class="dropdown-menu">
                        <form name='login' action="<?php echo base_url()?>/loginController/index" method='POST' style="margin-left: auto; margin-right: auto; width: 200px;">
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuário" style="margin-bottom: 10px;" >
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" style="margin-bottom: 10px;">
                            <button name="entrarPopup" type="submit" class="btn btn-primary" style="padding: 5px 80px; margin-bottom: 10px; font-weight: bold; ">Entrar</button>
                            <p><a href="<?php echo base_url(); ?>/loginController/esqueci_senha" style="font-weight: bold">Esqueci a senha</a></p>
                        </form>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
