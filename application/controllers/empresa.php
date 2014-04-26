<?php
/**
 * Cadastro de Empresas e Acadêmicos
 *
 * @author Elaine
 */
class EmpresaInstituicao extends CI_Controller{
    
    /*Método de Cadastro de Empresa*/
    public function cadastro(){
       $data = array(
            'Abatitle' => 'Cadastro de Empresa | UNIVERSIDADE ESTADUAL DE MONTES CLAROS',
        );
        $this->template->load('template', 'empresa/cadastro_empresa', $data);
    }
    
    public function insertEmpresa(){
        $data = array(
            'nome' => $this->input->post(),
            'logradouro' => $this->input->post(),
            'numero' => $this->input->post(),
            'complemento' => $this->input->post(),
            'bairro' => $this->input->post(),
            'cep' => $this->input->post(),
            'cidade' => $this->input->post(),
            'uf' => $this->input->post(),
            'usuario' => $this->input->post(),
            'senha' => $this->input->post(),
            'email' => $this->input->post(),
            'webSite' => $this->input->post(),
            'tipo' => $this->input->post(),
        );
        
        $this->load->model('empresaInsituicaoModel', 'empresa');    //Carregando o model empresaInsituicaoModel e apelidando de empresa
        
        if ($this->empresa->add_empresa($data)) {    //Chama a função que irá gravar no banco o array $data
            $this->session->set_flashdata('sucess', 'Cadastro Efetuado com Sucesso!');
            redirect('empresaInstituicao/cadastro');
        }
        
        else {    //Chama a função que irá gravar no banco o array $data
            $this->session->set_flashdata('error', 'Erro ao Efetuar Cadastro');
            redirect('empresaInstituicao/cadastro');
        }        
    }
}
