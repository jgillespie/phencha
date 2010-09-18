<?php
/**
 * @author Douglas Javier Rodriguez - www.DouglasRodriguez.me
 */
class CSSResourceLoader {
    private $fileUrl;


    public function  __construct($cssName) {
        $configuration=Configuration::getInstance();
        $this->fileUrl=$configuration->get("exturl")."/resources/css/".$cssName.".css";
    }

    public function getCode(){
        return "<link rel=\"stylesheet\" type=\"text/css\" href=\"".$this->fileUrl."\" />";
    }
}
?>
