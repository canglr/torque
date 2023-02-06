<?php /* Smarty version 2.6.33, created on 2023-02-06 10:33:28
         compiled from users.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/header.tpl", 'smarty_include_vars' => array('title' => "Kullanıcılar")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
			
<div class="table-responsive">
    <table class="table table-striped table-md">
        <tbody>
            <tr>
                <th>#</th>
                <th>Ad</th>
                <th>Soyad</th>
                <th>Email</th>
                <th>Telefon</th>
                <th></th>
                <th></th>
            </tr>
            <?php $_from = $this->_tpl_vars['users']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user']):
?>
            <tr>
                <td><?php echo $this->_tpl_vars['user']['id']; ?>
</td>
                <td><?php echo $this->_tpl_vars['user']['name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['user']['surname']; ?>
</td>
                <td>
                    <?php echo $this->_tpl_vars['user']['email']; ?>

                </td>
                <td><?php echo $this->_tpl_vars['user']['phone']; ?>
</td>
                <td><a href="/account/logs/<?php echo $this->_tpl_vars['user']['id']; ?>
" class="btn btn-secondary">Kullanıcı Log</a></td>
                <td><a href="/account/useredit/<?php echo $this->_tpl_vars['user']['id']; ?>
" class="btn btn-secondary">Düzenle</a></td>
            </tr>
            <?php endforeach; endif; unset($_from); ?>
        </tbody>
    </table>
</div>
            
        </div>
      </div>
    </div>
  </div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>