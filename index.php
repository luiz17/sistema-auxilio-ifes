<?php

    $dados = array();
    $dados = array('nome' => "Paulo Henrique",
        'email' => "paulohenrique.de93@hotmail.com",
        'senha' => "senhaaleatoria",
        'rg' => "123456789",
        'cpf' => "98765432100",
        'naturaliade' => "brasileiro"
    );

    echo '<pre>';
    print_r($dados);
    echo '</pre><br><br>';

    $campos = "";
    $values = "";

    foreach($dados as $campo => $valor)
    {
        
        $campos = $campos.$campo.',';
        
        
    }
    
    $campos = substr($campos, 0,-1);
    $values = substr($values, 0,-1);
    


     echo '$stmt = $con->prepare(UPDATE $this->table SET('.$campos.')VALUES('.$values.')';
     

     foreach ($dados as $campo => $valor):

         echo '$stmt->bindParam('.':'.$campo.',  '.$valor.')';
             echo '<br/>';
      
     endforeach;

      //$stmt->execute();

  
?> 