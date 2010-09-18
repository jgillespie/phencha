<?php
/**
 * @author Douglas Javier Rodriguez - www.DouglasRodriguez.me
 */
class ExtLayout {
    private $layouttemplate;
    private $layoutpath;

    public function  __construct($templateName) {
        $this->loadTemplate($templateName);
    }

    private function loadTemplate($templateName){
        $configuration=Configuration::getInstance();
        $filepath=$configuration->get("modulespath")."/layout/templates/".$templateName.".php";
        if(file_exists($filepath)){
            $this->layoutpath=$filepath;
            //$this->layouttemplate=file_get_contents($filepath);
        }else{
            throw new Exception("File not found: ".$filepath,404);
        }
    }

    public function printLayout(PageAttributes $pageAttributes){
        include $this->layoutpath;
    }
}
?>
