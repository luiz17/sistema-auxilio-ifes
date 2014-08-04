<?php


require_once __ROOT__.'/admin/util/DBConnect.php';

class DefaultDao {

    /**
     * $main_table Tabela principal da classe
     * @var string
     */
    protected $main_table;

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

    /**
     * delete Deleta um registro no banco
     * @param  int $id Identificação do registro
     * @return boolean 
     */
    public function delete($id) {
        
        try {

            //Recupera o nome da tabela
            $table = DBConnect::getTabela($this->main_table);

            //DB
            $con = DBConnect::getInstance(); 
            $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 

            $stmt = $con->prepare("DELETE FROM $table WHERE aluno_id=:id");

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

}