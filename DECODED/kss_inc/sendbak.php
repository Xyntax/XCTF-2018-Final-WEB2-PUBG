<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

require( "./inc.php" );
require( "./sendmail.php" );
if ( BAKDATAMODE != 2 )
{
    exit( "stopbak" );
}
$_obfuscate_hpGMk4uHkJGPkpSJiYyQh4Y� = BINSIZE;
if ( _obfuscate_ipWHiIuOiYuPjIaPkZSThok�( "set_time_limit" ) )
{
    set_time_limit( 90 );
    $_obfuscate_hpGMk4uHkJGPkpSJiYyQh4Y� = 500;
}
$_obfuscate_jZWKko2SlJWSjYiNjJSHkow� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "filename", "gp", "sql", "" );
$_obfuscate_lY2VlYyLioeLlIyNiYqJkI4� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "begin", "gp", "sql", "" );
$_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "password", "gp", "sql", "" );
if ( $_obfuscate_jZOIiIiJkJOGiY_KjoaGh4c� != MYSQLBAKPASSWORD )
{
    exit( "无权限访问备份接口" );
}
$_obfuscate_jIeTi4eGipWPk4eKiZOKjYs� = KSSROOTDIR."kss_logs".DIRECTORY_SEPARATOR."databak".DIRECTORY_SEPARATOR;
$_obfuscate_kYeOj4aMi4uSh4_KlJWRiYc� = filesize( $_obfuscate_jIeTi4eGipWPk4eKiZOKjYs�.$_obfuscate_jZWKko2SlJWSjYiNjJSHkow� );
$_obfuscate_iZCTk5SRlZGVkIqRhouHi5Q� = KSSLOGDIR."mailbak_log.php";
if ( !is_file( $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Q� ) || 1048576 < filesize( $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Q� ) )
{
    $_obfuscate_ipWMho2NlI2MiI_MioeTlZI� = "?";
    $_obfuscate_ipCIiZCRiYmKhpOSi4eSjZI� = "<".$_obfuscate_ipWMho2NlI2MiI_MioeTlZI�."php exit('Access denied to view this page!');".$_obfuscate_ipWMho2NlI2MiI_MioeTlZI�.">\r\n";
    file_put_contents( $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Q�, $_obfuscate_ipCIiZCRiYmKhpOSi4eSjZI�."\r\n" );
}
if ( $_obfuscate_lY2VlYyLioeLlIyNiYqJkI4� == 0 )
{
    file_put_contents( $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Q�, "\r\n\r\n".date( "Y-m-d H:i:s" )."\t\t邮件备份开始\r\n", FILE_APPEND );
}
if ( $_obfuscate_kYeOj4aMi4uSh4_KlJWRiYc� <= $_obfuscate_lY2VlYyLioeLlIyNiYqJkI4� )
{
    $_obfuscate_i4iGko6Li5KMlJWOj4mRios� = glob( $_obfuscate_jIeTi4eGipWPk4eKiZOKjYs�."*.bin" );
    foreach ( $_obfuscate_i4iGko6Li5KMlJWOj4mRios� as $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Y� )
    {
        @unlink( $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Y� );
    }
    file_put_contents( $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Q�, date( "Y-m-d H:i:s" )."\t\t发送备份的数据库到邮箱完成2\r\n", FILE_APPEND );
    exit( );
}
$_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48� = fopen( $_obfuscate_jIeTi4eGipWPk4eKiZOKjYs�.$_obfuscate_jZWKko2SlJWSjYiNjJSHkow�, "r" );
fseek( $_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48�, $_obfuscate_lY2VlYyLioeLlIyNiYqJkI4� );
$_obfuscate_koqTiIuHiY6NlJWOiYqRkZE� = fread( $_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48�, 1024 * $_obfuscate_hpGMk4uHkJGPkpSJiYyQh4Y� );
fclose( $_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48� );
$_obfuscate_jJKIi5GOkJSLiYmPko6LjpE� = $_obfuscate_jIeTi4eGipWPk4eKiZOKjYs�."tmpzip".( $_obfuscate_lY2VlYyLioeLlIyNiYqJkI4� / ( 1024 * $_obfuscate_hpGMk4uHkJGPkpSJiYyQh4Y� ) ).".bin";
file_put_contents( $_obfuscate_jJKIi5GOkJSLiYmPko6LjpE�, $_obfuscate_koqTiIuHiY6NlJWOiYqRkZE� );
$_obfuscate_iIiMko2QkYiNh5CUjI_VkZQ� = filesize( $_obfuscate_jJKIi5GOkJSLiYmPko6LjpE� );
$_obfuscate_jZWNj4iGk4mHj4qTjo2Vj44� = "";
if ( $_obfuscate_iIiMko2QkYiNh5CUjI_VkZQ� < 1024 * $_obfuscate_hpGMk4uHkJGPkpSJiYyQh4Y� )
{
    $_obfuscate_jZWNj4iGk4mHj4qTjo2Vj44� = "请下载当日的所有备份邮件附件的bin文件<br>";
    $_obfuscate_jZWNj4iGk4mHj4qTjo2Vj44� = "按下边方法可将bin文件合并<br>";
    $_obfuscate_jZWNj4iGk4mHj4qTjo2Vj44� .= "将下边文本框内容复制到记事本另存为bat文件放到你下载的bin文件目录<br>";
    $_obfuscate_jZWNj4iGk4mHj4qTjo2Vj44� .= "双击运行bat文件即可将所有bin文件合并成数据库zip包文件<br>\r\n";
    $_obfuscate_jZWNj4iGk4mHj4qTjo2Vj44� .= "<textarea style='width:500px;height:100px'>".( "\r\n" );
    $_obfuscate_jZWNj4iGk4mHj4qTjo2Vj44� .= "@echo off".( "\r\n" );
    $_obfuscate_kY2PhpOSlYmQiImHipKOkZM� = array( );
    $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 0;
    while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� * 1024 * $_obfuscate_hpGMk4uHkJGPkpSJiYyQh4Y� < $_obfuscate_kYeOj4aMi4uSh4_KlJWRiYc� )
    {
        $_obfuscate_kY2PhpOSlYmQiImHipKOkZM�[] = "tmpzip".$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�.".bin";
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1;
    }
    $_obfuscate_jZWNj4iGk4mHj4qTjo2Vj44� .= "copy /b ".implode( "+", $_obfuscate_kY2PhpOSlYmQiImHipKOkZM� )." restore.zip";
    $_obfuscate_jZWNj4iGk4mHj4qTjo2Vj44� .= "</textarea>";
}
if ( 0 < $_obfuscate_iIiMko2QkYiNh5CUjI_VkZQ� )
{
    $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = bak_sendmail( "主机".$_SERVER['SERVER_NAME']."数据库".$_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k�['dbname']."备份", "这是系统自动备份数据库的邮件<br>".$_obfuscate_jZWNj4iGk4mHj4qTjo2Vj44�, QQMAIL2, QQMAIL, QQMAILPASSWORD, "", $_obfuscate_jJKIi5GOkJSLiYmPko6LjpE� );
    if ( $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� == TRUE )
    {
        file_put_contents( $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Q�, date( "Y-m-d H:i:s" )."\t\t发送bin数据包成功，开始位置：".$_obfuscate_lY2VlYyLioeLlIyNiYqJkI4�."，数据包大小：".$_obfuscate_iIiMko2QkYiNh5CUjI_VkZQ�." \r\n", FILE_APPEND );
        if ( $_obfuscate_iIiMko2QkYiNh5CUjI_VkZQ� < 1024 * $_obfuscate_hpGMk4uHkJGPkpSJiYyQh4Y� )
        {
            $_obfuscate_i4iGko6Li5KMlJWOj4mRios� = glob( $_obfuscate_jIeTi4eGipWPk4eKiZOKjYs�."*.bin" );
            foreach ( $_obfuscate_i4iGko6Li5KMlJWOj4mRios� as $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Y� )
            {
                @unlink( $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Y� );
            }
            file_put_contents( $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Q�, date( "Y-m-d H:i:s" )."\t\t发送备份的数据库到邮箱完成1\r\n", FILE_APPEND );
            exit( "ok".$_obfuscate_hpGMk4uHkJGPkpSJiYyQh4Y� );
        }
        $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc� = array( );
        $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc�['filename'] = $_obfuscate_jZWKko2SlJWSjYiNjJSHkow�;
        $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc�['begin'] = $_obfuscate_lY2VlYyLioeLlIyNiYqJkI4� + 1024 * $_obfuscate_hpGMk4uHkJGPkpSJiYyQh4Y�;
        $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc�['password'] = MYSQLBAKPASSWORD;
        $_obfuscate_jJWVlI2Kh4uIkouNkI6QkoY� = _obfuscate_j5SMi5KSiouIj4iIipWIkIs�( _obfuscate_ko_JjomRlIiQkYiRlZKSkZI�( ).INSTALLPATH."kss_inc/sendbak.php", $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc�, 1 );
        exit( "working".$_obfuscate_hpGMk4uHkJGPkpSJiYyQh4Y� );
    }
    else
    {
        file_put_contents( $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Q�, date( "Y-m-d H:i:s" )."\t\t发送bin数据包失败，开始位置：".$_obfuscate_lY2VlYyLioeLlIyNiYqJkI4�."，数据包大小：".$_obfuscate_iIiMko2QkYiNh5CUjI_VkZQ�." \r\n", FILE_APPEND );
    }
}
else
{
    $_obfuscate_i4iGko6Li5KMlJWOj4mRios� = glob( $_obfuscate_jIeTi4eGipWPk4eKiZOKjYs�."*.bin" );
    foreach ( $_obfuscate_i4iGko6Li5KMlJWOj4mRios� as $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Y� )
    {
        @unlink( $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Y� );
    }
    file_put_contents( $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Q�, date( "Y-m-d H:i:s" )."\t\t发送备份的数据库到邮箱完成3\r\n", FILE_APPEND );
}
?>
