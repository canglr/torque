<?php /* Smarty version 2.6.33, created on 2023-02-05 18:54:33
         compiled from password.tpl */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Giriş - TORQUE</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="/assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="/assets/modules/bootstrap-social/bootstrap-social.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="/assets/css/components.css">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            
            <div class="card card-primary">
              <div class="card-header"><h4>Şifreyi Değiştir</h4></div>

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

              	
                <form method="POST" action="/account/password/<?php echo $this->_tpl_vars['shareid']; ?>
" class="needs-validation" novalidate="">
                 
                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Şifre</label>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Şifreyi Değiştir
                    </button>
                  </div>
                </form>
          

              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              <a href="/account/login">Giriş Yap</a>
            </div>
            <div class="simple-footer">
              Copyright &copy; TORQUE 2023
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="/assets/modules/jquery.min.js"></script>
  <script src="/assets/modules/popper.js"></script>
  <script src="/assets/modules/tooltip.js"></script>
  <script src="/assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="/assets/modules/moment.min.js"></script>
  <script src="/assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="/assets/js/scripts.js"></script>
  <script src="/assets/js/custom.js"></script>
</body>
</html>