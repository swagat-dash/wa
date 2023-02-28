<?php
if(!function_exists('wa_get_phone')){
	function wa_get_phone( $jid = "" )
	{
		return $jid = "+".explode("@", $jid)[0];
	}
}

if(!function_exists('isValidTelephoneNumber')){
	function isValidTelephoneNumber(string $telephone, int $minDigits = 9, int $maxDigits = 14): bool {
	    if (preg_match('/^[+][0-9]/', $telephone)) { //is the first character + followed by a digit
	        $count = 1;
	        $telephone = str_replace(['+'], '', $telephone, $count); //remove +
	    }
	    
	    //remove white space, dots, hyphens and brackets
	    $telephone = str_replace([' ', '.', '-', '(', ')'], '', $telephone); 

	    //are we left with digits only?
	    return isDigits($telephone, $minDigits, $maxDigits); 
	}
}

if(!function_exists('isDigits')){
	function isDigits(string $s, int $minDigits = 9, int $maxDigits = 14): bool {
	    return preg_match('/^[0-9]{'.$minDigits.','.$maxDigits.'}\z/', $s);
	}
}

if(!function_exists('turnUrlIntoHyperlink')){
	function turnUrlIntoHyperlink($str){
		$reg_exUrl = "/(http|https|ftp|ftps)\\:\\/\\/[a-zA-Z0-9\\-\\.]+\\.[a-zA-Z]{2,3}(\\/\\S*)?/";
	  	$urls = array();
	  	$urlsToReplace = array();
	  	if (preg_match_all($reg_exUrl, $str, $urls)) {
	      	$numOfMatches = count($urls[0]);
			$numOfUrlsToReplace = 0;
	      	for ($i = 0;$i < $numOfMatches;$i++) {
				$alreadyAdded = false;
				$numOfUrlsToReplace = count($urlsToReplace);
		        for ($j = 0;$j < $numOfUrlsToReplace;$j++) {
		            if ($urlsToReplace[$j] == $urls[0][$i]) {
		                $alreadyAdded = true;
		            }
		        }
		        if (!$alreadyAdded) {
		            array_push($urlsToReplace, $urls[0][$i]);
		        }
		    }
		    $numOfUrlsToReplace = count($urlsToReplace);
		    for ($i = 0;$i < $numOfUrlsToReplace;$i++) {
		        $str = str_replace($urlsToReplace[$i], "<a href=\"".$urlsToReplace[$i]."\" target='_blank'>" . $urlsToReplace[$i] . "</a> ", $str);
		    }
	      	return $str;
	  	} else {
	      	return $str;
	  	}
	}
}

if(!function_exists("wa_get_curl")){
    function wa_get_curl($url){
        $user_agent='Mozilla/5.0 (iPhone; U; CPU like Mac OS X; en) AppleWebKit/420.1 (KHTML, like Gecko) Version/3.0 Mobile/3B48b Safari/419.3';

        $headers = array
        (
            'Accept:text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
            'Accept-Language: en-US,fr;q=0.8;q=0.6,en;q=0.4,ar;q=0.2',
            'Accept-Encoding: gzip,deflate',
            'Accept-Charset: utf-8;q=0.7,*;q=0.7',
            'cookie:datr=; locale=en_US; sb=; pl=n; lu=gA; c_user=; xs=; act=; presence='
        ); 

        $ch = curl_init( $url );

        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST , "GET");
        curl_setopt($ch, CURLOPT_POST, false);     
        curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_ENCODING, "");
        curl_setopt($ch, CURLOPT_AUTOREFERER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_REFERER, base_url());

        $result = curl_exec( $ch );
       
        curl_close( $ch );

        return $result;
    }
}

if(!function_exists('wa_post_curl')){
	function wa_post_curl($url, $data=array() )
	{
	    //open connection
	    $ch = curl_init();

	    //set the url, number of POST vars, POST data
	    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	    curl_setopt($ch,CURLOPT_URL, $url);
	    curl_setopt($ch,CURLOPT_POST, count($data));
	    curl_setopt($ch,CURLOPT_POSTFIELDS, http_build_query($data));
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);

	    //execute post
	    $result = curl_exec($ch);

	    //close connection
	    curl_close($ch);

	    return $result;
	}
}

if(!function_exists('wa_keyword_trim')){
	function wa_keyword_trim( $data = "" )
	{
		if($data == "") return $data;

		$data = explode(",", $data);

		$tmp = [];
		foreach ($data as $value) {
			$tmp[] = trim($value);
		}

		return implode(",", $tmp);
	}
}

if(!function_exists('wa_utf8ize')){
	function wa_utf8ize($d) {
	    if (is_array($d)) {
	        foreach ($d as $k => $v) {
	            $d[$k] = wa_utf8ize($v);
	        }
	    } else if (is_string ($d)) {
	        return mb_convert_encoding($d, "UTF-8");
	    }
	    return $d;
	}
}

if(!function_exists('wa_ms')){
    function wa_ms($array){
        print_r(json_encode( wa_utf8ize($array) ));
        exit(0);
    }
}

if(!function_exists('wa_base64')){
	function wa_base64( $path = "" )
	{
		$path = explode("/assets/", $path);
		$path = FCPATH."/assets/".$path[1];
		$type = pathinfo($path, PATHINFO_EXTENSION);
		$data = file_get_contents($path);
		if($type != "mp4"){
			$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
		}else{
			$base64 = 'data:video/' . $type . ';base64,' . base64_encode($data);
		}
		return $base64;
	}
}

if(!function_exists('array2csv')){
	function array2csv(array &$array)
	{
	   if (count($array) == 0) {
	     return null;
	   }
	   ob_start();
	   $df = fopen("php://output", 'w');
	   fputcsv($df, array_keys(reset($array)));
	   foreach ($array as $row) {
	      fputcsv($df, $row);
	   }
	   fclose($df);
	   return ob_get_clean();
	}
}

if(!function_exists('download_send_headers')){
	function download_send_headers($filename) {
	    // disable caching
	    $now = gmdate("D, d M Y H:i:s");
	    header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
	    header("Cache-Control: max-age=0, no-cache, must-revalidate, proxy-revalidate");
	    header("Last-Modified: {$now} GMT");

	    // force download  
	    header("Content-Type: application/force-download");
	    header("Content-Type: application/octet-stream");
	    header("Content-Type: application/download");

	    // disposition / encoding on response body
	    header("Content-Disposition: attachment;filename={$filename}");
	    header("Content-Transfer-Encoding: binary");
	}
}