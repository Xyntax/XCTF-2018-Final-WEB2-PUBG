<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_lYuMlYiPko_OkYqUk4qRlJE�( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�, $_obfuscate_i5GGjZGNi42Hk4qIioiKk44� )
{
    $_obfuscate_kouShpCQlYeOk4aPkomKh5M� = "SerialNo=".$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�['ordernum']."&UserID=".$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�['partner']."&ChannelID=".$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�['bkid']."&Money=".$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�['rmb']."&AttachString=e138&ReturnUrl=".$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�['return_url']."&NotifyUrl=".$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�['notify_url']."&MerchantKey=".$_obfuscate_i5GGjZGNi42Hk4qIioiKk44�;
    $_obfuscate_kpWJhoqKj4eIiIeJkIaJkIk� = strtolower( md5( $_obfuscate_kouShpCQlYeOk4aPkomKh5M� ) );
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc� = "";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc� .= "<form method='post' name='E138_FORM' target='_blank' action='http://pay.e138.com/GateWay/Bank/Default.aspx'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc� .= "<input type='hidden' name='UserID'         value='".$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�['partner']."'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc� .= "<input type='hidden' name='SerialNo'         value='".$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�['ordernum']."'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc� .= "<input type='hidden' name='Money'      value='".$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�['rmb']."'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc� .= "<input type='hidden' name='ReturnUrl'         value='".$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�['return_url']."'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc� .= "<input type='hidden' name='NotifyUrl'     value='".$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�['notify_url']."'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc� .= "<input type='hidden' name='VerifyString'       value='".$_obfuscate_kpWJhoqKj4eIiIeJkIaJkIk�."'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc� .= "<input type='hidden' name='AttachString'       value='e138'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc� .= "<input type='hidden' name=ChannelID value='".$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�['bkid']."'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc� .= "<input type=submit class=submitbtn value='点击支付'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc� .= "</form>";
    return $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc�;
}

?>
