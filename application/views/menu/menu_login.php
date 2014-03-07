
<!--Menu da página da página de login e cadastro-->

<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="logo" href="<?php echo base_url(); ?>">ESTÁGIOS UNIMONTES</a>
        </div>
        <div class="redesSociaisTop">
            <a href="http://www.facebook.com" target="_link"><div class="facebook"></div></a>
            <a href="http://www.twitter.com" target="_link"><div class="twitter"></div></a>
        </div>
        <div class="navbar-collapse collapse buttonLogin">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <button name="entrar" class="dropdown-toggle btn btn-primary" data-toggle="dropdown" style="margin-top: 15px; font-weight: bold; margin-right: 30px;">Entrar</button>
                    <ul class="dropdown-menu">
                        <form name='login' action="login/index" method='POST' style="margin-left: auto; margin-right: auto; width: 200px;">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Usuário" style="margin-bottom: 10px;" >
                            <input type="password" class="form-control" id="inputEmail3" placeholder="Senha" style="margin-bottom: 10px;">
                            <button name="entrarPopup" type="submit" class="btn btn-primary" style="padding: 5px 80px; margin-bottom: 10px; font-weight: bold; ">Entrar</button>
                            <p><a href="<?php echo base_url(); ?>/login/esqueci_senha" style="font-weight: bold">Esqueci a senha</a></p>
                        </form>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
