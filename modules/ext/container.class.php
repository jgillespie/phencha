<?php
/**
 * @author Douglas Javier Rodriguez - www.DouglasRodriguez.me
 */
namespace Phencha;
class Container extends BoxComponent {
    private $activeItem; // String/Number
    private $autoDestroy; // Boolean
    private $bubbleEvents; // Array
    private $bufferResize; // Boolean/Number
    private $defaultType; // String
    private $defaults; // Object|Function
    private $forceLayout; // Boolean
    private $hideBorders; // Boolean
    private $items; // Object/Array
    private $layout; // String/Object
    private $layoutConfig; // Object
    private $monitorResize; // Boolean
    private $resizeEvent; // String

    function __construct($activeItem=null, $autoDestroy=null, $bubbleEvents=null, $bufferResize=null, $defaultType=null, $defaults=null, $forceLayout=null, $hideBorders=null, $items=null, $layout=null, $layoutConfig=null, $monitorResize=null, $resizeEvent=null) {
        $this->activeItem = $activeItem;
        $this->autoDestroy = $autoDestroy;
        $this->bubbleEvents = $bubbleEvents;
        $this->bufferResize = $bufferResize;
        $this->defaultType = $defaultType;
        $this->defaults = $defaults;
        $this->forceLayout = $forceLayout;
        $this->hideBorders = $hideBorders;
        $this->items = $items;
        $this->layout = $layout;
        $this->layoutConfig = $layoutConfig;
        $this->monitorResize = $monitorResize;
        $this->resizeEvent = $resizeEvent;
    }
    public function getActiveItem() {
        return $this->activeItem;
    }

    public function setActiveItem($activeItem) {
        $this->activeItem = $activeItem;
    }

    public function getAutoDestroy() {
        return $this->autoDestroy;
    }

    public function setAutoDestroy($autoDestroy) {
        $this->autoDestroy = $autoDestroy;
    }

    public function getBubbleEvents() {
        return $this->bubbleEvents;
    }

    public function setBubbleEvents($bubbleEvents) {
        $this->bubbleEvents = $bubbleEvents;
    }

    public function getBufferResize() {
        return $this->bufferResize;
    }

    public function setBufferResize($bufferResize) {
        $this->bufferResize = $bufferResize;
    }

    public function getDefaultType() {
        return $this->defaultType;
    }

    public function setDefaultType($defaultType) {
        $this->defaultType = $defaultType;
    }

    public function getDefaults() {
        return $this->defaults;
    }

    public function setDefaults($defaults) {
        $this->defaults = $defaults;
    }

    public function getForceLayout() {
        return $this->forceLayout;
    }

    public function setForceLayout($forceLayout) {
        $this->forceLayout = $forceLayout;
    }

    public function getHideBorders() {
        return $this->hideBorders;
    }

    public function setHideBorders($hideBorders) {
        $this->hideBorders = $hideBorders;
    }

    public function getItems() {
        return $this->items;
    }

    public function setItems($items) {
        $this->items = $items;
    }

    public function getLayout() {
        return $this->layout;
    }

    public function setLayout($layout) {
        $this->layout = $layout;
    }

    public function getLayoutConfig() {
        return $this->layoutConfig;
    }

    public function setLayoutConfig($layoutConfig) {
        $this->layoutConfig = $layoutConfig;
    }

    public function getMonitorResize() {
        return $this->monitorResize;
    }

    public function setMonitorResize($monitorResize) {
        $this->monitorResize = $monitorResize;
    }

    public function getResizeEvent() {
        return $this->resizeEvent;
    }

    public function setResizeEvent($resizeEvent) {
        $this->resizeEvent = $resizeEvent;
    }

    public function hasItems(){
        if(!is_null($this->items) and is_array($this->items) and count($this->items)>0){
            return true;
        }else{
            return false;
        }
    }

    public function addItem(Component $item){
        $this->items[]=$item;
    }
}
?>
