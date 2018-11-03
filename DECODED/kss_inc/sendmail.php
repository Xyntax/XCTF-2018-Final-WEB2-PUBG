<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function kk_sendmail( $title, $body, $to, $frommail, $frommailpassword, $remoteapi = "", $Attachment = "" )
{
    if ( SENDMAILMODE == 1 || $Attachment != "" )
    {
        return bak_sendmail( $title, $body, $to, $frommail, $frommailpassword, $remoteapi = "", $Attachment = "" );
    }
    else
    {
        return "邮件发送功能关闭";
    }
}

function bak_sendmail( $title, $body, $to, $frommail, $frommailpassword, $remoteapi = "", $Attachment = "" )
{
    if ( preg_match( "/^(.*)@(.*)$/i", $frommail, $matches ) )
    {
        if ( strtolower( $matches[2] ) == "qq.com" )
        {
            $frommail = $matches[1]."@SSL465.qq.com";
        }
    }
    if ( preg_match( "/^(.*)@(SSL)(\\d*)\\.(.*)$/i", $frommail, $matches ) )
    {
        $v_smtpsvr = "smtp.".$matches[4];
        $v_for = $matches[1]."@".$matches[4];
        $v_port = $matches[3];
        $v_ssl = TRUE;
    }
    else
    {
        $matches = explode( "@", $frommail );
        $v_smtpsvr = "smtp.".$matches[1];
        $v_for = $frommail;
        $v_port = 25;
        $v_ssl = FALSE;
    }
    if ( function_exists( "fsockopen" ) )
    {
        include_once( KSSINCDIR."class.smtp.php" );
        include_once( KSSINCDIR."class.phpmailer.php" );
        $mail = new PHPMailer( );
        $mail->PluginDir = KSSINCDIR;
        $mail->IsSMTP( );
        $mail->SMTPAuth = TRUE;
        $mail->Host = $v_smtpsvr;
        if ( $v_ssl == TRUE )
        {
            $mail->SMTPSecure = "ssl";
        }
        $mail->Port = $v_port;
        $mail->Username = $v_for;
        $mail->Password = $frommailpassword;
        $mail->From = $v_for;
        $mail->FromName = $v_for;
        $mail->Subject = $title;
        $mail->MsgHTML( $body );
        $mail->AddAddress( $to, $to );
        if ( $Attachment != "" )
        {
            $mail->AddAttachment( $Attachment );
        }
        $mail->IsHTML( TRUE );
        $result = $mail->Send( );
        if ( $result !== TRUE )
        {
            $result = $mail->ErrorInfo;
        }
        return $result;
    }
    else if ( extension_loaded( "sockets" ) )
    {
        include_once( KSSINCDIR."class.mail.php" );
        $mail = new MySendMail( );
        $mail->setServer( $v_smtpsvr, $v_for, $frommailpassword, $v_port, $v_ssl );
        $mail->setFrom( $v_for );
        $mail->setReceiver( $to );
        if ( $Attachment != "" )
        {
            $mail->addAttachment( $Attachment );
        }
        $mail->setMail( $title, $body );
        $result = $mail->sendMail( );
        if ( $result !== TRUE )
        {
            $result = $mail->error( );
        }
        return $result;
    }
}

?>
