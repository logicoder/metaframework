<?php

/*
 * Inherits from common main.
 */
$commonMainConfig = require COMMON_DIR . 'config/main.php';

/**
 * Common development configuration.
 */
return CMap::mergeArray(array(
    'components' => array(
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=' . APP_ID,
            'username' => APP_ID,
            'password' => '',
        ),
    ),
), $commonMainConfig);