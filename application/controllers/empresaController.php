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
    
    /* Carrega a view com o formulário de cadastro de empresa */
    public function cadastro() {
        $data = array(
            'Abatitle' => 'Cadastro de Empresa | UNIVERSIDADE ESTADUAL DE MONTES CLAROS',
        );
        $this->template->load('template', 'empresa/cadastro_empresa', $data);   
    }
    
    /* Carrega a view com o formulário de cadastro de setor
     */
    public function cadastroSetor(){
        $data = array(
            'Abatitle' => 'Cadastro de Setor | UNIVERSIDADE ESTADUAL DE MONTES CLAROS',
        );
        $this->template->load('template', 'empresa/cadastro_setor', $data);
    }
    
    /* Envia para o método insertSetor no model empresa os dados do setor, a fim de ser cadastrado no BD
     */
    public function insertSetor(){
        $dataSetor = array(
            'nome'      => $this->input->post('nome'),
            'usuario'   => $this->input->post('usuario'),
            'senha'     => $this->input->post('senha')
        );
        
        $this->load->model('empresa');
        $this->empresa->insertSetor($dataSetor);
        
//         $data = array(
//            'Abatitle' => 'Cadastro de Setor | UNIVERSIDADE ESTADUAL DE MONTES CLAROS',
//        );
//        $this->template->load('template', 'empresa/success_cadastro_setor', $data);
    }

    /* Envia os dados do formulário de cadastro para o model empresa, a fim de ser salvo no BD*/
    public function insertEmpresa() {  
        //Recebendo dados do formulário de cadastro da empresa. Dados da classe Usuario
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
        
         header("Location: ".  base_url().'empresaController/cadastroSetor');    
    }
    
    function getUsuario(){
        $usuario = $_POST['u'];
        echo 'usuario: '.$usuario;
        $this->load->model('empresa');
        $this->empresa->getUsuario($usuario);
    }
    
    public function perfil($msg = NULL){
        $this->load->model('empresa');
        $perfil = $this->empresa->getPerfil($this->session->userdata('usuario'));
        
        $dataPerfil = array(
            'Abatitle'  => 'Perfil Empresa | UNIVERSIDADE ESTADUAL DE MONTES CLAROS',
            'tipo'      => $this->session->userdata('tipo'),
            'usuario'   => $this->session->userdata('usuario'),
            'id'        => $perfil->id,
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
            'msg'                   => $msg
        );
//        echo $perfil->id;
        $this->template->load('template', 'empresa/perfil', $dataPerfil);
    }
    
    /* Recebe os dados alterados do perfil da empresa e envia para o model para salvá-los no BD
     */
    public function salvar_alteracoes_perfil(){
        $dataUsuario = array(
            'id'            => $this->input->post('id'),
            'nome'          => $this->input->post('nome'),
            'logradouro'    => $this->input->post('endereco'),
            'numero'        => $this->input->post('numero'),
            'complemento'   => $this->input->post('complemento'),
            'bairro'        => $this->input->post('bairro'),
            'cep'           => $this->input->post('cep'),
            'cidade'        => $this->input->post('cidade'),
            'uf'            => $this->input->post('uf'),
            'email'         => $this->input->post('email'),
            'webSite'       => $this->input->post('webSite'),
            'imagem'        => $this->input->post('imagem')
        );
        
         $dataRedeSocial = array(
            'nomeRede' => 'facebook',
            'enderecoRede' => $this->input->post('facebook')
        );

        //Dados da classe Empresa
        $dataEmpresa = array(
            'horarioFuncionamentoSemanaInicio'  => $this->input->post('horarioInicio'),
            'horarioFuncionamentoSemanaTermino' => $this->input->post('horarioTermino'),
            'horarioFuncionamentoSabadoInicio'  => $this->input->post('horarioSabadoInicio'),
            'horarioFuncionamentoSabadoTermino' => $this->input->post('horarioSabadoTermino'),
            'informacoesAdicionais'             => $this->input->post('informacoesAdicionais')
        );
        
        $telefone = array(
            'telefone' => $this->input->post('telefonePrincipal')
        );
        
        $this->load->model('empresa');    //Carregando o model empresa
        $this->empresa->updateUsuario($dataUsuario); 
        $this->empresa->updateTelefone($dataUsuario['id'], $telefone);
        $this->empresa->updateEmpresa($dataUsuario['id'], $dataEmpresa); 
        $this->empresa->updateRedeSocial($dataUsuario['id'], $dataRedeSocial);
         
        $msg_salvamento = 'Alterações salvas com sucesso!';
        $this->perfil($msg_salvamento);
        

//        $this->empresa->addEmpresa($dataEmpresa);   //Cadastra a Empresa
//        $this->empresa->insertRedeSocial($dataRedeSocial);
    }

}



