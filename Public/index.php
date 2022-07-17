<?php
$starttime = microtime(true); // Top of page

const ROOT_DIR = __DIR__;
const DS = DIRECTORY_SEPARATOR;

include '../App/Config/Config.php';

function autoload()
{
    $includeDir = AUTOLOADDIR;
    foreach ($includeDir as $dir) {
        foreach (glob('..' . DS . 'App' . DS . $dir . DS . '*.php') as $include) {
            if (file_exists($include)) {
                require_once($include);
            }
        }
    }
}

spl_autoload_register('autoload');

$loadHelper = LOADHELPER;
foreach ($loadHelper as $helper) {
    foreach (glob('..' . DS . 'App' . DS . 'Helpers' . DS . $helper . '.php') as $include) {
        if (file_exists($include)) {
            require_once($include);
        }
    }
}

$endtime = microtime(true); // Bottom of page

printf("Page loaded in %f seconds", $endtime - $starttime );