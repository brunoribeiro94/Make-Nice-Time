<?php

namespace src\language;

include('config.php');

/**
 * Class languages
 * 
 * @author Bruno Ribeiro <bruno.espertinho@gmail.com>
 * @package Language Class
 * @version 0.1
 */
class Languages extends \src\config\Config {

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
            'MESSAGE' => '%s atrás',
            'ERROPHP' => 'Desculpe, essa classe só roda na versão maior ou igual a %s do PHP !'
        ),
        // English
        'en' =>
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
            'MESSAGE' => '%s ago',
            'ERROPHP' => 'Sorry, this class only runs in the larger version or equal to %s of PHP!'
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
            'MESSAGE' => 'en %s hace',
            'ERROPHP' => 'Lo sentimos, esta clase sólo se ejecuta en la versión más grande o igual a %s del PHP !'
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
            'MESSAGE' => 'in %s fa',
            'ERROPHP' => 'Siamo spiacenti, questa classe viene eseguito solo nella versione maggiore o uguale a %s di PHP!'
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
            'MESSAGE' => '%s назад',
            'ERROPHP' => 'извините, этот класс работает только в большей версии или равна %s РНР!'
        ),
        // French (Français)
        'fr' =>
        array(
            'YEAR' => array(
                'année',
                'années'
            ),
            'MONTH' => array(
                'mois',
                'mois'
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
            'MESSAGE' => 'ya %s',
            'ERROPHP' => 'Désolé, cette classe ne fonctionne que dans la version plus grande ou égale à %s de PHP!'
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
            'MESSAGE' => '%s 前',
            'ERROPHP' => '申し訳ありませんが、このクラスでは唯一の拡大版で実行するか、PHPの%sに等しい！'
        ),
        // German (Deutsch) - Beta
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
            'MESSAGE' => 'Vor %s',
            'ERROPHP' => 'Läuft diese Klasse nur in der größeren Version oder gleich %s von PHP!' // finish
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
            'MESSAGE' => '%s geleden',
            'ERROPHP' => 'Deze klasse rijdt alleen in de grotere versie of gelijk aan %s van PHP!' // finish
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
            'MESSAGE' => '%s sitten',
            'ERROPHP' => 'Anteeksi, tämä luokka vain kulkee suuremman version tai yhtä suuri kuin %s PHP!'
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
            'MESSAGE' => '%s πριν',
            'ERROPHP' => 'Δυστυχώς, αυτή η τάξη λειτουργεί μόνο στην μεγαλύτερη έκδοση ή ίση με %s της PHP!'
        )
    );

    /**
     * Get the browser language code
     * 
     * @access private
     * @return string
     */
    private static function GetLanguageBrowser() {
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        return $lang;
    }

    /**
     * Returns the word of the language set by default
     * 
     * @param string $key The key will return
     * 
     * @access protected
     * @return string
     */
    protected static function _GetL($key) {
        // verifies that it is in automatic mode
        $set = (self::$DefaultLanguage) == 'auto' ? self::GetLanguageBrowser() : self::$DefaultLanguage;
        // set custom lanaguage
        $l = self::$Languages[$set][$key];
        // set current language
        $c = self::$Languages['en'][$key];
        return !isset($l) ? $c : $l;
    }

}
