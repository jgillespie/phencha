<?php
/**
 * @author Douglas Javier Rodriguez - www.DouglasRodriguez.me
 */
namespace Phencha;
class Panel extends Container {
    private $animCollapse; // Boolean
    private $applyTo; // Mixed
    private $autoHeight; // Boolean
    private $autoLoad; // Object/String/Function
    private $baseCls; // String
    private $bbar; // Object/Array
    private $bbarCfg; // Object
    private $bodyBorder; // Boolean
    private $bodyCfg; // Object
    private $bodyCssClass; // String/Object/Function
    private $bodyStyle; // String/Object/Function
    private $border; // Boolean
    private $buttonAlign; // String
    private $buttons; // Array
    private $bwrapCfg; // Object
    private $closable; // Boolean
    private $collapseFirst; // Boolean
    private $collapsed; // Boolean
    private $collapsedCls; // String
    private $collapsible; // Boolean
    private $disabled; // Boolean
    private $draggable; // Boolean/Object
    private $elements; // String
    private $fbar; // Object/Array
    private $floating; // Mixed
    private $footer; // Boolean
    private $footerCfg; // Object
    private $frame; // Boolean
    private $header; // Boolean
    private $headerAsText; // Boolean
    private $headerCfg; // Object
    private $hideCollapseTool; // Boolean
    private $iconCls; // String
    private $keys; // Object/Array
    private $maskDisabled; // Boolean
    private $minButtonWidth; // Number
    private $padding; // Number/String
    private $preventBodyReset; // Boolean
    private $resizeEvent; // String
    private $shadow ; // Boolean/String
    private $shadowOffset; // Number
    private $shim ; // Boolean
    private $tbar; // Object/Array
    private $tbarCfg; // Object
    private $title; // String
    private $titleCollapse; // Boolean
    private $toolTemplate; // Ext.Template/Ext.XTemplate
    private $tools; // Array
    private $unstyled; // Boolean

    function __construct($animCollapse=null, $applyTo=null, $autoHeight=null, $autoLoad=null, $baseCls=null, $bbar=null, $bbarCfg=null, $bodyBorder=null, $bodyCfg=null, $bodyCssClass=null, $bodyStyle=null, $border=null, $buttonAlign=null, $buttons=null, $bwrapCfg=null, $closable=null, $collapseFirst=null, $collapsed=null, $collapsedCls=null, $collapsible=null, $disabled=null, $draggable=null, $elements=null, $fbar=null, $floating=null, $footer=null, $footerCfg=null, $frame=null, $header=null, $headerAsText=null, $headerCfg=null, $hideCollapseTool=null, $iconCls=null, $keys=null, $maskDisabled=null, $minButtonWidth=null, $padding=null, $preventBodyReset=null, $resizeEvent=null, $shadow=null, $shadowOffset=null, $shim=null, $tbar=null, $tbarCfg=null, $title=null, $titleCollapse=null, $toolTemplate=null, $tools=null, $unstyled=null) {
        $this->animCollapse = $animCollapse;
        $this->applyTo = $applyTo;
        $this->autoHeight = $autoHeight;
        $this->autoLoad = $autoLoad;
        $this->baseCls = $baseCls;
        $this->bbar = $bbar;
        $this->bbarCfg = $bbarCfg;
        $this->bodyBorder = $bodyBorder;
        $this->bodyCfg = $bodyCfg;
        $this->bodyCssClass = $bodyCssClass;
        $this->bodyStyle = $bodyStyle;
        $this->border = $border;
        $this->buttonAlign = $buttonAlign;
        $this->buttons = $buttons;
        $this->bwrapCfg = $bwrapCfg;
        $this->closable = $closable;
        $this->collapseFirst = $collapseFirst;
        $this->collapsed = $collapsed;
        $this->collapsedCls = $collapsedCls;
        $this->collapsible = $collapsible;
        $this->disabled = $disabled;
        $this->draggable = $draggable;
        $this->elements = $elements;
        $this->fbar = $fbar;
        $this->floating = $floating;
        $this->footer = $footer;
        $this->footerCfg = $footerCfg;
        $this->frame = $frame;
        $this->header = $header;
        $this->headerAsText = $headerAsText;
        $this->headerCfg = $headerCfg;
        $this->hideCollapseTool = $hideCollapseTool;
        $this->iconCls = $iconCls;
        $this->keys = $keys;
        $this->maskDisabled = $maskDisabled;
        $this->minButtonWidth = $minButtonWidth;
        $this->padding = $padding;
        $this->preventBodyReset = $preventBodyReset;
        $this->resizeEvent = $resizeEvent;
        $this->shadow = $shadow;
        $this->shadowOffset = $shadowOffset;
        $this->shim = $shim;
        $this->tbar = $tbar;
        $this->tbarCfg = $tbarCfg;
        $this->title = $title;
        $this->titleCollapse = $titleCollapse;
        $this->toolTemplate = $toolTemplate;
        $this->tools = $tools;
        $this->unstyled = $unstyled;
    }

    public function getAnimCollapse() {
        return $this->animCollapse;
    }

    public function setAnimCollapse($animCollapse) {
        $this->animCollapse = $animCollapse;
    }

    public function getApplyTo() {
        return $this->applyTo;
    }

    public function setApplyTo($applyTo) {
        $this->applyTo = $applyTo;
    }

    public function getAutoHeight() {
        return $this->autoHeight;
    }

    public function setAutoHeight($autoHeight) {
        $this->autoHeight = $autoHeight;
    }

    public function getAutoLoad() {
        return $this->autoLoad;
    }

    public function setAutoLoad($autoLoad) {
        $this->autoLoad = $autoLoad;
    }

    public function getBaseCls() {
        return $this->baseCls;
    }

    public function setBaseCls($baseCls) {
        $this->baseCls = $baseCls;
    }

    public function getBbar() {
        return $this->bbar;
    }

    public function setBbar($bbar) {
        $this->bbar = $bbar;
    }

    public function getBbarCfg() {
        return $this->bbarCfg;
    }

    public function setBbarCfg($bbarCfg) {
        $this->bbarCfg = $bbarCfg;
    }

    public function getBodyBorder() {
        return $this->bodyBorder;
    }

    public function setBodyBorder($bodyBorder) {
        $this->bodyBorder = $bodyBorder;
    }

    public function getBodyCfg() {
        return $this->bodyCfg;
    }

    public function setBodyCfg($bodyCfg) {
        $this->bodyCfg = $bodyCfg;
    }

    public function getBodyCssClass() {
        return $this->bodyCssClass;
    }

    public function setBodyCssClass($bodyCssClass) {
        $this->bodyCssClass = $bodyCssClass;
    }

    public function getBodyStyle() {
        return $this->bodyStyle;
    }

    public function setBodyStyle($bodyStyle) {
        $this->bodyStyle = $bodyStyle;
    }

    public function getBorder() {
        return $this->border;
    }

    public function setBorder($border) {
        $this->border = $border;
    }

    public function getButtonAlign() {
        return $this->buttonAlign;
    }

    public function setButtonAlign($buttonAlign) {
        $this->buttonAlign = $buttonAlign;
    }

    public function getButtons() {
        return $this->buttons;
    }

    public function setButtons($buttons) {
        $this->buttons = $buttons;
    }

    public function getBwrapCfg() {
        return $this->bwrapCfg;
    }

    public function setBwrapCfg($bwrapCfg) {
        $this->bwrapCfg = $bwrapCfg;
    }

    public function getClosable() {
        return $this->closable;
    }

    public function setClosable($closable) {
        $this->closable = $closable;
    }

    public function getCollapseFirst() {
        return $this->collapseFirst;
    }

    public function setCollapseFirst($collapseFirst) {
        $this->collapseFirst = $collapseFirst;
    }

    public function getCollapsed() {
        return $this->collapsed;
    }

    public function setCollapsed($collapsed) {
        $this->collapsed = $collapsed;
    }

    public function getCollapsedCls() {
        return $this->collapsedCls;
    }

    public function setCollapsedCls($collapsedCls) {
        $this->collapsedCls = $collapsedCls;
    }

    public function getCollapsible() {
        return $this->collapsible;
    }

    public function setCollapsible($collapsible) {
        $this->collapsible = $collapsible;
    }

    public function getDisabled() {
        return $this->disabled;
    }

    public function setDisabled($disabled) {
        $this->disabled = $disabled;
    }

    public function getDraggable() {
        return $this->draggable;
    }

    public function setDraggable($draggable) {
        $this->draggable = $draggable;
    }

    public function getElements() {
        return $this->elements;
    }

    public function setElements($elements) {
        $this->elements = $elements;
    }

    public function getFbar() {
        return $this->fbar;
    }

    public function setFbar($fbar) {
        $this->fbar = $fbar;
    }

    public function getFloating() {
        return $this->floating;
    }

    public function setFloating($floating) {
        $this->floating = $floating;
    }

    public function getFooter() {
        return $this->footer;
    }

    public function setFooter($footer) {
        $this->footer = $footer;
    }

    public function getFooterCfg() {
        return $this->footerCfg;
    }

    public function setFooterCfg($footerCfg) {
        $this->footerCfg = $footerCfg;
    }

    public function getFrame() {
        return $this->frame;
    }

    public function setFrame($frame) {
        $this->frame = $frame;
    }

    public function getHeader() {
        return $this->header;
    }

    public function setHeader($header) {
        $this->header = $header;
    }

    public function getHeaderAsText() {
        return $this->headerAsText;
    }

    public function setHeaderAsText($headerAsText) {
        $this->headerAsText = $headerAsText;
    }

    public function getHeaderCfg() {
        return $this->headerCfg;
    }

    public function setHeaderCfg($headerCfg) {
        $this->headerCfg = $headerCfg;
    }

    public function getHideCollapseTool() {
        return $this->hideCollapseTool;
    }

    public function setHideCollapseTool($hideCollapseTool) {
        $this->hideCollapseTool = $hideCollapseTool;
    }

    public function getIconCls() {
        return $this->iconCls;
    }

    public function setIconCls($iconCls) {
        $this->iconCls = $iconCls;
    }

    public function getKeys() {
        return $this->keys;
    }

    public function setKeys($keys) {
        $this->keys = $keys;
    }

    public function getMaskDisabled() {
        return $this->maskDisabled;
    }

    public function setMaskDisabled($maskDisabled) {
        $this->maskDisabled = $maskDisabled;
    }

    public function getMinButtonWidth() {
        return $this->minButtonWidth;
    }

    public function setMinButtonWidth($minButtonWidth) {
        $this->minButtonWidth = $minButtonWidth;
    }

    public function getPadding() {
        return $this->padding;
    }

    public function setPadding($padding) {
        $this->padding = $padding;
    }

    public function getPreventBodyReset() {
        return $this->preventBodyReset;
    }

    public function setPreventBodyReset($preventBodyReset) {
        $this->preventBodyReset = $preventBodyReset;
    }

    public function getResizeEvent() {
        return $this->resizeEvent;
    }

    public function setResizeEvent($resizeEvent) {
        $this->resizeEvent = $resizeEvent;
    }

    public function getShadow() {
        return $this->shadow;
    }

    public function setShadow($shadow) {
        $this->shadow = $shadow;
    }

    public function getShadowOffset() {
        return $this->shadowOffset;
    }

    public function setShadowOffset($shadowOffset) {
        $this->shadowOffset = $shadowOffset;
    }

    public function getShim() {
        return $this->shim;
    }

    public function setShim($shim) {
        $this->shim = $shim;
    }

    public function getTbar() {
        return $this->tbar;
    }

    public function setTbar($tbar) {
        $this->tbar = $tbar;
    }

    public function getTbarCfg() {
        return $this->tbarCfg;
    }

    public function setTbarCfg($tbarCfg) {
        $this->tbarCfg = $tbarCfg;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getTitleCollapse() {
        return $this->titleCollapse;
    }

    public function setTitleCollapse($titleCollapse) {
        $this->titleCollapse = $titleCollapse;
    }

    public function getToolTemplate() {
        return $this->toolTemplate;
    }

    public function setToolTemplate($toolTemplate) {
        $this->toolTemplate = $toolTemplate;
    }

    public function getTools() {
        return $this->tools;
    }

    public function setTools($tools) {
        $this->tools = $tools;
    }

    public function getUnstyled() {
        return $this->unstyled;
    }

    public function setUnstyled($unstyled) {
        $this->unstyled = $unstyled;
    }



}
?>
