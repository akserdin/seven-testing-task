<?php

require __DIR__ . '/env.php';
require __DIR__ . '/src/autoload.php';

(new \Site\Router($_SERVER['REQUEST_URI']))->action();

