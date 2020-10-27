<div class="col">
    <div class="card">
        <div class="card-header">
            <?=$title?> <a href="/admin/categories" class ="float-right"> 
            <button class ="btn btn-primary text-right"><span 
            data-feather ="plus"></span>&nbsp;Go Back
            </button></a>
        </div>
        <div class="card-body">
          <form action="/admin/categories/store" method="POST" enctype="multipart/form-data">
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
            <div class="form-group row">
                    <div class="container">
                        <div class="card border-success text-center mb-3">
                            <div class="card-header bg-transparent border-success"></div>
                                <lable for="title">Add image for category</lable>
                            </div>
                            <div class="card-body text-success">
                                <div class="row">
                                    <div class="col-md-8">
                                        <input type="file" acccept="image/*" 
                                        name="image">
                                    </div>
                                    <div class="col-md-4">
                                        <p>Drop Picture here</p>
                                    </div>
                                </div>
                        </div>
                    </div>
            </div>
            <div class="mx-auto">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
    </div>
</div>

       
