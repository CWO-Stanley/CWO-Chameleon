<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-07 00:26:10
  from '/home/chatters/domains/chattersworld.nl/public_html/chameleon/templates/chat_ads.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7cef02848e44_03743812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51310e2a049d6d5830ac04016107d09f2942f2cc' => 
    array (
      0 => '/home/chatters/domains/chattersworld.nl/public_html/chameleon/templates/chat_ads.tpl',
      1 => 1590785031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7cef02848e44_03743812 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['metadata']->value['ads_enabled'] == "true") {?>
    <center>
        <?php echo '<script'; ?>
 async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"><?php echo '</script'; ?>
>
        <!-- cham27022016 -->
        <ins class="adsbygoogle"
                 style="display:inline-block;width:728px;height:90px"
                 data-ad-client="ca-pub-9106844814451489"
                 data-ad-slot="2999842055"></ins>
        <?php echo '<script'; ?>
>
        (adsbygoogle = window.adsbygoogle || []).push({});
        <?php echo '</script'; ?>
>
    </center>
<?php }
}
}