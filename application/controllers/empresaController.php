<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Cadastro de Empresas 
 *
 * @author Elaine Soares Moreira
 */
class EmpresaController extends CI_Controller {

    public function index() {
        $this->load->library('form_validation');    //Carregando a library de validação
        
        $this->form_validation->set_rules('nome', 'Nome da Empresa', 'required');
        $this->form_validation->set_rules('usuario', 'Usuario', 'required');
        $this->form_validation->set_rules('senha', 'Senha', 'required');
        $this->form_validation->set_rules('repetirSenha', 'Repita a Senha', 'required|matches[senha]');
        $this->form_validation->set_rules('endereco', 'Endereco', 'required');
        $this->form_validation->set_rules('numero', 'Nº', 'required');
        $this->form_validation->set_rules('complemento', 'Complemento', 'required');
        $this->form_validation->set_rules('bairro', 'Bairro', 'required');
        $this->form_validation->set_rules('cep', 'Cep', 'required');
        $this->form_validation->set_rules('telefonePrincipal', 'Telefone 1', 'required');
        $this->form_validation->set_rules('cnpj', 'CNPJ', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('webSite', 'Web Site', 'required');
        $this->form_validation->set_rules('facebook', 'Facebook', 'required');
        $this->form_validation->set_rules('horarioInicio', 'Horário de Funcionamento', 'required');
        $this->form_validation->set_rules('horarioTermino', 'Horário de Funcionamento', 'required');
        $this->form_validation->set_rules('horarioSabadoInicio', 'Horário de Sábado', 'required');
        $this->form_validation->set_rules('horarioSabadoTermino', 'Horário de Sábado', 'required');
        $this->form_validation->set_rules('informacoesAdicionairs', 'Informações Adicionais', 'required');
        
        
        if ($this->form_validation->run() == FALSE) {
            echo 'ERROR';
            $this->template->load('template', 'empresa/cadastro_empresa');
        } 
        else {
            echo 'OK';
        }
    }

    function username_check($str) {
        if ($str == 'test') {
            $this->validation->set_message('username_check', 'The %s field can not be the word "test"');
            return FALSE;
        } 
        else {
            return TRUE;
        }
    }

    /* Método de Cadastro de Empresa */

    public function cadastro() {
        $data = array(
            'Abatitle' => 'Cadastro de Empresa | UNIVERSIDADE ESTADUAL DE MONTES CLAROS',
        );
        $this->template->load('template', 'empresa/cadastro_empresa', $data);
    }

    public function insertEmpresa() {  
        //Recebendo dados do formulário de cadastro da empresa. Dados da classe Usuario e Telefone
        $dataUsuario = array(
            'nome'          => $this->input->post('nome'),
            'logradouro'    => $this->input->post('endereco'),
            'numero'        => $this->input->post('numero'),
            'complemento'   => $this->input->post('complemento'),
            'bairro'        => $this->input->post('bairro'),
            'cep'           => $this->input->post('cep'),
            'cidade'        => $this->input->post('cidade'),
            'uf'            => $this->input->post('uf'),
            'usuario'       => $this->input->post('usuario'),
            'senha'         => $this->input->post('senha'),
            'email'         => $this->input->post('email'),
            'webSite'       => $this->input->post('webSite'),
            'tipo'          => $this->input->post('tipo'),
            'imagem'        => $this->input->post('imagem')
        );
        
        $dataRedeSocial = array(
            'nomeRede' => 'facebook',
            'enderecoRede' => $this->input->post('facebook')
        );

        //Dados da classe Empresa
        $dataEmpresa = array(
            'cnpj'                              => $this->input->post('cnpj'),
            'horarioFuncionamentoSemanaInicio'  => $this->input->post('horarioInicio'),
            'horarioFuncionamentoSemanaTermino' => $this->input->post('horarioTermino'),
            'horarioFuncionamentoSabadoInicio'  => $this->input->post('horarioSabadoInicio'),
            'horarioFuncionamentoSabadoTermino' => $this->input->post('horarioSabadoTermino'),
            'informacoesAdicionais'             => $this->input->post('informacoesAdicionais')
        );
        
        echo 'Informacoes: '.$dataEmpresa['informacoesAdicionais'];
        
        //Telefone do usuario
        $telefone = $this->input->post('telefonePrincipal');
         
        $this->load->model('empresa');    //Carregando o model empresa
        $this->empresa->addUsuario($dataUsuario);   
        $this->empresa->insertTelefone($telefone);
        $this->empresa->addEmpresa($dataEmpresa);
        
//        $this->load->model('telefone');    //Carregando o model empresa
//        $this->load->model('idioma');    //Carregando o model empresa
//        $this->telefone->addTelefone($dataUsuario, $dataTelefone);

//        $this->empresa->add_empresa($dataEmpresa, $dataUsuario);  //Enviando os dados da Empresa
        
//        $this->load->model('telefone'); //Carregando o model telefone
        
        
//        if ($this->empresa->add_empresa($data)) {    //Chama a função que irá gravar no banco o array $data
//            $this->session->set_flashdata('sucess', 'Cadastro Efetuado com Sucesso!');
//            redirect('empresaInstituicao/cadastro');
//        } else {    //Chama a função que irá gravar no banco o array $data
//            $this->session->set_flashdata('error', 'Erro ao Efetuar Cadastro');
//            redirect('empresaInstituicao/cadastro');
//        }
        
        
//        
    }

}

