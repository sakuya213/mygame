<?php

class Queen
{
	private $name = 'Queen';
	private $health = 300;
	
	public function getName(){
		
		echo $this->name;
	}
	
	public function getHealth(){
		
		echo $this->health;
		echo '/300';
	}
}