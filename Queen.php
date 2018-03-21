<?php

/**
 * Description of Queen
 *
 * @author emmanuel
 */
class Queen {
        
    private $coordinates;    
    private $direction;
    
    const NORTH = 'NORTH';
    const SOUTH = 'SOUTH';
    const WEST = 'WEST';
    const EAST = 'EAST';
        
    public function __construct() {
        $this->coordinates = new Coordinates(0,0);
        $this->face_north();
    }
    
    public function move(){
         if($this->direction == self::NORTH){
             $this->coordinates->move_north();
             return;
         }
         if($this->direction == self::SOUTH){
             $this->coordinates->move_south();
             return;
         }
         if($this->direction == self::WEST){
             $this->coordinates->move_west();
             return;
         }
         if($this->direction == self::EAST){
             $this->coordinates->move_east();
             return;
         }        
    }        
    
    public function left(){
         if($this->direction == self::NORTH){
             $this->direction = self::WEST;
             return;
         }
         
         if($this->direction == self::SOUTH){
             $this->direction = self::EAST;
             return;
         }
         
         if($this->direction == self::WEST){
             $this->direction = self::SOUTH;
             return;
         }
         if($this->direction == self::EAST){
             $this->direction = self::NORTH;
             return;
         }
    }
    
    public function right(){
        
        if($this->direction == self::NORTH){
             $this->direction = self::EAST;
             return;
         }
         
         if($this->direction == self::SOUTH){
             $this->direction = self::WEST;
             return;
         }
         
         if($this->direction == self::WEST){
             $this->direction = self::NORTH;
             return;
         }
         if($this->direction == self::EAST){
             $this->direction = self::SOUTH;
             return;
         }
    }
    
    public function face_north(){
        $this->direction = self::NORTH;        
    }
    
    public  function face_south(){
        $this->direction = self::SOUTH;
    }
    
    public function face_east(){
        $this->direction = self::EAST;
    }
    
    public function face_west(){
        $this->direction = self::WEST;
    }
    
    public function report(){
         return "The Queen is at the position {$this->coordinates->display()} and is facing the {$this->direction} direction";
    }
    
    public function set_coordinates(Coordinates $coordinates){
        $this->coordinates = $coordinates;
    }
    
    public function get_coordinates(){
        return $this->coordinates;
    }
    
    public function get_direction(){
        return $this->direction;
    }
}
