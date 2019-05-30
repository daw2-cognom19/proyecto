<?php
class Validator {
    public $errors = array();

    public function name($name){
        $this->name = $name;
        return $this;
    }
    
    public function value($value){ 
        $this->value = $value;
        return $this;
    }
    
    public function required(){
        if((isset($this->file) || ($this->value == '' || $this->value == null)){
            $this->errors[] = 'Campo '.$this->name.' obligatorio.';
        }            
        return $this;
    }

    public function utf8($valor){
        return htmlspecialchars($valor, ENT_QUOTES, 'UTF-8');
    }

    public function esCorrecto(){
        if(empty($this->errors)) {
            return true;
        }else{
            return false;
        } 
    }
    
    public static function esEntero($valor){
        if(filter_var($valor, FILTER_VALIDATE_INT)) {
            return true;
        }else{
            return false;
        } 
    }
    public static function esDecimal($valor){
        if(filter_var($valor, FILTER_VALIDATE_FLOAT)) {
            return true;
        }else{
            return false;
        } 
    }
            
    public static function esBooleano($valor){
        if(is_bool(filter_var($valor, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE))) {
            return true;
        }else{
            return false;
        } 
    }
    
    public static function esEmail($valor){
        if(filter_var($valor, FILTER_VALIDATE_EMAIL)) {
            return true;
        }else{
            return false;
        } 
    }

    public static function esDNI($dni) {
        if(strlen($dni) <= 8) {
            echo "DNI demasiado corto.";
        }
        
        $dni = strtoupper($dni);
     
        $letra = substr($dni, -1, 1);
        $numero = substr($dni, 0, 8);
            
        $numero = str_replace(array('X', 'Y', 'Z'), array(0, 1, 2), $numero);   
     
        $modulo = $numero % 23;
        $letras_validas = "TRWAGMYFPDXBNJZSQVHLCKE";
        $letra_correcta = substr($letras_validas, $modulo, 1);
        
        if($letra_correcta!=$letra) {
            echo "Letra incorrecta, la letra deber&iacute;a ser la $letra_correcta.";
        }
        else {
            echo "Bien";
        }
    }
        
}