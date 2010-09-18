<?php
/**
 * @author Douglas Javier Rodriguez - www.DouglasRodriguez.me
 */

namespace Phencha;
class Specification {
    private $tag;
    private $children;
    private $cls;
    private $html;

    function __construct($tag, $children, $cls, $html) {
        $this->tag = $tag;
        $this->children = $children;
        $this->cls = $cls;
        $this->html = $html;
    }

    public function getTag() {
        return $this->tag;
    }

    public function setTag($tag) {
        $this->tag = $tag;
    }

    public function getChildren() {
        return $this->children;
    }

    public function setChildren($children) {
        $this->children = $children;
    }

    public function getCls() {
        return $this->cls;
    }

    public function setCls($cls) {
        $this->cls = $cls;
    }

    public function getHtml() {
        return $this->html;
    }

    public function setHtml($html) {
        $this->html = $html;
    }




}
?>
