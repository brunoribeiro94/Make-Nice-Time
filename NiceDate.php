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

include('libs/language.php');

/**
 * Simple abstract class for make a nice date time
 * @see https://github.com/offboard/Make-Nice-Time/blob/master/README.md#example-database
 * @author Bruno Ribeiro <bruno.espertinho@gmail.com>
 * @version 0.1.7
 */
abstract class makeNiceTime extends src\language\Languages {

    /**
     * Create nice date time
     * 
     * @param datetime $datetime Timestamp Format
     * @param String $LimitDate Differences in days to show another format, use false to disable
     * @param String $OutputFormat Output format if datetime interval exercise days - Standard timestamp format
     * 
     * @access public
     * @return string
     */
    public static function MakeNew($datetime, $LimitDate = false, $OutputFormat = 'Y-m-d H:i:s') {
        // Check version of PHP for initiate class
        $msg = sprintf(self::_GetL('ERROPHP'), self::$PHPminVersion);
        if (!self::checkMinVersionPHP()) {
            error_log($msg);
            die($msg);
        }

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

        // generate nice date time
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

    /**
     * Check the minimum required version of PHP
     * 
     * @return boolean
     */
    private static function checkMinVersionPHP() {
        if (version_compare(PHP_VERSION, self::$PHPminVersion, '<')) {
            return false;
        }
        return true;
    }

    /**
     * If not numeric then convert data to unix timestamps
     * 
     * @param mixed $time Date
     * 
     * @access private
     * @return integer
     */
    private static function _CheckTime($time) {
        $result = !is_int($time) ? strtotime($time) : $time;
        return $result;
    }

    /**
     * Time format is UNIX timestamp or
     * PHP strtotime compatible strings
     * 
     * @param Datetime $time1 Date used
     * @param Datetime $time2 Limit time
     * 
     * @access private
     * @return boolean
     */
    private static function dateDiff($time1, $time2) {
        // If not numeric then convert texts to unix timestamps
        return (self::_CheckTime($time1) > self::_CheckTime($time2)) ? true : false;
    }

}
