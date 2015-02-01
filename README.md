# Make-Nice-Time
-----------------
Class PHP make a nice time from timstamp
example output : 1 day ago, 2 days ago, 1 month ago, 2 months ago …

## Requirements
-----------------
* **PHP 5.0.3 or superior**

### Ready Languages
-----------------
* English
* Español (Spanish)
* Deutsch (German) - Beta
* Nederlands (Dutch) - Beta
* Français (French)
* Italiano (Italian)
* Japonese (日本の) - Beta
* Português (Portuguese)
* Русский (Russian) - Beta
* Suomi (Finnish) - Beta
* ελληνικά (Greek) - Beta

### Key Features
-----------------
* It's easy to use.
* Multiple languages.
* Parameter limit in days (used to reverse the nice datetime to a specific format).
* Automatic detect the language.

## Installation / Usage
-----------------

1. Download the [`composer.phar`](https://getcomposer.org/composer.phar) executable or use the installer.

    ``` sh
    $ curl -sS https://getcomposer.org/installer | php
    ```
    
2. Create a composer.json defining your dependencies. Note that this example is
a short version for applications that are not meant to be published as packages
themselves. To create libraries/packages please read the
[documentation](http://getcomposer.org/doc/02-libraries.md).

    ``` json
    {
        "repositories": [
            {"type": "git", "url": "https://github.com/offboard/Make-Nice-Time"}
        ], 
        "require": {  
            "offboard/Make-Nice-Time": "dev-master"
        }
    }
    ```
3. Run Composer: `php composer.phar install`
4. Browse for more packages on [Packagist](https://packagist.org).

## Updating Composer
-----------------

Running `php composer.phar self-update` or equivalent will update a phar
install with the latest version.

## Installation from Source
------------------------

1. Run `git clone https://github.com/offboard/Make-Nice-Time.git /var/www/your-project/libs/`
3. Include the class in your project file: `include('libs/NiceDate.php');`

If you already use autoload, simply causes your autoload load the libs folder or any other that is installed clase `Make Nice Time`

## Examples
------------------------

## Quick Install
-----------------
```php
<?php
// Loading class required
require_once('libs/NiceDate.php');
```

## Simple Example
-----------------
```php
<?php
// Loading all required classes
require_once('libs/NiceDate.php');

$now = date('Y-m-d H:i:s', strtotime('-2 week'));
// show result
echo makeNiceTime::MakeNew($now); // Example output in English : 2 weeks ago
?>
```

## Example Database
-----------------
```php
<?php
// Loading all required classes
require_once('libs/NiceDate.php');
require_once('config.inc.php'); // Configuration file of the database

//create connection
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$query = mysqli_query($mysqli, "SELECT * FROM menu");
$result = mysqli_fetch_array($query);

// listing data result
foreach ($result as $value) {
  // create nice date time
  $dat = makeNiceTime::MakeNew($value['data']);
  // show result
  echo $value['data'] . "<br>" . $dat . "<hr>";
}

?>
```

## Example Limit
-----------------
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
// show result
echo makeNiceTime::MakeNew($now, $limit, $output);
?>
```

## Automatic Choose the Language
-----------------
```php
<?php
// Loading all required classes
require_once('libs/NiceDate.php');

$now = date('Y-m-d H:i:s', strtotime('-2 week'));
// defines language is chosen based on browser language
makeNiceTime::$DefaultLanguage = 'auto';
// show result
echo makeNiceTime::MakeNew($now);
?>
```

## Example Choose Language
-----------------
```php
<?php
// Loading all required classes
require_once('libs/NiceDate.php');

$now = date('Y-m-d H:i:s', strtotime('-2 week'));
// defines Portuguese language as default, even being in another language standard.
makeNiceTime::$DefaultLanguage = 'pt-br';
// show result
echo makeNiceTime::MakeNew($now); // Exemplo de saída : Há 2 semanas atrás

?>
```

## Contribute
-----------------

Please commit only in *develop* branch. The *master* branch will always contain the stable version.

## Current and further development
-----------------

See active issues and requested features here:
https://github.com/offboard/Make-Nice-Time/issues?state=open

## License
-----------------

Licensed under [MIT](http://www.opensource.org/licenses/mit-license.php). Totally free for private or commercial projects.
