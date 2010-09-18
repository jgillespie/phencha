<?php
/**
 * @author Douglas Javier Rodriguez - www.DouglasRodriguez.me
 */
namespace Phencha;
class Component extends Observable{

    private $allowDomMove; // Boolean
    private $applyTo; //Mixed
    private $autoEl; // Mixed
    private $autoShow; // Boolean
    private $bubbleEvents; // Array
    private $clearCls; // String
    private $cls; // String
    private $contentEl; // String
    private $ctCls; // String
    private $data; // Mixed
    private $disabled; // Boolean
    private $disabledClass; // String
    private $fieldLabel; // String
    private $hidden; // Boolean
    private $hideLabel; // Boolean
    private $hideMode; // String
    private $hideParent; // Boolean
    private $html; // String/Object
    private $id; // String
    private $itemCls; // String
    private $itemId; // String
    private $labelSeparator; // String
    private $labelStyle; // String
    private $overCls; // String
    private $plugins; // Object/Array
    private $ptype; // String
    private $ref; // String
    private $renderTo; // Mixed
    private $stateEvents; // Array
    private $stateId; // String
    private $stateful; // Boolean
    private $style; // String
    private $tpl; // Mixed
    private $tplWriteMode; // String
    private $xtype; // String

    function __construct($contentEl=null, $allowDomMove=null, $applyTo=null, $autoEl=null, $autoShow=null, $bubbleEvents=null, $clearCls=null, $cls=null, $contentEl=null, $ctCls=null, $data=null, $disabled=null, $disabledClass=null, $fieldLabel=null, $hidden=null, $hideLabel=null, $hideMode=null, $hideParent=null, $html=null, $id=null, $itemCls=null, $itemId=null, $labelSeparator=null, $labelStyle=null, $overCls=null, $plugins=null, $ptype=null, $ref=null, $renderTo=null, $stateEvents=null, $stateId=null, $stateful=null, $style=null, $tpl=null, $tplWriteMode=null, $xtype=null) {
        $this->contentEl = $contentEl;
        $this->allowDomMove = $allowDomMove;
        $this->applyTo = $applyTo;
        $this->autoEl = $autoEl;
        $this->autoShow = $autoShow;
        $this->bubbleEvents = $bubbleEvents;
        $this->clearCls = $clearCls;
        $this->cls = $cls;
        $this->contentEl = $contentEl;
        $this->ctCls = $ctCls;
        $this->data = $data;
        $this->disabled = $disabled;
        $this->disabledClass = $disabledClass;
        $this->fieldLabel = $fieldLabel;
        $this->hidden = $hidden;
        $this->hideLabel = $hideLabel;
        $this->hideMode = $hideMode;
        $this->hideParent = $hideParent;
        $this->html = $html;
        $this->id = $id;
        $this->itemCls = $itemCls;
        $this->itemId = $itemId;
        $this->labelSeparator = $labelSeparator;
        $this->labelStyle = $labelStyle;
        $this->overCls = $overCls;
        $this->plugins = $plugins;
        $this->ptype = $ptype;
        $this->ref = $ref;
        $this->renderTo = $renderTo;
        $this->stateEvents = $stateEvents;
        $this->stateId = $stateId;
        $this->stateful = $stateful;
        $this->style = $style;
        $this->tpl = $tpl;
        $this->tplWriteMode = $tplWriteMode;
        $this->xtype = $xtype;
    }

    public function getAllowDomMove() {
        return $this->allowDomMove;
    }

    public function setAllowDomMove($allowDomMove) {
        $this->allowDomMove = $allowDomMove;
    }

    public function getApplyTo() {
        return $this->applyTo;
    }

    public function setApplyTo($applyTo) {
        $this->applyTo = $applyTo;
    }

    public function getAutoEl() {
        return $this->autoEl;
    }

    public function setAutoEl($autoEl) {
        $this->autoEl = $autoEl;
    }

    public function getAutoShow() {
        return $this->autoShow;
    }

    public function setAutoShow($autoShow) {
        $this->autoShow = $autoShow;
    }

    public function getBubbleEvents() {
        return $this->bubbleEvents;
    }

    public function setBubbleEvents($bubbleEvents) {
        $this->bubbleEvents = $bubbleEvents;
    }

    public function getClearCls() {
        return $this->clearCls;
    }

    public function setClearCls($clearCls) {
        $this->clearCls = $clearCls;
    }

    public function getCls() {
        return $this->cls;
    }

    public function setCls($cls) {
        $this->cls = $cls;
    }

    public function getContentEl() {
        return $this->contentEl;
    }

    public function setContentEl($contentEl) {
        $this->contentEl = $contentEl;
    }

    public function getCtCls() {
        return $this->ctCls;
    }

    public function setCtCls($ctCls) {
        $this->ctCls = $ctCls;
    }

    public function getData() {
        return $this->data;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function getDisabled() {
        return $this->disabled;
    }

    public function setDisabled($disabled) {
        $this->disabled = $disabled;
    }

    public function getDisabledClass() {
        return $this->disabledClass;
    }

    public function setDisabledClass($disabledClass) {
        $this->disabledClass = $disabledClass;
    }

    public function getFieldLabel() {
        return $this->fieldLabel;
    }

    public function setFieldLabel($fieldLabel) {
        $this->fieldLabel = $fieldLabel;
    }

    public function getHidden() {
        return $this->hidden;
    }

    public function setHidden($hidden) {
        $this->hidden = $hidden;
    }

    public function getHideLabel() {
        return $this->hideLabel;
    }

    public function setHideLabel($hideLabel) {
        $this->hideLabel = $hideLabel;
    }

    public function getHideMode() {
        return $this->hideMode;
    }

    public function setHideMode($hideMode) {
        $this->hideMode = $hideMode;
    }

    public function getHideParent() {
        return $this->hideParent;
    }

    public function setHideParent($hideParent) {
        $this->hideParent = $hideParent;
    }

    public function getHtml() {
        return $this->html;
    }

    public function setHtml($html) {
        $this->html = $html;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getItemCls() {
        return $this->itemCls;
    }

    public function setItemCls($itemCls) {
        $this->itemCls = $itemCls;
    }

    public function getItemId() {
        return $this->itemId;
    }

    public function setItemId($itemId) {
        $this->itemId = $itemId;
    }

    public function getLabelSeparator() {
        return $this->labelSeparator;
    }

    public function setLabelSeparator($labelSeparator) {
        $this->labelSeparator = $labelSeparator;
    }

    public function getLabelStyle() {
        return $this->labelStyle;
    }

    public function setLabelStyle($labelStyle) {
        $this->labelStyle = $labelStyle;
    }

    public function getOverCls() {
        return $this->overCls;
    }

    public function setOverCls($overCls) {
        $this->overCls = $overCls;
    }

    public function getPlugins() {
        return $this->plugins;
    }

    public function setPlugins($plugins) {
        $this->plugins = $plugins;
    }

    public function getPtype() {
        return $this->ptype;
    }

    public function setPtype($ptype) {
        $this->ptype = $ptype;
    }

    public function getRef() {
        return $this->ref;
    }

    public function setRef($ref) {
        $this->ref = $ref;
    }

    public function getRenderTo() {
        return $this->renderTo;
    }

    public function setRenderTo($renderTo) {
        $this->renderTo = $renderTo;
    }

    public function getStateEvents() {
        return $this->stateEvents;
    }

    public function setStateEvents($stateEvents) {
        $this->stateEvents = $stateEvents;
    }

    public function getStateId() {
        return $this->stateId;
    }

    public function setStateId($stateId) {
        $this->stateId = $stateId;
    }

    public function getStateful() {
        return $this->stateful;
    }

    public function setStateful($stateful) {
        $this->stateful = $stateful;
    }

    public function getStyle() {
        return $this->style;
    }

    public function setStyle($style) {
        $this->style = $style;
    }

    public function getTpl() {
        return $this->tpl;
    }

    public function setTpl($tpl) {
        $this->tpl = $tpl;
    }

    public function getTplWriteMode() {
        return $this->tplWriteMode;
    }

    public function setTplWriteMode($tplWriteMode) {
        $this->tplWriteMode = $tplWriteMode;
    }

    public function getXtype() {
        return $this->xtype;
    }

    public function setXtype($xtype) {
        $this->xtype = $xtype;
    }


}
?>
