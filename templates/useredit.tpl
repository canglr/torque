{include file="layout/header.tpl" title='Kullanıcı Düzenle'}

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
			{if $result}
              	{if $result->status}
   					 <div class="alert alert-success">
                      	{$result->text}
                    </div>
				{else}
    				<div class="alert alert-danger">
                      	{$result->text}
                    </div>
				{/if}
              {/if}
             <form method="POST">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="frist_name">Ad</label>
                      <input id="frist_name" type="text" class="form-control" name="name" value="{$getuser->name}">
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Soyad</label>
                      <input id="last_name" type="text" class="form-control" name="surname" value="{$getuser->surname}">
                    </div>
                  </div>
                  
                  <div class="row">
                  	<div class="form-group col-6">
                    	<label for="email">Email</label>
                    	<input id="email" type="email" class="form-control" name="email" value="{$getuser->email}">
                    	<div class="invalid-feedback">
                    	</div>
                    </div>
                    <div class="form-group col-6">
                      <label for="frist_name">Telefon</label>
                      <input id="frist_name" type="text" class="form-control" name="phone" value="{$getuser->phone}">
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

{include file="layout/footer.tpl"}