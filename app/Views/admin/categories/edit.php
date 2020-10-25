<div class="col">
    <div class="card">
        <div class="card-header">
            <?=$title?> <?=$category->name?><a href="/admin/categories" 
            class ="float-right"> 
            <button class ="btn btn-primary text-right">
                <span data-feather ="plus"></span>Go Back
            </button></a>
        </div>
        <div class="card-body">
          <form action="/admin/categories/patch" method="POST">
          <input type="hidden" name="id" value="<?=$category->id?>">
            <div class="form-group">
                <lable for ="username">Name:</lable>
                <input type="text" class="form-control" id="name" name="name"
                value="<?=$category->name?>" required>
            </div>
            <div class="form-group">
                <lable for="status">Status:</lable>
                <input type="checkbox" class="form-control" id="status" 
                name="status"<?php echo ($category->status==1)?'checked':''?>>
            </div>
            <div class="mx-auto">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </form>
        </div>
    </div>
</div>
