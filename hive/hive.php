<?php 
 include 'worker.php';
 include 'queen.php';
 include 'guard.php';
 
class Hive
{
    private $worker;
    private $queen;
    private $guard; 
    
    public function __construct() {
    	
        $this->worker = new Worker();
        $this->queen = new Queen();
        $this->guard = new Guard();
    }   
    
    public function getName() {
    	
    	echo $this->worker->getName();
    }
    
    
}