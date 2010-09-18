<?php
/**
 * @author Douglas Javier Rodriguez - www.DouglasRodriguez.me
 */
class Observable {
     private $listeners; // Object
     function __construct($listeners=null) {
         $this->listeners = $listeners;
     }
     public function getListeners() {
         return $this->listeners;
     }

     public function setListeners($listeners) {
         $this->listeners = $listeners;
     }


}
?>
