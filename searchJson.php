<?php
if ($_GET['type']=='custContact') {
	require 'custContact.json';
} else if ($_GET['type']=='custPhone') {
	require 'custPhone.json';
} else if ($_GET['type']=='custAddress') {
	require 'custAddress.json';
} else if ($_GET['type']=='infos') {
	require 'infos.json';
} else if ($_GET['type']=='produtos') {
	require 'produtos.json';
} else if ($_GET['type']=='orderItems') {
	require 'orderItems.json';
}



?>