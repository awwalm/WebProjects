<?php


global $php_errormsg;
error_reporting(E_ALL & ~E_NOTICE);

class Farm
{
    private $farm_name;
    private $farm_country;
    private $flowers = [];

    function set_farm_name($value)
    {
        (ctype_alpha($value) && strlen($value) > 1) ? $this->farm_name = $value : $php_errormsg = FALSE;
        return $php_errormsg;
    }

    function set_farm_country($value)
    {
        (ctype_alpha($value) && strlen($value) > 1) ? $this->farm_country = $value : $php_errormsg = FALSE;
        return $php_errormsg;
    }

    function add_flowers($value1, $value2)
    {
        if ($value1 instanceof Flower && $value2 instanceof string)
        {
            $this->flowers[$value2] = $value1;
        }
    }

    function get_flowers() { return $this->flowers; }
    function get_farm_name() { return $this->farm_name; }
    function get_farm_country() { return $this->farm_country; }

}

class Flower 
{
    private $flower_name;
    private $flower_color;
    private $flower_length;
    private $flower_lengths = [];
    private $flower_stems;


    function set_flower_name($value)
    {
        (ctype_alpha($value) && strlen($value) >= 1) ? $this->flower_name = $value : $php_errormsg = FALSE;
        return $php_errormsg;
    }

    function set_flower_color($value)
    {
        (ctype_alpha($value) && strlen($value) >= 1) ? $this->flower_color = $value : $php_errormsg = FALSE;
        return $php_errormsg;
    }

    function set_box_stems($value)
    {
        (ctype_digit($value) && ($value > 0)) ? $this->stems = $value : $php_errormsg = FALSE;
        return $php_errormsg;
    }

    function add_flower_lengths(Length $value1, string $value2)
    {
        if ($value1 instanceof Length && $value2 instanceof string)
        {
            $this->flower_lengths[$value2] = $value1;
        }
    }
    
    
    function get_flower_name() { return $this->flower_name; }
    function get_flower_color() { return $this->flower_color; }
    function get_flower_length_cm() { return $this->flower_length_cm; }
    function get_flower_lengths() { return $this->flower_lengths; }
    function get_flower_stems() { return $this->flower_stems; }

}

class Length
{
    private $length_boxes;
    private $length_name;
    private $length_cm;

    function set_length_name(String $value)
    {
        (strlen($value) >= 1) ? $this->length_name = $value : $php_errormsg = FALSE;
        //echo $value;
        return $php_errormsg;
    }

    function set_length_cm(int $value)
    {
        (($value > 0)) ? $this->length_cm = $value : $php_errormsg = FALSE;
        return $php_errormsg;
    }

    function add_length_boxes(Box $value1, string $value2, array &$value3)
    {
        if ($value1 instanceof Box && $value2 instanceof string)
        {
            $this->length_boxes[$value2] = $value1;
            $value3[] = $value1;
            //echo 'works';
            //$this->length_boxes.array_push($length_boxes, $value);
        }
    }

    function get_length_boxes() { return $this->length_boxes; }
    function get_length_cm() { return $this->length_cm; }
    function get_length_name() { return $this->length_name; }
}

class Box extends Farm
{
    private $box_name;
    private $box_stem;

    function set_box_name(String $value)
    {
        (strlen($value) >= 1) ? $this->box_name = $value : $php_errormsg = FALSE;
        return $php_errormsg;
    }

    function set_box_stem(int $value)
    {
        (($value > 0)) ? $this->box_stem = $value : $php_errormsg = FALSE . 'SOMETHING IS WRONG';
        return $php_errormsg;
    }

    function get_box_name() { return $this->box_name; }
    function get_box_stems() { return $this->box_stem; }
}


///////////////////////////////////////////////////////////////////

//1
$farm1 = new Farm; 
$farm1->set_farm_name('Mullo'); 
$farm1->set_farm_country('Ethopia');

//2
$flower1 = new Flower; 
$flower1->set_flower_name('Hypericum'); 
$flower1->set_flower_color('Pink');

//3
$farm1->add_flowers($flower1, $flower1->get_flower_name());

//4
$seventy_len = new Length;
$seventy_len->set_length_name('70cm'); 
$seventy_len->set_length_cm(70);
$fifty_len = new Length; 
$fifty_len->set_length_name('50cm'); 
$fifty_len->set_length_cm(50);
$flower1->add_flower_lengths($seventy_len, $seventy_len->get_length_name());
$flower1->add_flower_lengths($fifty_len, $fifty_len->get_length_name());

//5
$small_box = new Box;
$small_box->set_box_name('Small');
$small_box->set_box_stem(20);
$medium_box = new Box;
$medium_box->set_box_name('Medium');
$medium_box->set_box_stem(30);

//6
$seventylenboxes = array();
$seventy_len->add_length_boxes($small_box, $small_box->get_box_name(), $seventylenboxes);
$seventy_len->add_length_boxes($medium_box, $medium_box->get_box_name(), $seventylenboxes);

//7
$small_box2 = new Box;
$small_box2->set_box_name('Small');
$small_box2->set_box_stem(30);
$medium_box2 = new Box;
$medium_box2->set_box_name('Medium');
$medium_box2->set_box_stem(40);

//8
$fiftylenboxes = array();
$fifty_len->add_length_boxes($small_box2, $small_box2->get_box_name(), $fiftylenboxes);
$fifty_len->add_length_boxes($medium_box2, $medium_box2->get_box_name(), $fiftylenboxes);

//1
$small_box2->set_farm_name($farm1->get_farm_name());
echo $small_box2->get_farm_name();
print '<hr>';

//2
echo sizeof($fiftylenboxes);
var_dump($seventy_len->get_length_boxes());
