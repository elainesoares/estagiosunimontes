<?php
require(APPPATH.'core/usuario.php'); 
 
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

    /* Descrição: Método de inserção de Empresa/Insituição
     * Parâmetros: $dataEmpresa: Dados da Empresa
     * $dataUsuario: Dados do Usuario
     */
    public function addEmpresa($dataEmpresa){
        $dataEmpresa['idFkUsuario'] = $this->getAtributo('idUsuario');  //Acrescenta no array $dataEmpresa a FK do Usuario
        $this->db->insert('empresa', $dataEmpresa);     //Insere na tabela empresa
    }
}

