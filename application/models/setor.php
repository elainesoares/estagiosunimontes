<?php
/**
 * Description of setor
 *
 * @author Elaine Soares Moreira
 */
class Setor extends CI_Model{
    //Atributos
    private $nome;
    private $usuario;
    private $senha;
    
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
    
    public function addSetor($idEmpresa){
        $dataSetor= array(
                'nome'          => $this->nome,
                'usuario'       => $this->usuario,
                'senha'         => $this->senha,
                'idFkEmpresa'   => $idEmpresa
        );
        
        $this->db->insert('setor', $dataSetor);
    }
}
