<div class="col">
    <div class="card">
        <div class="card-header">
            <?=$title?> <?=$role->name?><a href="/admin/roles" 
            class ="float-right"> 
            <button class ="btn btn-primary text-right">
                <span data-feather ="plus"></span>Go Back
            </button></a>
        </div>
        <div class="card-body">
          <form action="/admin/roles/show/<?=$role->id?>" method="POST">
          <input type="hidden" name="id" value="<?=$role->id?>">
            <div class="form-group">
                <lable for ="role">Name:</lable>
                <input type="text" class="form-control" id="name" 
                name="name"
                value="<?=$role->name?>" required>
            </div>
            
          </form>
        </div>
    </div>
</div>