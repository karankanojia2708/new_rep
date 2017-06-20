<?php

class CreateConnection{
    private $username, $password, $host, $database;
    
    public function SetUserName($username){$this->username=$username;}
    
    public function SetPassword($password){$this->password=$password;}
    
    public function SetHost($host){$this->host=$host;}
    
    public function SetDatabase($database){$this->database=$database;}
    
    public function Connect(){
        $tempconn = mysqli_connect($this->host,$this->username,$this->password) or die("Unable To Connect");
        $connection = mysqli_select_db($tempconn, $this->database);
        
        if(!$connection){echo " Our severs are down . Pal ! ";}
        
        else{return $tempconn;}
        
    }
    
    
    
}

?>