# Make-Nice-Time
Class PHP make a nice time from timstamp
example output : 1 day ago, 2 days ago, 1 month ago, 2 months ago …

### Ready Languages
* English
* Español - Beta
* Français - Beta
* Italiano - Beta
* Japonese 日本の - Beta
* Português
* Русский - Beta

## Quick Install
```php
// Loading class required
require_once( __DIR__ . '/libs/NiceDate.php');
```

## Examples
```php
<?php
// Loading all required classes
require_once( __DIR__ . '/libs/NiceDate.php');

$now = date('Y-m-d H:i:s', strtotime('-2 week'));
echo makeNiceTime::MakeNew($now);

?>
```

## Examples Database
```php
<?php
// Loading all required classes
require_once( __DIR__ . '/libs/NiceDate.php');
require_once( __DIR__ . '/config.inc.php');

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$query = mysqli_query($mysqli, "SELECT * FROM menu");
$result = mysqli_fetch_array($query);

foreach ($result as $value) {
  $dat = makeNiceTime::MakeNew($value['data']);
  echo $value['data'] . "<br>" . $dat . "<hr>";
}

?>
```

## Examples Limit
```php
<?php
// Loading all required classes
require_once( __DIR__ . '/libs/NiceDate.php');

// Our date will be formatted  is current date + 12 weeks
$now = date('Y-m-d H:i:s', strtotime('+12 week'));

// limit date is current date + 5 week, if that date exercised limit
$limit = date('Y-m-d H:i:s', strtotime('+5 week'));

// output format optional, Standard timestamp format Y-m-d H:i:s
$output = 'M d Y'; // example May 2 20014

echo makeNiceTime::MakeNew($now, $limit, $output);
?>
```

## Contribute

Please commit only in *develop* branch. The *master* branch will always contain the stable version.

## Current and further development

See active issues and requested features here:
https://github.com/offboard/Make-Nice-Time/issues?state=open

## License

Licensed under [MIT](http://www.opensource.org/licenses/mit-license.php). Totally free for private or commercial projects.
