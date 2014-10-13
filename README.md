# Make-Nice-Time
Class PHP make a nice time from timstamp
example output : 1 day ago, 2 days ago, 1 month ago, 2 months ago …

### Ready Languages
* English
* Español - Beta
* Italiano - Beta
* Português
* Русский - Beta

## Requirements

* **PHP 5.3.7+**, PHP 5.4+ or PHP 5.5+
* **MySQL 5** database

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

//finish

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

## Contribute

Please commit only in *develop* branch. The *master* branch will always contain the stable version.

## Current and further development

See active issues and requested features here:
https://github.com/offboard/Make-Nice-Time/issues?state=open

## License

Licensed under [MIT](http://www.opensource.org/licenses/mit-license.php). Totally free for private or commercial projects.
