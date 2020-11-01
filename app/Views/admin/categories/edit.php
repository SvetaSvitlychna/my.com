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
          <form action="/admin/categories/update/<?=$category->id?>" method="POST">
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
                                        name="image"  value="<?=$category->image?>">
                                    </div>
                                    <div class="col-md-4">
                                        <p>Drop Picture here</p>
                                    </div>
                                </div>
                        </div>
                    </div>
            </div>
            <div class="mx-auto">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </form>
        </div>
    </div>
</div>
