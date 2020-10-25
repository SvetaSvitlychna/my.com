<div class="col">
    <div class="card">
        <div class="card-header">
            <?=$title?> <?=$brand->name?><a href="/admin/brands" 
            class ="float-right"> 
            <button class ="btn btn-primary text-right">
                <span data-feather ="plus"></span>Go Back
            </button></a>
        </div>
        <div class="card-body">
          <form action="/admin/brands/patch" method="POST">
          <input type="hidden" name="id" value="<?=$brand->id?>">
            <div class="form-group">
                <lable for ="username">Name:</lable>
                <input type="text" class="form-control" id="name" name="name"
                value="<?=$brand->name?>" required>
            </div>
            <div class="form-group">
                <lable for="status">Status:</lable>
                <input type="checkbox" class="form-control" id="status" 
                name="status"<?php echo ($brand->status==1)?'checked':''?>>
            </div>
            <div class="mx-auto">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </form>
        </div>
    </div>
</div>
