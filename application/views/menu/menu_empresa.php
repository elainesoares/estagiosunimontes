
<!--Menu da página de Empresa-->

<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <a class="logo" href="<?php echo base_url(); ?>">ESTÁGIOS UNIMONTES</a>
        <div class="header">
            <div class="container_header center">
                <ul>
                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li><a href="<?php echo base_url(); ?>">Empresa</a></li>
                    <li><a href="<?php echo base_url(); ?>">Vagas</a></li> 
                </ul>
            </div>
        </div>
        <div class="redesSociaisTop">
            <a href="http://www.facebook.com" target="_link"><div class="facebook"></div></a>
            <a href="http://www.twitter.com" target="_link"><div class="twitter"></div></a>
        </div>
        <div class="navbar-collapse collapse buttonLogin">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle login" data-toggle="dropdown" style=""><?php echo $usuario; ?></a>
                    <ul class="dropdown-menu" style="width: 50px;">
                        <p><a href="<?php echo base_url();?>empresaController/perfil" style="font-weight: bold">Perfil</a></p>
                        <p><a href="<?php echo base_url();?>/loginController/logout" style="font-weight: bold; border-top: 1px solid #ccc">Sair</a></p>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
