<?php
/**
 * Description of redeSocial
 *
 * @author Elaine Soares Moreira
 */
class RedeSocial extends CI_Model{
    //Atributos
    private $nomeRede;
    private $enderecoRede;
    
    //Método construtor
    function __construct() {
        parent::__construct();
    }
    
    /* Método para atribuir um valor a um atributo
    * $campo: nome do atributo
    * $valor: valor a ser salvo no atributo
    */
    public function setAtributo($campo, $valor){
        $this->$campo = $valor;
    }
    
    /* Método para cadastrar no BD os dados da Rede Social
     * $idEmpresa: idFkEmpresa
     */
    public function addRedeSocial($idEmpresa){
        $dataRedeSocial = array(
                'nomeRede'      => $this->nomeRede,
                'enderecoRede'  => $this->enderecoRede,
                'idFkEmpresa'   => $idEmpresa
        );
        
        $this->db->insert('redeSocial', $dataRedeSocial);
    }
}
