<div class="col">
    <div class="card">
        <div class="card-header">
            <?=$title?> <a href="/admin/brands" class ="float-right"> 
            <button class ="btn btn-primary text-right"><span 
            data-feather ="plus"></span>&nbsp;Go Back
            </button></a>
        </div>
        <div class="card-body">
          <form action="/admin/brands/store" method="POST">
            <div class="form-group">
                <lable for ="name">Name:</lable>
                <input type="text" class="form-control" id="name" name="name"
                placeholder="Enter Description Name" required>
            </div>
            <div class="form-group">
                <lable for="status">Status:</lable>
                <input type="checkbox" class="form-control" 
                id="status" name="status">
            </div>
            <div class="form-group">
                <lable for="description">Description:</lable>
                <input type="text" class="form-control" 
                id="description" name="description" 
                placeholder="Enter Description Name" required>
            </div>
            <div class="mx-auto">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
    </div>
</div>

       
