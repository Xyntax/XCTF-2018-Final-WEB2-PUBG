<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_lYuMlYiPko_OkYqUk4qRlJEÿ( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ, $_obfuscate_i5GGjZGNi42Hk4qIioiKk44ÿ )
{
    $_obfuscate_kouShpCQlYeOk4aPkomKh5Mÿ = "SerialNo=".$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ['ordernum']."&UserID=".$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ['partner']."&ChannelID=".$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ['bkid']."&Money=".$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ['rmb']."&AttachString=e138&ReturnUrl=".$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ['return_url']."&NotifyUrl=".$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ['notify_url']."&MerchantKey=".$_obfuscate_i5GGjZGNi42Hk4qIioiKk44ÿ;
    $_obfuscate_kpWJhoqKj4eIiIeJkIaJkIkÿ = strtolower( md5( $_obfuscate_kouShpCQlYeOk4aPkomKh5Mÿ ) );
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ = "";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ .= "<form method='post' name='E138_FORM' target='_blank' action='http://pay.e138.com/GateWay/Bank/Default.aspx'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ .= "<input type='hidden' name='UserID'         value='".$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ['partner']."'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ .= "<input type='hidden' name='SerialNo'         value='".$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ['ordernum']."'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ .= "<input type='hidden' name='Money'      value='".$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ['rmb']."'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ .= "<input type='hidden' name='ReturnUrl'         value='".$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ['return_url']."'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ .= "<input type='hidden' name='NotifyUrl'     value='".$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ['notify_url']."'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ .= "<input type='hidden' name='VerifyString'       value='".$_obfuscate_kpWJhoqKj4eIiIeJkIaJkIkÿ."'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ .= "<input type='hidden' name='AttachString'       value='e138'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ .= "<input type='hidden' name=ChannelID value='".$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ['bkid']."'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ .= "<input type=submit class=submitbtn value='ç‚¹å‡»æ”¯ä»˜'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ .= "</form>";
    return $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ;
}

?>
