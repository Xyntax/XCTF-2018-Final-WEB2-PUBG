<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_kpWLkoyMhouPipCQiImKjZA�( $_obfuscate_i5CNjI2Tk4eJlJSUk4eKkI8�, $_obfuscate_hoyNlY_HiJOGjoiNiImOkIw� )
{
    libxml_disable_entity_loader( TRUE );
    $_obfuscate_i5SPhouVkYmIio2Pj4aHho8� = json_decode( json_encode( simplexml_load_string( $_obfuscate_i5CNjI2Tk4eJlJSUk4eKkI8�, "SimpleXMLElement", LIBXML_NOCDATA ) ), TRUE );
    ksort( $_obfuscate_i5SPhouVkYmIio2Pj4aHho8� );
    $_obfuscate_io_NlZONi4mIkZSOlZWPlIw� = "";
    foreach ( $_obfuscate_i5SPhouVkYmIio2Pj4aHho8� as $_obfuscate_lIeHkoeKkpOSiomPi4mQk5E� => $_obfuscate_io6UjZWThpOSjYeOj46Qkow� )
    {
        if ( $_obfuscate_lIeHkoeKkpOSiomPi4mQk5E� != "sign" )
        {
            $_obfuscate_io_NlZONi4mIkZSOlZWPlIw� .= $_obfuscate_lIeHkoeKkpOSiomPi4mQk5E�."=".$_obfuscate_io6UjZWThpOSjYeOj46Qkow�."&";
        }
    }
    $_obfuscate_io_NlZONi4mIkZSOlZWPlIw� .= "key=".$_obfuscate_hoyNlY_HiJOGjoiNiImOkIw�;
    if ( !empty( $_obfuscate_i5SPhouVkYmIio2Pj4aHho8�['return_code'] ) && $_obfuscate_i5SPhouVkYmIio2Pj4aHho8�['return_code'] == "FAIL" )
    {
        return $_obfuscate_i5SPhouVkYmIio2Pj4aHho8�['return_msg'];
    }
    if ( $_obfuscate_i5SPhouVkYmIio2Pj4aHho8�['sign'] != strtoupper( md5( $_obfuscate_io_NlZONi4mIkZSOlZWPlIw� ) ) )
    {
        return "签名错误";
    }
    return TRUE;
}

function _obfuscate_komQkZGUhomRk4eLipOSkJM�( $_obfuscate_i5CNjI2Tk4eJlJSUk4eKkI8� )
{
    libxml_disable_entity_loader( TRUE );
    $_obfuscate_i5SPhouVkYmIio2Pj4aHho8� = json_decode( json_encode( simplexml_load_string( $_obfuscate_i5CNjI2Tk4eJlJSUk4eKkI8�, "SimpleXMLElement", LIBXML_NOCDATA ) ), TRUE );
    ksort( $_obfuscate_i5SPhouVkYmIio2Pj4aHho8� );
    return $_obfuscate_i5SPhouVkYmIio2Pj4aHho8�;
}

function _obfuscate_h4yJjZWLkYyMjIqNlYaSjpM�( $_obfuscate_jomMjoiOjomMlI_Mj42NlZA�, $_obfuscate_hoyNlY_HiJOGjoiNiImOkIw� )
{
    $_obfuscate_io_NlZONi4mIkZSOlZWPlIw� = "";
    $_obfuscate_jY2KkYuVh5WHkZGKlI2QkYc� = "<xml>";
    foreach ( $_obfuscate_jomMjoiOjomMlI_Mj42NlZA� as $_obfuscate_lIeHkoeKkpOSiomPi4mQk5E� => $_obfuscate_io6UjZWThpOSjYeOj46Qkow� )
    {
        $_obfuscate_io_NlZONi4mIkZSOlZWPlIw� .= $_obfuscate_lIeHkoeKkpOSiomPi4mQk5E�."=".$_obfuscate_io6UjZWThpOSjYeOj46Qkow�."&";
        $_obfuscate_jY2KkYuVh5WHkZGKlI2QkYc� .= "<".$_obfuscate_lIeHkoeKkpOSiomPi4mQk5E�.">".$_obfuscate_io6UjZWThpOSjYeOj46Qkow�."</".$_obfuscate_lIeHkoeKkpOSiomPi4mQk5E�.">";
    }
    $_obfuscate_io_NlZONi4mIkZSOlZWPlIw� .= "key=".$_obfuscate_hoyNlY_HiJOGjoiNiImOkIw�;
    $_obfuscate_jY2KkYuVh5WHkZGKlI2QkYc� .= "<sign>".strtoupper( md5( $_obfuscate_io_NlZONi4mIkZSOlZWPlIw� ) )."</sign></xml>";
    return $_obfuscate_jY2KkYuVh5WHkZGKlI2QkYc�;
}

function _obfuscate_lZCGk4mUkY6GhoeIkZWMk5Q�( $_obfuscate_i5CNjI2Tk4eJlJSUk4eKkI8�, $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc�, $_obfuscate_kZCUipKHlZKGj4iOipGTjYw� = FALSE, $_obfuscate_kZCUhpOUioaJipSJjJOGh4o� = 30 )
{
    $_obfuscate_joiNh4aIhouViZGQho_JiI4� = curl_init( );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4�, CURLOPT_TIMEOUT, $_obfuscate_kZCUhpOUioaJipSJjJOGh4o� );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4�, CURLOPT_URL, $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc� );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4�, CURLOPT_SSL_VERIFYPEER, FALSE );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4�, CURLOPT_SSL_VERIFYHOST, FALSE );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4�, CURLOPT_HEADER, FALSE );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4�, CURLOPT_RETURNTRANSFER, TRUE );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4�, CURLOPT_POST, TRUE );
    curl_setopt( $_obfuscate_joiNh4aIhouViZGQho_JiI4�, CURLOPT_POSTFIELDS, $_obfuscate_i5CNjI2Tk4eJlJSUk4eKkI8� );
    $_obfuscate_lIyUkIaVk46LiZCNipOIkJA� = curl_exec( $_obfuscate_joiNh4aIhouViZGQho_JiI4� );
    if ( $_obfuscate_lIyUkIaVk46LiZCNipOIkJA� )
    {
        curl_close( $_obfuscate_joiNh4aIhouViZGQho_JiI4� );
        return $_obfuscate_lIyUkIaVk46LiZCNipOIkJA�;
    }
    else
    {
        $_obfuscate_iYmHkJSKj5OJhoiRiY2Rio4� = curl_errno( $_obfuscate_joiNh4aIhouViZGQho_JiI4� );
        curl_close( $_obfuscate_joiNh4aIhouViZGQho_JiI4� );
        exit( "curl出错，错误码:{$error}" );
    }
}

?>
