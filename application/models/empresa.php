<?php
/**
 * Description of empresaInsituicao
 *
 * @author Elaine
 */
class EmpresaInsituicaoModel extends CI_Model{
    
    /*Método de inserção de Empresa/Insituição*/
    public function add_empresa(){
        echo 'Entrei';
        $this->db->insert(); //Insere na tabela usuario as options
    }
}
