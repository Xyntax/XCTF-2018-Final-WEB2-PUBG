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

    public $�����������������;
    public $�����������������;

    public function _obfuscate_jIuSjYuUkJGHlYuPjZOQjY4�( $_obfuscate_h42JipKTjZKOk4mUjZWVjok�, $_obfuscate_h5WKkImSkIiTjIqHi5KUjpM� = 1 )
    {
        global $_obfuscate_mGKRY4dMuU6bZZJfh1_TX5k�;
        $this->����������������� = mysql_connect( @$_obfuscate_h42JipKTjZKOk4mUjZWVjok�['dbhost'], @$_obfuscate_h42JipKTjZKOk4mUjZWVjok�['dbuser'], @$_obfuscate_h42JipKTjZKOk4mUjZWVjok�['dbpass'], @$_obfuscate_h42JipKTjZKOk4mUjZWVjok�['newlink'] );
        if ( $this->����������������� )
        {
            $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4o� = mysql_error( );
            $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4o� = preg_replace( "/\\[.*\\]/", "", $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4o� );
            $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4o� = preg_replace( "/\\'[^\\']*\\'/", "'***'", $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4o� );
            if ( $_obfuscate_h5WKkImSkIiTjIqHi5KUjpM� == 1 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4o� );
            }
            else
            {
                return $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4o�;
            }
        }
        if ( mysql_select_db( $_obfuscate_h42JipKTjZKOk4mUjZWVjok�['dbname'], $this->����������������� ) )
        {
            $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4o� = mysql_error( );
            $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4o� = preg_replace( "/\\[.*\\]/", "", $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4o� );
            $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4o� = preg_replace( "/\\'[^\\']*\\'/", "'***'", $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4o� );
            if ( $_obfuscate_h5WKkImSkIiTjIqHi5KUjpM� == 1 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4o� );
            }
            else
            {
                return $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4o�;
            }
        }
        if ( mysql_query( "set names 'utf8'" ) )
        {
            $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4o� = mysql_error( );
            $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4o� = preg_replace( "/\\[.*\\]/", "", $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4o� );
            $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4o� = preg_replace( "/\\'[^\\']*\\'/", "'***'", $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4o� );
            if ( $_obfuscate_h5WKkImSkIiTjIqHi5KUjpM� == 1 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4o� );
                return "success";
            }
            return $_obfuscate_kZONjI2Kk5SOlY2Gj5CSj4o�;
        }
        return "success";
    }

    public function api__query( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, $_obfuscate_k4yHk5KGiImKlIeNkYuRlJQ� = "not_sync", $_obfuscate_kJWQk46KjIuKlImOjJWHjpA� = 0 )
    {
        return $this->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, $_obfuscate_k4yHk5KGiImKlIeNkYuRlJQ�, $_obfuscate_kJWQk46KjIuKlImOjJWHjpA� );
    }

    public function _obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, $_obfuscate_k4yHk5KGiImKlIeNkYuRlJQ� = "not_sync", $_obfuscate_kJWQk46KjIuKlImOjJWHjpA� = 0 )
    {
        if ( $_obfuscate_kJWQk46KjIuKlImOjJWHjpA� == 0 )
        {
            $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY� = mysql_query( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, $this->����������������� );
        }
        else
        {
            $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY� = mysql_unbuffered_query( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, $this->����������������� );
        }
        if ( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY� === FALSE )
        {
            $this->_obfuscate_k4mUj5OViI6HjY2JiYiLjJA�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� );
            return $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�;
        }
        if ( substr( strtolower( trim( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� ) ), 0, 24 ) != "insert into `kss_tb_sql`" && in_array( substr( strtolower( trim( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� ) ), 0, 6 ), array( "update", "delete", "insert", "replac" ) ) )
        {
            $this->����������������� = mysql_affected_rows( );
        }
        if ( IS2SVR == 1 && $_obfuscate_k4yHk5KGiImKlIeNkYuRlJQ� == "sync" && substr( strtolower( trim( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� ) ), 0, 6 ) !== "select" )
        {
            $_obfuscate_lYyJjIePlZOGk4_RkYeSjo0� = time( )( "insert into `kss_tb_sql` (`addtime`,`sqltext`) VALUES (".time( ).",'".mysql_real_escape_string( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� )."')", "notsync" );
        }
        return $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�;
    }

    public function _obfuscate_ho_Ljo6NjpOOhpGHj5KHiYs�( $_obfuscate_h5ORhoePi4iTjI2HiYaGho4� = "defult", $_obfuscate_jo2Sh4uNh4aViomIioqGlI4� = 0, $_obfuscate_jJONioiJjpGMiJSOi4aGk4Y� = 0 )
    {
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = TRUE;
        if ( $_obfuscate_jJONioiJjpGMiJSOi4aGk4Y� == 0 )
        {
            $_obfuscate_jJONioiJjpGMiJSOi4aGk4Y� = _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( );
        }
        $_obfuscate_iYaNkZKGlIqVjoySiJKLi4c� = $this->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "insert into `kss_tb_lock` (`lockname`,`locktime`) values ('".$_obfuscate_h5ORhoePi4iTjI2HiYaGho4�."',".time( ).")", "notsync" );
        if ( $_obfuscate_iYaNkZKGlIqVjoySiJKLi4c� === FALSE )
        {
            $_obfuscate_j4aUioiHlYmIi4iNi5GQiY8� = $this->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select locktime from kss_tb_lock where `lockname`='".$_obfuscate_h5ORhoePi4iTjI2HiYaGho4�."'" );
            if ( AUTODELLOCK < abs( time( ) - $_obfuscate_j4aUioiHlYmIi4iNi5GQiY8�['locktime'] ) )
            {
                $this->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from kss_tb_lock where `lockname`='".$_obfuscate_h5ORhoePi4iTjI2HiYaGho4�."'", "notsync" );
                return $this->_obfuscate_ho_Ljo6NjpOOhpGHj5KHiYs�( $_obfuscate_h5ORhoePi4iTjI2HiYaGho4�, $_obfuscate_jo2Sh4uNh4aViomIioqGlI4�, $_obfuscate_jJONioiJjpGMiJSOi4aGk4Y� );
            }
            $_obfuscate_kImMk5OViomJlYeIk4mVh40� = $this->_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( );
            if ( substr( $_obfuscate_kImMk5OViomJlYeIk4mVh40�, 0, 15 ) == "Duplicate entry" )
            {
                $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = $_obfuscate_h5ORhoePi4iTjI2HiYaGho4�."锁被占用中";
            }
            else
            {
                $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = $_obfuscate_h5ORhoePi4iTjI2HiYaGho4�."[".$_obfuscate_kImMk5OViomJlYeIk4mVh40�."]";
            }
        }
        if ( $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� === TRUE )
        {
            return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk�;
        }
        if ( $_obfuscate_jo2Sh4uNh4aViomIioqGlI4� == 1 && _obfuscate_hpCTj4mKj5WSkpWPjouJkoc�( ) - $_obfuscate_jJONioiJjpGMiJSOi4aGk4Y� < 2 )
        {
            _obfuscate_lYyMjpSLiZSVkpSLjJGMkYw�( 1000 );
            return $this->_obfuscate_ho_Ljo6NjpOOhpGHj5KHiYs�( $_obfuscate_h5ORhoePi4iTjI2HiYaGho4�, $_obfuscate_jo2Sh4uNh4aViomIioqGlI4�, $_obfuscate_jJONioiJjpGMiJSOi4aGk4Y� );
        }
        return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk�;
    }

    public function _obfuscate_kYyNi4eQiouGlY6Qj46HjpE�( $_obfuscate_h5ORhoePi4iTjI2HiYaGho4� = "defult" )
    {
        $this->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "delete from `kss_tb_lock` where `lockname`='".$_obfuscate_h5ORhoePi4iTjI2HiYaGho4�."'", "notsync" );
    }

    public function api__getrow( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, $_obfuscate_i5SUlYiJjY2Kk4iNkIaMjY0� = 1, $_obfuscate_kJWQk46KjIuKlImOjJWHjpA� = 0 )
    {
        return $this->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, $_obfuscate_i5SUlYiJjY2Kk4iNkIaMjY0�, $_obfuscate_kJWQk46KjIuKlImOjJWHjpA� );
    }

    public function _obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, $_obfuscate_i5SUlYiJjY2Kk4iNkIaMjY0� = 1, $_obfuscate_kJWQk46KjIuKlImOjJWHjpA� = 0 )
    {
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� = $this->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "notsync", $_obfuscate_kJWQk46KjIuKlImOjJWHjpA� );
        if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� !== FALSE )
        {
            return $this->_obfuscate_lJWJh4mKhpCLkJKUjZWSi5M�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�, $_obfuscate_i5SUlYiJjY2Kk4iNkIaMjY0� );
        }
        return FALSE;
    }

    public function api__getrows( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, $_obfuscate_i5SUlYiJjY2Kk4iNkIaMjY0� = 1 )
    {
        return $this->_obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, $_obfuscate_i5SUlYiJjY2Kk4iNkIaMjY0� );
    }

    public function _obfuscate_lZGTiIiKhouKiZGLi5KUkI8�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, $_obfuscate_i5SUlYiJjY2Kk4iNkIaMjY0� = 1, $_obfuscate_kJWQk46KjIuKlImOjJWHjpA� = 0 )
    {
        $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� = $this->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U�, "not_sync", $_obfuscate_kJWQk46KjIuKlImOjJWHjpA� );
        if ( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� !== FALSE )
        {
            $_obfuscate_jo6SjIuHj46LjIyTlIyQk4s� = array( );
            while ( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� = $this->_obfuscate_lJWJh4mKhpCLkJKUjZWSi5M�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI�, $_obfuscate_i5SUlYiJjY2Kk4iNkIaMjY0� ) )
            {
                $_obfuscate_jo6SjIuHj46LjIyTlIyQk4s�[] = $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40�;
            }
            $this->_obfuscate_lYuPlIeUlYuMiJGJiI2LiZE�( $_obfuscate_kY_OlYeUlIiVjo6Hio_MkpI� );
            return $_obfuscate_jo6SjIuHj46LjIyTlIyQk4s�;
        }
        return FALSE;
    }

    public function _obfuscate_kpSVjoiHkoeTlJSRiJGHiI0�( $_obfuscate_k5WOjYqNj4mOiJGGipOQiIY�, $_obfuscate_jo_Ti5WSkZSGjZSOi5OKlI8�, $_obfuscate_k4yHk5KGiImKlIeNkYuRlJQ� = "not_sync", $_obfuscate_j4qMj4eMk5CLkIuSkY2GkIc� = 0 )
    {
        $_obfuscate_hpGGi42SjZWKjI2QkYqIk40� = $this->_obfuscate_koaRi4aHjIiPiYmJh5SKh4k�( "DESC ".$_obfuscate_k5WOjYqNj4mOiJGGipOQiIY� );
        $_obfuscate_iYeIk42Sjo_GhpWOiZCOi5E� = array( );
        $_obfuscate_k4ySiImVj5GGlIaNjYmLiog� = array( );
        if ( $_obfuscate_hpGGi42SjZWKjI2QkYqIk40� === FALSE )
        {
            if ( $_obfuscate_j4qMj4eMk5CLkIuSkY2GkIc� == 1 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_k5WOjYqNj4mOiJGGipOQiIY�."表异常，需要修复（可能是C盘空间已满）！" );
                return FALSE;
            }
            $_obfuscate_j4qMj4eMk5CLkIuSkY2GkIc� = 1;
            return $this->_obfuscate_kpSVjoiHkoeTlJSRiJGHiI0�( $_obfuscate_k5WOjYqNj4mOiJGGipOQiIY�, $_obfuscate_jo_Ti5WSkZSGjZSOi5OKlI8�, $_obfuscate_k4yHk5KGiImKlIeNkYuRlJQ�, $_obfuscate_j4qMj4eMk5CLkIuSkY2GkIc� );
        }
        foreach ( $_obfuscate_hpGGi42SjZWKjI2QkYqIk40� as $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8� )
        {
            if ( array_key_exists( $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8�, $_obfuscate_jo_Ti5WSkZSGjZSOi5OKlI8� ) )
            {
                $_obfuscate_iYeIk42Sjo_GhpWOiZCOi5E�[] = "`".$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8�."`";
                $_obfuscate_k4ySiImVj5GGlIaNjYmLiog�[] = "'".mysql_real_escape_string( $_obfuscate_jo_Ti5WSkZSGjZSOi5OKlI8�[$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8�] )."'";
            }
        }
        if ( empty( $_obfuscate_iYeIk42Sjo_GhpWOiZCOi5E� ) )
        {
            if ( $_obfuscate_k4yHk5KGiImKlIeNkYuRlJQ� == "sql" )
            {
                return "insert into `".$_obfuscate_k5WOjYqNj4mOiJGGipOQiIY�."` (".implode( ",", $_obfuscate_iYeIk42Sjo_GhpWOiZCOi5E� ).") VALUES (".implode( ",", $_obfuscate_k4ySiImVj5GGlIaNjYmLiog� ).")";
            }
            return $this->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "insert into `".$_obfuscate_k5WOjYqNj4mOiJGGipOQiIY�."` (".implode( ",", $_obfuscate_iYeIk42Sjo_GhpWOiZCOi5E� ).") VALUES (".implode( ",", $_obfuscate_k4ySiImVj5GGlIaNjYmLiog� ).")", $_obfuscate_k4yHk5KGiImKlIeNkYuRlJQ� );
        }
        return FALSE;
    }

    public function _obfuscate_iJOJipCPk4yQlJOMlIeTjYs�( $_obfuscate_k5WOjYqNj4mOiJGGipOQiIY�, $_obfuscate_jo_Ti5WSkZSGjZSOi5OKlI8�, $_obfuscate_h42QlImNjZSLj4qLkoqIlIg� = "", $_obfuscate_k4yHk5KGiImKlIeNkYuRlJQ� = "not_sync", $_obfuscate_j4qMj4eMk5CLkIuSkY2GkIc� = 0 )
    {
        $_obfuscate_hpGGi42SjZWKjI2QkYqIk40� = $this->_obfuscate_koaRi4aHjIiPiYmJh5SKh4k�( "DESC ".$_obfuscate_k5WOjYqNj4mOiJGGipOQiIY� );
        $_obfuscate_lY2SjIuNiouMkI2Kk4qMlYc� = array( );
        if ( $_obfuscate_hpGGi42SjZWKjI2QkYqIk40� === FALSE )
        {
            if ( $_obfuscate_j4qMj4eMk5CLkIuSkY2GkIc� == 1 )
            {
                _obfuscate_kYyOhouLjo2Gh4eNj4iQlIg�( $_obfuscate_k5WOjYqNj4mOiJGGipOQiIY�."表异常，需要深度修复！" );
                return FALSE;
            }
            $_obfuscate_j4qMj4eMk5CLkIuSkY2GkIc� = 1;
            return $this->_obfuscate_kpSVjoiHkoeTlJSRiJGHiI0�( $_obfuscate_k5WOjYqNj4mOiJGGipOQiIY�, $_obfuscate_jo_Ti5WSkZSGjZSOi5OKlI8�, $_obfuscate_h42QlImNjZSLj4qLkoqIlIg�, $_obfuscate_k4yHk5KGiImKlIeNkYuRlJQ�, $_obfuscate_j4qMj4eMk5CLkIuSkY2GkIc� );
        }
        foreach ( $_obfuscate_hpGGi42SjZWKjI2QkYqIk40� as $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8� )
        {
            if ( array_key_exists( $_obfuscate_lYeSkY6Th5SOlYuHjZGVio8�, $_obfuscate_jo_Ti5WSkZSGjZSOi5OKlI8� ) )
            {
                $_obfuscate_lY2SjIuNiouMkI2Kk4qMlYc�[] = "`".$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8�."`='".mysql_real_escape_string( $_obfuscate_jo_Ti5WSkZSGjZSOi5OKlI8�[$_obfuscate_lYeSkY6Th5SOlYuHjZGVio8�] )."'";
            }
        }
        if ( empty( $_obfuscate_lY2SjIuNiouMkI2Kk4qMlYc� ) )
        {
            if ( $_obfuscate_k4yHk5KGiImKlIeNkYuRlJQ� == "sql" )
            {
                return "update ".$_obfuscate_k5WOjYqNj4mOiJGGipOQiIY�." set ".implode( ", ", $_obfuscate_lY2SjIuNiouMkI2Kk4qMlYc� )." where ".$_obfuscate_h42QlImNjZSLj4qLkoqIlIg�;
            }
            return $this->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( "update ".$_obfuscate_k5WOjYqNj4mOiJGGipOQiIY�." set ".implode( ", ", $_obfuscate_lY2SjIuNiouMkI2Kk4qMlYc� )." where ".$_obfuscate_h42QlImNjZSLj4qLkoqIlIg�, $_obfuscate_k4yHk5KGiImKlIeNkYuRlJQ� );
        }
        return FALSE;
    }

    public function _obfuscate_komUlJONiIqQk42JjYmOioY�( $_obfuscate_k5WOjYqNj4mOiJGGipOQiIY� )
    {
        $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY� = $this->_obfuscate_iY6OkJCRkY2PjpCPk5CRkJA�( "select max(`id`) from `".$_obfuscate_k5WOjYqNj4mOiJGGipOQiIY�."`", 2 );
        if ( empty( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�[0] ) )
        {
            return 0;
        }
        return $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�[0];
    }

    public function _obfuscate_ioeOiIuTiJGQi42VkY_Vios�( $_obfuscate_k5WOjYqNj4mOiJGGipOQiIY� )
    {
        $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY� = mysql_query( "show table status where Name ='".$_obfuscate_k5WOjYqNj4mOiJGGipOQiIY�."'", $this->����������������� );
        if ( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY� === FALSE )
        {
            $_obfuscate_lYeHjJWPkJKTiY6HkpCMiZQ� = $this->_obfuscate_komUlJONiIqQk42JjYmOioY�( $_obfuscate_k5WOjYqNj4mOiJGGipOQiIY� ) + 1;
            mysql_query( "ALTER TABLE `".$_obfuscate_k5WOjYqNj4mOiJGGipOQiIY�."` AUTO_INCREMENT =".$_obfuscate_lYeHjJWPkJKTiY6HkpCMiZQ�, $this->����������������� );
            return $_obfuscate_lYeHjJWPkJKTiY6HkpCMiZQ�;
        }
        $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� = mysql_fetch_array( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY� );
        return $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40�['Auto_increment'];
    }

    public function _obfuscate_h4uSk4qJiZGVkoqQkYqIiYs�( $_obfuscate_lY6SiYuVjZKOkpGUh4qOiYc� = 0, $_obfuscate_k42JhoyGiY6Ti4qRiIaPlZI� = -1 )
    {
        return " limit ".$_obfuscate_lY6SiYuVjZKOkpGUh4qOiYc�.",".$_obfuscate_k42JhoyGiY6Ti4qRiIaPlZI�;
    }

    public function _obfuscate_h4yIho_UiouJiYeJko6Sko8�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� )
    {
        $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY� = $this->_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� );
        if ( empty( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY� ) )
        {
            return FALSE;
        }
        return mysql_num_rows( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY� );
    }

    public function _obfuscate_iouHh42RkIeKkYaSipWKiog�( $_obfuscate_lYuIio2HjIyVh4_JiY6Ij5E�, $_obfuscate_kI_Tk4uTh5KOh42RhpOJjZM�, $_obfuscate_ipSSiYeJlZGIj4mSjI6Gh5M� )
    {
        $_obfuscate_jJSOi4eRkIyPho6Jh4mHlJQ� = "<img src=".INSTALLPATH."kss_inc/images/b_firstpage.png align=absmiddle style='display:inline-block; *display:inline; *zoom:1; vertical-align:middle'>";
        $_obfuscate_jpWViIiUkJGQjouPkoaPk4w� = "<img src=".INSTALLPATH."kss_inc/images/b_prevpage.png align=absmiddle style='display:inline-block; *display:inline; *zoom:1; vertical-align:middle'>";
        $_obfuscate_kIaNhpSNlJCQiZWHh4qSios� = "<img src=".INSTALLPATH."kss_inc/images/b_nextpage.png align=absmiddle style='display:inline-block; *display:inline; *zoom:1; vertical-align:middle'>";
        $_obfuscate_kY6OlZWSkIqIlZOJh4mGi5I� = "<img src=".INSTALLPATH."kss_inc/images/b_lastpage.png align=absmiddle style='display:inline-block; *display:inline; *zoom:1; vertical-align:middle'>";
        $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc� = $this->_obfuscate_joeRk5WMj4_LiZCPkJSTkZA�( $_obfuscate_ipSSiYeJlZGIj4mSjI6Gh5M� );
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� = "";
        if ( $_obfuscate_lYuIio2HjIyVh4_JiY6Ij5E� <= 1 )
        {
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "<a href='javascript:void(0);'>".$_obfuscate_jJSOi4eRkIyPho6Jh4mHlJQ�."</a>&nbsp;&nbsp;";
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "<a href='javascript:void(0);'>".$_obfuscate_jpWViIiUkJGQjouPkoaPk4w�."</a>&nbsp;";
        }
        else
        {
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "<a href='?page=1".$_obfuscate_kpKOiYmNj4eMjYmOkImMjoc�."'>".$_obfuscate_jJSOi4eRkIyPho6Jh4mHlJQ�."</a>&nbsp;";
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "<a href='?page=".( $_obfuscate_lYuIio2HjIyVh4_JiY6Ij5E� - 1 ).$_obfuscate_kpKOiYmNj4eMjYmOkImMjoc�."'>".$_obfuscate_jpWViIiUkJGQjouPkoaPk4w�."</a>&nbsp;";
        }
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = -3;
        for ( ; $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� <= 3; ++$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� )
        {
            $_obfuscate_kJGGh5GOjJGTkpSGkZCKiY4� = $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + $_obfuscate_lYuIio2HjIyVh4_JiY6Ij5E�;
            if ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� == 0 )
            {
                $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "&nbsp;<a class=nowpage href='javascript:void(0);'>".$_obfuscate_lYuIio2HjIyVh4_JiY6Ij5E�."</a>&nbsp;";
            }
            else if ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 0 )
            {
                if ( 1 <= $_obfuscate_kJGGh5GOjJGTkpSGkZCKiY4� )
                {
                    $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "&nbsp;<a class='page_nav_a' href='?page=".$_obfuscate_kJGGh5GOjJGTkpSGkZCKiY4�.$_obfuscate_kpKOiYmNj4eMjYmOkImMjoc�."'>".$_obfuscate_kJGGh5GOjJGTkpSGkZCKiY4�."</a>&nbsp;";
                }
            }
            else if ( !( 0 < $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� ) || !( $_obfuscate_kJGGh5GOjJGTkpSGkZCKiY4� <= $_obfuscate_kI_Tk4uTh5KOh42RhpOJjZM� ) )
            {
                $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "&nbsp;<a class='page_nav_a' href='?page=".$_obfuscate_kJGGh5GOjJGTkpSGkZCKiY4�.$_obfuscate_kpKOiYmNj4eMjYmOkImMjoc�."'>".$_obfuscate_kJGGh5GOjJGTkpSGkZCKiY4�."</a>&nbsp;";
            }
        }
        if ( $_obfuscate_kI_Tk4uTh5KOh42RhpOJjZM� <= $_obfuscate_lYuIio2HjIyVh4_JiY6Ij5E� )
        {
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "&nbsp;<a href='javascript:void(0);'>".$_obfuscate_kIaNhpSNlJCQiZWHh4qSios�."</a>&nbsp;";
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "&nbsp;<a href='javascript:void(0);'>".$_obfuscate_kY6OlZWSkIqIlZOJh4mGi5I�."</a>&nbsp;";
        }
        else
        {
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "&nbsp;<a href='?page=".( $_obfuscate_lYuIio2HjIyVh4_JiY6Ij5E� + 1 ).$_obfuscate_kpKOiYmNj4eMjYmOkImMjoc�."'>".$_obfuscate_kIaNhpSNlJCQiZWHh4qSios�."</a>";
            $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "&nbsp;&nbsp;<a href='?page=".$_obfuscate_kI_Tk4uTh5KOh42RhpOJjZM�.$_obfuscate_kpKOiYmNj4eMjYmOkImMjoc�."'>".$_obfuscate_kY6OlZWSkIqIlZOJh4mGi5I�."</a>";
        }
        $_obfuscate_lJWIlIeQlJOSiJGLkI6LjJE� = $_obfuscate_kI_Tk4uTh5KOh42RhpOJjZM�;
        if ( $_obfuscate_kI_Tk4uTh5KOh42RhpOJjZM� == 250000 )
        {
            $_obfuscate_lJWIlIeQlJOSiJGLkI6LjJE� = "?";
        }
        $_obfuscate_lI2HjIqUkYqTho2HiJWUk5I� .= "&nbsp;共".$_obfuscate_lJWIlIeQlJOSiJGLkI6LjJE�."页";
        return "<span id='page___nav'>".$_obfuscate_lI2HjIqUkYqTho2HiJWUk5I�."</span>";
    }

    public function _obfuscate_joeRk5WMj4_LiZCPkJSTkZA�( $_obfuscate_ipSSiYeJlZGIj4mSjI6Gh5M� )
    {
        $_obfuscate_i4aLkIePi42Oh5GVjIeMioY� = "";
        if ( is_array( $_obfuscate_ipSSiYeJlZGIj4mSjI6Gh5M� ) )
        {
            foreach ( $_obfuscate_ipSSiYeJlZGIj4mSjI6Gh5M� as $_obfuscate_lIeHkoeKkpOSiomPi4mQk5E� => $_obfuscate_io6UjZWThpOSjYeOj46Qkow� )
            {
                $_obfuscate_i4aLkIePi42Oh5GVjIeMioY� .= "&amp;".$_obfuscate_lIeHkoeKkpOSiomPi4mQk5E�."=".urlencode( $_obfuscate_io6UjZWThpOSjYeOj46Qkow� );
            }
        }
        return $_obfuscate_i4aLkIePi42Oh5GVjIeMioY�;
    }

    public function _obfuscate_koaRi4aHjIiPiYmJh5SKh4k�( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� )
    {
        $_obfuscate_k5WUj4aRi5SIkpGTjImUiZI� = mysql_query( $_obfuscate_i4qPjo_Oj5GJiIyIi4qKh5U� );
        if ( $_obfuscate_k5WUj4aRi5SIkpGTjImUiZI� !== FALSE )
        {
            $_obfuscate_jo6SjIuHj46LjIyTlIyQk4s� = array( );
            while ( $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� = mysql_fetch_row( $_obfuscate_k5WUj4aRi5SIkpGTjImUiZI� ) )
            {
                $_obfuscate_jo6SjIuHj46LjIyTlIyQk4s�[] = $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40�[0];
            }
            return $_obfuscate_jo6SjIuHj46LjIyTlIyQk4s�;
        }
        return FALSE;
    }

    public function _obfuscate_lJWJh4mKhpCLkJKUjZWSi5M�( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�, $_obfuscate_i5SUlYiJjY2Kk4iNkIaMjY0� = 1 )
    {
        return mysql_fetch_array( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�, $_obfuscate_i5SUlYiJjY2Kk4iNkIaMjY0� );
    }

    public function _obfuscate_iYmHkJSKj5OJhoiRiY2Rio4�( )
    {
        if ( $this->����������������� )
        {
            return mysql_error( $this->����������������� );
        }
        return mysql_error( );
    }

    public function _obfuscate_lI6Gio6PjomOj4mRjoaUjoY�( )
    {
        return intval( $this->����������������� ? mysql_errno( $this->����������������� ) : mysql_errno( ) );
    }

    public function _obfuscate_j4eSkIiSiZCRh4_NiYaQkYk�( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�, $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� )
    {
        $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY� = @mysql_result( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�, $_obfuscate_iYeIjIaVlYaIj4yTiJWHk40� );
        return $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�;
    }

    public function _obfuscate_k5WGh4yNj5ORhpKIjJGPi5M�( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY� )
    {
        $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY� = mysql_num_rows( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY� );
        return $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�;
    }

    public function _obfuscate_jJGUj5WRioqViZWHjo2KhpE�( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY� )
    {
        return mysql_num_fields( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY� );
    }

    public function _obfuscate_lYuPlIeUlYuMiJGJiI2LiZE�( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY� )
    {
        return mysql_free_result( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY� );
    }

    public function _obfuscate_kJOTjpKUiJWSjY_LjYyQj5M�( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY� )
    {
        $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY� = mysql_fetch_row( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY� );
        return $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�;
    }

    public function _obfuscate_j46SkIuVk4qLkoqRj46Gkow�( )
    {
        $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY� = $this->�����������������;
        return $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY�;
    }

    public function _obfuscate_j5KJlI2NiJKNlIqPk4iGj5U�( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY� )
    {
        return mysql_fetch_field( $_obfuscate_kpSOj5KVio2Hj4uKj4_KjIY� );
    }

    public function _obfuscate_iImVjYePiJSMiZOKjZWGlZQ�( )
    {
        return mysql_get_server_info( $this->����������������� );
    }

    public function _obfuscate_kJCHlYiNjJCQlJKQkZKSko0�( )
    {
        return mysql_close( $this->����������������� );
    }

    public function _obfuscate_k4mUj5OViI6HjY2JiYiLjJA�( $_obfuscate_kImMk5OViomJlYeIk4mVh40� = "" )
    {
    }

}

function _obfuscate_jo_LiZSIjZGTjYqNhomOkIY�( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� = 1 )
{
    $_obfuscate_iJGPjJWLj4uLkIqVjYiHh48� = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $_obfuscate_iY2Oh5OGlIqQhpCJi5CMkog� = ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4�] << 4 ) + ( $_obfuscate_lZKViImJjo6UhouJj4aVi4Y�[$_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� + 1] >> 4 );
        $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� += 2;
    } while ( $_obfuscate_jpKPlJSUiZOHkYaPlIeOiY4� < 28 );
}

?>
