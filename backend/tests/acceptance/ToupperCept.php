<?php use backend\WebGuy;
$I = new WebGuy($scenario);
$I->wantTo('ensure Toupper form works');
$I->amOnPage('toupper.html');
$I->see('Convert Me!');
$I->fillField('string', "gila");
$I->click('Convert');
$I->see('GILA');
