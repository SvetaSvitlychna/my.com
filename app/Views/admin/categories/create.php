<div class="col">
    <div class="card">
        <div class="card-header">
            <?=$title?> <a href="/admin/categories" class ="float-right"> 
            <button class ="btn btn-primary text-right"><span 
            data-feather ="plus"></span>&nbsp;Go Back
            </button></a>
        </div>
        <div class="card-body">
          <form action="/admin/categories/store" method="POST">
            <div class="form-group">
                <lable for ="name">Name:</lable>
                <input type="text" class="form-control" id="name" name="name"
                placeholder="Enter Category Name" required>
            </div>
            <div class="form-group">
                <lable for="status">Status:</lable>
                <input type="checkbox" class="form-control" 
                id="status" name="status">
            </div>
            <div class="mx-auto">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
    </div>
</div>

       
