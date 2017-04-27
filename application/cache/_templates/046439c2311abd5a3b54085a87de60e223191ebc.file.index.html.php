<?php /* Smarty version Smarty-3.1.16, created on 2017-04-26 13:22:33
         compiled from "D:\phpStudy\WWW\garase\bats\application\views\auth\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2631758fffde3ac4a38-19968286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '046439c2311abd5a3b54085a87de60e223191ebc' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\garase\\bats\\application\\views\\auth\\index.html',
      1 => 1493184148,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2631758fffde3ac4a38-19968286',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58fffde3b264c8_72085711',
  'variables' => 
  array (
    'users' => 0,
    'i' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fffde3b264c8_72085711')) {function content_58fffde3b264c8_72085711($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/common/nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div id="page-wrapper">
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         用户列表 
						 
                        </div>
				<div class="col-md-12 col-md-offset-11 @grid-gutter-width:         30px;"><a type="button" class="btn btn-outline btn-info " href="create_user">新增用户</a></div>				
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>用户名</th>
                                        <th>邮箱</th>
                                        <th>手机号</th>
                                        <th>会员组</th>
										<th>状态</th>
										<th>操作</th>
                                    </tr>
                                </thead>
								
                                <tbody>  
										<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                                    <tr class="gradeU">
                                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value->username;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value->email;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value->phone;?>
</td>
										
                                        <td ><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['i']->value->groups; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
										<a href="/auth/edit_group/<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->name;?>
</a>
										<span> 
										<?php } ?>
										</td>
										
                                        <td class="center">
										<?php if ($_smarty_tpl->tpl_vars['i']->value->active==1) {?>
													活跃用户
												<?php } else { ?>
													
												<?php }?>
										</td>
										<td class="center"><a href="/auth/edit_user/<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
">编辑</a></td>
                                    </tr>
									<?php } ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
        
        </div>
        <!-- /#page-wrapper -->
				
<?php echo $_smarty_tpl->getSubTemplate ("admin/common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
			
	<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
<?php }} ?>
