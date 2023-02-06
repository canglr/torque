{include file="layout/header.tpl" title=Kullanıcılar}

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
            {foreach item=user from=$users}
            <tr>
                <td>{$user.id}</td>
                <td>{$user.name}</td>
                <td>{$user.surname}</td>
                <td>
                    {$user.email}
                </td>
                <td>{$user.phone}</td>
                <td><a href="/account/logs/{$user.id}" class="btn btn-secondary">Kullanıcı Log</a></td>
                <td><a href="/account/useredit/{$user.id}" class="btn btn-secondary">Düzenle</a></td>
            </tr>
            {/foreach}
        </tbody>
    </table>
</div>
            
        </div>
      </div>
    </div>
  </div>

{include file="layout/footer.tpl"}
