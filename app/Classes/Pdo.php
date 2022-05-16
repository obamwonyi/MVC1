<?php 

namespace App\Classess;

use PDOException;

class  Pdo 
{

    private $pdo; 
    //preseting the database at the moment of instantiation 
    public function __construct(string $dbhost,string $dbuser,string $dbname,string $dbpass)
    {
        //setting the database host 
        define("DB_HOST",$dbhost);
        //setting the database user
        define("DB_USER",$dbuser) ;
        //setting the database name
        define("DB_NAME",$dbname); 
        //setting the database pass  
        define("DB_PASS",$dbpass); 
    }

    //set the database connection using a try statement . 
    public function setDatabase() 
    {
        try
        {
            $this->pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASS);

        }
        catch(PDOException $e) 
        {
            $e->getMessage() . " at line ". $e->getLine() . " in file ". $e->getFile();
            
        }
    }

    
}
 


?>