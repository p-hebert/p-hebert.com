<?php
namespace Lang;
require_once 'ParentLang.lang.class.php';
final class CommonLang extends ParentLang {

    public function __construct() {}
    
    protected function initEn() {
        $this->array_lang_en = array(
                                            "title-index" => "pH Official Website",
                                            "label-language" => "Language",
                                            "subtitle-intro-left" => "Think.",
                                            "subtitle-intro-middle" => "Explore.",
                                            "subtitle-intro-right" => "Evolve."
                                        );
    }
    
    protected function initFr() {
        $this->array_lang_fr = array(
                                            "title-index" => "pH - Site officiel",
                                            "label-language" => "Langue",
                                            "subtitle-intro-left" => "R&eacutefl&eacutechir",
                                            "subtitle-intro-middle" => "Explorer",
                                            "subtitle-intro-right" => "&Eacutevoluer"
                                        );
    }
}