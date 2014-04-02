<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/bootstrap/docs/assets/ico/favicon.ico">

        <link href="<?php echo base_url(); ?>assets/css/layout.css" rel="stylesheet">  
        <!--<link href="<?php // echo base_url(); ?>assets/css/cep/bootstrap.css" rel="stylesheet">-->  

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url(); ?>assets/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
        <!--<link href="<?php echo base_url(); ?>assets/bootstrap/docs/dist/css/bootstrap.min.css" rel="stylesheet">-->

        <!-- Custom styles for this template -->
        <link href="<?php echo base_url(); ?>assets/bootstrap/docs/examples/non-responsive/non-responsive.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css' />

        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <title><?php echo $Abatitle; ?></title>
    </head>

    <body>
        <!--Include do menu da página de Login e Cadastro-->
        <?php $this->load->view('menu/menu_login')?>

        <!--Include do conteúdo-->
        <?php echo $contents; ?>

        <!--Include do footer-->
        <?php $this->load->view('footer/footer'); ?>
        
        <!--Carregando JavaScript-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/bootstrap/docs/dist/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/bootstrap/docs/assets/js/docs.min.js"></script>
    </body>
</html>

