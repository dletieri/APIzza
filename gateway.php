<?php
require_once('database.php');
/**
* 
*/
class Gateway // extends AnotherClass
{
		
	private $con;

	function __construct()
	{
		//die(var_dump($con));
	}

	public function Save($obj)
	{
		//die($obj->save());
		$this->insertDB($obj->save());
		return 'saving a '. get_class($obj);
	}

	private function insertDB($sql,$params=null)
    {
    	//var_dump($con);
        //$con=$this->connect();
        $query=Database::connect()->prepare($sql);
        $query->execute();
        $rs = Database::connect()->lastInsertId() or die(print_r($query->errorInfo(), true));
        Database::disconnect();
        return $rs;
    }

}

?>