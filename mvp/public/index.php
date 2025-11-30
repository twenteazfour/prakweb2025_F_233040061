<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../init.php';

spl_autoload_register(function ($class) {
    $controllerPath = __DIR__ . '/app/controllers/' . $class . '.php';
    $modelPath      = __DIR__ . '/app/models/' . $class . '.php';

    if (file_exists($controllerPath)) {
        require_once $controllerPath;
    } elseif (file_exists($modelPath)) {
        require_once $modelPath;
    } else {
        echo "<pre>Autoload gagal memuat class: $class</pre>";
    }
});
