<?php

    class animal{
        static $Animal = null;
        private $raza;
        function __construct(object $arg){
            $this->raza = $arg->RAZA;
        }
        public function getRaza():string{
            return $this->raza;
        }
        static function getins(){
            $arg = (func_num_args()!=0)? 
                    (object) func_get_args()[0] 
                    : (object) ["RAZA" => "CANINO"];
                    
            return self::$Animal =
                    (!(self::$Animal instanceof self))? 
                    new animal($arg)
                    : self::$Animal;
        }
        private function saludar(){
            return "Hola Mundo";
        }
        public function getSaludar(){
            return $this->saludar();
        }
    }
    

    print_r(animal::getins((array) ["RAZA" => "FELINO"])->getRaza());
    print_r("<br>");
    print_r(animal::getins()->getSaludar());
    // /**
    //  * Clase de humanos
    //  * @property string $crecimiento efe
    //  * @method acceso() cuando la edad es correcar
    //  */
    // class humanos{
    //     static $crecimiento;
    //     /**
    //      * Metodo para verificar si tiene 18 o mas años 
    //      * @internal 
    //      * if($arg>=18){
    //      *      return true;
    //      * }else{
    //      *      return false;
    //      * } == ($arg>=18) ? true: false
    //      * @param int $arg la edad del usuario 
    //      * @return string devuelve el boliano si la edad es mayor a 18
    //      * @author Miguel Angel Castro Escamilla
    //      */
    //     static function verificar(int $arg):string{
    //         $obj = new humanos();
    //         return $obj->acceso(($arg>=18) ? true: false);
    //     }
    //     /**
    //      * Metodo para dar acceso a la mayoria de edad
    //      * @param bool $arg Por medio del metodo static function verificar verificamos si es mayor de edad para aceder al metodo y mostrar su resultado
    //      * @return string devuelde un mensaje si fue correcto y un vacio si el el parametro fue falso
    //      * @author Miguel Angel Castro Escamilla
    //      */
    //     protected function acceso(bool $arg):string{
    //         return ($arg) ? (string) "Puede pasar" : (string) "" ;
    //     }
    // }
    // print_r(humanos::verificar(18));


    
?>