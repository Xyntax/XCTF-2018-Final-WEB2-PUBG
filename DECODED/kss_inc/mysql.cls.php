<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

class mysql_cls
{

    public $‘‡Œ‹Œ†Š“‡’‰;
    public $”•‘‰‡Š’“ŒŠ‡Š’;

    public function _obfuscate_jIuSjYuUkJGHlYuPjZOQjY4ÿ( $_obfuscate_h42JipKTjZKOk4mUjZWVjokÿ, $_obfuscate_h5WKkImSkIiTjIqHi5KUjpMÿ = 1 )
    {
        global $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5kÿ;
        $this->‘‡Œ‹Œ†Š“‡’‰ = mysql_connect( @$_obfuscate_h42JipKTjZKOk4mUjZWVjokÿ['dbhost'], @$_obfuscate_h42JipKTjZKOk4mUjZWVjokÿ['dbuser'], @$_obfuscate_h42JipKTjZKOk4mUjZWVjokÿ['dbpass'], @$_obfuscate_h42JipKTjZKOk4mUjZWVjokÿ['newlink'] );
        if ( $this->‘‡Œ‹Œ†Š“‡’‰ )
        {
            $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4oÿ = mysql_error( );
            $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4oÿ = preg_replace( "/\\[.*\\]/", "", $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4oÿ );
            $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4oÿ = preg_replace( "/\\'[^\\']*\\'/", "'***'", $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4oÿ );
            if ( $_obfuscate_h5WKkImSkIiTjIqHi5KUjpMÿ == 1 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4oÿ );
            }
            else
            {
                return $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4oÿ;
            }
        }
        if ( mysql_select_db( $_obfuscate_h42JipKTjZKOk4mUjZWVjokÿ['dbname'], $this->‘‡Œ‹Œ†Š“‡’‰ ) )
        {
            $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4oÿ = mysql_error( );
            $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4oÿ = preg_replace( "/\\[.*\\]/", "", $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4oÿ );
            $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4oÿ = preg_replace( "/\\'[^\\']*\\'/", "'***'", $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4oÿ );
            if ( $_obfuscate_h5WKkImSkIiTjIqHi5KUjpMÿ == 1 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4oÿ );
            }
            else
            {
                return $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4oÿ;
            }
        }
        if ( mysql_query( "set names 'utf8'" ) )
        {
            $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4oÿ = mysql_error( );
            $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4oÿ = preg_replace( "/\\[.*\\]/", "", $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4oÿ );
            $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4oÿ = preg_replace( "/\\'[^\\']*\\'/", "'***'", $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4oÿ );
            if ( $_obfuscate_h5WKkImSkIiTjIqHi5KUjpMÿ == 1 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4oÿ );
                return "success";
            }
            return $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4oÿ;
        }
        return "success";
    }

    public function api__query( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, $_obfuscate_k4yHk5KGiImKlIeNkYuRlJQÿ = "not_sync", $_obfuscate_kJWQk46KjIuKlImOjJWHjpAÿ = 0 )
    {
        return $this->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, $_obfuscate_k4yHk5KGiImKlIeNkYuRlJQÿ, $_obfuscate_kJWQk46KjIuKlImOjJWHjpAÿ );
    }

    public function _obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, $_obfuscate_k4yHk5KGiImKlIeNkYuRlJQÿ = "not_sync", $_obfuscate_kJWQk46KjIuKlImOjJWHjpAÿ = 0 )
    {
        if ( $_obfuscate_kJWQk46KjIuKlImOjJWHjpAÿ == 0 )
        {
            $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ = mysql_query( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, $this->‘‡Œ‹Œ†Š“‡’‰ );
        }
        else
        {
            $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ = mysql_unbuffered_query( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, $this->‘‡Œ‹Œ†Š“‡’‰ );
        }
        if ( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ === FALSE )
        {
            $this->_obfuscate_k4mUj5OViI6HjY2JiYiLjJAÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ );
            return $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ;
        }
        if ( substr( strtolower( trim( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ ) ), 0, 24 ) != "insert into `kss_tb_sql`" && in_array( substr( strtolower( trim( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ ) ), 0, 6 ), array( "update", "delete", "insert", "replac" ) ) )
        {
            $this->”•‘‰‡Š’“ŒŠ‡Š’ = mysql_affected_rows( );
        }
        if ( IS2SVR == 1 && $_obfuscate_k4yHk5KGiImKlIeNkYuRlJQÿ == "sync" && substr( strtolower( trim( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ ) ), 0, 6 ) !== "select" )
        {
            $_obfuscate_lYyJjIePlZOGk4_RkYeSjo0ÿ = time( )( "insert into `kss_tb_sql` (`addtime`,`sqltext`) VALUES (".time( ).",'".mysql_real_escape_string( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ )."')", "notsync" );
        }
        return $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ;
    }

    public function _obfuscate_ho_Ljo6NjpOOhpGHj5KHiYsÿ( $_obfuscate_h5ORhoePi4iTjI2HiYaGho4ÿ = "defult", $_obfuscate_jo2Sh4uNh4aViomIioqGlI4ÿ = 0, $_obfuscate_jJONioiJjpGMiJSOi4aGk4Yÿ = 0 )
    {
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = TRUE;
        if ( $_obfuscate_jJONioiJjpGMiJSOi4aGk4Yÿ == 0 )
        {
            $_obfuscate_jJONioiJjpGMiJSOi4aGk4Yÿ = _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( );
        }
        $_obfuscate_iYaNkZKGlIqVjoySiJKLi4cÿ = $this->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "insert into `kss_tb_lock` (`lockname`,`locktime`) values ('".$_obfuscate_h5ORhoePi4iTjI2HiYaGho4ÿ."',".time( ).")", "notsync" );
        if ( $_obfuscate_iYaNkZKGlIqVjoySiJKLi4cÿ === FALSE )
        {
            $_obfuscate_j4aUioiHlYmIi4iNi5GQiY8ÿ = $this->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select locktime from kss_tb_lock where `lockname`='".$_obfuscate_h5ORhoePi4iTjI2HiYaGho4ÿ."'" );
            if ( AUTODELLOCK < abs( time( ) - $_obfuscate_j4aUioiHlYmIi4iNi5GQiY8ÿ['locktime'] ) )
            {
                $this->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from kss_tb_lock where `lockname`='".$_obfuscate_h5ORhoePi4iTjI2HiYaGho4ÿ."'", "notsync" );
                return $this->_obfuscate_ho_Ljo6NjpOOhpGHj5KHiYsÿ( $_obfuscate_h5ORhoePi4iTjI2HiYaGho4ÿ, $_obfuscate_jo2Sh4uNh4aViomIioqGlI4ÿ, $_obfuscate_jJONioiJjpGMiJSOi4aGk4Yÿ );
            }
            $_obfuscate_kImMk5OViomJlYeIk4mVh40ÿ = $this->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( );
            if ( substr( $_obfuscate_kImMk5OViomJlYeIk4mVh40ÿ, 0, 15 ) == "Duplicate entry" )
            {
                $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = $_obfuscate_h5ORhoePi4iTjI2HiYaGho4ÿ."é”è¢«å ç”¨ä¸­";
            }
            else
            {
                $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = $_obfuscate_h5ORhoePi4iTjI2HiYaGho4ÿ."[".$_obfuscate_kImMk5OViomJlYeIk4mVh40ÿ."]";
            }
        }
        if ( $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ === TRUE )
        {
            return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ;
        }
        if ( $_obfuscate_jo2Sh4uNh4aViomIioqGlI4ÿ == 1 && _obfuscate_hpCTj4mKj5WSkpWPjouJkocÿ( ) - $_obfuscate_jJONioiJjpGMiJSOi4aGk4Yÿ < 2 )
        {
            _obfuscate_lYyMjpSLiZSVkpSLjJGMkYwÿ( 1000 );
            return $this->_obfuscate_ho_Ljo6NjpOOhpGHj5KHiYsÿ( $_obfuscate_h5ORhoePi4iTjI2HiYaGho4ÿ, $_obfuscate_jo2Sh4uNh4aViomIioqGlI4ÿ, $_obfuscate_jJONioiJjpGMiJSOi4aGk4Yÿ );
        }
        return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ;
    }

    public function _obfuscate_kYyNi4eQiouGlY6Qj46HjpEÿ( $_obfuscate_h5ORhoePi4iTjI2HiYaGho4ÿ = "defult" )
    {
        $this->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "delete from `kss_tb_lock` where `lockname`='".$_obfuscate_h5ORhoePi4iTjI2HiYaGho4ÿ."'", "notsync" );
    }

    public function api__getrow( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, $_obfuscate_i5SUlYiJjY2Kk4iNkIaMjY0ÿ = 1, $_obfuscate_kJWQk46KjIuKlImOjJWHjpAÿ = 0 )
    {
        return $this->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, $_obfuscate_i5SUlYiJjY2Kk4iNkIaMjY0ÿ, $_obfuscate_kJWQk46KjIuKlImOjJWHjpAÿ );
    }

    public function _obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, $_obfuscate_i5SUlYiJjY2Kk4iNkIaMjY0ÿ = 1, $_obfuscate_kJWQk46KjIuKlImOjJWHjpAÿ = 0 )
    {
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ = $this->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, "notsync", $_obfuscate_kJWQk46KjIuKlImOjJWHjpAÿ );
        if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ !== FALSE )
        {
            return $this->_obfuscate_lJWJh4mKhpCLkJKUjZWSi5Mÿ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ, $_obfuscate_i5SUlYiJjY2Kk4iNkIaMjY0ÿ );
        }
        return FALSE;
    }

    public function api__getrows( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, $_obfuscate_i5SUlYiJjY2Kk4iNkIaMjY0ÿ = 1 )
    {
        return $this->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, $_obfuscate_i5SUlYiJjY2Kk4iNkIaMjY0ÿ );
    }

    public function _obfuscate_lZGTiIiKhouKiZGLi5KUkI8ÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, $_obfuscate_i5SUlYiJjY2Kk4iNkIaMjY0ÿ = 1, $_obfuscate_kJWQk46KjIuKlImOjJWHjpAÿ = 0 )
    {
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ = $this->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ, "not_sync", $_obfuscate_kJWQk46KjIuKlImOjJWHjpAÿ );
        if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ !== FALSE )
        {
            $_obfuscate_jo6SjIuHj46LjIyTlIyQk4sÿ = array( );
            while ( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ = $this->_obfuscate_lJWJh4mKhpCLkJKUjZWSi5Mÿ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ, $_obfuscate_i5SUlYiJjY2Kk4iNkIaMjY0ÿ ) )
            {
                $_obfuscate_jo6SjIuHj46LjIyTlIyQk4sÿ[] = $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ;
            }
            $this->_obfuscate_lYuPlIeUlYuMiJGJiI2LiZEÿ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpIÿ );
            return $_obfuscate_jo6SjIuHj46LjIyTlIyQk4sÿ;
        }
        return FALSE;
    }

    public function _obfuscate_kpSVjoiHkoeTlJSRiJGHiI0ÿ( $_obfuscate_k5WOjYqNj4mOiJGGipOQiIYÿ, $_obfuscate_jo_Ti5WSkZSGjZSOi5OKlI8ÿ, $_obfuscate_k4yHk5KGiImKlIeNkYuRlJQÿ = "not_sync", $_obfuscate_j4qMj4eMk5CLkIuSkY2GkIcÿ = 0 )
    {
        $_obfuscate_hpGGi42SjZWKjI2QkYqIk40ÿ = $this->_obfuscate_koaRi4aHjIiPiYmJh5SKh4kÿ( "DESC ".$_obfuscate_k5WOjYqNj4mOiJGGipOQiIYÿ );
        $_obfuscate_iYeIk42Sjo_GhpWOiZCOi5Eÿ = array( );
        $_obfuscate_k4ySiImVj5GGlIaNjYmLiogÿ = array( );
        if ( $_obfuscate_hpGGi42SjZWKjI2QkYqIk40ÿ === FALSE )
        {
            if ( $_obfuscate_j4qMj4eMk5CLkIuSkY2GkIcÿ == 1 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( $_obfuscate_k5WOjYqNj4mOiJGGipOQiIYÿ."è¡¨å¼‚å¸¸ï¼Œéœ€è¦ä¿®å¤ï¼ˆå¯èƒ½æ˜¯Cç›˜ç©ºé—´å·²æ»¡ï¼‰ï¼" );
                return FALSE;
            }
            $_obfuscate_j4qMj4eMk5CLkIuSkY2GkIcÿ = 1;
            return $this->_obfuscate_kpSVjoiHkoeTlJSRiJGHiI0ÿ( $_obfuscate_k5WOjYqNj4mOiJGGipOQiIYÿ, $_obfuscate_jo_Ti5WSkZSGjZSOi5OKlI8ÿ, $_obfuscate_k4yHk5KGiImKlIeNkYuRlJQÿ, $_obfuscate_j4qMj4eMk5CLkIuSkY2GkIcÿ );
        }
        foreach ( $_obfuscate_hpGGi42SjZWKjI2QkYqIk40ÿ as $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ )
        {
            if ( array_key_exists( $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ, $_obfuscate_jo_Ti5WSkZSGjZSOi5OKlI8ÿ ) )
            {
                $_obfuscate_iYeIk42Sjo_GhpWOiZCOi5Eÿ[] = "`".$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ."`";
                $_obfuscate_k4ySiImVj5GGlIaNjYmLiogÿ[] = "'".mysql_real_escape_string( $_obfuscate_jo_Ti5WSkZSGjZSOi5OKlI8ÿ[$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ] )."'";
            }
        }
        if ( empty( $_obfuscate_iYeIk42Sjo_GhpWOiZCOi5Eÿ ) )
        {
            if ( $_obfuscate_k4yHk5KGiImKlIeNkYuRlJQÿ == "sql" )
            {
                return "insert into `".$_obfuscate_k5WOjYqNj4mOiJGGipOQiIYÿ."` (".implode( ",", $_obfuscate_iYeIk42Sjo_GhpWOiZCOi5Eÿ ).") VALUES (".implode( ",", $_obfuscate_k4ySiImVj5GGlIaNjYmLiogÿ ).")";
            }
            return $this->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "insert into `".$_obfuscate_k5WOjYqNj4mOiJGGipOQiIYÿ."` (".implode( ",", $_obfuscate_iYeIk42Sjo_GhpWOiZCOi5Eÿ ).") VALUES (".implode( ",", $_obfuscate_k4ySiImVj5GGlIaNjYmLiogÿ ).")", $_obfuscate_k4yHk5KGiImKlIeNkYuRlJQÿ );
        }
        return FALSE;
    }

    public function _obfuscate_iJOJipCPk4yQlJOMlIeTjYsÿ( $_obfuscate_k5WOjYqNj4mOiJGGipOQiIYÿ, $_obfuscate_jo_Ti5WSkZSGjZSOi5OKlI8ÿ, $_obfuscate_h42QlImNjZSLj4qLkoqIlIgÿ = "", $_obfuscate_k4yHk5KGiImKlIeNkYuRlJQÿ = "not_sync", $_obfuscate_j4qMj4eMk5CLkIuSkY2GkIcÿ = 0 )
    {
        $_obfuscate_hpGGi42SjZWKjI2QkYqIk40ÿ = $this->_obfuscate_koaRi4aHjIiPiYmJh5SKh4kÿ( "DESC ".$_obfuscate_k5WOjYqNj4mOiJGGipOQiIYÿ );
        $_obfuscate_lY2SjIuNiouMkI2Kk4qMlYcÿ = array( );
        if ( $_obfuscate_hpGGi42SjZWKjI2QkYqIk40ÿ === FALSE )
        {
            if ( $_obfuscate_j4qMj4eMk5CLkIuSkY2GkIcÿ == 1 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIgÿ( $_obfuscate_k5WOjYqNj4mOiJGGipOQiIYÿ."è¡¨å¼‚å¸¸ï¼Œéœ€è¦æ·±åº¦ä¿®å¤ï¼" );
                return FALSE;
            }
            $_obfuscate_j4qMj4eMk5CLkIuSkY2GkIcÿ = 1;
            return $this->_obfuscate_kpSVjoiHkoeTlJSRiJGHiI0ÿ( $_obfuscate_k5WOjYqNj4mOiJGGipOQiIYÿ, $_obfuscate_jo_Ti5WSkZSGjZSOi5OKlI8ÿ, $_obfuscate_h42QlImNjZSLj4qLkoqIlIgÿ, $_obfuscate_k4yHk5KGiImKlIeNkYuRlJQÿ, $_obfuscate_j4qMj4eMk5CLkIuSkY2GkIcÿ );
        }
        foreach ( $_obfuscate_hpGGi42SjZWKjI2QkYqIk40ÿ as $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ )
        {
            if ( array_key_exists( $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ, $_obfuscate_jo_Ti5WSkZSGjZSOi5OKlI8ÿ ) )
            {
                $_obfuscate_lY2SjIuNiouMkI2Kk4qMlYcÿ[] = "`".$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ."`='".mysql_real_escape_string( $_obfuscate_jo_Ti5WSkZSGjZSOi5OKlI8ÿ[$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8ÿ] )."'";
            }
        }
        if ( empty( $_obfuscate_lY2SjIuNiouMkI2Kk4qMlYcÿ ) )
        {
            if ( $_obfuscate_k4yHk5KGiImKlIeNkYuRlJQÿ == "sql" )
            {
                return "update ".$_obfuscate_k5WOjYqNj4mOiJGGipOQiIYÿ." set ".implode( ", ", $_obfuscate_lY2SjIuNiouMkI2Kk4qMlYcÿ )." where ".$_obfuscate_h42QlImNjZSLj4qLkoqIlIgÿ;
            }
            return $this->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( "update ".$_obfuscate_k5WOjYqNj4mOiJGGipOQiIYÿ." set ".implode( ", ", $_obfuscate_lY2SjIuNiouMkI2Kk4qMlYcÿ )." where ".$_obfuscate_h42QlImNjZSLj4qLkoqIlIgÿ, $_obfuscate_k4yHk5KGiImKlIeNkYuRlJQÿ );
        }
        return FALSE;
    }

    public function _obfuscate_komUlJONiIqQk42JjYmOioYÿ( $_obfuscate_k5WOjYqNj4mOiJGGipOQiIYÿ )
    {
        $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ = $this->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJAÿ( "select max(`id`) from `".$_obfuscate_k5WOjYqNj4mOiJGGipOQiIYÿ."`", 2 );
        if ( empty( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ[0] ) )
        {
            return 0;
        }
        return $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ[0];
    }

    public function _obfuscate_ioeOiIuTiJGQi42VkY_Viosÿ( $_obfuscate_k5WOjYqNj4mOiJGGipOQiIYÿ )
    {
        $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ = mysql_query( "show table status where Name ='".$_obfuscate_k5WOjYqNj4mOiJGGipOQiIYÿ."'", $this->‘‡Œ‹Œ†Š“‡’‰ );
        if ( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ === FALSE )
        {
            $_obfuscate_lYeHjJWPkJKTiY6HkpCMiZQÿ = $this->_obfuscate_komUlJONiIqQk42JjYmOioYÿ( $_obfuscate_k5WOjYqNj4mOiJGGipOQiIYÿ ) + 1;
            mysql_query( "ALTER TABLE `".$_obfuscate_k5WOjYqNj4mOiJGGipOQiIYÿ."` AUTO_INCREMENT =".$_obfuscate_lYeHjJWPkJKTiY6HkpCMiZQÿ, $this->‘‡Œ‹Œ†Š“‡’‰ );
            return $_obfuscate_lYeHjJWPkJKTiY6HkpCMiZQÿ;
        }
        $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ = mysql_fetch_array( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ );
        return $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ['Auto_increment'];
    }

    public function _obfuscate_h4uSk4qJiZGVkoqQkYqIiYsÿ( $_obfuscate_lY6SiYuVjZKOkpGUh4qOiYcÿ = 0, $_obfuscate_k42JhoyGiY6Ti4qRiIaPlZIÿ = -1 )
    {
        return " limit ".$_obfuscate_lY6SiYuVjZKOkpGUh4qOiYcÿ.",".$_obfuscate_k42JhoyGiY6Ti4qRiIaPlZIÿ;
    }

    public function _obfuscate_h4yIho_UiouJiYeJko6Sko8ÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ )
    {
        $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ = $this->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ );
        if ( empty( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ ) )
        {
            return FALSE;
        }
        return mysql_num_rows( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ );
    }

    public function _obfuscate_iouHh42RkIeKkYaSipWKiogÿ( $_obfuscate_lYuIio2HjIyVh4_JiY6Ij5Eÿ, $_obfuscate_kI_Tk4uTh5KOh42RhpOJjZMÿ, $_obfuscate_ipSSiYeJlZGIj4mSjI6Gh5Mÿ )
    {
        $_obfuscate_jJSOi4eRkIyPho6Jh4mHlJQÿ = "<img src=".INSTALLPATH."kss_inc/images/b_firstpage.png align=absmiddle style='display:inline-block; *display:inline; *zoom:1; vertical-align:middle'>";
        $_obfuscate_jpWViIiUkJGQjouPkoaPk4wÿ = "<img src=".INSTALLPATH."kss_inc/images/b_prevpage.png align=absmiddle style='display:inline-block; *display:inline; *zoom:1; vertical-align:middle'>";
        $_obfuscate_kIaNhpSNlJCQiZWHh4qSiosÿ = "<img src=".INSTALLPATH."kss_inc/images/b_nextpage.png align=absmiddle style='display:inline-block; *display:inline; *zoom:1; vertical-align:middle'>";
        $_obfuscate_kY6OlZWSkIqIlZOJh4mGi5Iÿ = "<img src=".INSTALLPATH."kss_inc/images/b_lastpage.png align=absmiddle style='display:inline-block; *display:inline; *zoom:1; vertical-align:middle'>";
        $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ = $this->_obfuscate_joeRk5WMj4_LiZCPkJSTkZAÿ( $_obfuscate_ipSSiYeJlZGIj4mSjI6Gh5Mÿ );
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ = "";
        if ( $_obfuscate_lYuIio2HjIyVh4_JiY6Ij5Eÿ <= 1 )
        {
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "<a href='javascript:void(0);'>".$_obfuscate_jJSOi4eRkIyPho6Jh4mHlJQÿ."</a>&nbsp;&nbsp;";
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "<a href='javascript:void(0);'>".$_obfuscate_jpWViIiUkJGQjouPkoaPk4wÿ."</a>&nbsp;";
        }
        else
        {
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "<a href='?page=1".$_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ."'>".$_obfuscate_jJSOi4eRkIyPho6Jh4mHlJQÿ."</a>&nbsp;";
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "<a href='?page=".( $_obfuscate_lYuIio2HjIyVh4_JiY6Ij5Eÿ - 1 ).$_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ."'>".$_obfuscate_jpWViIiUkJGQjouPkoaPk4wÿ."</a>&nbsp;";
        }
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = -3;
        for ( ; $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ <= 3; ++$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ )
        {
            $_obfuscate_kJGGh5GOjJGTkpSGkZCKiY4ÿ = $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ + $_obfuscate_lYuIio2HjIyVh4_JiY6Ij5Eÿ;
            if ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ == 0 )
            {
                $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "&nbsp;<a class=nowpage href='javascript:void(0);'>".$_obfuscate_lYuIio2HjIyVh4_JiY6Ij5Eÿ."</a>&nbsp;";
            }
            else if ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ < 0 )
            {
                if ( 1 <= $_obfuscate_kJGGh5GOjJGTkpSGkZCKiY4ÿ )
                {
                    $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "&nbsp;<a class='page_nav_a' href='?page=".$_obfuscate_kJGGh5GOjJGTkpSGkZCKiY4ÿ.$_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ."'>".$_obfuscate_kJGGh5GOjJGTkpSGkZCKiY4ÿ."</a>&nbsp;";
                }
            }
            else if ( !( 0 < $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ ) || !( $_obfuscate_kJGGh5GOjJGTkpSGkZCKiY4ÿ <= $_obfuscate_kI_Tk4uTh5KOh42RhpOJjZMÿ ) )
            {
                $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "&nbsp;<a class='page_nav_a' href='?page=".$_obfuscate_kJGGh5GOjJGTkpSGkZCKiY4ÿ.$_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ."'>".$_obfuscate_kJGGh5GOjJGTkpSGkZCKiY4ÿ."</a>&nbsp;";
            }
        }
        if ( $_obfuscate_kI_Tk4uTh5KOh42RhpOJjZMÿ <= $_obfuscate_lYuIio2HjIyVh4_JiY6Ij5Eÿ )
        {
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "&nbsp;<a href='javascript:void(0);'>".$_obfuscate_kIaNhpSNlJCQiZWHh4qSiosÿ."</a>&nbsp;";
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "&nbsp;<a href='javascript:void(0);'>".$_obfuscate_kY6OlZWSkIqIlZOJh4mGi5Iÿ."</a>&nbsp;";
        }
        else
        {
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "&nbsp;<a href='?page=".( $_obfuscate_lYuIio2HjIyVh4_JiY6Ij5Eÿ + 1 ).$_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ."'>".$_obfuscate_kIaNhpSNlJCQiZWHh4qSiosÿ."</a>";
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "&nbsp;&nbsp;<a href='?page=".$_obfuscate_kI_Tk4uTh5KOh42RhpOJjZMÿ.$_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ."'>".$_obfuscate_kY6OlZWSkIqIlZOJh4mGi5Iÿ."</a>";
        }
        $_obfuscate_lJWIlIeQlJOSiJGLkI6LjJEÿ = $_obfuscate_kI_Tk4uTh5KOh42RhpOJjZMÿ;
        if ( $_obfuscate_kI_Tk4uTh5KOh42RhpOJjZMÿ == 250000 )
        {
            $_obfuscate_lJWIlIeQlJOSiJGLkI6LjJEÿ = "?";
        }
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ .= "&nbsp;å…±".$_obfuscate_lJWIlIeQlJOSiJGLkI6LjJEÿ."é¡µ";
        return "<span id='page___nav'>".$_obfuscate_lI2HjIqUkYqTho2HiJWUk5Iÿ."</span>";
    }

    public function _obfuscate_joeRk5WMj4_LiZCPkJSTkZAÿ( $_obfuscate_ipSSiYeJlZGIj4mSjI6Gh5Mÿ )
    {
        $_obfuscate_i4aLkIePi42Oh5GVjIeMioYÿ = "";
        if ( is_array( $_obfuscate_ipSSiYeJlZGIj4mSjI6Gh5Mÿ ) )
        {
            foreach ( $_obfuscate_ipSSiYeJlZGIj4mSjI6Gh5Mÿ as $_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ => $_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ )
            {
                $_obfuscate_i4aLkIePi42Oh5GVjIeMioYÿ .= "&amp;".$_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ."=".urlencode( $_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ );
            }
        }
        return $_obfuscate_i4aLkIePi42Oh5GVjIeMioYÿ;
    }

    public function _obfuscate_koaRi4aHjIiPiYmJh5SKh4kÿ( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ )
    {
        $_obfuscate_k5WUj4aRi5SIkpGTjImUiZIÿ = mysql_query( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5Uÿ );
        if ( $_obfuscate_k5WUj4aRi5SIkpGTjImUiZIÿ !== FALSE )
        {
            $_obfuscate_jo6SjIuHj46LjIyTlIyQk4sÿ = array( );
            while ( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ = mysql_fetch_row( $_obfuscate_k5WUj4aRi5SIkpGTjImUiZIÿ ) )
            {
                $_obfuscate_jo6SjIuHj46LjIyTlIyQk4sÿ[] = $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ[0];
            }
            return $_obfuscate_jo6SjIuHj46LjIyTlIyQk4sÿ;
        }
        return FALSE;
    }

    public function _obfuscate_lJWJh4mKhpCLkJKUjZWSi5Mÿ( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ, $_obfuscate_i5SUlYiJjY2Kk4iNkIaMjY0ÿ = 1 )
    {
        return mysql_fetch_array( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ, $_obfuscate_i5SUlYiJjY2Kk4iNkIaMjY0ÿ );
    }

    public function _obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ( )
    {
        if ( $this->‘‡Œ‹Œ†Š“‡’‰ )
        {
            return mysql_error( $this->‘‡Œ‹Œ†Š“‡’‰ );
        }
        return mysql_error( );
    }

    public function _obfuscate_lI6Gio6PjomOj4mRjoaUjoYÿ( )
    {
        return intval( $this->‘‡Œ‹Œ†Š“‡’‰ ? mysql_errno( $this->‘‡Œ‹Œ†Š“‡’‰ ) : mysql_errno( ) );
    }

    public function _obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ, $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ )
    {
        $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ = @mysql_result( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ, $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40ÿ );
        return $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ;
    }

    public function _obfuscate_k5WGh4yNj5ORhpKIjJGPi5Mÿ( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ )
    {
        $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ = mysql_num_rows( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ );
        return $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ;
    }

    public function _obfuscate_jJGUj5WRioqViZWHjo2KhpEÿ( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ )
    {
        return mysql_num_fields( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ );
    }

    public function _obfuscate_lYuPlIeUlYuMiJGJiI2LiZEÿ( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ )
    {
        return mysql_free_result( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ );
    }

    public function _obfuscate_kJOTjpKUiJWSjY_LjYyQj5Mÿ( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ )
    {
        $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ = mysql_fetch_row( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ );
        return $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ;
    }

    public function _obfuscate_j46SkIuVk4qLkoqRj46Gkowÿ( )
    {
        $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ = $this->”•‘‰‡Š’“ŒŠ‡Š’;
        return $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ;
    }

    public function _obfuscate_j5KJlI2NiJKNlIqPk4iGj5Uÿ( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ )
    {
        return mysql_fetch_field( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIYÿ );
    }

    public function _obfuscate_iImVjYePiJSMiZOKjZWGlZQÿ( )
    {
        return mysql_get_server_info( $this->‘‡Œ‹Œ†Š“‡’‰ );
    }

    public function _obfuscate_kJCHlYiNjJCQlJKQkZKSko0ÿ( )
    {
        return mysql_close( $this->‘‡Œ‹Œ†Š“‡’‰ );
    }

    public function _obfuscate_k4mUj5OViI6HjY2JiYiLjJAÿ( $_obfuscate_kImMk5OViomJlYeIk4mVh40ÿ = "" )
    {
    }

}

function _obfuscate_jo_LiZSIjZGTjYqNhomOkIYÿ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48ÿ = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkogÿ = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Yÿ[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4ÿ < 28 );
}

?>
