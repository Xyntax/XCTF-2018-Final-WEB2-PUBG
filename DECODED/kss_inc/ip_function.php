<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_j5SHjI6IhpKIh4_Hh4iMjIs�( $_obfuscate_jY6MkIuIioqTk4eIiIiNj5U� )
{
    if ( !preg_match( "/^\\d{1,3}\\.\\d{1,3}\\.\\d{1,3}\\.\\d{1,3}\$/", $_obfuscate_jY6MkIuIioqTk4eIiIiNj5U� ) )
    {
        return "";
    }
    if ( is_file( KSSROOTDIR."ip.dat" ) && ( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5A� = @fopen( @KSSROOTDIR."ip.dat", "rb" ) ) )
    {
        $_obfuscate_jY6MkIuIioqTk4eIiIiNj5U� = explode( ".", $_obfuscate_jY6MkIuIioqTk4eIiIiNj5U� );
        $_obfuscate_kYmOjoiLkpCKiZGRiY2Mh5U� = $_obfuscate_jY6MkIuIioqTk4eIiIiNj5U�[0] * 16777216 + $_obfuscate_jY6MkIuIioqTk4eIiIiNj5U�[1] * 65536 + $_obfuscate_jY6MkIuIioqTk4eIiIiNj5U�[2] * 256 + $_obfuscate_jY6MkIuIioqTk4eIiIiNj5U�[3];
        $_obfuscate_kY2HiIaKlI2Gi4_HiIaVipI� = fread( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5A�, 4 );
        $_obfuscate_iJWLk4yQiY6MlZOOhpCIkI8� = fread( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5A�, 4 );
        $_obfuscate_iJKJjpGSi5OPiYiTk5KGhpM� = implode( "", unpack( "L", $_obfuscate_kY2HiIaKlI2Gi4_HiIaVipI� ) );
        if ( $_obfuscate_iJKJjpGSi5OPiYiTk5KGhpM� < 0 )
        {
            $_obfuscate_iJKJjpGSi5OPiYiTk5KGhpM� += pow( 2, 32 );
        }
        $_obfuscate_homJkYmKkZSUi42PiYqVh5M� = implode( "", unpack( "L", $_obfuscate_iJWLk4yQiY6MlZOOhpCIkI8� ) );
        if ( $_obfuscate_homJkYmKkZSUi42PiYqVh5M� < 0 )
        {
            $_obfuscate_homJkYmKkZSUi42PiYqVh5M� += pow( 2, 32 );
        }
        $_obfuscate_i4aLjImMi5GNlY_IhpWTipU� = ( $_obfuscate_homJkYmKkZSUi42PiYqVh5M� - $_obfuscate_iJKJjpGSi5OPiYiTk5KGhpM� ) / 7 + 1;
        $_obfuscate_lYaUjZWQhpSNj5OKlIyRi4w� = 0;
        $_obfuscate_iJSUiYiSkI_OjomQk5SNi5Q� = $_obfuscate_i4aLjImMi5GNlY_IhpWTipU�;
        $_obfuscate_k42NkoqPk5ORj4mSipSRkYY� = 0;
        $_obfuscate_j4uMjoaUjYaNh5WUh4eGlIc� = 0;
        $_obfuscate_iZCKh4qVkZCJjI2PkYuQjYk� = "";
        $_obfuscate_jJCKipSPlY6PiZOKjIaJiog� = "";
        while ( $_obfuscate_kYmOjoiLkpCKiZGRiY2Mh5U� < $_obfuscate_k42NkoqPk5ORj4mSipSRkYY� || $_obfuscate_j4uMjoaUjYaNh5WUh4eGlIc� < $_obfuscate_kYmOjoiLkpCKiZGRiY2Mh5U� )
        {
            $_obfuscate_jo2Vjo2IiIyJlYiGlZCLkIg� = intval( ( $_obfuscate_iJSUiYiSkI_OjomQk5SNi5Q� + $_obfuscate_lYaUjZWQhpSNj5OKlIyRi4w� ) / 2 );
            fseek( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5A�, $_obfuscate_iJKJjpGSi5OPiYiTk5KGhpM� + 7 * $_obfuscate_jo2Vjo2IiIyJlYiGlZCLkIg� );
            $_obfuscate_kZCGh5GVkZCHkYeLio_QiY4� = fread( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5A�, 4 );
            if ( strlen( $_obfuscate_kZCGh5GVkZCHkYeLio_QiY4� ) < 4 )
            {
                fclose( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5A� );
                return "System Error";
            }
            $_obfuscate_k42NkoqPk5ORj4mSipSRkYY� = implode( "", unpack( "L", $_obfuscate_kZCGh5GVkZCHkYeLio_QiY4� ) );
            if ( $_obfuscate_k42NkoqPk5ORj4mSipSRkYY� < 0 )
            {
                $_obfuscate_k42NkoqPk5ORj4mSipSRkYY� += pow( 2, 32 );
            }
            if ( $_obfuscate_kYmOjoiLkpCKiZGRiY2Mh5U� < $_obfuscate_k42NkoqPk5ORj4mSipSRkYY� )
            {
                $_obfuscate_iJSUiYiSkI_OjomQk5SNi5Q� = $_obfuscate_jo2Vjo2IiIyJlYiGlZCLkIg�;
                continue;
            }
            $_obfuscate_i4uRko2KkIyPkoiTlYqLjYc� = fread( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5A�, 3 );
            if ( strlen( $_obfuscate_i4uRko2KkIyPkoiTlYqLjYc� ) < 3 )
            {
                fclose( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5A� );
                return "System Error";
            }
            $_obfuscate_i4uRko2KkIyPkoiTlYqLjYc� = implode( "", unpack( "L", $_obfuscate_i4uRko2KkIyPkoiTlYqLjYc�.chr( 0 ) ) );
            fseek( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5A�, $_obfuscate_i4uRko2KkIyPkoiTlYqLjYc� );
            $_obfuscate_joeJj4eJkpWJh5GUi4yTj5I� = fread( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5A�, 4 );
            if ( strlen( $_obfuscate_joeJj4eJkpWJh5GUi4yTj5I� ) < 4 )
            {
                fclose( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5A� );
                return "System Error";
            }
            $_obfuscate_j4uMjoaUjYaNh5WUh4eGlIc� = implode( "", unpack( "L", $_obfuscate_joeJj4eJkpWJh5GUi4yTj5I� ) );
            if ( $_obfuscate_j4uMjoaUjYaNh5WUh4eGlIc� < 0 )
            {
                $_obfuscate_j4uMjoaUjYaNh5WUh4eGlIc� += pow( 2, 32 );
            }
            if ( $_obfuscate_j4uMjoaUjYaNh5WUh4eGlIc� < $_obfuscate_kYmOjoiLkpCKiZGRiY2Mh5U� )
            {
                if ( $_obfuscate_jo2Vjo2IiIyJlYiGlZCLkIg� == $_obfuscate_lYaUjZWQhpSNj5OKlIyRi4w� )
                {
                    fclose( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5A� );
                    return "Unknown";
                }
                $_obfuscate_lYaUjZWQhpSNj5OKlIyRi4w� = $_obfuscate_jo2Vjo2IiIyJlYiGlZCLkIg�;
            }
        }
        $_obfuscate_io6Sj4aOkI2Tk4uOjJGGjpU� = fread( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5A�, 1 );
        if ( $_obfuscate_io6Sj4aOkI2Tk4uOjJGGjpU� == chr( 1 ) )
        {
            $_obfuscate_kpWRj5CRi4mHk4uKhoaSiI0� = fread( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5A�, 3 );
            if ( strlen( $_obfuscate_kpWRj5CRi4mHk4uKhoaSiI0� ) < 3 )
            {
                fclose( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5A� );
                return "System Error";
            }
            $_obfuscate_kpWRj5CRi4mHk4uKhoaSiI0� = implode( "", unpack( "L", $_obfuscate_kpWRj5CRi4mHk4uKhoaSiI0�.chr( 0 ) ) );
            fseek( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5A�, $_obfuscate_kpWRj5CRi4mHk4uKhoaSiI0� );
            $_obfuscate_io6Sj4aOkI2Tk4uOjJGGjpU� = fread( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5A�, 1 );
        }
        if ( $_obfuscate_io6Sj4aOkI2Tk4uOjJGGjpU� == chr( 2 ) )
        {
            $_obfuscate_jIiHlIiLkIeMjIuRhoiNk4c� = fread( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5A�, 3 );
            if ( strlen( $_obfuscate_jIiHlIiLkIeMjIuRhoiNk4c� ) < 3 )
            {
                fclose( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5A� );
                return "System Error";
            }
            $_obfuscate_io6Sj4aOkI2Tk4uOjJGGjpU� = fread( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5A�, 1 );
            if ( $_obfuscate_io6Sj4aOkI2Tk4uOjJGGjpU� == chr( 2 ) )
            {
                $_obfuscate_ioyLjY2SlZCSkoqGj5CUiow� = fread( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5A�, 3 );
                if ( strlen( $_obfuscate_ioyLjY2SlZCSkoqGj5CUiow� ) < 3 )
                {
                    fclose( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5A� );
                    return "System Error";
                }
                $_obfuscate_ioyLjY2SlZCSkoqGj5CUiow� = implode( "", unpack( "L", $_obfuscate_ioyLjY2SlZCSkoqGj5CUiow�.chr( 0 ) ) );
                fseek( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5A�, $_obfuscate_ioyLjY2SlZCSkoqGj5CUiow� );
            }
            else
            {
                fseek( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5A�, 0 - 1, SEEK_CUR );
            }
            while ( ( $_obfuscate_iY_HjI2IjIuOhpCIkoeVkIw� = fread( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5A�, 1 ) ) != chr( 0 ) )
            {
                $_obfuscate_jJCKipSPlY6PiZOKjIaJiog� .= $_obfuscate_iY_HjI2IjIuOhpCIkoeVkIw�;
            }
            $_obfuscate_jIiHlIiLkIeMjIuRhoiNk4c� = implode( "", unpack( "L", $_obfuscate_jIiHlIiLkIeMjIuRhoiNk4c�.chr( 0 ) ) );
            fseek( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5A�, $_obfuscate_jIiHlIiLkIeMjIuRhoiNk4c� );
            while ( ( $_obfuscate_iY_HjI2IjIuOhpCIkoeVkIw� = fread( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5A�, 1 ) ) != chr( 0 ) )
            {
                $_obfuscate_iZCKh4qVkZCJjI2PkYuQjYk� .= $_obfuscate_iY_HjI2IjIuOhpCIkoeVkIw�;
            }
        }
        else
        {
            fseek( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5A�, 0 - 1, SEEK_CUR );
            while ( ( $_obfuscate_iY_HjI2IjIuOhpCIkoeVkIw� = fread( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5A�, 1 ) ) != chr( 0 ) )
            {
                $_obfuscate_iZCKh4qVkZCJjI2PkYuQjYk� .= $_obfuscate_iY_HjI2IjIuOhpCIkoeVkIw�;
            }
            $_obfuscate_io6Sj4aOkI2Tk4uOjJGGjpU� = fread( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5A�, 1 );
            if ( $_obfuscate_io6Sj4aOkI2Tk4uOjJGGjpU� == chr( 2 ) )
            {
                $_obfuscate_ioyLjY2SlZCSkoqGj5CUiow� = fread( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5A�, 3 );
                if ( strlen( $_obfuscate_ioyLjY2SlZCSkoqGj5CUiow� ) < 3 )
                {
                    fclose( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5A� );
                    return "System Error";
                }
                $_obfuscate_ioyLjY2SlZCSkoqGj5CUiow� = implode( "", unpack( "L", $_obfuscate_ioyLjY2SlZCSkoqGj5CUiow�.chr( 0 ) ) );
                fseek( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5A�, $_obfuscate_ioyLjY2SlZCSkoqGj5CUiow� );
            }
            else
            {
                fseek( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5A�, 0 - 1, SEEK_CUR );
            }
            while ( ( $_obfuscate_iY_HjI2IjIuOhpCIkoeVkIw� = fread( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5A�, 1 ) ) != chr( 0 ) )
            {
                $_obfuscate_jJCKipSPlY6PiZOKjIaJiog� .= $_obfuscate_iY_HjI2IjIuOhpCIkoeVkIw�;
            }
        }
        fclose( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5A� );
        if ( preg_match( "/http/i", $_obfuscate_jJCKipSPlY6PiZOKjIaJiog� ) )
        {
            $_obfuscate_jJCKipSPlY6PiZOKjIaJiog� = "";
        }
        $_obfuscate_ko2JlJGPk4iPlIiIlYqKio8� = $_obfuscate_iZCKh4qVkZCJjI2PkYuQjYk�." ".$_obfuscate_jJCKipSPlY6PiZOKjIaJiog�;
        $_obfuscate_ko2JlJGPk4iPlIiIlYqKio8� = preg_replace( "/CZ88\\.NET/is", "", $_obfuscate_ko2JlJGPk4iPlIiIlYqKio8� );
        $_obfuscate_ko2JlJGPk4iPlIiIlYqKio8� = preg_replace( "/^\\s*/is", "", $_obfuscate_ko2JlJGPk4iPlIiIlYqKio8� );
        $_obfuscate_ko2JlJGPk4iPlIiIlYqKio8� = preg_replace( "/\\s*$/is", "", $_obfuscate_ko2JlJGPk4iPlIiIlYqKio8� );
        if ( preg_match( "/http/i", $_obfuscate_ko2JlJGPk4iPlIiIlYqKio8� ) || $_obfuscate_ko2JlJGPk4iPlIiIlYqKio8� == "" )
        {
            $_obfuscate_ko2JlJGPk4iPlIiIlYqKio8� = "Unknown";
        }
        return _obfuscate_hpSOjImTiIuPiJKUjoaKjpA�( $_obfuscate_ko2JlJGPk4iPlIiIlYqKio8�, "GBK", "UTF-8" );
    }
    else if ( _obfuscate_ipWHiIuOiYuPjIaPkZSThok�( "curl_init" ) )
    {
        if ( $_obfuscate_jY6MkIuIioqTk4eIiIiNj5U� == "255.255.255.255" )
        {
            return "当前使用IP138接口<br>建议使用纯真ip库：下载<a href=http://www.onlinedown.net/soft/19051.htm target=_blank>QQWry.Dat</a>改名为ip.dat上传到KSS根目录！";
        }
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = _obfuscate_j5SMi5KSiouIj4iIipWIkIs�( "http://www.ip138.com/ips1388.asp?ip=".$_obfuscate_jY6MkIuIioqTk4eIiIiNj5U�."&action=2", FALSE, 10 );
        if ( substr( $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk�, 0, 7 ) == "curlerr" )
        {
            return substr( $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk�, 8 );
        }
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = _obfuscate_hpSOjImTiIuPiJKUjoaKjpA�( $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk�, "GBK", "UTF-8" );
        $_obfuscate_lY2VlYyLioeLlIyNiYqJkI4� = stripos( $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk�, "<ul class=".YH2."ul1".YH2.">" );
        $_obfuscate_iouUlJKTj5SIhoaUj4qVkYw� = stripos( $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk�, "</ul>", $_obfuscate_lY2VlYyLioeLlIyNiYqJkI4� + 5 );
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = substr( $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk�, $_obfuscate_lY2VlYyLioeLlIyNiYqJkI4� + 20, $_obfuscate_iouUlJKTj5SIhoaUj4qVkYw� - $_obfuscate_lY2VlYyLioeLlIyNiYqJkI4� - 20 );
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = str_replace( "</li><li>", "<br>", $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� );
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� = str_replace( "本站", "", $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk� );
        return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYk�;
    }
    else
    {
        return "请将传纯真ip库<a href=http://www.onlinedown.net/soft/19051.htm target=_blank>QQWry.Dat</a>改名为ip.dat上传到根目录（favicon.ico所在目录）！";
    }
}

?>
