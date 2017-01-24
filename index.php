<?
    header('Content-type: text/html; charset=utf-8');
    $ch = curl_init("http://stackoverflow.com/");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch,CURLOPT_VERBOSE,true);
    $html = curl_exec($ch);
    curl_close($ch);
	var_dump($html);

	/*
	$doc = phpQuery::newDocument($file);
    $tbl = $doc->find("div.section:nth-child(1) > div:nth-child(2)")->text();
    print_r($tbl);
	phpQuery::unloadDocuments();*/

?>