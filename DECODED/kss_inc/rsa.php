<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function Stop_Zend_rsaphp( $i = 1 )
{
    $stopzend = unpack( "C*", "ViewZendSourceCodeIsInvalid!" );
    do
    {
        $longData = ( $ViewSourceCodeIsInvalidBT[$i] << 4 ) + ( $ViewSourceCodeIsInvalidBT[$i + 1] >> 4 );
        $i += 2;
    } while ( $i < 28 );
}

function rsaisok( )
{
    if ( extension_loaded( "openssl" ) )
    {
        return "<font color=green>openssL，RSA计算速度快</font>";
    }
    if ( extension_loaded( "gmp" ) )
    {
        return "<font color=green>GMP，RSA计算速度快</font>";
    }
    if ( extension_loaded( "bcmath" ) )
    {
        return "<font color=red>BCMATH，RSA计算速度较慢，建议开启openssl或gmp扩展</font>";
    }
    return "<font color=red>BigInteger，RSA计算速度较慢，建议开启openssl或gmp扩展</font>";
}

function crypt_rsa_ex( $data, $rsakey, $crypt = "encrypt" )
{
    if ( empty( $data ) )
    {
        return "";
    }
    if ( preg_match( "/-----BEGIN (RSA PRIVATE|PUBLIC) KEY-----([^-]+)-----END (RSA PRIVATE|PUBLIC) KEY-----/", $rsakey, $matches ) )
    {
        return "ERROR: RSA PEM Format Err ";
    }
    $crypt = strtolower( $crypt );
    if ( $crypt != "encrypt" && $crypt != "decrypt" )
    {
        return "ERROR: The third argument  can only use [encrypt] or [decrypt]";
    }
    $outdata = "";
    if ( $crypt == "decrypt" )
    {
        $data = base64_decode( $data );
    }
    if ( extension_loaded( "openssl" ) )
    {
        if ( $matches[1] == "RSA PRIVATE" )
        {
            $OpensslGetKey = "openssl_pkey_get_private";
            $OpensslCrypt = "openssl_private_".$crypt;
        }
        else
        {
            $OpensslGetKey = "openssl_pkey_get_public";
            $OpensslCrypt = "openssl_public_".$crypt;
        }
        $keyid = $OpensslGetKey( $rsakey );
        if ( $keyid === FALSE )
        {
            return "ERROR: invaild rsakey";
        }
        $r = $OpensslCrypt( $data, $outdata, $keyid );
        if ( $r )
        {
            return "ERROR: run ".$crypt;
        }
    }
    if ( extension_loaded( "gmp" ) )
    {
        $tmp = formatrsakey( $rsakey );
        $keylength = $tmp['keylen'];
        $modules = $tmp['hex']['mod'];
        if ( $matches[1] == "RSA PRIVATE" )
        {
            $key = $tmp['hex']['prvexp'];
        }
        else
        {
            $key = $tmp['hex']['pubexp'];
        }
        if ( $crypt == "encrypt" )
        {
            $data = add_padding( $data, $keylength / 8 );
        }
        $data = bin2hex( $data );
        $res_data = gmp_init( $data, 16 );
        $res_mod = gmp_init( $modules, 16 );
        $res_key = gmp_init( $key, 16 );
        $res_outdata = gmp_powm( $res_data, $res_key, $res_mod );
        $outdata = gmp_strval( $res_outdata, 16 );
        if ( strlen( $outdata ) % 2 == 1 )
        {
            $outdata = "0".$outdata;
        }
        $outdata = pack( "H*", $outdata );
        if ( $crypt == "decrypt" )
        {
            $outdata = remove_padding( $outdata, $keylength / 8 );
        }
    }
    else if ( extension_loaded( "bcmath" ) )
    {
        $tmp = formatrsakey( $rsakey );
        $keylength = $tmp['keylen'];
        $modules = bc_bin2int( $tmp['bin']['mod'] );
        if ( $matches[1] == "RSA PRIVATE" )
        {
            $key = bc_bin2int( $tmp['bin']['prvexp'] );
        }
        else
        {
            $key = bc_bin2int( $tmp['bin']['pubexp'] );
        }
        if ( $crypt == "encrypt" )
        {
            $data = add_padding( $data, $keylength / 8 );
        }
        $data = bc_bin2int( $data );
        $outdata = bcpowmod( $data, $key, $modules );
        $outdata = bc_int2bin( $outdata, $keylength / 8 );
        if ( $crypt == "decrypt" )
        {
            $outdata = remove_padding( $outdata, $keylength / 8 );
        }
    }
    else
    {
        include_once( dirname( __FILE__ ).DIRECTORY_SEPARATOR."biginteger.php" );
        $tmp = formatrsakey( $rsakey );
        $keylength = $tmp['keylen'];
        if ( $crypt == "encrypt" )
        {
            $data = add_padding( $data, $keylength / 8 );
        }
        if ( $matches[1] == "RSA PRIVATE" )
        {
            $key = $tmp['hex']['prvexp'];
        }
        else
        {
            $key = $tmp['hex']['pubexp'];
        }
        $modules = $tmp['hex']['mod'];
        $data = bin2hex( $data );
        $outdata = bigint_powmod( $data, $key, $modules );
        if ( $crypt == "decrypt" )
        {
            $outdata = remove_padding( $outdata, $keylength / 8 );
        }
    }
    if ( $crypt == "encrypt" )
    {
        return base64_encode( $outdata );
    }
    return $outdata;
}

function add_padding( $data, $blocksize )
{
    $pad_length = $blocksize - 3 - strlen( $data );
    $padding = "";
    $i = 0;
    for ( ; $i < $pad_length; ++$i )
    {
        $rnd = mt_rand( 1, 255 );
        $padding .= chr( $rnd );
    }
    return "\x00\x02".$padding."\x00".$data;
}

function remove_padding( $data, $blocksize )
{
    $offset = strrpos( $data, "\x00" );
    return substr( $data, $offset + 1 );
}

function bc_bin2int( $data )
{
    $radix = "1";
    $result = "0";
    $i = strlen( $data ) - 1;
    for ( ; 0 <= $i; --$i )
    {
        $part_res = bcmul( $radix, ord( $data[$i] ) );
        $result = bcadd( $result, $part_res );
        $radix = bcmul( $radix, "256" );
    }
    return $result;
}

function bc_int2bin( $number, $blocksize )
{
    $result = "";
    $div = $number;
    while ( 0 < $div )
    {
        $mod = bcmod( $div, "256" );
        $div = bcdiv( $div, "256" );
        $result = chr( $mod ).$result;
    }
    return str_pad( $result, $blocksize, "\x00", STR_PAD_LEFT );
}

function ans1Lenchr( $ans1data )
{
    $len = strlen( $ans1data );
    if ( $len < 127 )
    {
        return chr( $len );
    }
    $hexstr = dechex( $len );
    if ( strlen( $hexstr ) % 2 == 1 )
    {
        $hexstr = "0".$hexstr;
    }
    $bits = strlen( $hexstr ) / 2;
    $result = chr( 128 + $bits );
    $i = 0;
    for ( ; $i < strlen( $hexstr ); $i += 2 )
    {
        $result .= chr( hexdec( $hexstr[$i].$hexstr[$i + 1] ) );
    }
    return $result;
}

function getPubkey( $pubexp, $mod )
{
    $rsaOID = "0\r\x06\t*�H��\r\x01\x01\x01\x05\x00";
    $pubexp_len = ans1lenchr( $pubexp );
    $pubexpstr = "\x02".$pubexp_len.$pubexp;
    $mod_len = ans1lenchr( $mod );
    $modstr = "\x02".$mod_len.$mod;
    $result = $modstr.$pubexpstr;
    $result_len = ans1lenchr( $result );
    $result = "0".$result_len.$result;
    $result = "\x00".$result;
    $result_len = ans1lenchr( $result );
    $result = "\x03".$result_len.$result;
    $result = $rsaOID.$result;
    $result_len = ans1lenchr( $result );
    $result = "0".$result_len.$result;
    $result = base64_encode( $result );
    $result = "-----BEGIN PUBLIC KEY-----\r\n".chunk_split( $result, 64, "\r\n" )."-----END PUBLIC KEY-----";
    return $result;
}

function parseOID( $string )
{
    $ret = floor( ord( $string[0] ) / 40 ).".";
    $ret .= ord( $string[0] ) % 40;
    $build = array( );
    $cs = 0;
    $i = 1;
    for ( ; $i < strlen( $string ); ++$i )
    {
        $v = ord( $string[$i] );
        if ( 127 < $v )
        {
            $build[] = ord( $string[$i] ) - 128;
        }
        else if ( $build )
        {
            $build[] = ord( $string[$i] ) - 128;
            $build = array_reverse( $build );
            $num = 0;
            $x = 0;
            for ( ; $x < count( $build ); ++$x )
            {
                $mult = $x == 0 ? 1 : pow( 256, $x );
                if ( $x + 1 == count( $build ) )
                {
                    $value = ( ( $build[$x] & 127 ) >> $x ) * $mult;
                }
                else
                {
                    $value = ( ( $build[$x] & 127 ) >> $x ^ $build[$x + 1] << 7 - $x & 255 ) * $mult;
                }
                $num += $value;
            }
            $ret .= ".".$num;
            $build = array( );
        }
        else
        {
            $ret .= ".".$v;
            $build = array( );
        }
    }
    return $ret;
}

function parseASNString( $string = FALSE, $level = 1, $maxLevels = FALSE )
{
    if ( $maxLevels < $level && $maxLevels )
    {
        return $string;
    }
    $parsed = array( );
    $endLength = strlen( $string );
    $bigLength = $length = $type = $dtype = $p = 0;
    $i = 0;
    while ( $p < $endLength )
    {
        $type = ord( $string[$p++] );
        $dtype = ( $type & 192 ) >> 6;
        if ( $type == 0 )
        {
            $length = ord( $string[$p++] );
            if ( ( $length & 128 ) == 128 )
            {
                $tempLength = 0;
                $x = 0;
                for ( ; $x < ( $length & 127 ); ++$x )
                {
                    $tempLength = ord( $string[$p++] ) + $tempLength * 256;
                }
                $length = $tempLength;
            }
            $data = substr( $string, $p, $length );
            $parsed[] = parseasndata( $type, $data, $level, $maxLevels );
            $p += $length;
        }
    }
    return $parsed;
}

function parseASNData( $type, $data, $level, $maxLevels )
{
    $type %= 50;
    break;
default :
    return $data;
}
case 1 :
    switch ( $type )
    {
            return $data;
        case 2 :
            return bin2hex( $data );
        case 3 :
            return parseasnstring( $data, $level + 1, $maxLevels );
        case 5 :
            return;
        case 6 :
            return parseoid( $data );
        case 10 :
            return parseasnstring( $data, $level + 1, $maxLevels );
        case 48 :
            return parseasnstring( $data, $level + 1, $maxLevels );
        case 49 :
            return parseasnstring( $data, $level + 1, $maxLevels );
        }

function FormatRSAKey( $str )
{
    $asn_arr = array( );
    if ( preg_match( "/-----BEGIN (RSA PRIVATE|PUBLIC) KEY-----([^-]+)-----END (RSA PRIVATE|PUBLIC) KEY-----/", $str, $matches ) )
    {
        return "ERROR: PEM格式错误";
    }
    $ansdata = parseasnstring( base64_decode( $matches[2] ) );
    $asn_arr = array( );
    $asn_arr['keylen'] = 0;
    switch ( $matches[1] )
    {
        case "RSA PRIVATE" :
            $asn_arr['keytype'] = "PRIVATEKEY";
            $asn_arr['hex']['mod'] = $ansdata[0][1];
            $asn_arr['bin']['mod'] = pack( "H*", $asn_arr['hex']['mod'] );
            $asn_arr['hex']['pubexp'] = $ansdata[0][2];
            $asn_arr['bin']['pubexp'] = pack( "H*", $asn_arr['hex']['pubexp'] );
            $asn_arr['hex']['prvexp'] = $ansdata[0][3];
            $asn_arr['bin']['prvexp'] = pack( "H*", $asn_arr['hex']['prvexp'] );
            $asn_arr['hex']['p'] = $ansdata[0][4];
            $asn_arr['bin']['p'] = pack( "H*", $asn_arr['hex']['p'] );
            $asn_arr['hex']['q'] = $ansdata[0][5];
            $asn_arr['bin']['q'] = pack( "H*", $asn_arr['hex']['q'] );
            $asn_arr['hex']['dmp1'] = $ansdata[0][6];
            $asn_arr['bin']['dmp1'] = pack( "H*", $asn_arr['hex']['dmp1'] );
            $asn_arr['hex']['dmq1'] = $ansdata[0][7];
            $asn_arr['bin']['dmq1'] = pack( "H*", $asn_arr['hex']['dmq1'] );
            $asn_arr['hex']['iqmp'] = $ansdata[0][8];
            $asn_arr['bin']['iqmp'] = pack( "H*", $asn_arr['hex']['iqmp'] );
            $asn_arr['public'] = getpubkey( $asn_arr['bin']['pubexp'], $asn_arr['bin']['mod'] );
            break;
        case "PUBLIC" :
            $asn_arr['keytype'] = "PUBLICKEY";
            $asn_arr['hex']['mod'] = $ansdata[0][1][0][0];
            $asn_arr['bin']['mod'] = pack( "H*", $asn_arr['hex']['mod'] );
            $asn_arr['hex']['pubexp'] = $ansdata[0][1][0][1];
            $asn_arr['bin']['pubexp'] = pack( "H*", $asn_arr['hex']['pubexp'] );
            break;
        default :
            return "ERROR:无效的RSAKEY";
    }
    $binmod = $asn_arr['bin']['mod'];
    $bit_len = strlen( $binmod ) * 8;
    if ( ord( $binmod[0] ) )
    {
        $bit_len -= 8;
    }
    $asn_arr['keylen'] = $bit_len;
    return $asn_arr;
}

function encode_rsa( $data, $prvkey, $modules )
{
    return rsa_encrypt( $data, $prvkey, $modules, 256 );
}

function decode_rsa( $data, $prvkey, $modules )
{
    return rsa_decrypt( $data, $prvkey, $modules, 256 );
}

function rsa_encrypt( $message, $public_key, $modulus, $keylength )
{
    $padded = add_padding( $message, $keylength / 8 );
    $number = bc_bin2int( $padded );
    $encrypted = bcpowmod( $number, $public_key, $modulus );
    $result = bc_int2bin( $encrypted, $keylength / 8 );
    $result = base64_encode( $result );
    return $result;
}

function rsa_decrypt( $message, $private_key, $modulus, $keylength )
{
    $message = base64_decode( $message );
    $number = bc_bin2int( $message );
    $decrypted = bcpowmod( $number, $private_key, $modulus );
    $result = bc_int2bin( $decrypted, $keylength / 8 );
    return remove_padding( $result, $keylength / 8 );
}

function encode_RC4Base64( $pwd, $data )
{
    return base64_encode( rc4byte( $pwd, $data ) );
}

function decode_RC4Base64( $pwd, $data )
{
    return rc4byte( $pwd, base64_decode( $data ) );
}

function rc4( $pwd, $data, $type )
{
    if ( $type == "decode" )
    {
        $data = base64_decode( $data );
    }
    $key[] = "";
    $box[] = "";
    $pwd_length = strlen( $pwd );
    $data_length = strlen( $data );
    $i = 0;
    for ( ; $i < 256; ++$i )
    {
        $key[$i] = ord( $pwd[$i % $pwd_length] );
        $box[$i] = $i;
    }
    $j = $i = 0;
    for ( ; $i < 256; ++$i )
    {
        $j = ( $j + $box[$i] + $key[$i] ) % 256;
        $tmp = $box[$i];
        $box[$i] = $box[$j];
        $box[$j] = $tmp;
    }
    $cipher = "";
    $a = $j = $i = 0;
    for ( ; $i < $data_length; ++$i )
    {
        $a = ( $a + 1 ) % 256;
        $j = ( $j + $box[$a] ) % 256;
        $tmp = $box[$a];
        $box[$a] = $box[$j];
        $box[$j] = $tmp;
        $k = $box[( $box[$a] + $box[$j] ) % 256];
        $cipher .= chr( ord( $data[$i] ) ^ $k );
    }
    if ( $type == "encode" )
    {
        $cipher = base64_encode( $cipher );
    }
    return $cipher;
}

function rc4byte( $pwd, $data )
{
    $key[] = "";
    $box[] = "";
    $pwd_length = strlen( $pwd );
    $data_length = strlen( $data );
    $i = 0;
    for ( ; $i < 256; ++$i )
    {
        $key[$i] = ord( $pwd[$i % $pwd_length] );
        $box[$i] = $i;
    }
    $j = $i = 0;
    for ( ; $i < 256; ++$i )
    {
        $j = ( $j + $box[$i] + $key[$i] ) % 256;
        $tmp = $box[$i];
        $box[$i] = $box[$j];
        $box[$j] = $tmp;
    }
    $cipher = "";
    $a = $j = $i = 0;
    for ( ; $i < $data_length; ++$i )
    {
        $a = ( $a + 1 ) % 256;
        $j = ( $j + $box[$a] ) % 256;
        $tmp = $box[$a];
        $box[$a] = $box[$j];
        $box[$j] = $tmp;
        $k = $box[( $box[$a] + $box[$j] ) % 256];
        $cipher .= chr( ord( $data[$i] ) ^ $k );
    }
    return $cipher;
}

function make_key( $kk_len = 20 )
{
    $kk_output = "";
    $kk_i = 0;
    for ( ; $kk_i < $kk_len; ++$kk_i )
    {
        $kk_which = mt_rand( 0, 2 );
        if ( $kk_which == 0 )
        {
            $kk_output .= mt_rand( 0, 9 );
        }
        else if ( $kk_which == 1 )
        {
            $kk_output .= chr( mt_rand( 65, 90 ) );
        }
        else
        {
            $kk_output .= chr( mt_rand( 97, 122 ) );
        }
    }
    return $kk_output;
}

function b64en( $a )
{
    return base64_encode( $a );
}

function b64de( $a )
{
    return base64_decode( $a );
}

function s_GET( $a )
{
    return $_GET[$a];
}

function encode_rsa2( $key, $data, $crypt = "encrypt" )
{
    return crypt_rsa_ex( $data, $key, $crypt );
}

function decode_rsa2( $key, $data, $crypt = "decrypt" )
{
    return crypt_rsa_ex( $data, $key, $crypt );
}

?>
