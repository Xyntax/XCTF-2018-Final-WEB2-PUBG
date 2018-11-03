<?php
/*********************/
/*                   */
/*  Dezend for PHP5  */
/*         NWS       */
/*      Nulled.WS    */
/*                   */
/*********************/

function _obfuscate_jZOUipGMiJKKjZKJkZCIkYkÿ( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ, $_obfuscate_i5GGjZGNi42Hk4qIioiKk44ÿ )
{
    $_obfuscate_kpWJhoqKj4eIiIeJkIaJkIkÿ = strtoupper( md5( $_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ['rmb']."CNY".$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ['ordernum'].$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ['partner'].$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ['return_url'].$_obfuscate_i5GGjZGNi42Hk4qIioiKk44ÿ ) );
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ = "";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ .= "<form method='post' name='E_FORM' target='_blank' action='https://Pay3.chinabank.com.cn/PayGate'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ .= "<input type='hidden' name='v_mid'         value='".$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ['partner']."'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ .= "<input type='hidden' name='v_oid'         value='".$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ['ordernum']."'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ .= "<input type='hidden' name='v_amount'      value='".$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ['rmb']."'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ .= "<input type='hidden' name='v_moneytype'   value='CNY'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ .= "<input type='hidden' name='v_url'         value='".$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ['return_url']."'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ .= "<input type='hidden' name='v_md5info'     value='".$_obfuscate_kpWJhoqKj4eIiIeJkIaJkIkÿ."'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ .= "<input type='hidden' name='remark1'       value='".$_obfuscate_k42Uko6Qk5CLiYqIjI_Ih5Uÿ['cz']."'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ .= "<input type='hidden' name='remark2'       value='remark2'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ .= "<input type=submit class=submitbtn value='ç‚¹å‡»æ”¯ä»˜'>";
    $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ .= "</form>";
    return $_obfuscate_kpKOiYmNj4eMjYmOkImMjocÿ;
}

?>
