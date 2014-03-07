<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class MainController extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    /* O método index é automaticamente chamado quando não se define o método */
    public function index() {
        //$this->load->helper("form");    //Adiciona a biblioteca (helper) form ao sistema
//            $this->load->model('usuario_model');    //Carrega o model usuario_model
//            $data['usuarios'] = $this->usuario_model->get_all("");    //Recebe os valores retornados do método get_all
//            $this->load->view('main_view', $data);   //Chama a view welcome_message
//            $this->load->view('login_view');
//        $this->load->library('parser');
//        $dados = array(
//            'Abatitle' => 'ESTÁGIOS | UNIVERSIDADE ESTADUAL DE MONTES CLAROS',
//        );
//        $this->parser->parse('index', $dados);  //index é o nome da view e dados a variável com os dados
        $data = array(
            'Abatitle' => 'ESTÁGIOS | UNIVERSIDADE ESTADUAL DE MONTES CLAROS',
        );
        $this->load->library('template');
        $this->template->load('template', 'login_cadastro/index', $data);
    }

    public function create_usuario() {
        $this->load->model('usuario_model');    //Carrega o model
        //Recebe os dados vindos da view
        $data = array(
            'nome' => $this->input->post('nome'),
            'email' => $this->input->post('email'),
            'senha' => $this->input->post('senha')
        );

        if ($this->usuario_model->add_record($data)) {    //Chama a função que irá gravar no banco o array $data
            $this->session->set_flashdata('msg', 'Criado com Sucesso!');
            redirect('maincontroller');
        }
    }

    public function delete_usuario() {
        $this->load->model('usuario_model');    //Carrega o model

        if ($this->usuario_model->delete_record()) {
            $this->session->set_flashdata('msg', 'Deletado com Sucesso!');
            redirect('maincontroller');
        } else {
            die("Não deletou");
        }
    }

    public function editar_usuario($id) {
        $this->load->model('usuario_model');
        $data['usuario'] = $this->usuario_model->get_by_id($id);

        $this->form_validation->set_rules('nome', 'nome', 'trim|required');     //Validação do campo nome e que é obrigatório

        if ($this->form_validation->run()) {
            $_POST['id'] = $id;
            if ($this->usuario_model->update_record($_POST)) {
                redirect('maincontroller');
            }
        }
        $this->load->view('update_view', $data);
    }

    public function login() {
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