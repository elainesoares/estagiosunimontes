<?php
require(APPPATH.'models/telefone.php');

/**
 * Description de Usuario
 *
 * @author Elaine Soares Moreira
 */
class Usuario extends CI_Model{
    //Atributos
    private $nome;
    private $telefone;
    private $logradouro;
    private $numero;
    private $complemento;
    private $bairro;
    private $cep;
    private $cidade;
    private $uf;
    private $usuario;
    private $senha;
    private $email;
    private $webSite;
    private $imagem;
    private $tipo;
    private $idUsuario;
    
    //Método construtor
    function __construct() {
        parent::__construct();
    }
    
    /* Método para retornar o valor de um atributo
    * $campo: nome do atributo
    * return: valor do atributo
    */
   public function getAtributo($campo){
       return $this->$campo;
   }
    
    /* Método para adicionar o Usuário no Banco de Dados
     * $dataUsuario: dados a serem inseridos na tabela usuario
     * $telefone: telefone a ser inserido na tabela telefone
     */ 
    public function addUsuario($dataUsuario, $telefone){
        $this->db->insert('usuario', $dataUsuario);     //Inserindo no banco de dados. Tabela usuario
        
        $this->tel = new Telefone; //Instancia um objeto da classe Telefone
        $this->tel->setAtributo('telefone', $telefone);     //Seta o valor do atributo telefone na classe Telefone
        $idUsuario = $this->getMaxId();         //recupera o max id de usuario
        $this->tel->addTelefone($this->idUsuario);
    }
    
    /*Método para retornar o ultimo id cadastrado
     * return: retorna o max id (ultimo id)
     */
    public function getMaxId(){
        $this->db->select_max('id');    //Recupera o valor mais alto do id... (ou seja, o ultimo id cadastrado)
        $query = $this->db->get('usuario');     //da tabela usuario. 
        $resultado = $query->row();     //Como está sendo retornado apenas uma linhas, pode-se utilizar o método row()
        $this->idUsuario = $resultado->id;    //Salva o id do usuario na variável $idUsuario
        
        return $this->idUsuario;      //Retorna o max id da tabela usuario
    }
}

