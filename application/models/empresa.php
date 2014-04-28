<?php
require(APPPATH.'core/usuario.php'); 
require(APPPATH.'models/redeSocial.php');
require(APPPATH.'models/setor.php');
 
/**
 * Description of Empresa
 *
 * @author Elaine
 */
class Empresa extends Usuario{
    private $horarioFuncionamentoSemanaIniciio;
    private $horarioFuncionamentoSemanaTermino;
    private $horarioFuncionamentoSabadoInicio;
    private $horarioFuncionamentoSabadoTermino;
    private $cnpj;
    private $telefone;
    private $redeSocial;
    private $idEmpresa;
    private $setor;

    //Método construtor
    function __construct() {
        parent::__construct();
    }
    
    /* Método para retornar o ultimo id cadastrado
     * return: retorna o max id (ultimo id)
     */
    public function getMaxIdEmpresa() {
        $this->db->select_max('id');    //Recupera o valor mais alto do id... (ou seja, o ultimo id cadastrado)
        $query = $this->db->get('empresa');     //da tabela empresa. 
        $resultado = $query->row();     //Como está sendo retornado apenas uma linhas, pode-se utilizar o método row()
        $this->idEmpresa = $resultado->id;    //Salva o id da empresa na variável $idEmpresa
        
        return $this->idEmpresa;      //Retorna o max id da tabela empresa
    }
    
    /* Método que chamará a função addTelefone da classe Telefone
     * $dataRedeSocial: dados da rede social
     */
    public function insertRedeSocial($dataRedeSocial){
        $this->redeSocial = new RedeSocial;    //Instancia um objeto da classe RedeSocial
        $this->redeSocial->setAtributo('nomeRede', $dataRedeSocial['nomeRede']);     //Seta o valor do atributo nomeRede na classe RedeSocial
        $this->redeSocial->setAtributo('enderecoRede', $dataRedeSocial['enderecoRede']);    //Seta o valor do atributo enderecoRede na classe RedeSocial
        $this->redeSocial->addRedeSocial($this->getMaxIdEmpresa());
    }

    /* Descrição: Método de inserção de Empresa/Insituição
     * Parâmetros: $dataEmpresa: Dados da Empresa
     * $dataUsuario: Dados do Usuario
     */
    public function addEmpresa($dataEmpresa){
        $dataEmpresa['idFkUsuario'] = $this->getAtributo('idUsuario');  //Acrescenta no array $dataEmpresa a FK do Usuario
        $this->db->insert('empresa', $dataEmpresa);     //Insere na tabela empresa
    }
    
    public function insertSetor($dataSetor){
        $this->setor = new Setor;    //Instancia um objeto da classe Setor
        $this->setor->setAtributo('nome', $dataSetor['nome']);     //Seta o valor do atributo nome na classe Setor
        $this->setor->setAtributo('usuario', $dataSetor['usuario']);    //Seta o valor do atributo usuario na classe Setor
        $this->setor->setAtributo('senha', $dataSetor['senha']);    //Seta o valor do atributo senha na classe Setor
        $this->setor->addSetor($this->getMaxIdEmpresa());
    }
}

