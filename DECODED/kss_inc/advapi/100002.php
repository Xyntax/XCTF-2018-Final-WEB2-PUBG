<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function __myEncrypt( $data )
{
    if ( isset( $_GET['r'] ) )
    {
        $_obfuscate_cmM05a_G6ZKlMg�� = _rs( 2 );
        $_obfuscate_cmM05a_G6ZKlMw�� = _rs( 3 );
        $_obfuscate_cmM05Yqg5a_G = rc4byte( $_obfuscate_cmM05a_G6ZKlMg��, $data );
        $_obfuscate_cmM05Yqg5a_G = rc4byte( $_obfuscate_cmM05a_G6ZKlMw��, $_obfuscate_cmM05Yqg5a_G );
        $_obfuscate_YmFzZTY057yW56CB5pWw5o2u = base64_encode( $_obfuscate_cmM05Yqg5a_G );
        return $_obfuscate_YmFzZTY057yW56CB5pWw5o2u;
    }
    else
    {
        $_obfuscate_cmM05a_G6ZKl = _rs( 2 );
        $_obfuscate_cnNh5Yqg5a_G55qEcmM05a_G6ZKl = encode_rsa2( _rs( 1 ), $_obfuscate_cmM05a_G6ZKl );
        $_obfuscate_5Yqg5a_G5ZCO55qE5pWw5o2u = base64_encode( rc4byte( $_obfuscate_cmM05a_G6ZKl, $data ) );
        $_obfuscate_6L_U5Zue5pWw5o2u = $_obfuscate_cnNh5Yqg5a_G55qEcmM05a_G6ZKl.",".$_obfuscate_5Yqg5a_G5ZCO55qE5pWw5o2u;
        return $_obfuscate_6L_U5Zue5pWw5o2u;
    }
}

function ab_a( )
{
    return "返回信息为A";
}

function ab_b( )
{
    return "返回信息为B";
}

function v_points( $points, $sysguid )
{
    $errinfo = "";
    $rt = api_points( $errinfo, $points, $sysguid );
    if ( $rt !== FALSE )
    {
        return $rt;
    }
    else
    {
        return $errinfo;
    }
}

function v_geta( )
{
    return "v_geta的返回数据";
}

function v_getb( $val1, $val2 )
{
    return $val1 + $val2;
}

if ( !defined( "YH2" ) )
{
    exit( "Access denied to view this page!" );
}
?>
