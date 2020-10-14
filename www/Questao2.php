<?php

declare(strict_types=1);
require __DIR__ . '/../framework/config.php';
require_once __DIR__ . '/../vendor/autoload.php';
PHPClassName('CLASS_TITLE');

PHPClassSession('Questão 2', __LINE__);

function checkPalindrome($inputString)
{
    if ($inputString==strrev($inputString)) {
        return true;
    }
    return false;
}

$retorno = checkPalindrome("Cabra");

echo $retorno;