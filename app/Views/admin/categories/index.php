
<div class="col"> 
  <div class="card">
    <div class="card-header">
      <?=$title?> <a href="/admin/categories/create" class ="float-right"> 
      <button class ="btn btn-primary text-right"><span data-feather ="plus">
        </span>&nbsp;Add new
      </button></a>
    </div>
    <div class="card-body">
        <?php if (!empty($categories) && count($categories)>0):?>
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
        <?php foreach($categories as $category):?>
        <tr>
            <th scope="row"><?=$category->id?></th>
            <td><?=$category->name?></td>
            <td><?=$category->status?></td>
            <td>
              <a href="/admin/categories/show/<?=$category->id?>">
              <button class="btn btn-default">
                <span data-feather="eye"></span>View</button></a>
                <a href="/admin/categories/edit/<?=$category->id?>">
                <button class="btn btn-primary">
                <span data-feather="edit"></span>Edit</button></a>
                <a href="/admin/categories/delete/<?=$category->id?>">
                <button class="btn btn-danger">
                <span data-feather="delete"></span>Delete</button></a>
            </td>
        </tr>
        <?php endforeach;?>
        </tbody>
        </table>
      </div>
      <?php else: echo "<h2>no categories yet...</h2>";
      endif;
     ?>
    </div>
  </div>
</div>
