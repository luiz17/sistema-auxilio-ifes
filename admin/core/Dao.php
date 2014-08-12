<?php

require_once __ROOT__.'/admin/util/DBConnect.php';

class Dao {

    private $main_table;

    public function insert($dados, $table) {

        try {

            $campos = "";
            $values = "";

            $table = DBConnect::getTabela($table);

            foreach($dados as $campo => $valor) {
                $campos = $campos.$campo.', ';
                $values = $values.':'.$campo.', ';
            }

           $campos = substr($campos, 0, -2);
           $values = substr($values, 0, -2);

           $con = DBConnect::getInstance(); 
           $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 

           $stmt = $con->prepare("INSERT INTO $table ( $campos )VALUES ( $values )");

           // http://stackoverflow.com/questions/4174524/binding-params-for-pdo-statement-inside-a-loop
           foreach ($dados as $campo => &$valor) {
                $stmt->bindParam( ':'.$campo, $valor);
           }

           $stmt->execute();

        } catch(PDOException $e) { 
            echo 'Error: ' . $e->getMessage();
        }

    }

    public function update($id, $dados, $table) {

        try {

            $campos = "";
            $values = "";

            $table = DBConnect::getTabela($table);


            foreach($dados as $campo => $valor) {

                $campos = $campos.$campo.', ';
                $values = $values.':'.$campo.', ';

            }

           $campos = substr($campos, 0, -2);
           $values = substr($values, 0, -2);

            // Monta o SQL
            $sql = "UPDATE $table SET ";
            foreach($dados as $campo => $valor) {
                $sql .= "$campo=:$campo, ";
            }
            $sql = substr($sql, 0, -2);
            $sql .= " WHERE ".$table."_id=:id";

            // Pega a conexão
            $con = DBConnect::getInstance(); 
            $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 

            // Prepara o SQL
            $stmt = $con->prepare($sql);

            // Monta o array de valores
            $values = array();
            foreach ($dados as $campo => &$valor) {
                $values[":$campo"] = $valor;
            }
            $values[":id"] = $id;

            // Executa o SQL
            $stmt->execute($values);

        } catch(PDOException $e) { 
            echo 'Error: ' . $e->getMessage();
        }

    }

    /**
     * delete Deleta um registro no banco
     * @param  int $id Identificação do registro
     * @return boolean 
     */
    public function delete($id, $table) {
        
        try {

            //Recupera o nome da tabela
            $table = DBConnect::getTabela($table);

            //DB
            $con = DBConnect::getInstance(); 
            $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 

            $stmt = $con->prepare("DELETE FROM $table WHERE ".$table."_id=:id");

            $stmt->bindParam( ':id', $id);

            $stmt->execute();

            return true;

        } catch(PDOException $e) { 
            echo 'Error: ' . $e->getMessage();
            return false;
        }

    }

    /**
     * Select genérico
     * 
     * @param string $sql String sql
     **/
    public function select($sql) {

        $con = DBConnect::getInstance();

        $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        // executa a instrução SQL
        $statement = $con->prepare($sql);

        $statement->execute();

        $result = array();

        // Query results
        while ( $row = $statement->fetch(\PDO::FETCH_ASSOC) ) {
            $result[] = $row; // print $row;
        }
        
        return $result;
        
    }

    public function getAll($table) {
        $table = DBConnect::getTabela($table);
        return $this->select("SELECT * FROM ".$table);
    }

    /**
     * get Retorna o registro do banco de dados identificado pelo ID
     * @param  int $id ID do registro no banco de dados
     * @param  string $table Tabela do banco onde o registro está localizado
     * @return array     Registro
     */
    public function get($id, $table) {
        
        try {

            //Recupera o nome da tabela
            $table = DBConnect::getTabela($table);
            $table_id = $table.'_id';

            //DB
            $con = DBConnect::getInstance(); 
            $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 

            $stmt = $con->prepare("SELECT * FROM $table WHERE $table_id=:id");

            $stmt->bindParam( ':id', $id);

            $stmt->execute();

            $result = array();

            // Query results
            while ( $row = $stmt->fetch(\PDO::FETCH_ASSOC) ) {
                $result[] = $row;
            }
            
            return $result;

        } catch(PDOException $e) { 
            echo 'Error: ' . $e->getMessage();
            return false;
        }

    }

}