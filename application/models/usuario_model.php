<?php

class usuario_model extends CI_Model {
    //Método que irá retornar um registro em que o email seja igual a $email e senha igual a $senha
    public function get_usuario($email, $senha){
        $this->db->where('email', $email);
        $this->db->where('senha', $senha);
        $query = $this->db->get('usuario');
        return $query->row(0);
    }
    
    public function login($options = array()){
        $usuario = $this->get_usuario($options['email'], $options['senha']);
        if(!$usuario) return false;
        
        return true;
    }
}
