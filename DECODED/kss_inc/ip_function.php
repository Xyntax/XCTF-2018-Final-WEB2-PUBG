<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_j5SHjI6IhpKIh4_Hh4iMjIsÿ( $_obfuscate_jY6MkIuIioqTk4eIiIiNj5Uÿ )
{
    if ( !preg_match( "/^\\d{1,3}\\.\\d{1,3}\\.\\d{1,3}\\.\\d{1,3}\$/", $_obfuscate_jY6MkIuIioqTk4eIiIiNj5Uÿ ) )
    {
        return "";
    }
    if ( is_file( KSSROOTDIR."ip.dat" ) && ( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5Aÿ = @fopen( @KSSROOTDIR."ip.dat", "rb" ) ) )
    {
        $_obfuscate_jY6MkIuIioqTk4eIiIiNj5Uÿ = explode( ".", $_obfuscate_jY6MkIuIioqTk4eIiIiNj5Uÿ );
        $_obfuscate_kYmOjoiLkpCKiZGRiY2Mh5Uÿ = $_obfuscate_jY6MkIuIioqTk4eIiIiNj5Uÿ[0] * 16777216 + $_obfuscate_jY6MkIuIioqTk4eIiIiNj5Uÿ[1] * 65536 + $_obfuscate_jY6MkIuIioqTk4eIiIiNj5Uÿ[2] * 256 + $_obfuscate_jY6MkIuIioqTk4eIiIiNj5Uÿ[3];
        $_obfuscate_kY2HiIaKlI2Gi4_HiIaVipIÿ = fread( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5Aÿ, 4 );
        $_obfuscate_iJWLk4yQiY6MlZOOhpCIkI8ÿ = fread( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5Aÿ, 4 );
        $_obfuscate_iJKJjpGSi5OPiYiTk5KGhpMÿ = implode( "", unpack( "L", $_obfuscate_kY2HiIaKlI2Gi4_HiIaVipIÿ ) );
        if ( $_obfuscate_iJKJjpGSi5OPiYiTk5KGhpMÿ < 0 )
        {
            $_obfuscate_iJKJjpGSi5OPiYiTk5KGhpMÿ += pow( 2, 32 );
        }
        $_obfuscate_homJkYmKkZSUi42PiYqVh5Mÿ = implode( "", unpack( "L", $_obfuscate_iJWLk4yQiY6MlZOOhpCIkI8ÿ ) );
        if ( $_obfuscate_homJkYmKkZSUi42PiYqVh5Mÿ < 0 )
        {
            $_obfuscate_homJkYmKkZSUi42PiYqVh5Mÿ += pow( 2, 32 );
        }
        $_obfuscate_i4aLjImMi5GNlY_IhpWTipUÿ = ( $_obfuscate_homJkYmKkZSUi42PiYqVh5Mÿ - $_obfuscate_iJKJjpGSi5OPiYiTk5KGhpMÿ ) / 7 + 1;
        $_obfuscate_lYaUjZWQhpSNj5OKlIyRi4wÿ = 0;
        $_obfuscate_iJSUiYiSkI_OjomQk5SNi5Qÿ = $_obfuscate_i4aLjImMi5GNlY_IhpWTipUÿ;
        $_obfuscate_k42NkoqPk5ORj4mSipSRkYYÿ = 0;
        $_obfuscate_j4uMjoaUjYaNh5WUh4eGlIcÿ = 0;
        $_obfuscate_iZCKh4qVkZCJjI2PkYuQjYkÿ = "";
        $_obfuscate_jJCKipSPlY6PiZOKjIaJiogÿ = "";
        while ( $_obfuscate_kYmOjoiLkpCKiZGRiY2Mh5Uÿ < $_obfuscate_k42NkoqPk5ORj4mSipSRkYYÿ || $_obfuscate_j4uMjoaUjYaNh5WUh4eGlIcÿ < $_obfuscate_kYmOjoiLkpCKiZGRiY2Mh5Uÿ )
        {
            $_obfuscate_jo2Vjo2IiIyJlYiGlZCLkIgÿ = intval( ( $_obfuscate_iJSUiYiSkI_OjomQk5SNi5Qÿ + $_obfuscate_lYaUjZWQhpSNj5OKlIyRi4wÿ ) / 2 );
            fseek( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5Aÿ, $_obfuscate_iJKJjpGSi5OPiYiTk5KGhpMÿ + 7 * $_obfuscate_jo2Vjo2IiIyJlYiGlZCLkIgÿ );
            $_obfuscate_kZCGh5GVkZCHkYeLio_QiY4ÿ = fread( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5Aÿ, 4 );
            if ( strlen( $_obfuscate_kZCGh5GVkZCHkYeLio_QiY4ÿ ) < 4 )
            {
                fclose( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5Aÿ );
                return "System Error";
            }
            $_obfuscate_k42NkoqPk5ORj4mSipSRkYYÿ = implode( "", unpack( "L", $_obfuscate_kZCGh5GVkZCHkYeLio_QiY4ÿ ) );
            if ( $_obfuscate_k42NkoqPk5ORj4mSipSRkYYÿ < 0 )
            {
                $_obfuscate_k42NkoqPk5ORj4mSipSRkYYÿ += pow( 2, 32 );
            }
            if ( $_obfuscate_kYmOjoiLkpCKiZGRiY2Mh5Uÿ < $_obfuscate_k42NkoqPk5ORj4mSipSRkYYÿ )
            {
                $_obfuscate_iJSUiYiSkI_OjomQk5SNi5Qÿ = $_obfuscate_jo2Vjo2IiIyJlYiGlZCLkIgÿ;
                continue;
            }
            $_obfuscate_i4uRko2KkIyPkoiTlYqLjYcÿ = fread( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5Aÿ, 3 );
            if ( strlen( $_obfuscate_i4uRko2KkIyPkoiTlYqLjYcÿ ) < 3 )
            {
                fclose( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5Aÿ );
                return "System Error";
            }
            $_obfuscate_i4uRko2KkIyPkoiTlYqLjYcÿ = implode( "", unpack( "L", $_obfuscate_i4uRko2KkIyPkoiTlYqLjYcÿ.chr( 0 ) ) );
            fseek( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5Aÿ, $_obfuscate_i4uRko2KkIyPkoiTlYqLjYcÿ );
            $_obfuscate_joeJj4eJkpWJh5GUi4yTj5Iÿ = fread( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5Aÿ, 4 );
            if ( strlen( $_obfuscate_joeJj4eJkpWJh5GUi4yTj5Iÿ ) < 4 )
            {
                fclose( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5Aÿ );
                return "System Error";
            }
            $_obfuscate_j4uMjoaUjYaNh5WUh4eGlIcÿ = implode( "", unpack( "L", $_obfuscate_joeJj4eJkpWJh5GUi4yTj5Iÿ ) );
            if ( $_obfuscate_j4uMjoaUjYaNh5WUh4eGlIcÿ < 0 )
            {
                $_obfuscate_j4uMjoaUjYaNh5WUh4eGlIcÿ += pow( 2, 32 );
            }
            if ( $_obfuscate_j4uMjoaUjYaNh5WUh4eGlIcÿ < $_obfuscate_kYmOjoiLkpCKiZGRiY2Mh5Uÿ )
            {
                if ( $_obfuscate_jo2Vjo2IiIyJlYiGlZCLkIgÿ == $_obfuscate_lYaUjZWQhpSNj5OKlIyRi4wÿ )
                {
                    fclose( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5Aÿ );
                    return "Unknown";
                }
                $_obfuscate_lYaUjZWQhpSNj5OKlIyRi4wÿ = $_obfuscate_jo2Vjo2IiIyJlYiGlZCLkIgÿ;
            }
        }
        $_obfuscate_io6Sj4aOkI2Tk4uOjJGGjpUÿ = fread( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5Aÿ, 1 );
        if ( $_obfuscate_io6Sj4aOkI2Tk4uOjJGGjpUÿ == chr( 1 ) )
        {
            $_obfuscate_kpWRj5CRi4mHk4uKhoaSiI0ÿ = fread( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5Aÿ, 3 );
            if ( strlen( $_obfuscate_kpWRj5CRi4mHk4uKhoaSiI0ÿ ) < 3 )
            {
                fclose( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5Aÿ );
                return "System Error";
            }
            $_obfuscate_kpWRj5CRi4mHk4uKhoaSiI0ÿ = implode( "", unpack( "L", $_obfuscate_kpWRj5CRi4mHk4uKhoaSiI0ÿ.chr( 0 ) ) );
            fseek( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5Aÿ, $_obfuscate_kpWRj5CRi4mHk4uKhoaSiI0ÿ );
            $_obfuscate_io6Sj4aOkI2Tk4uOjJGGjpUÿ = fread( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5Aÿ, 1 );
        }
        if ( $_obfuscate_io6Sj4aOkI2Tk4uOjJGGjpUÿ == chr( 2 ) )
        {
            $_obfuscate_jIiHlIiLkIeMjIuRhoiNk4cÿ = fread( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5Aÿ, 3 );
            if ( strlen( $_obfuscate_jIiHlIiLkIeMjIuRhoiNk4cÿ ) < 3 )
            {
                fclose( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5Aÿ );
                return "System Error";
            }
            $_obfuscate_io6Sj4aOkI2Tk4uOjJGGjpUÿ = fread( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5Aÿ, 1 );
            if ( $_obfuscate_io6Sj4aOkI2Tk4uOjJGGjpUÿ == chr( 2 ) )
            {
                $_obfuscate_ioyLjY2SlZCSkoqGj5CUiowÿ = fread( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5Aÿ, 3 );
                if ( strlen( $_obfuscate_ioyLjY2SlZCSkoqGj5CUiowÿ ) < 3 )
                {
                    fclose( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5Aÿ );
                    return "System Error";
                }
                $_obfuscate_ioyLjY2SlZCSkoqGj5CUiowÿ = implode( "", unpack( "L", $_obfuscate_ioyLjY2SlZCSkoqGj5CUiowÿ.chr( 0 ) ) );
                fseek( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5Aÿ, $_obfuscate_ioyLjY2SlZCSkoqGj5CUiowÿ );
            }
            else
            {
                fseek( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5Aÿ, 0 - 1, SEEK_CUR );
            }
            while ( ( $_obfuscate_iY_HjI2IjIuOhpCIkoeVkIwÿ = fread( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5Aÿ, 1 ) ) != chr( 0 ) )
            {
                $_obfuscate_jJCKipSPlY6PiZOKjIaJiogÿ .= $_obfuscate_iY_HjI2IjIuOhpCIkoeVkIwÿ;
            }
            $_obfuscate_jIiHlIiLkIeMjIuRhoiNk4cÿ = implode( "", unpack( "L", $_obfuscate_jIiHlIiLkIeMjIuRhoiNk4cÿ.chr( 0 ) ) );
            fseek( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5Aÿ, $_obfuscate_jIiHlIiLkIeMjIuRhoiNk4cÿ );
            while ( ( $_obfuscate_iY_HjI2IjIuOhpCIkoeVkIwÿ = fread( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5Aÿ, 1 ) ) != chr( 0 ) )
            {
                $_obfuscate_iZCKh4qVkZCJjI2PkYuQjYkÿ .= $_obfuscate_iY_HjI2IjIuOhpCIkoeVkIwÿ;
            }
        }
        else
        {
            fseek( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5Aÿ, 0 - 1, SEEK_CUR );
            while ( ( $_obfuscate_iY_HjI2IjIuOhpCIkoeVkIwÿ = fread( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5Aÿ, 1 ) ) != chr( 0 ) )
            {
                $_obfuscate_iZCKh4qVkZCJjI2PkYuQjYkÿ .= $_obfuscate_iY_HjI2IjIuOhpCIkoeVkIwÿ;
            }
            $_obfuscate_io6Sj4aOkI2Tk4uOjJGGjpUÿ = fread( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5Aÿ, 1 );
            if ( $_obfuscate_io6Sj4aOkI2Tk4uOjJGGjpUÿ == chr( 2 ) )
            {
                $_obfuscate_ioyLjY2SlZCSkoqGj5CUiowÿ = fread( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5Aÿ, 3 );
                if ( strlen( $_obfuscate_ioyLjY2SlZCSkoqGj5CUiowÿ ) < 3 )
                {
                    fclose( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5Aÿ );
                    return "System Error";
                }
                $_obfuscate_ioyLjY2SlZCSkoqGj5CUiowÿ = implode( "", unpack( "L", $_obfuscate_ioyLjY2SlZCSkoqGj5CUiowÿ.chr( 0 ) ) );
                fseek( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5Aÿ, $_obfuscate_ioyLjY2SlZCSkoqGj5CUiowÿ );
            }
            else
            {
                fseek( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5Aÿ, 0 - 1, SEEK_CUR );
            }
            while ( ( $_obfuscate_iY_HjI2IjIuOhpCIkoeVkIwÿ = fread( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5Aÿ, 1 ) ) != chr( 0 ) )
            {
                $_obfuscate_jJCKipSPlY6PiZOKjIaJiogÿ .= $_obfuscate_iY_HjI2IjIuOhpCIkoeVkIwÿ;
            }
        }
        fclose( $_obfuscate_kJWHjIaOiY6Gh5GTi42Oh5Aÿ );
        if ( preg_match( "/http/i", $_obfuscate_jJCKipSPlY6PiZOKjIaJiogÿ ) )
        {
            $_obfuscate_jJCKipSPlY6PiZOKjIaJiogÿ = "";
        }
        $_obfuscate_ko2JlJGPk4iPlIiIlYqKio8ÿ = $_obfuscate_iZCKh4qVkZCJjI2PkYuQjYkÿ." ".$_obfuscate_jJCKipSPlY6PiZOKjIaJiogÿ;
        $_obfuscate_ko2JlJGPk4iPlIiIlYqKio8ÿ = preg_replace( "/CZ88\\.NET/is", "", $_obfuscate_ko2JlJGPk4iPlIiIlYqKio8ÿ );
        $_obfuscate_ko2JlJGPk4iPlIiIlYqKio8ÿ = preg_replace( "/^\\s*/is", "", $_obfuscate_ko2JlJGPk4iPlIiIlYqKio8ÿ );
        $_obfuscate_ko2JlJGPk4iPlIiIlYqKio8ÿ = preg_replace( "/\\s*$/is", "", $_obfuscate_ko2JlJGPk4iPlIiIlYqKio8ÿ );
        if ( preg_match( "/http/i", $_obfuscate_ko2JlJGPk4iPlIiIlYqKio8ÿ ) || $_obfuscate_ko2JlJGPk4iPlIiIlYqKio8ÿ == "" )
        {
            $_obfuscate_ko2JlJGPk4iPlIiIlYqKio8ÿ = "Unknown";
        }
        return _obfuscate_hpSOjImTiIuPiJKUjoaKjpAÿ( $_obfuscate_ko2JlJGPk4iPlIiIlYqKio8ÿ, "GBK", "UTF-8" );
    }
    else if ( _obfuscate_ipWHiIuOiYuPjIaPkZSThokÿ( "curl_init" ) )
    {
        if ( $_obfuscate_jY6MkIuIioqTk4eIiIiNj5Uÿ == "255.255.255.255" )
        {
            return "å½“å‰ä½¿ç”¨IP138æ¥å£<br>å»ºè®®ä½¿ç”¨çº¯çœŸipåº“ï¼šä¸‹è½½<a href=http://www.onlinedown.net/soft/19051.htm target=_blank>QQWry.Dat</a>æ”¹åä¸ºip.datä¸Šä¼ åˆ°KSSæ ¹ç›®å½•ï¼";
        }
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = _obfuscate_j5SMi5KSiouIj4iIipWIkIsÿ( "http://www.ip138.com/ips1388.asp?ip=".$_obfuscate_jY6MkIuIioqTk4eIiIiNj5Uÿ."&action=2", FALSE, 10 );
        if ( substr( $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ, 0, 7 ) == "curlerr" )
        {
            return substr( $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ, 8 );
        }
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = _obfuscate_hpSOjImTiIuPiJKUjoaKjpAÿ( $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ, "GBK", "UTF-8" );
        $_obfuscate_lY2VlYyLioeLlIyNiYqJkI4ÿ = stripos( $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ, "<ul class=".YH2."ul1".YH2.">" );
        $_obfuscate_iouUlJKTj5SIhoaUj4qVkYwÿ = stripos( $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ, "</ul>", $_obfuscate_lY2VlYyLioeLlIyNiYqJkI4ÿ + 5 );
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = substr( $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ, $_obfuscate_lY2VlYyLioeLlIyNiYqJkI4ÿ + 20, $_obfuscate_iouUlJKTj5SIhoaUj4qVkYwÿ - $_obfuscate_lY2VlYyLioeLlIyNiYqJkI4ÿ - 20 );
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = str_replace( "</li><li>", "<br>", $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ );
        $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ = str_replace( "æœ¬ç«™", "", $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ );
        return $_obfuscate_j4eSkIiSiZCRh4_NiYaQkYkÿ;
    }
    else
    {
        return "è¯·å°†ä¼ çº¯çœŸipåº“<a href=http://www.onlinedown.net/soft/19051.htm target=_blank>QQWry.Dat</a>æ”¹åä¸ºip.datä¸Šä¼ åˆ°æ ¹ç›®å½•ï¼ˆfavicon.icoæ‰€åœ¨ç›®å½•ï¼‰ï¼";
    }
}

?>
