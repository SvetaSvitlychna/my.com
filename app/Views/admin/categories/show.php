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
          <form action="/admin/categories/show/<?=$category->id?>" method="POST">
          <input type="hidden" name="id" value="<?=$category->id?>">
            <div class="form-group">
                <lable for ="username">Name:</lable>
                <input type="text" class="form-control" id="name" 
                name="name"
                value="<?=$category->name?>" required>
            </div>
            <div class="form-group">
                <lable for="status">Status:</lable>
                <input type="checkbox" class="form-control" id="status" 
                name="status"<?=($category->status===1)?'checked':''?>>
            </div>
        
            <div class="form-group">
                <lable for="pictures">Image:</lable>
            
                    <img  class="card-img-bottom" 
                    src="<?php ($category->id === $pictures->id); ?>"/> 
                                
            </div>
        
          </form>
        </div>
    </div>
</div>