
<div class="col"> 
  <div class="card">
    <div class="card-header">
      <?=$title?> <a href="/admin/products/create" class ="float-right"> 
      <button class ="btn btn-primary text-right"><span data-feather ="plus">
              </span>&nbsp;Add new
      </button></a>
    </div>
    <div class="card-body">
        <?php if (!empty($products) && count($products)>0):?>
      <div class="table-responsive">
        <table class="table table-striped table-light">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Status</th>
            <th scope="col">Category</th>
            <th scope="col">Brand</th>
            <th scope="col">Price</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($products as $product):?>
        <tr>
            <th scope="row"><?=$product->id?></th>
            <td><?=$product->name?></td>
             <td><?=$product->status?></td>
              <td><?=$product->category_id?></td>
              <td><?=$product->brand_id?></td>
              <td><?=$product->price?></td>  
              <td><?=$product->description?></td>
            <td>
              <a href="/admin/products/show/<?=$product->id?>">
              <button class="btn btn-default">
                <span data-feather="eye"></span>View</button></a>
                <a href="/admin/products/edit/<?=$product->id?>">
                <button class="btn btn-primary">
                <span data-feather="edit"></span>Edit</button></a>
                <a href="/admin/products/delete/<?=$product->id?>">
                <button class="btn btn-danger">
                <span data-feather="delete"></span>Delete</button></a>
            </td>
        </tr>
        <?php endforeach;?>
        </tbody>
        </table>
      </div>
      <?php else: echo "<h2>no products yet...</h2>";
      endif;
     ?>
    </div>
  </div>
</div>
