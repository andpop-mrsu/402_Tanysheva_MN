<?php
    $github = __DIR__.'/../vendor/autoload.php';
    $packagist = __DIR__.'/../../../autoload.php';

    if (file_exists($github)) require_once($github);
    else require_once($packagist);

    use function Maria_brash\cold_hot\Controller\startGame;
    startGame();
?>
