<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
/**
 * Essa classe irá guardar variáveis globais acessadas em todo o sistema
 * 
 * @author Elaine
 */
class VariaveisGlobais {
    private $base = 'estagiosunimontes';
    private $dominio = 'http://localhost/';
    private $pathDir = "http://localhost/estagiosunimontes";
    
    public function getBase(){
        return $base;
    }
    
    public function getPathDir(){
        return $pathDir;
    }
}
