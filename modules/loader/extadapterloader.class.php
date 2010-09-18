<?php
/**
 * @author Douglas Javier Rodriguez - www.DouglasRodriguez.me
 */
class ExtAdapterLoader {
    private $fileUrl;


    public function  __construct($adapterName) {
        $configuration=Configuration::getInstance();
        $this->fileUrl=$configuration->get("exturl")."/adapter/ext/".$adapterName.".js";
    }

    public function getCode(){
        return "<script type=\"text/javascript\" src=\"".$this->fileUrl."\"></script>";
    }
}
?>
