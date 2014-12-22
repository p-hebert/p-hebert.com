<?php
namespace Lang;
require_once $_SERVER['DOCUMENT_ROOT'] . '/civdev/lang/ParentLang.lang.class.php';
final class TemplateReport extends ParentLang {

    public function __construct() {}

    protected function initEn() {
        $this->array_lang_en = array(/*your array here*/);
    }
    
    protected function initFr() {
        $this->array_lang_fr = array(/*your array here*/);
    }
}