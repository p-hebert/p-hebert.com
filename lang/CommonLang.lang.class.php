<?php
namespace Lang;
require_once 'ParentLang.lang.class.php';
final class CommonLang extends ParentLang {

    public function __construct() {}
    
    protected function initEn() {
        $this->array_lang_en = array(
                                            "nav-home" => "Home",
                                            "nav-example" => "Nav-Example",
                                            "nav-projects" => "Projects",
                                            "nav-passions" => "Passions",
                                            "nav-close" => "Close",
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
                                            "nav-home" => "Index",
                                            "nav-example" => "Exemple nav",
                                            "nav-projects" => "Projets",
                                            "nav-passions" => "Passions",
                                            "nav-close" => "Fermer",
                                            "pagetitle-index" => "pH Official Website",
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