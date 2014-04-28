<?php
/**
 * Description of login
 *
 * @author Elaine
 */
class LoginController extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        
        
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|callback__check_login');     //callback__check_login: chama a função criada logo abaixo

        if ($this->form_validation->run())
            die('Me loguei');     //Se foi retornado true da função _check_login

        $this->load->view('login_view');    //Se não for encontrado o usuário, mantém a view 
    }

    public function _check_login($email) {
        if ($this->input->post('senha')) {    //Se tiver alguma coisa no campo senha
            $this->load->model('usuario_model');
            $user = $this->usuario_model->get_usuario($email, $this->input->post('senha')); //Consulta se o usuário existe

            if ($user)
                return true;  //Se encontrar o usuário retorna true
        }

        //Se não encontrar o usuário
        $this->form_validation->set_message('_check_login', 'Usuario / senha errado(s)');
        return false;
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
