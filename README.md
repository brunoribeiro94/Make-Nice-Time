# Make-Nice-Time
Class PHP make a nice time from timstamp
example output : 1 day ago, 2 days ago, 1 month ago, 2 months ago …

### Ready Languages
* English
* Español (Spanish)
* Deutsch (German) - Beta
* Nederlands (Dutch) - Beta
* Français (French) - Beta
* Italiano (Italian)
* Japonese (日本の) - Beta
* Português (Portuguese)
* Русский (Russian) - Beta
* Suomi (Finnish) - Beta

### Key Features
* It's easy to use.
* Multiple languages.
* Parameter limit in days (used to reverse the nice datetime to a specific format).
*  Automatic Choose the Language.

## Quick Install
```php
<?php
// Loading class required
require_once('libs/NiceDate.php');
```

## Simple Example
```php
<?php
// Loading all required classes
require_once('libs/NiceDate.php');

$now = date('Y-m-d H:i:s', strtotime('-2 week'));
echo makeNiceTime::MakeNew($now);
// example output in English : 2 weeks ago
?>
```

## Example Database
```php
<?php
// Loading all required classes
require_once('libs/NiceDate.php');
require_once('config.inc.php');

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$query = mysqli_query($mysqli, "SELECT * FROM menu");
$result = mysqli_fetch_array($query);

foreach ($result as $value) {
  $dat = makeNiceTime::MakeNew($value['data']);
  echo $value['data'] . "<br>" . $dat . "<hr>";
}

?>
```

## Example Limit
```php
<?php
// Loading all required classes
require_once('libs/NiceDate.php');

// Our date will be formatted  is current date + 12 weeks
$now = date('Y-m-d H:i:s', strtotime('+12 week'));

// limit date is current date + 5 week, in that case is smaller than our data
$limit = date('Y-m-d H:i:s', strtotime('+5 week'));

// output format optional, Standard timestamp format Y-m-d H:i:s
$output = 'M d Y'; // example May 2 2014

echo makeNiceTime::MakeNew($now, $limit, $output);
?>
```

## Automatic Choose the Language
```php
<?php
// Loading all required classes
require_once('libs/NiceDate.php');

$now = date('Y-m-d H:i:s', strtotime('-2 week'));
// defines language is chosen based on browser language
makeNiceTime::$DefaultLanguage = 'auto';
echo makeNiceTime::MakeNew($now);
?>
```

## Example Choose Language
```php
<?php
// Loading all required classes
require_once('libs/NiceDate.php');

$now = date('Y-m-d H:i:s', strtotime('-2 week'));
// defines Portuguese language as default, even being in another language standard.
makeNiceTime::$DefaultLanguage = 'pt-br';
echo makeNiceTime::MakeNew($now);
// Exemplo de saída : Há 2 semanas atrás
?>
```

## Contribute

Please commit only in *develop* branch. The *master* branch will always contain the stable version.

## Current and further development

See active issues and requested features here:
https://github.com/offboard/Make-Nice-Time/issues?state=open

## License

Licensed under [MIT](http://www.opensource.org/licenses/mit-license.php). Totally free for private or commercial projects.
