<?php /* Smarty version 2.6.33, created on 2023-02-06 08:16:28
         compiled from useredit.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/header.tpl", 'smarty_include_vars' => array('title' => 'Kullanıcı Düzenle')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
			<?php if ($this->_tpl_vars['result']): ?>
              	<?php if ($this->_tpl_vars['result']->status): ?>
   					 <div class="alert alert-success">
                      	<?php echo $this->_tpl_vars['result']->text; ?>

                    </div>
				<?php else: ?>
    				<div class="alert alert-danger">
                      	<?php echo $this->_tpl_vars['result']->text; ?>

                    </div>
				<?php endif; ?>
              <?php endif; ?>
             <form method="POST">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="frist_name">Ad</label>
                      <input id="frist_name" type="text" class="form-control" name="name" value="<?php echo $this->_tpl_vars['getuser']->name; ?>
">
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Soyad</label>
                      <input id="last_name" type="text" class="form-control" name="surname" value="<?php echo $this->_tpl_vars['getuser']->surname; ?>
">
                    </div>
                  </div>
                  
                  <div class="row">
                  	<div class="form-group col-6">
                    	<label for="email">Email</label>
                    	<input id="email" type="email" class="form-control" name="email" value="<?php echo $this->_tpl_vars['getuser']->email; ?>
">
                    	<div class="invalid-feedback">
                    	</div>
                    </div>
                    <div class="form-group col-6">
                      <label for="frist_name">Telefon</label>
                      <input id="frist_name" type="text" class="form-control" name="phone" value="<?php echo $this->_tpl_vars['getuser']->phone; ?>
">
                    </div>
                  
                  </div>

                

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Bilgileri Güncelle
                    </button>
                  </div>
                </form>
            
        </div>
      </div>
    </div>
  </div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>