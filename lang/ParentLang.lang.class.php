<?php

namespace Lang;

 abstract class ParentLang{
    protected $array_lang_en;
    protected $array_lang_fr;
    /**
     * Accessor for the English array
     * @return assoc_array, the English array
     */
    public function getLangEn(){
        if(!isset($this->array_lang_en)){
            $this->initEn();
        }
        return $this->array_lang_en;
    }
    
    /**
     * Accessor for the French array
     * @return assoc_array, the French array
     */
    public function getLangFr(){
        if(!isset($this->array_lang_fr)){
            $this->initFr();
        }
        return $this->array_lang_fr;
    }
    
    /**
     * Accessor for all the static language arrays.
     * Group them in an assoc array rather than a normal array to facilitate the array_merge_recursive operation.
     * @return assoc_array, All language arrays
     */
    public function getAll(){
        if(!isset($this->array_lang_en)){
            $this->initEn();
        }
        if(!isset($this->array_lang_fr)){
            $this->initEn();
        }
        return [
                    'eng' => $this->array_lang_en,
                    'fr' => $this->array_lang_fr
               ];
    }
    
    protected abstract function initEn();  
    
    protected abstract function initFr();

}