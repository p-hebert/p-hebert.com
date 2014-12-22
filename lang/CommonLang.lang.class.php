<?php
namespace Lang;
require_once $_SERVER['DOCUMENT_ROOT'] . '/civdev/lang/ParentLang.lang.class.php';
final class CommonLang extends ParentLang {

    public function __construct() {}
    
    protected function initEn() {
        $this->array_lang_en = array(
                                            "title-index" => "pH Official Website",
                                        );
    }
    
    protected function initFr() {
        $this->array_lang_fr = array(
                                            "title-index" => "pH - Site officiel",
                                        );
    }
}