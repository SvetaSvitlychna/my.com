<div class="col">
    <div class="card">
        <div class="card-header">
            <?=$title?> <a href="/admin/roles" class ="float-right"> 
            <button class ="btn btn-primary text-right"><span 
            data-feather ="plus"></span>&nbsp;Go Back
            </button></a>
        </div>
        <div class="card-body">
          <form action="/admin/roles/store" method="POST">
            <div class="form-group">
                <lable for ="role">Role:</lable>
                <input type="text" class="form-control" id="role" name="name"
                placeholder="Enter Role Name" required>
            </div>
        
            <div class="mx-auto">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
    </div>
</div>

       
