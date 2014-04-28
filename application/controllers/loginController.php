<?php
require(APPPATH.'controllers/empresaController.php');

/**
 * Description of LoginController
 *
 * @author Elaine
 */
class LoginController extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->model('login');
        $tipo = $this->login->login($this->input->post('usuario'), $this->input->post('senha'));
        
        if($tipo){
            $novosDados = array(
                'usuario'   => $this->input->post('usuario'),
                'tipo'      => $tipo,
                'logado'    => TRUE
            );
            
            $this->session->set_userdata($novosDados);
            
            $url = base_url()."empresaController";
            
            header("Location: ".$url);
        }
        else{
            $data = array(
                'AbaTitle'  => 'Home Empresa | UNIVERSIDADE ESTADUAL DE MONTES CLAROS',
                'menu'      => 'LOGIN'
            );
            $this->template->load('template', 'login_cadastro/index', $data);
        }       
    }
    
    public function logout(){
        $this->session->sess_destroy();
        header("Location: ".base_url()."maincontroller");
    }
 
    //Função para quando se esquece a Senha
    public function esqueci_senha(){
        echo "Esqueci Minha Senha";
    }
    
    //Função para quando se esquece o usuário
    public function esqueci_usuario(){
        echo "Esqueci Usuário";
    }

}
