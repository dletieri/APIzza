<?php

require 'phone.php';
require 'customer.php';
require 'gateway.php';
require 'address.php';
require 'contact.php';

$test4 = new contact('{"id": "", "name":"Daniel", "obs":"lá da igreja resgate"}');

$test3 = new address('{"id": "", "address":"Av. Barroso, 2171 - Santana", "obs":""}');

$test2 = new customer('{"id": "", "mainContact":"", "mainPhone":"", "mainAddress":""}');

$test = new phone('{"id": "", "number":"98118-8238", "obs":""}');

$gw = new gateway();

//echo $gw->save($test);
//echo $gw->save($test2);

echo $gw->save($test4);

//$test = new phone();

//echo $gw->save($test);

?>
