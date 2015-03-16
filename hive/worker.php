<?php

class Worker 
{
	private $name = 'Worker';
	private $health = 50;
	
	public function getName(){
		
		echo $this->name;
	}
	
	public function getHealth(){
		
		echo $this->health;
		echo '/50';
	}
}