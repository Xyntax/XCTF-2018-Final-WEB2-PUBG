<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_kpWLkoyMhouPipCQiImKjZAÿ( $_obfuscate_i5CNjI2Tk4eJlJSUk4eKkI8ÿ, $_obfuscate_hoyNlY_HiJOGjoiNiImOkIwÿ )
{
    libxml_disable_entity_loader( TRUE );
    $_obfuscate_i5SPhouVkYmIio2Pj4aHho8ÿ = json_decode( json_encode( simplexml_load_string( $_obfuscate_i5CNjI2Tk4eJlJSUk4eKkI8ÿ, "SimpleXMLElement", LIBXML_NOCDATA ) ), TRUE );
    ksort( $_obfuscate_i5SPhouVkYmIio2Pj4aHho8ÿ );
    $_obfuscate_io_NlZONi4mIkZSOlZWPlIwÿ = "";
    foreach ( $_obfuscate_i5SPhouVkYmIio2Pj4aHho8ÿ as $_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ => $_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ )
    {
        if ( $_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ != "sign" )
        {
            $_obfuscate_io_NlZONi4mIkZSOlZWPlIwÿ .= $_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ."=".$_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ."&";
        }
    }
    $_obfuscate_io_NlZONi4mIkZSOlZWPlIwÿ .= "key=".$_obfuscate_hoyNlY_HiJOGjoiNiImOkIwÿ;
    if ( !empty( $_obfuscate_i5SPhouVkYmIio2Pj4aHho8ÿ['return_code'] ) && $_obfuscate_i5SPhouVkYmIio2Pj4aHho8ÿ['return_code'] == "FAIL" )
    {
        return $_obfuscate_i5SPhouVkYmIio2Pj4aHho8ÿ['return_msg'];
    }
    if ( $_obfuscate_i5SPhouVkYmIio2Pj4aHho8ÿ['sign'] != strtoupper( md5( $_obfuscate_io_NlZONi4mIkZSOlZWPlIwÿ ) ) )
    {
        return "ç­¾åé”™è¯¯";
    }
    return TRUE;
}

function _obfuscate_komQkZGUhomRk4eLipOSkJMÿ( $_obfuscate_i5CNjI2Tk4eJlJSUk4eKkI8ÿ )
{
    libxml_disable_entity_loader( TRUE );
    $_obfuscate_i5SPhouVkYmIio2Pj4aHho8ÿ = json_decode( json_encode( simplexml_load_string( $_obfuscate_i5CNjI2Tk4eJlJSUk4eKkI8ÿ, "SimpleXMLElement", LIBXML_NOCDATA ) ), TRUE );
    ksort( $_obfuscate_i5SPhouVkYmIio2Pj4aHho8ÿ );
    return $_obfuscate_i5SPhouVkYmIio2Pj4aHho8ÿ;
}

function _obfuscate_h4yJjZWLkYyMjIqNlYaSjpMÿ( $_obfuscate_jomMjoiOjomMlI_Mj42NlZAÿ, $_obfuscate_hoyNlY_HiJOGjoiNiImOkIwÿ )
{
    $_obfuscate_io_NlZONi4mIkZSOlZWPlIwÿ = "";
    $_obfuscate_jY2KkYuVh5WHkZGKlI2QkYcÿ = "<xml>";
    foreach ( $_obfuscate_jomMjoiOjomMlI_Mj42NlZAÿ as $_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ => $_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ )
    {
        $_obfuscate_io_NlZONi4mIkZSOlZWPlIwÿ .= $_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ."=".$_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ."&";
        $_obfuscate_jY2KkYuVh5WHkZGKlI2QkYcÿ .= "<".$_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ.">".$_obfuscate_io6UjZWThpOSjYeOj46Qkowÿ."</".$_obfuscate_lIeHkoeKkpOSiomPi4mQk5Eÿ.">";
    }
    $_obfuscate_io_NlZONi4mIkZSOlZWPlIwÿ .= "key=".$_obfuscate_hoyNlY_HiJOGjoiNiImOkIwÿ;
    $_obfuscate_jY2KkYuVh5WHkZGKlI2QkYcÿ .= "<sign>".strtoupper( md5( $_obfuscate_io_NlZONi4mIkZSOlZWPlIwÿ ) )."</sign></xml>";
    return $_obfuscate_jY2KkYuVh5WHkZGKlI2QkYcÿ;
}

function _obfuscate_lZCGk4mUkY6GhoeIkZWMk5Qÿ( $_obfuscate_i5CNjI2Tk4eJlJSUk4eKkI8ÿ, $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ, $_obfuscate_kZCUipKHlZKGj4iOipGTjYwÿ = FALSE, $_obfuscate_kZCUhpOUioaJipSJjJOGh4oÿ = 30 )
{
    $_obfuscate_joiNh4aIhouViZGQho_JiI4ÿ = curl_init( );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4ÿ, CURLOPT_TIMEOUT, $_obfuscate_kZCUhpOUioaJipSJjJOGh4oÿ );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4ÿ, CURLOPT_URL, $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4ÿ, CURLOPT_SSL_VERIFYPEER, FALSE );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4ÿ, CURLOPT_SSL_VERIFYHOST, FALSE );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4ÿ, CURLOPT_HEADER, FALSE );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4ÿ, CURLOPT_RETURNTRANSFER, TRUE );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4ÿ, CURLOPT_POST, TRUE );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4ÿ, CURLOPT_POSTFIELDS, $_obfuscate_i5CNjI2Tk4eJlJSUk4eKkI8ÿ );
    $_obfuscate_lIyUkIaVk46LiZCNipOIkJAÿ = curl_exec( $_obfuscate_joiNh4aIhouViZGQho_JiI4ÿ );
    if ( $_obfuscate_lIyUkIaVk46LiZCNipOIkJAÿ )
    {
        curl_close( $_obfuscate_joiNh4aIhouViZGQho_JiI4ÿ );
        return $_obfuscate_lIyUkIaVk46LiZCNipOIkJAÿ;
    }
    else
    {
        $_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4ÿ = curl_errno( $_obfuscate_joiNh4aIhouViZGQho_JiI4ÿ );
        curl_close( $_obfuscate_joiNh4aIhouViZGQho_JiI4ÿ );
        exit( "curlå‡ºé”™ï¼Œé”™è¯¯ç :{$error}" );
    }
}

?>
