<?php namespace Lib\String;

/**
 * Class for work with strings
 */
class Manager
{
    /**
     * Get frequency repeat words in string
     * @param array $arData
     * @return array
     */
    public static function getFrequencyRepeatWords(array $arData)
    {
        $arWords = [];
        $arResult = [];

        foreach ($arData as $key => $string) {
            $arWords[$key] = array_count_values(str_word_count($string, 1));
        }

        foreach ($arWords as $key => $arStrings) {
            foreach ($arStrings as $string => $repeat) {
                if ($repeat > 1) {
                    $arResult[$key][$string] = $repeat;
                }
            }
        }

        return $arResult;
    }
}