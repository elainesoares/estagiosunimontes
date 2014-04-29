<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class MainController extends CI_Controller {
    /* O método index é automaticamente chamado quando não se define o método */
    public function index() {
        $data = array(
            'Abatitle' => 'ESTÁGIOS | UNIVERSIDADE ESTADUAL DE MONTES CLAROS',
            'tipo' => $this->session->userdata('tipo'),
            'usuario' => $this->session->userdata('usuario')
        );
        
        if ($this->session->userdata('tipo') == '1') {
            $this->template->load('template', 'empresa/home', $data);   //Carregando a view home da empresa
        } 
        else {
            $this->template->load('template', 'login_cadastro/index2', $data);  //Carregando a view index sem login
        }
    }

    public function enviaEmail() {
        $config['protocol'] = 'mail';
//            $config['smtp_host'] = 'localhost';
//            $config['smtp_port'] = '25';
//            $config['smtp_user'] = '';
//            $config['smtp_pass'] = '';

        $this->load->library('email', $config);     //Carrega a library email

        $this->email->initialize($config);    //inicializa as configurações no servidor
        $this->email->from('elainesoaresm@gmail.com');  //Destinatário
        $this->email->to('elainesoaresm@gmail.com');    //Remetente

        $this->email->subject('Assunto do email');      //Assunto do email
        $this->email->message('Corpo do email');        //Corpo do email
        $this->email->send();     //Envia o email

        echo $this->email->print_debugger();
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */