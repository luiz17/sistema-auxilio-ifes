<?php

/**
 * Classe Singleton para conexao ao banco de dados
 */
class DBConnect {

    /**
     * Instancia de conexao PDO
     * @var PDO
     */
    private static $instance = null;

    /**
     * Tipo do banco de dados
     * 
     * Pode ser:
     * MySQL
     * PostgreSQL
     * SQL Server
     * Oracle
     * SQLite
     * @var string
     */
    private static $dbType = "mysql";

    /**
     * Host do banco de dados
     * @var string
     */
    private static $host = "127.0.0.1";

    /**
     * Usuario de conexao ao banco de dados
     * @var string
     */
    private static $user = "root";

    /**
     * Senha de conexao ao banco de dados
     * @var string
     */
    private static $senha = "";

    /**
     * Nome do banco de dados
     * @var string
     */
    private static $db = "sistema_auxilio";

    /**
     * Se a conexao deve ser persistente
     * @var boolean
     */
    protected static $persistent = false;

    /**
     * Lista de tabelas do banco de dados
     * 
     * Esta lista serve para padronizar a utilizacao das tabelas nas consultas
     * para caso seja necessario alterar o nome de alguma tabela o impacto na
     * programacao seja o minimo possivel.
     * @var array
     */
    private static $tabelas = array(
		'TB_ALUNO'  => 'aluno',
		'TB_CURSO'  => 'curso',
		'TB_ACESSO' => 'acesso'
	);   
    
    /**
     * Retorna a instancia de conexao ao banco de dados
     * 
     * Caso a instancia de conexao ja exista, apenas a retorna, caso ainda
     * nao exista, cria a instancia e a retorna.
     * 
     * @return PDO
     */
    public static function getInstance() {

        if(self::$persistent != FALSE)
            self::$persistent = TRUE;
        
        if(!isset(self::$instance)){
            try {            
                
                self::$instance = new \PDO(self::$dbType . ':host=' . self::$host . ';dbname=' . self::$db
                        , self::$user
                        , self::$senha
                        , array(\PDO::ATTR_PERSISTENT => self::$persistent));
                
            } catch (\PDOException $ex) {
                exit ("Erro ao conectar com o banco de dados: " . $ex->getMessage());
            }
        }
        
        return self::$instance;
        
    }

    /**
     * Fecha a instancia de conexao ao banco de dados
     */
    public static function close() {
        if (self::$instance != null)
            self::$instance = null;
    }
    
    /**
     * Retorna a tabela correspondente a chave informada. 
     * 
     * @param string $chave Nome da chave do array $tabelas que armazena a tabela a ser retornada
     * @return string
     */
    public static function getTabela($chave) {
        return self::$tabelas[$chave];
    }

}