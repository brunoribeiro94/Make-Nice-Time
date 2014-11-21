<?php

/**
 * The MIT License (MIT)
 *
 *  Copyright (c) <2014> <Divulgue Mania>
 *
 *  Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in
 *  all copies or substantial portions of the Software.
 */

/**
 * Simple abstract class for make a nice time
 * @example Example Check all example
 * @author Bruno Ribeiro <bruno.espertinho@gmail.com>
 * @version 0.1.5
 */
abstract class makeNiceTime {

    /**
     * standard language
     * please check if the language already exists in the array
     * @access public
     * @see $Languages
     * @var string 
     */
    public static $DefaultLanguage = 'eng';

    /**
     * seconds that make up the time measurement.
     * @access private
     * @var array 
     */
    private static $values = array(
        // year (12 * 30 * 24 * 60 * 60)
        31104000 => 'YEAR',
        // month (30 * 24 * 60 * 60)
        2592000 => 'MONTH',
        // day (24 * 60 * 60)
        86400 => 'DAY',
        // hour (60 * 60)
        3600 => 'HOUR',
        // min
        60 => 'MIN',
        // sec
        1 => 'SEC'
    );

    /**
     * languages ​​already ready for use
     * @access private
     * @var array 
     */
    private static $Languages = array(
        // Português (Portuguese)
        'pt-br' =>
        array(
            'YEAR' => array(
                'ano',
                'anos'
            ),
            'MONTH' => array(
                'mês',
                'meses'
            ),
            'DAY' => array(
                'dia',
                'dias'
            ),
            'HOUR' => array(
                'hora',
                'horas'
            ),
            'MIN' => array(
                'minuto',
                'minutos'
            ),
            'SEC' => array(
                'segundo',
                'segundos'
            ),
            'CURRENT' => 'Agora mesmo',
            'MESSAGE' => 'há %s atrás'
        ),
        // English
        'eng' =>
        array(
            'YEAR' => array(
                'year',
                'years'
            ),
            'MONTH' => array(
                'month',
                'months'
            ),
            'DAY' => array(
                'day',
                'days'
            ),
            'HOUR' => array(
                'hour',
                'hours'
            ),
            'MIN' => array(
                'minute',
                'minutes'
            ),
            'SEC' => array(
                'sec',
                'secs'
            ),
            'CURRENT' => 'just now',
            'MESSAGE' => '%s ago'
        ),
        // Español (Spanish)
        'es' =>
        array(
            'YEAR' => array(
                'año',
                'años'
            ),
            'MONTH' => array(
                'mes',
                'meses'
            ),
            'DAY' => array(
                'dia',
                'dias'
            ),
            'HOUR' => array(
                'hora',
                'horas'
            ),
            'MIN' => array(
                'minuto',
                'minutos'
            ),
            'SEC' => array(
                'segundo',
                'segundos'
            ),
            'CURRENT' => 'justamente ahora',
            'MESSAGE' => 'en %s hace'
        ),
        // Italiano (Italian)
        'it' =>
        array(
            'YEAR' => array(
                'anno',
                'anni'
            ),
            'MONTH' => array(
                'mese',
                'mesi'
            ),
            'DAY' => array(
                'giorno',
                'giorni'
            ),
            'HOUR' => array(
                'ora',
                'ore'
            ),
            'MIN' => array(
                'minuto',
                'minuti'
            ),
            'SEC' => array(
                'secondo',
                'secondi'
            ),
            'CURRENT' => 'proprio adesso',
            'MESSAGE' => 'in %s fa'
        ),
        // Русский (Russian) - Beta
        'ru' =>
        array(
            'YEAR' => array(
                'год',
                'года'
            ),
            'MONTH' => array(
                'месяц',
                'месяца'
            ),
            'DAY' => array(
                'день',
                'дня'
            ),
            'HOUR' => array(
                'час',
                'часа'
            ),
            'MIN' => array(
                'минута',
                'минуты'
            ),
            'SEC' => array(
                'секунду',
                'секунды'
            ),
            'CURRENT' => 'прямо сейчас',
            'MESSAGE' => '%s назад'
        ),
        // Français (Français) - Beta
        'fr' =>
        array(
            'YEAR' => array(
                'année',
                'années'
            ),
            'MONTH' => array(
                'mois ',
                'meses'
            ),
            'DAY' => array(
                'jour',
                'jours'
            ),
            'HOUR' => array(
                'heure',
                'heures'
            ),
            'MIN' => array(
                'minute',
                'minutes'
            ),
            'SEC' => array(
                'seconde',
                'secondes'
            ),
            'CURRENT' => "tout à l'heure",
            'MESSAGE' => 'ya %s'
        ),
        // Japonese (日本の) - Beta
        'ja' =>
        array(
            'YEAR' => array(
                '年間',
                '年'
            ),
            'MONTH' => array(
                'ヶ月',
                'ヶ月'
            ),
            'DAY' => array(
                '日',
                '日'
            ),
            'HOUR' => array(
                '時間',
                '時間'
            ),
            'MIN' => array(
                '分',
                '分'
            ),
            'SEC' => array(
                '秒',
                '秒'
            ),
            'CURRENT' => 'ちょうど今',
            'MESSAGE' => '%s 前'
        ),
        // Nederlands (Deutsch) - Beta
        'deu' =>
        array(
            'YEAR' => array(
                'jahr',
                'jahre'
            ),
            'MONTH' => array(
                'monat',
                'monate'
            ),
            'DAY' => array(
                'tag',
                'tage'
            ),
            'HOUR' => array(
                'stunde',
                'stunden'
            ),
            'MIN' => array(
                'minute',
                'minuten'
            ),
            'SEC' => array(
                'sekunde',
                'sekunden'
            ),
            'CURRENT' => 'soeben',
            'MESSAGE' => 'Vor %s'
        ),
        // Nederlands (Dutch) - Beta
        'nl' =>
        array(
            'YEAR' => array(
                'jaar',
                'jaar'
            ),
            'MONTH' => array(
                'maanden',
                'maanden'
            ),
            'DAY' => array(
                'uur',
                'uur'
            ),
            'HOUR' => array(
                'stunde',
                'stunden'
            ),
            'MIN' => array(
                'minuut',
                'minuten'
            ),
            'SEC' => array(
                'seconde',
                'seconden'
            ),
            'CURRENT' => 'zoëven',
            'MESSAGE' => '%s geleden'
        ),
        // Suomi (Finnish) - Beta
        'fi' =>
        array(
            'YEAR' => array(
                'vuosi',
                'vuotta'
            ),
            'MONTH' => array(
                'kuukausi',
                'kuukautta'
            ),
            'DAY' => array(
                'päivä',
                'päivää'
            ),
            'HOUR' => array(
                'tunti',
                'tuntia'
            ),
            'MIN' => array(
                'minuutti',
                'minuuttia'
            ),
            'SEC' => array(
                'sekunti',
                'sekuntia'
            ),
            'CURRENT' => 'juuri nyt',
            'MESSAGE' => '%s sitten'
        ),
        // ελληνικά (Greek) - Beta
         'el' =>
        array(
            'YEAR' => array(
                'χρόνος',
                'χρόνια'
            ),
            'MONTH' => array(
                'μήνα',
                'μήνες'
            ),
            'DAY' => array(
                'ημέρα',
                'ημέρες'
            ),
            'HOUR' => array(
                'ώρα',
                'ώρες'
            ),
            'MIN' => array(
                'λεπτό',
                'λεπτά'
            ),
            'SEC' => array(
                'δευτερόλεπτο',
                'δευτερόλεπτα'
            ),
            'CURRENT' => 'μόλις τώρα',
            'MESSAGE' => '%s πριν'
        )
    );

    /**
     * Get the browser language code
     * @access private
     * @return string
     */
    private static function GetLanguageBrowser() {
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        return $lang;
    }
    
    /**
     * Returns the word of the language set by default
     * @access private
     * @param string $key The key will return
     * @return string
     */
    private static function _GetL($key) {
        // verifies that it is in automatic mode
        $set = (self::$DefaultLanguage) == 'auto' ? self::GetLanguageBrowser() : self::$DefaultLanguage;
        // set custom lanaguage
        $l = self::$Languages[self::$DefaultLanguage][$key];
        // set current language
        $c = self::$Languages['eng'][$key];
        return !isset($l) ? $c : $l;
    }

    /**
     * If not numeric then convert data to unix timestamps
     * @access private
     * @param mixed $time Date
     * @return integer
     */
    private static function _CheckTime($time) {
        $result = !is_int($time) ? strtotime($time) : $time;
        return $result;
    }

    /**
     * Time format is UNIX timestamp or
     * PHP strtotime compatible strings
     * @access private
     * @param Datetime $time1 Date used
     * @param Datetime $time2 Limit time
     * @return boolean
     */
    private static function dateDiff($time1, $time2) {
        // If not numeric then convert texts to unix timestamps
        $time1 = self::_CheckTime($time1);
        $time2 = self::_CheckTime($time2);

        return ($time1 > $time2) ? true : false;
    }

    /**
     * Create nice date time
     * @access public
     * @param datetime $datetime Timestamp Format
     * @param String $LimitDate Differences in days to show another format, use false to disable
     * @param String $OutputFormat Output format if datetime interval exercise days - Standard timestamp format
     * @return string
     */
    public static function MakeNew($datetime, $LimitDate = false, $OutputFormat = 'Y-m-d H:i:s') {
        // is necessary to transform the data into int
        $etime = time() - self::_CheckTime($datetime);

        // check limit
        if ($LimitDate == true) {
            return date($OutputFormat, self::_CheckTime($datetime));
        }

        // is just now ?
        if ($etime < 1) {
            return self::_GetL('CURRENT');
        }

        // generate nice date
        foreach (self::$values as $secs => $str) {
            $d = $etime / $secs;
            if ($d >= 1) {
                $r = round($d);
                $l = self::_GetL($str);
                // check the amount is greater than or equal to 1
                $result = ($r > 1) ? $r . ' ' . $l[1] : '1 ' . $l[0];
                return sprintf(self::_GetL('MESSAGE'), $result);
            }
        }
    }

}
