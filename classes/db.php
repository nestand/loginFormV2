<?php
class DB
{
    /*
    I used $_ to indicate that this var is private. It's just a convention.
    */
    
    // a private static property to our object. It's gonna store the instance of our DB
    private static $_instance = null;
    private $_pdo;
    // the last query executed
    private $_query;
    private $_error = false;
    private $_results;
    private $_count = 0;

    private function _construct()
    {
        try {
            $this->pdo = new PDO(
                'mysql:host=' . config::get('mysql/host')
                               . 'dbname='     . config::get('mysql/db'),
                config::get('mysql/username'),
                config::get('mysql/password')
            );
            
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    //check if we instantiated the object. If we have, so we are going to return it
    public static function getInstance()
    {
        if (!isset(self::$_instance)) {
            self::$_instance= new DB();
        }
        return self::$_instance;
    }
}

public function action ($action, $table, $where = array()){
    // 3 for 'OPERATOR' 'VALUE' 'NAME' (for ex. 1get 'user' 2= '3John')
    if (count($where)===3){
    $operators = array('=', '>', '<', '=<', '>=');

    $field= where [0];
    $operator= where [1];
    $value= where [2];
}
}

public function get ($table, $where) {
return $this->action('SELECT*', $table, $where);
}

public function delete ($table, $where){ 
return $this -> action('DELETE', $table, $where);
}

public function error (){
   return $this -> error; 
}
public function count (){
return $this ->count;
}