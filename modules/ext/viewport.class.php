<?php
/**
 * @author Douglas Javier Rodriguez - www.DouglasRodriguez.me
 */
namespace Phencha;
class Viewport extends Container {
   
    public function getCode(){
        $output="new Ext.Viewport({
            layout: '".$this->getLayout()."'";
        if($this->hasItems()){
            $output.=",items: [";
            foreach($this->items as $item){
                $output.=$item->getCode().",";
            }
            $output = substr ($output, 0, strlen($output) - 1);
            $output.="]";
        }
        $output.="});";
    }
}
?>
