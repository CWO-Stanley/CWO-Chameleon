<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-09 19:07:23
  from '/home/chatters/domains/chattersworld.nl/public_html/chameleon/templates/chat_end.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c0f54b4449b0_39264190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0598dd85892dc3e2a6b45907fed78bdd523db0a' => 
    array (
      0 => '/home/chatters/domains/chattersworld.nl/public_html/chameleon/templates/chat_end.tpl',
      1 => 1623258441,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c0f54b4449b0_39264190 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
/dist/jquery.magnific-popup.js"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
>
	$(document).ready(function() {
		$('.open-popup-link').magnificPopup({
		type:'inline',
		midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
	});
});

<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}