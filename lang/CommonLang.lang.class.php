<?php
namespace Lang;
require_once 'ParentLang.lang.class.php';
final class CommonLang extends ParentLang {

    public function __construct() {}
    
    protected function initEn() {
        $this->array_lang_en = array(
                                            "pagetitle-index" => "pH Official Website",
                                            "title-contact" => "Contact me",
                                            "title-github" => "GitHub",
                                            "title-linkedin" => "linkedIn",
                                            "label-language" => "Language",
                                            "subtitle-intro-left" => "Think.",
                                            "subtitle-intro-middle" => "Explore.",
                                            "subtitle-intro-right" => "Evolve.",
                                            "content-footer" => "Under Development"
                                        );
    }
    
    protected function initFr() {
        $this->array_lang_fr = array(
                                            "title-index" => "pH - Site officiel",
                                            "title-contact" => "Contact",
                                            "label-language" => "Langue",
                                            "subtitle-intro-left" => "R&eacutefl&eacutechir",
                                            "subtitle-intro-middle" => "Explorer",
                                            "subtitle-intro-right" => "&Eacutevoluer",
                                            "content-footer" => "En d&eacuteveloppement"
                                        );
    }
}