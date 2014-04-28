<?php
/**
 * Description of idioma
 *
 * @author Elaine Soares Moreira
 */
class Idioma extends CI_Model{
   private $idioma;
   
   function __construct() {
       parent::__construct();
   }
   
   public function addIdioma($dataUsuario, $dataTelefone){
       echo 'addIdioma';
       $this->db->insert('usuario', $dataUsuario);
   }
}
