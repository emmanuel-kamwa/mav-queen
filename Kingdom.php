<?php

/**
 * Description of Kingdom
 *
 * @author emmanuel
 */
class Kingdom {

    public function __construct($n, $m) {

        $this->length = intval($n);
        $this->width = intval($m);

        if (!($this->length > 1 && $this->length < 10)) {
            throw new Exception("The length of the kingdom must be gretter than 1 and less than 10");
        }
        if (!($this->width > 0 && $this->width < 10)) {
            throw new Exception("The width of the kingdom must be gretter than 0 and less than 10");
        }

        $this->queen = new Queen();
    }

    public function place_queen($x, $y, $f) {

        if (($x < 0) || ($x > ($this->width - 1)) || ($y < 0) || $y > ($this->length - 1))
            throw new Exception("The Queen can not be placed out of kingdom");

        $this->queen->set_coordinates(new Coordinates($x, $y));

        if ($f == Queen::NORTH) {
            $this->queen->face_north();
            return;
        }
        if ($f == Queen::SOUTH) {
            $this->queen->face_south();
            return;
        }
        if ($f == Queen::WEST) {
            $this->queen->face_west();
            return;
        }
        if ($f == Queen::EAST) {
            $this->queen->face_east();
            return;
        }
    }
    
    public function rotate_queen_left(){
        $this->queen->left();
    }
    public function rotate_queen_right(){
        $this->queen->right();
    }

    public function move_queen() {
        if ($this->allow_queen_move())
            $this->queen->move();
    }        

    public function allow_queen_move() {

        $queen_coordinates = $this->queen->get_coordinates();
        $queen_direction = $this->queen->get_direction();

        if ($queen_direction == Queen::NORTH) {
            if ($queen_coordinates->y_position() < ($this->length - 1))
                return TRUE;
            else
                return FALSE;
        }

        if ($queen_direction == Queen::SOUTH) {
            if ($queen_coordinates->y_position() > 0)
                return TRUE;
            else
                return FALSE;
        }

        if ($queen_direction == Queen::EAST) {
            if ($queen_coordinates->x_position() < ($this->width - 1))
                return TRUE;
            else
                return FALSE;
        }

        if ($queen_direction == Queen::WEST) {
            if (($queen_coordinates->x_position() > 0))
                return TRUE;
            else
                return FALSE;
        }
        
        return FALSE;
    }

    private $width;
    private $length;
    private $queen;

}
