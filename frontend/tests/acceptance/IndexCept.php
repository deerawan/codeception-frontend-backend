<?php use frontend\WebGuy;

$I = new WebGuy($scenario);
$I->wantTo('perform actions and see result');
$I->see('Halaman Index');
