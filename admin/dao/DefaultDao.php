<?php

class DefaultDao{
    
    private $con;
    
    function __construct($con) {
        $this->con = $con;
    }
   
   public function insert($dados, $table){
    $campos = "";
    $values = "";

        foreach($dados as $campo => $valor)
        {

            $campos = $campos.$campo.',';
            $values = $values.':'.$campo.',';

        }

        $campos = substr($campos, 0,-1);
        $values = substr($values, 0,-1);

        $stmt = $con->prepare("INSERT INTO $table ( $campos )VALUES ( $values )");

         foreach ($dados as $campo => $valor){
             $stmt->bindParam(':'.$campo,$valor);     
         }

        $stmt->execute();
   
    }

}

?>


