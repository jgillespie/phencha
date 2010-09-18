<?php
/**
 * @author Douglas Javier Rodriguez - www.DouglasRodriguez.me
 */
namespace Phencha;
class BoxComponent extends Component {
    private $anchor; // String
    private $autoHeight; // Boolean
    private $autoScroll; // Boolean
    private $autoWidth; // Boolean
    private $boxMaxHeight; // Number
    private $boxMaxWidth; // Number
    private $boxMinHeight; // Number
    private $boxMinWidth; // Number
    private $flex; // Number
    private $height; // Number
    private $margins; // Object
    private $pageX; // Number
    private $pageY; // Number
    private $region; // String
    private $tabTip; // String
    private $width; // Number
    private $x; // Number
    private $y; // Number

    function __construct($anchor=null, $autoHeight=null, $autoScroll=null, $autoWidth=null, $boxMaxHeight=null, $boxMaxWidth=null, $boxMinHeight=null, $boxMinWidth=null, $flex=null, $height=null, $margins=null, $pageX=null, $pageY=null, $region=null, $tabTip=null, $width=null, $x=null, $y=null) {
        $this->anchor = $anchor;
        $this->autoHeight = $autoHeight;
        $this->autoScroll = $autoScroll;
        $this->autoWidth = $autoWidth;
        $this->boxMaxHeight = $boxMaxHeight;
        $this->boxMaxWidth = $boxMaxWidth;
        $this->boxMinHeight = $boxMinHeight;
        $this->boxMinWidth = $boxMinWidth;
        $this->flex = $flex;
        $this->height = $height;
        $this->margins = $margins;
        $this->pageX = $pageX;
        $this->pageY = $pageY;
        $this->region = $region;
        $this->tabTip = $tabTip;
        $this->width = $width;
        $this->x = $x;
        $this->y = $y;
    }

    public function getAnchor() {
        return $this->anchor;
    }

    public function setAnchor($anchor) {
        $this->anchor = $anchor;
    }

    public function getAutoHeight() {
        return $this->autoHeight;
    }

    public function setAutoHeight($autoHeight) {
        $this->autoHeight = $autoHeight;
    }

    public function getAutoScroll() {
        return $this->autoScroll;
    }

    public function setAutoScroll($autoScroll) {
        $this->autoScroll = $autoScroll;
    }

    public function getAutoWidth() {
        return $this->autoWidth;
    }

    public function setAutoWidth($autoWidth) {
        $this->autoWidth = $autoWidth;
    }

    public function getBoxMaxHeight() {
        return $this->boxMaxHeight;
    }

    public function setBoxMaxHeight($boxMaxHeight) {
        $this->boxMaxHeight = $boxMaxHeight;
    }

    public function getBoxMaxWidth() {
        return $this->boxMaxWidth;
    }

    public function setBoxMaxWidth($boxMaxWidth) {
        $this->boxMaxWidth = $boxMaxWidth;
    }

    public function getBoxMinHeight() {
        return $this->boxMinHeight;
    }

    public function setBoxMinHeight($boxMinHeight) {
        $this->boxMinHeight = $boxMinHeight;
    }

    public function getBoxMinWidth() {
        return $this->boxMinWidth;
    }

    public function setBoxMinWidth($boxMinWidth) {
        $this->boxMinWidth = $boxMinWidth;
    }

    public function getFlex() {
        return $this->flex;
    }

    public function setFlex($flex) {
        $this->flex = $flex;
    }

    public function getHeight() {
        return $this->height;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function getMargins() {
        return $this->margins;
    }

    public function setMargins($margins) {
        $this->margins = $margins;
    }

    public function getPageX() {
        return $this->pageX;
    }

    public function setPageX($pageX) {
        $this->pageX = $pageX;
    }

    public function getPageY() {
        return $this->pageY;
    }

    public function setPageY($pageY) {
        $this->pageY = $pageY;
    }

    public function getRegion() {
        return $this->region;
    }

    public function setRegion($region) {
        $this->region = $region;
    }

    public function getTabTip() {
        return $this->tabTip;
    }

    public function setTabTip($tabTip) {
        $this->tabTip = $tabTip;
    }

    public function getWidth() {
        return $this->width;
    }

    public function setWidth($width) {
        $this->width = $width;
    }

    public function getX() {
        return $this->x;
    }

    public function setX($x) {
        $this->x = $x;
    }

    public function getY() {
        return $this->y;
    }

    public function setY($y) {
        $this->y = $y;
    }



}
?>
