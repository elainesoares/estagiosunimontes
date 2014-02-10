<?php

class usuario_model extends CI_Model {

    public function get_all($nome) {
//            $query = $this->db->query("SELECT * FROM usuario");
        //Utilizando Active Record
//            $this->db->where('nome', $nome);  //Acrescentando uma cláusula where em que nome=Elaine Soares Moreira
        $this->db->like('nome', $nome);  //Acrescentando uma cláusula where com like em que nome=Moreira
        $query = $this->db->get('usuario'); //Passa o nome da tabela do banco de dados. Tem o mesmo efeito do Select * From
        //Retorna o resultado vindo do banco
        return $query->result();
    }

    //Adiciona novos registros no BD
    public function add_record($options = array()) {
        $this->db->insert('usuario', $options); //Insere na tabela usuario as options
        return $this->db->affected_rows();      //Número de linhas afetadas
    }
    
    //Deleta registro
    public function delete_record() {
        $this->db->where('id', $this->uri->segment(3));      //Condição para deletar
        $this->db->delete('usuario');    //Tabela onde ocorrerá o delete

        return $this->db->affected_rows();   //Número de linhas afetadas
    }
    
    //Update dos registros
    public function update_record($options = array()){
        //Verifica se as variáveis existem e seta os valores
        if(isset($options['nome']))
            $this->db->set('nome', $options['nome']);
        if(isset($options['email']))
            $this->db->set('email', $options['email']);
        if(isset($options['senha']))
            $this->db->set('senha', $options['senha']);
        
        $this->db->where('id', $options['id']); //Executa a cláusula where
            
        $this->db->update('usuario');   //Executa o update
        
        return $this->db->affected_rows();
    }
    
    //Depois de realizar o update roda essa função retornando os novos dados para preencher o formulário
    public function get_by_id($id){
        $this->db->where('id', $id);
        $query = $this->db->get('usuario');
        return $query->row(0);
    }
    
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
