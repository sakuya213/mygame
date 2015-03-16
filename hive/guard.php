<?php

class Guard
{
	private $name = 'Guard';
	private $health = 100;
	
	public function getName(){
		
		echo $this->name;
	}
	
	public function getHealth(){
		
		echo $this->health;
		echo '/100';
	}
}