<?php
/**
 * @author Douglas Javier Rodriguez - www.DouglasRodriguez.me
 */
namespace Phencha;
class TabPanel extends Panel {
    private $layoutConfig; // Object
    private $layoutOnTabChange; // Boolean
    private $minTabWidth; // Number
    private $plain; // Boolean
    private $resizeTabs; // Boolean
    private $scrollDuration; // Float
    private $scrollIncrement; // Number
    private $scrollRepeatInterval; // Number
    private $tabCls; // String
    private $tabMargin; // Number
    private $tabPosition; // String
    private $tabWidth; // Number
    private $wheelIncrement; // Number

    function __construct($layoutConfig=null, $layoutOnTabChange=null, $minTabWidth=null, $plain=null, $resizeTabs=null, $scrollDuration=null, $scrollIncrement=null, $scrollRepeatInterval=null, $tabCls=null, $tabMargin=null, $tabPosition=null, $tabWidth=null, $wheelIncrement=null) {
        $this->layoutConfig = $layoutConfig;
        $this->layoutOnTabChange = $layoutOnTabChange;
        $this->minTabWidth = $minTabWidth;
        $this->plain = $plain;
        $this->resizeTabs = $resizeTabs;
        $this->scrollDuration = $scrollDuration;
        $this->scrollIncrement = $scrollIncrement;
        $this->scrollRepeatInterval = $scrollRepeatInterval;
        $this->tabCls = $tabCls;
        $this->tabMargin = $tabMargin;
        $this->tabPosition = $tabPosition;
        $this->tabWidth = $tabWidth;
        $this->wheelIncrement = $wheelIncrement;
    }

    public function getLayoutConfig() {
        return $this->layoutConfig;
    }

    public function setLayoutConfig($layoutConfig) {
        $this->layoutConfig = $layoutConfig;
    }

    public function getLayoutOnTabChange() {
        return $this->layoutOnTabChange;
    }

    public function setLayoutOnTabChange($layoutOnTabChange) {
        $this->layoutOnTabChange = $layoutOnTabChange;
    }

    public function getMinTabWidth() {
        return $this->minTabWidth;
    }

    public function setMinTabWidth($minTabWidth) {
        $this->minTabWidth = $minTabWidth;
    }

    public function getPlain() {
        return $this->plain;
    }

    public function setPlain($plain) {
        $this->plain = $plain;
    }

    public function getResizeTabs() {
        return $this->resizeTabs;
    }

    public function setResizeTabs($resizeTabs) {
        $this->resizeTabs = $resizeTabs;
    }

    public function getScrollDuration() {
        return $this->scrollDuration;
    }

    public function setScrollDuration($scrollDuration) {
        $this->scrollDuration = $scrollDuration;
    }

    public function getScrollIncrement() {
        return $this->scrollIncrement;
    }

    public function setScrollIncrement($scrollIncrement) {
        $this->scrollIncrement = $scrollIncrement;
    }

    public function getScrollRepeatInterval() {
        return $this->scrollRepeatInterval;
    }

    public function setScrollRepeatInterval($scrollRepeatInterval) {
        $this->scrollRepeatInterval = $scrollRepeatInterval;
    }

    public function getTabCls() {
        return $this->tabCls;
    }

    public function setTabCls($tabCls) {
        $this->tabCls = $tabCls;
    }

    public function getTabMargin() {
        return $this->tabMargin;
    }

    public function setTabMargin($tabMargin) {
        $this->tabMargin = $tabMargin;
    }

    public function getTabPosition() {
        return $this->tabPosition;
    }

    public function setTabPosition($tabPosition) {
        $this->tabPosition = $tabPosition;
    }

    public function getTabWidth() {
        return $this->tabWidth;
    }

    public function setTabWidth($tabWidth) {
        $this->tabWidth = $tabWidth;
    }

    public function getWheelIncrement() {
        return $this->wheelIncrement;
    }

    public function setWheelIncrement($wheelIncrement) {
        $this->wheelIncrement = $wheelIncrement;
    }

    
        public function getCode(){
        $output="new Ext.TabPanel({
                region: '".$this->region."', // a center region is ALWAYS required for border layout
                deferredRender: ".$this->booleanToString($this->deferredRender).",
                activeTab: ".$this->activeTab.",     // first tab initially active
                items: [";
        foreach($this->items as $item){
            $output.=$item->getCode().",";
        }
        $output = substr ($output, 0, strlen($output) - 1);
        $output.="]
            })";
        return $output;
    }
}
?>
