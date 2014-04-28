<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Cadastro de Empresas 
 *
 * @author Elaine Soares Moreira
 */
class EmpresaController extends CI_Controller {
    
    public function index(){
        $data = array(
            'Abatitle'  => 'Home Empresa | UNIVERSIDADE ESTADUAL DE MONTES CLAROS',
            'tipo'      => $this->session->userdata('tipo'),
            'usuario'   => $this->session->userdata('usuario')
        );
        $this->template->load('template', 'empresa/home', $data);
    }
    
    /* Método de Cadastro de Empresa */
    public function cadastro() {
        $data = array(
            'Abatitle' => 'Cadastro de Empresa | UNIVERSIDADE ESTADUAL DE MONTES CLAROS',
        );
        $this->template->load('template', 'empresa/cadastro_empresa', $data);
    }
    
    public function cadastro_setor(){
        $data = array(
            'Abatitle' => 'Cadastro de Setor | UNIVERSIDADE ESTADUAL DE MONTES CLAROS',
        );
        $this->template->load('template', 'empresa/cadastro_setor', $data);
    }
    
    public function insertSetor(){
        $dataSetor = array(
            'nome'      => $this->input->post('nome'),
            'usuario'   => $this->input->post('usuario'),
            'senha'     => $this->input->post('senha')
        );
        
        $this->load->model('empresa');
        $this->empresa->insertSetor($dataSetor);
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
        
        //Telefone do usuario
        $telefone = $this->input->post('telefonePrincipal');
         
        $this->load->model('empresa');    //Carregando o model empresa
        $this->empresa->addUsuario($dataUsuario);   
        $this->empresa->insertTelefone($telefone);
        $this->empresa->addEmpresa($dataEmpresa);   //Cadastra a Empresa
        $this->empresa->insertRedeSocial($dataRedeSocial);
        
        $this->cadastro_setor();
        
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
    
    function getUsuario(){
        $usuario = $_POST['u'];
        echo 'usuario: '.$usuario;
        $this->load->model('empresa');
        $this->empresa->getUsuario($usuario);
    }
    
    public function perfil(){
        $this->load->model('empresa');
        $perfil = $this->empresa->getPerfil();
        
        $dataPerfil = array(
            'Abatitle'  => 'Perfil Empresa | UNIVERSIDADE ESTADUAL DE MONTES CLAROS',
            'tipo'      => $this->session->userdata('tipo'),
            'usuario'   => $this->session->userdata('usuario'),
            'nome'      => $perfil->nome,
            'logradouro'    => $perfil->logradouro,
            'numero'        => $perfil->numero,
            'complemento'   => $perfil->complemento,
            'bairro'        => $perfil->bairro,
            'cep'           => $perfil->cep,
            'cidade'        => $perfil->cidade,
            'uf'            => $perfil->uf,
            'email'         => $perfil->email,
            'webSite'       => $perfil->webSite,
            'imagem'        => $perfil->imagem,
            'webSite'       => $perfil->webSite,
            'telefone'      => $perfil->telefone,
            'horarioFuncionamentoSemanaInicio'  => $perfil->horarioFuncionamentoSemanaInicio,
            'horarioFuncionamentoSemanaTermino' => $perfil->horarioFuncionamentoSemanaTermino,
            'horarioFuncionamentoSabadoInicio'  => $perfil->horarioFuncionamentoSabadoInicio,
            'horarioFuncionamentoSabadoTermino' => $perfil->horarioFuncionamentoSabadoTermino,
            'cnpj'                  => $perfil->cnpj,
            'informacoesAdicionais' => $perfil->informacoesAdicionais,
            'nomeRede'              => $perfil->nomeRede,
            'enderecoRede'          => $perfil->enderecoRede,
        );
        $this->template->load('template', 'empresa/perfil', $dataPerfil);
    }

}



