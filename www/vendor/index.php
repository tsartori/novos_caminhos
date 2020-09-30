<?php

declare(strict_types=1);

use classes\Company;

require __DIR__ . '/../framework/config.php';
require_once __DIR__ . '/vendor/autoload.php';
PHPClassName('2.16 - Relacionamento entre objetos');

/*
*
*/
PHPClassSession('Associação', __LINE__);

$company = new Company();

var_dump($company);