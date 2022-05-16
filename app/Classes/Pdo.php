<?php 

namespace App\Classess; 

class  Pdo 
{

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

    
}
 


?>