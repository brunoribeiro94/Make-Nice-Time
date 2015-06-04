<?php

namespace src\config;

/**
 * Class config
 * 
 * @author Bruno Ribeiro <bruno.espertinho@gmail.com>
 * @package Settings Class
 * @version 0.1
 */
class Config {

    /**
     * standard language
     * please check if the language already exists in the array
     * @access public
     * @see $Languages
     * @var string 
     */
    public static $DefaultLanguage = 'auto';

    /**
     * Minimum required version of PHP
     * @var float 
     */
    protected static $PHPminVersion = '5.0.3';

    /**
     * seconds that make up the time measurement.
     * @access private
     * @var array 
     */
    protected static $values = array(
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

}
