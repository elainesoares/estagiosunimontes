<?php
/**
 * Description of telefone
 *
 * @author Elaine Soares Moreira
 */
class Telefone extends CI_Model{
    //Atributos
    private $telefone;
   
   //Método Construtor
   function __construct() {
       parent::__construct();
   }
   
//   public function __set($campo, $valor) {
//       $this->$campo = $valor;
//   }
   
//   public function __get($campo) {
//       return $this->$campo;
//   }
   
   /* Método para atribuir um valor a um atributo
    * $campo: nome do atributo
    * $valor: valor a ser salvo no atributo
    */
   public function setAtributo($campo, $valor){
       $this->$campo = $valor;
   }
   
   /* Método para retornar o valor de um atributo
    * $campo: nome do atributo
    * return: valor do atributo
    */
   public function getAtributo($campo){
       return $this->$campo;
   }

   /* Método para cadastrar o telefone
    * $idUsuario: o id do ultimo usuario salvo
    */
   public function addTelefone($idUsuario){
        //Salva em um array os dados a serem inseridos na tabela telefone
        $dataTelefone = array(
            'telefone'      => $this->getAtributo('telefone'),
            'idFkUsuario'   => $idUsuario
        );
        
        $this->db->insert('telefone', $dataTelefone);   //Insere na tabela telefone
   }
}
