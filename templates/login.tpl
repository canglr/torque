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
              <div class="card-header"><h4>Giriş Yap</h4></div>

              <div class="card-body">
              	{if $result }
  					<div class="alert alert-danger">
                      {$result}
                    </div>
				{/if}

              	
                <form method="POST" action="/account/login" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Şifre</label>
                      <div class="float-right">
                        <a href="#" class="text-small" data-toggle="modal" data-target="#modal-5">
                          Şifremi unuttum
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Giriş
                    </button>
                  </div>
                </form>
          

              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              <a href="/account/register">Kayıt Ol</a>
            </div>
            <div class="simple-footer">
              Copyright &copy; TORQUE 2023
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


	<div class="modal fade" tabindex="-1" role="dialog" id="modal-5" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Şifremi unuttum</h5> <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close"> <span aria-hidden="true">×</span> </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-info" id="info" style="display: none;"></div>
                <form class="">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" placeholder="Email" name="email" id="emaildata">
                        </div>
                    </div>
                    <button class="d-none" id="fire-modal-5-submit"></button>
                </form>
            </div>
            <div class="modal-footer bg-whitesmoke"> <button type="button" class="btn btn-primary btn-shadow"
                    id="gonder">Gönder</button></div>
        </div>
    </div>
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
  
  <script>
  {literal}
  	$("#gonder").click(function(){
    email = $('#emaildata').val();
    $.ajax({
        type: "POST",
        url: "/account/lostpassword",
        data: "email=" + email,
        success: function (data) {
            $('#info').show();
            $('#info').html(JSON.parse(data));
        }
    });
});
{/literal}
  </script>
</body>
</html>