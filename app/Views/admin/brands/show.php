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
          <form action="/admin/brands/show/<?=$brand->id?>" method="POST">
          <input type="hidden" name="id" value="<?=$brand->id?>">
            <div class="form-group">
                <lable for ="username">Name:</lable>
                <input type="text" class="form-control" id="name" 
                name="name"
                value="<?=$brand->name?>" required>
            </div>
            <div class="form-group">
                <lable for="status">Status:</lable>
                <input type="checkbox" class="form-control" id="status" 
                name="status"<?=($brand->status===1)?'checked':''?>>
            </div>
            <div class="form-group">
                    <lable for ="description">Description:</lable>
                        <input type="text" class="form-control" id="description"
                        name="description" value="<?=$brand->description?>" required>
                </div>
            
          </form>
        </div>
    </div>
</div>