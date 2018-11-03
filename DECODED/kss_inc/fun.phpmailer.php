<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function hr_sendmail( $title, $body, $to, $frommail, $frompassword )
{
    $sarr = explode( "@", $frommail );
    $mail = new PHPMailer( );
    $mail->IsSMTP( );
    $mail->SMTPAuth = TRUE;
    $mail->Host = "smtp.".$sarr[1];
    $mail->Port = 25;
    $mail->Username = $frommail;
    $mail->Password = $frompassword;
    $mail->From = $frommail;
    $mail->FromName = $frommail;
    $mail->Subject = $title;
    $mail->MsgHTML( $body );
    $mail->AddAddress( $to, $to );
    $mail->IsHTML( TRUE );
    $result = $mail->Send( );
    if ( $result !== TRUE )
    {
        return $mail->ErrorInfo;
    }
    return "yes";
}

?>
