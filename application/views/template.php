<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/bootstrap/docs/assets/ico/favicon.ico">

        <link href="<?php echo base_url(); ?>assets/css/layout.css" rel="stylesheet">  

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url(); ?>assets/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/bootstrap/docs/examples/non-responsive/non-responsive.css" rel="stylesheet">
        
        <link href='http://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css' /> <!-- Fonte Google Passion -->

        <!-- Jquery -->
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        
        <!-- JavaScripts -->
        <script src="<?php echo base_url(); ?>assets/bootstrap/docs/dist/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/bootstrap/docs/assets/js/docs.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/formattingForm.js"></script>
        
        
        
        <title><?php echo $Abatitle; ?></title>
    </head>

    <body>
        <!--<div style='min-height: 100%; position: relative'>-->
            <!--Include do menu da página de Login e Cadastro-->
            <?php 
                if($this->session->userdata('tipo') == '1'){   //Tipo Empresa
                    $this->load->view('menu/menu_empresa');
                }
                
                else{   //Nenhum Usuário Logado
                    $this->load->view('menu/menu_login');
                }
            ?>

            <!--Include do conteúdo-->
            <?php echo $contents; ?>

            <!--Include do footer-->
            <?php $this->load->view('footer/footer'); ?>
        <!--</div>-->
    </body>
</html>

