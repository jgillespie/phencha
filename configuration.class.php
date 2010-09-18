<?php
/**
 * @author Douglas Javier Rodriguez - www.DouglasRodriguez.me
 */
class Configuration {
    // Attributes
    private static $configuration=null;
    private $data=array();
    // Constructor
    private function  __construct() {

    }
    // Setters and Getters
    public static function getInstance(){
        if(is_null(Configuration::$configuration)){
            Configuration::$configuration=new Configuration();
        }
        return Configuration::$configuration;
    }

    public function set($key,$value){
        $this->data[$key]=$value;
    }

    public function get($key){
        return $this->data[$key];
    }


}
?>
