<?php
/**
 * @author Douglas Javier Rodriguez - www.DouglasRodriguez.me
 */
class Element {
    private $DISPLAY; // Number
    private $VISIBILITY; // Number
    private $autoBoxAdjust; // Object
    private $defaultUnit; // String
    private $dom; // HTMLElement
    private $id; // String
    private $originalDisplay; // String

    function __construct($DISPLAY=null, $VISIBILITY=null, $autoBoxAdjust=null, $defaultUnit=null, $dom=null, $id=null, $originalDisplay=null) {
        $this->DISPLAY = $DISPLAY;
        $this->VISIBILITY = $VISIBILITY;
        $this->autoBoxAdjust = $autoBoxAdjust;
        $this->defaultUnit = $defaultUnit;
        $this->dom = $dom;
        $this->id = $id;
        $this->originalDisplay = $originalDisplay;
    }

    public function getDISPLAY() {
        return $this->DISPLAY;
    }

    public function setDISPLAY($DISPLAY) {
        $this->DISPLAY = $DISPLAY;
    }

    public function getVISIBILITY() {
        return $this->VISIBILITY;
    }

    public function setVISIBILITY($VISIBILITY) {
        $this->VISIBILITY = $VISIBILITY;
    }

    public function getAutoBoxAdjust() {
        return $this->autoBoxAdjust;
    }

    public function setAutoBoxAdjust($autoBoxAdjust) {
        $this->autoBoxAdjust = $autoBoxAdjust;
    }

    public function getDefaultUnit() {
        return $this->defaultUnit;
    }

    public function setDefaultUnit($defaultUnit) {
        $this->defaultUnit = $defaultUnit;
    }

    public function getDom() {
        return $this->dom;
    }

    public function setDom($dom) {
        $this->dom = $dom;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getOriginalDisplay() {
        return $this->originalDisplay;
    }

    public function setOriginalDisplay($originalDisplay) {
        $this->originalDisplay = $originalDisplay;
    }




}
?>
