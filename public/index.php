<?php

require 'bootstrap.php';


$fileBox = new box\core\FileBox();
// $fileBox->setData(1, 'one');
// $fileBox->setData(2, 'to');
// $fileBox->setData(3, 'three');
// $fileBox->setData(4, 'thore');
// $fileBox->setData(5, 'five');
// $fileBox->setData(6, 'six');


$fileBox->getData(6);


$app2 = new app\App();