   
   
   </div>
        </section>
      </div>

      
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; {$smarty.now|date_format:'%Y'} <div class="bullet"></div> TORQUE
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>
  
 <div class="modal fade" tabindex="-1" role="dialog" id="modal-5" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Şifre Değiştir</h5> <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close"> <span aria-hidden="true">×</span> </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-info" id="info" style="display: none;"></div>
                <form class="">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-key"></i>
                                </div>
                            </div>
                            <input type="password" class="form-control" placeholder="Mevcut Şifre" name="mevcutsifre" id="mevcutsifre">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-key"></i>
                                </div>
                            </div>
                            <input type="password" class="form-control" placeholder="Yeni Şifre" name="yenisifre" id="yenisifre">
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
    mevcutsifre = $('#mevcutsifre').val();
    yenisifre = $('#yenisifre').val();
    $.ajax({
        type: "POST",
        url: "/account/newpassword",
        data: "mevcutsifre=" + mevcutsifre +"&yenisifre=" + yenisifre,
        success: function (data) {
            $('#info').show();
            $('#info').html(data);
        }
    });
});
{/literal}
  </script>
</body>
</html>