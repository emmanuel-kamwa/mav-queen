<?php

/**
 * Description of Coordinates
 *
 * @author emmanuel
 */
class Coordinates {
    
    public function __construct($x,$y) {
        $this->x = intval($x);
        $this->y = intval($y);                 
    }

    public function move_north() {
        $this->y++;
    }

    public function move_south() {
        $this->y--;
    }

    public function move_east() {
        $this->x++;
    }

    public function move_west() {
        $this->x--;
    }

    public function display() {
        return "{$this->x},{$this->y}";
    }
    
    public function x_position(){
        return $this->x;
    }
    public function y_position(){
        return $this->y;
    }
    
    private $x;
    private $y;
}
