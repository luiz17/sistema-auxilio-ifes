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
    
    public function update($dados, $table){
        
        $campos = "";
        
        foreach($dados as $campo => $valor){
             $campos = $campos.$campo.' = :'.$campo.',';
          }
	$campos = substr($campos, 0, -1);

        $stmt = $con->prepare("UPDATE $table.' SET($campos) WHERE $table.id = :id");

        foreach($dados as $campo => $valor ){

          $stmt->bindParam(':'.$campo,$valor);                          
        }
        
       $stmt->execute();
         
    }
    
    public function delete($dados, $table){
        
         $con->prepare("DELETE FROM $table WHERE $table.id = :id");
	 
	 $stmt->bindParam(":id", $dados['id']);
         
         $stmt->execute();
    }  
    
}

?>


