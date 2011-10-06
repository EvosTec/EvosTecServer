<?php
define('DEBUG', 2);
error_reporting(E_ALL | E_STRICT);

if(DEBUG == 2)
{
    echo "<pre>";
    echo "server gestartet \n";
}

setlocale(LC_ALL, 'de_DE.utf8');

set_include_path(
        get_include_path() . PATH_SEPARATOR
        . '../application/default/models/'
        );

if(DEBUG == 2)
{
    echo "include-Pfade initialisiert \n";
}

require '../vendor/doctrine2/lib/vendor/doctrine-common/lib/Doctrine/Common/ClassLoader.php';

$classLoader = new \Doctrine\Common\ClassLoader('Doctrine\Common', $lib . 'vendor/doctrine-common/lib');
$classLoader->register();

$classLoader = new \Doctrine\Common\ClassLoader('Doctrine\DBAL', $lib . 'vendor/doctrine-dbal/lib');
$classLoader->register();

$classLoader = new \Doctrine\Common\ClassLoader('Doctrine\ORM', $lib);
$classLoader->register();

if(DEBUG == 2)
{
    echo "doctrine initialisiert \n";
}