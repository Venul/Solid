<?php

// Register autoloader for environments where Composer's autoload.php is not used
spl_autoload_register(function ($class) {
    if (
        preg_match('#(.+)\\\\([a-z]+)#i', $class, $matches)
        && $matches[1] === 'Arthammer\Portal'
    ) {
        require __DIR__.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.$matches[2].'.php';
    }
});

$themeConfiguration = new \Arthammer\Portal\ThemeConfiguration();
$themeConfiguration->run();
