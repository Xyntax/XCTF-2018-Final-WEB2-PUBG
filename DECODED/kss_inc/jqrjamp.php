<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

echo "<html>\r\n<head><title>跳转中</title></head>\r\n<body>\r\n";
$_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM� = $_POST['rmb'];
$_obfuscate_i4yTjY6OipOSjpGQkI6NlYk� = $_POST['aliusername'];
$_obfuscate_iJWMjIiVi5OGjJOViY2Li48� = $_POST['ordernum'];
$_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4� = "https://shenghuo.alipay.com/send/payment/fill.htm?title=".$_obfuscate_iJWMjIiVi5OGjJOViY2Li48�."&optEmail=".$_obfuscate_i4yTjY6OipOSjpGQkI6NlYk�."&payAmount=".$_obfuscate_lIuQk5OGjpKVjY6UiI_QjJM�;
echo "<s";
echo "cript>\r\nfunction open_without_referrer(link){\r\ndocument.body.appendChild(document.createElement('iframe')).src='javascript:\"";
echo "<s";
echo "cript>top.location.replace(\\''+link+'\\')<\\/script>\"';\r\n}\r\nopen_without_referrer('";
echo $_obfuscate_ho6LjYeRkI2PiJSLjoyTlY4�;
echo "');\r\n</script>\r\n</body>\r\n</html>";
?>
