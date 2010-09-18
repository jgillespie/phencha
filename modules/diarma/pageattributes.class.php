<?php
/**
 * @author Douglas Javier Rodriguez - www.DouglasRodriguez.me
 */
class PageAttributes {
    // Attributes
    private $data=array();
    // Constructor
    public function  __construct() {

    }
    // Setters and Getters

    public function set($key,$value){
        $this->data[$key]=$value;
    }

    public function get($key){
        if(isset($this->data[$key])){
            return $this->data[$key];
        }else{
            return "[".$key."]";
        }
    }


}
?>
