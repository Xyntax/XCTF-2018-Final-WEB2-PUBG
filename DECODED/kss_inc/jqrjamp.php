<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

echo "<html>\r\n<head><title>è·³è½¬ä¸­</title></head>\r\n<body>\r\n";
$_obfuscate_lIuQk5OGjpKVjY6UiI_QjJMÿ = $_POST['rmb'];
$_obfuscate_i4yTjY6OipOSjpGQkI6NlYkÿ = $_POST['aliusername'];
$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ = $_POST['ordernum'];
$_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4ÿ = "https://shenghuo.alipay.com/send/payment/fill.htm?title=".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48ÿ."&optEmail=".$_obfuscate_i4yTjY6OipOSjpGQkI6NlYkÿ."&payAmount=".$_obfuscate_lIuQk5OGjpKVjY6UiI_QjJMÿ;
echo "<s";
echo "cript>\r\nfunction open_without_referrer(link){\r\ndocument.body.appendChild(document.createElement('iframe')).src='javascript:\"";
echo "<s";
echo "cript>top.location.replace(\\''+link+'\\')<\\/script>\"';\r\n}\r\nopen_without_referrer('";
echo $_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4ÿ;
echo "');\r\n</script>\r\n</body>\r\n</html>";
?>
