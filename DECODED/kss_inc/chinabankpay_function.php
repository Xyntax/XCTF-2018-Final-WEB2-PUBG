<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_jZOUipGMiJKKjZKJkZCIkYk�( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�, $_obfuscate_i5GGjZGNi42Hk4qIioiKk44� )
{
    $_obfuscate_kpWJhoqKj4eIiIeJkIaJkIk� = strtoupper( md5( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�['rmb']."CNY".$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�['ordernum'].$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�['partner'].$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�['return_url'].$_obfuscate_i5GGjZGNi42Hk4qIioiKk44� ) );
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc� = "";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc� .= "<form method='post' name='E_FORM' target='_blank' action='https://Pay3.chinabank.com.cn/PayGate'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc� .= "<input type='hidden' name='v_mid'         value='".$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�['partner']."'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc� .= "<input type='hidden' name='v_oid'         value='".$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�['ordernum']."'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc� .= "<input type='hidden' name='v_amount'      value='".$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�['rmb']."'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc� .= "<input type='hidden' name='v_moneytype'   value='CNY'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc� .= "<input type='hidden' name='v_url'         value='".$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�['return_url']."'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc� .= "<input type='hidden' name='v_md5info'     value='".$_obfuscate_kpWJhoqKj4eIiIeJkIaJkIk�."'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc� .= "<input type='hidden' name='remark1'       value='".$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5U�['cz']."'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc� .= "<input type='hidden' name='remark2'       value='remark2'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc� .= "<input type=submit class=submitbtn value='点击支付'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc� .= "</form>";
    return $_obfuscate_kpKOiYmNj4eMjYmOkImMjoc�;
}

?>
