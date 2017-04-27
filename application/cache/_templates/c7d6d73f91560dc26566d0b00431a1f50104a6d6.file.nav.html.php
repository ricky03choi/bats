<?php /* Smarty version Smarty-3.1.16, created on 2017-04-26 13:11:39
         compiled from "D:\phpStudy\WWW\garase\bats\application\views\common\nav.html" */ ?>
<?php /*%%SmartyHeaderCode:2020059002c0b12ad48-71573597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7d6d73f91560dc26566d0b00431a1f50104a6d6' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\garase\\bats\\application\\views\\common\\nav.html',
      1 => 1493112995,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2020059002c0b12ad48-71573597',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'i' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59002c0b14a149_03889876',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59002c0b14a149_03889876')) {function content_59002c0b14a149_03889876($_smarty_tpl) {?>            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
						<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu']->value['0']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['i']->value->name;?>
"><i class="fa fa-bar-chart-o fa-fw"></i>
							<span class="fa arrow"></span><?php echo $_smarty_tpl->tpl_vars['i']->value->title;?>
</a>
						<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu']->value[$_smarty_tpl->tpl_vars['i']->value->id]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">								
								<?php echo $_smarty_tpl->tpl_vars['item']->value->title;?>

									</a>
									
                                </li>
                            </ul>
							<?php } ?>
						
                            <!-- /.nav-second-level -->
                        </li>
					<?php } ?>               
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
		 </div>	<?php }} ?>
