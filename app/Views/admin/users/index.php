
<div class="col"> 
  <div class="card">
    <div class="card-header">
      <?=$title?> <a href="/admin/users/create" class ="float-right"> 
      <button class ="btn btn-primary text-right">
      <span data-feather ="plus">
              </span>&nbsp;Add new
      </button></a>
    </div>
    <div class="card-body">
        
      <div class="table-responsive">
      <?php if (count($users)>0):?>
        <table class="table table-striped table-light">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th> 
            <th scope="col">Role</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
            
          </tr>
        </thead>
        <tbody>
        <?php foreach($users as $user):?>
        <tr>
            <th scope="row"><?=$user->id?></th>
            <td><?=$user->first_name?></td>
            <td><?=$user->last_name?></td>
             <td><?=$user->email?></td>
              <td><?=$user->role_id?></td>
              <td><?=$user->status?></td>
              
            <td>
              <a href="/admin/users/show/<?=$user->id?>">
              <button class="btn btn-default">
                <span data-feather="eye"></span>View</button></a>
                <a href="/admin/users/edit/<?=$user->id?>">
                <button class="btn btn-primary">
                <span data-feather="edit"></span>Edit</button></a>
                <a href="/admin/users/delete/<?=$user->id?>">
                <button class="btn btn-danger">
                <span data-feather="delete"></span>Delete</button></a>
            </td>
        </tr>
        <?php endforeach;?>
        </tbody>
        </table>
      </div>
      <?php else: echo "<h2>no users yet...</h2>";
      endif;
     ?>
    </div>
  </div>
</div>
