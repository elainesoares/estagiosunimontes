<?php
/**
 * Description of Login
 *
 * @author Elaine
 */
class Login extends CI_Model{
    //Método construtor
    function __construct() {
        parent::__construct();
    }
    
    /*  Método que verifica a existência de usuario
     * $usuario: nome de usuário digitado
     * $senha: senha digitada
     */
    public function login($usuario, $senha){
        $this->db->select('tipo');
        $this->db->where('usuario', $usuario);
        $this->db->where('senha', $senha);
        $query = $this->db->get('usuario');
        $result = $query->row();
        return $result->tipo;
    }
}
