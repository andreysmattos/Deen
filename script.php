<?php

ini_set('allow_url_fopen', 1);
ini_set('allow_url_include', 1);

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');


libxml_use_internal_errors(true);

try {

	if(!$rss = simplexml_load_file('http://deen.com.br/blog/feed/')){
		//Registra log de erro.
		die();
	}

	$i = 1;

	foreach($rss->channel->item as $notice){
		if($i <= 5){
			$carrosel [] = $notice;
		} else {
			$r [] = $notice;
		}
		$i++;

	}







} catch (Exception $e){	
	//Registra log de erro.
	die();
}