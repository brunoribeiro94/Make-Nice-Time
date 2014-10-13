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
 * @version 1
 */
abstract class makeNiceTime {

    /**
     * standard language
     * please check if the language already exists in the array
     * @see $Languages
     * @var str 
     */
    public static $DefaultLanguage = 'eng';

    /**
     * seconds that make up the time measurement.
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
     * @var array 
     */
    private static $Languages = array(
        // Português
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
        // Español - Beta
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
        // Italiano - Beta
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
        // Русский - Beta
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
        )
    );

    /**
     * Create nice date time
     * @param datetime $datetime Timestamp Format
     * @return string
     */
    public static function MakeNew($datetime) {
        $etime = time() - strtotime($datetime);
        // is just now ?
        if ($etime < 1) {
            return self::$Languages[self::$DefaultLanguage]['CURRENT'];
        }
        foreach (self::$values as $secs => $str) {
            $d = $etime / $secs;
            if ($d >= 1) {
                $r = round($d);
                $l = self::$Languages[self::$DefaultLanguage][$str];
                // check the amount is greater than or equal to 1
                $result = ($r > 1) ? $r . ' ' . $l[1] : '1 ' . $l[0];
                return sprintf(self::$Languages[self::$DefaultLanguage]['MESSAGE'], $result);
            }
        }
    }

}
