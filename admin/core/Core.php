<?php

require_once __ROOT__.'/admin/core/Dao.php';

class Core {

    private $dao;
    
    function __construct() {
        $this->dao = new Dao();
    }
    
    public function insert($args, $table) {
        $this->dao->insert($args, $table);
    }

    public function update($id, $args, $table) {
        $this->dao->update($id, $args, $table);
    }

    public function select($sql) {
    	return $this->dao->select($sql);
    }

    public function getAll($table) {
        return $this->dao->getAll($table);
    }

    public function get($id, $table) {
        return $this->dao->get($id, $table);
    }

    /**
     * delete Deleta um registro
     * @param  int $id identificação do registro
     * @return [type]     [description]
     */
    public function delete($id, $table) {
        return $this->dao->delete($id, $table);
    }

}
