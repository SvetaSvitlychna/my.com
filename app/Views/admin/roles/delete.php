<div class="col">
    <div class="card">
        <div class="card-header">
            <?=$title?> <?=$role->name?>
            <a href="/admin/roles" class ="float-right"> 
            <button class ="btn btn-primary text-right">
                <span data-feather ="plus"></span>&nbsp;Go Back
            </button></a>
        </div>
        <div class="card-body">
          <form class="form-horizontal" method="POST"
          action="/admin/roles/destroy/<?=$role->id?>">
          <input type ="hidden" name ="id" value="<?=$role->id?>">
            <div class="panel-body">
              <div class="form-group">
                <lable for ="name">
                    <h2>role <?=$role->name?> will be deleted! Are you sure?</h2>
                </lable>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" name="submit"class="btn btn-danger">Delete</button>
                <button type="submit" name="reset"class="btn btn-info">Cancel</button>
              </div>  
            </div>
           
          </form>
        </div>
    </div>
</div>
