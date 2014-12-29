<?php
require_once 'AllReportNames.interface.php';
final class Lang implements Lang\AllReportNames{
    
    /**
     * Returns the $array_lang comprised of all the specified reports.
     * Includes the basic array_lang by default.
     * Variable argument lengths.
     * First argument passed should be a string comprised of either 'en', 'fr' or 'all' (or another language, would that be useful).
     * All other arguments should be the name of the reports to include (string - case sensitive)
     * @return assoc_array, the $array_lang
     */
    public static function getArrayLang($lang, $args){
        $array = [];//self::getArrayFromReport('CommonLang', $lang);
        for($i = 0; $i < count($args); $i++){
            $array = self::getAndMergeFromReport($array, $args[$i], $lang);
        }
        return $array;
    }
    
    /**
     * Fetches the report's array and then merge it with the current array.
     * @param assoc_array $previous , the previous array
     * @param string $report , Name of the said report
     * @param string $lang , Language parameter ('en'|'fr'|'all')
     * @return assoc_array, the current merged array
     */
    private static function getAndMergeFromReport($previous, $report, $lang){
        $curr = self::getArrayFromReport($report, $lang);
        return self::mergeToPrevious($previous, $curr, $lang);   
    }
    
    
    /**
     * Returns the array coming from the passed report. 
     * Assumes that the report name and the class name are the same, and that the methods getLangEn, getLangFr and getAll are implemented.
     * For non-default languages, the array is merged with the English array to avoid missing fields.
     * @param string $report , Name of the said report
     * @param  string $lang , Language parameter ('en'|'fr'|'all')
     * @return assoc_array, array from said report 
     * @throws Exception, If Reflection fails
     */
    private static function getArrayFromReport($report, $lang){
        $path = $report . '.lang.class.php';
        require_once $path;
        $array = [];
        $namespaced_report = "Lang\\" . $report;
        switch($lang){
            case 'en':
                $obj = new $namespaced_report;
                $array = $obj->getLangEn(); 
                break;
            case 'fr':
                $obj = new $namespaced_report;
                $array = $obj->getLangFr(); 
                $default = $obj->getLangEn();
                $array = self::mergeToDefault($default, $array);
                break;
            case 'all':
            default:
                $obj = new $report;
                $array = $obj->getAll(); 
                break;
        }
        if($array === false){
            throw new Exception("Lang: $report.lang.class.php: class name not recognized or getter for $lang not implemented");
        }
        return $array;
            
    }
    
    private static function mergeToPrevious($previous, $curr, $lang){
        switch($lang){
            case 'en':
            case 'fr':
                return array_merge($previous, $curr);
            case 'all':
            default:
                return array_merge_recursive($previous, $curr);
        }
    }
    
    /**
     * A simple array-merge, but simply implemented as a function for semantics.
     * @param type $default
     * @param type $case
     * @return assoc_array
     */
    private static function mergeToDefault($default, $case){
        return array_merge($default, $case);
    } 
}