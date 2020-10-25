
<div class="col"> 
  <div class="card">
    <div class="card-header">
      <?=$title?> <a href="/admin/brands/create" class ="float-right"> 
      <button class ="btn btn-primary text-right"><span data-feather ="plus">
        </span>&nbsp;Add new
      </button></a>
    </div>
    <div class="card-body">
        <?php if (!empty($brands) && count($brands)>0):?>
      <div class="table-responsive">
        <table class="table table-striped table-light">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Status</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($brands as $brand):?>
        <tr>
            <th scope="row"><?=$brand->id?></th>
            <td><?=$brand->name?></td>
            <td><?=$brand->status?></td>
            <td>
              <a href="/admin/brands/show/<?=$brand->id?>">
              <button class="btn btn-default">
                <span data-feather="eye"></span>View</button></a>
                <a href="/admin/brands/edit/<?=$brand->id?>">
                <button class="btn btn-primary">
                <span data-feather="edit"></span>Edit</button></a>
                <a href="/admin/brands/delete/<?=$brand->id?>">
                <button class="btn btn-danger">
                <span data-feather="delete"></span>Delete</button></a>
            </td>
        </tr>
        <?php endforeach;?>
        </tbody>
        </table>
      </div>
      <?php else: echo "<h2>no brands yet...</h2>";
      endif;
     ?>
    </div>
  </div>
</div>
