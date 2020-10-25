<div class="col">
    <div class="card">
        <div class="card-header">
            <?=$title?> <a href="/admin/products" class ="float-right"> 
            <button class ="btn btn-primary text-right">
                <span data-feather ="plus"></span>&nbsp;Go Back
            </button></a>
        </div>
        <div class="card-body">
            <form action="/admin/products/store" method="POST">
                <div class="form-group">
                    <lable for="name">Name:</lable>
                    <input type="text" class="form-control" id="name"
                    name="name" placeholder="Enter product Name" required>
                </div>
                <div class="form-group">
                    <lable for="status">Status:</lable>
                    <input type="checkbox" class="form-control" 
                    id="status" name="status">
                </div>
                <div class="form-group">
                    <lable for="price">Product Price:</lable>
                    <input type="text" class="form-control" id="price"
                    name="price" placeholder="Enter product price" required>
                </div>
                <div class="form-group">
                    <lable for ="category">Category:</lable>
                    <select class="form-control" id="category" 
                    name="category_id">
                    <?php if (is_array($categories)) : ?>
                   <?php foreach($categories as $category):?>
                    <option value="<?php echo $category->id; ?>">
                        <?php echo $category->name;?>
                    </option>
                   <?php endforeach;?>
                   <?php endif; ?>
                    </select>
                </div>
                <div class="form-group">
                    <lable for ="brand">Brand:</lable>
                    <select class="form-control" id="brand" 
                    name="brand_id">
                    <?php if (is_array($brands)) : ?>
                   <?php foreach($brands as $brand):?>
                    <option value="<?php echo $brand->id; ?>">
                        <?php echo $brand->name;?>
                    </option>
                   <?php endforeach;?>
                   <?php endif; ?>
                    </select>
                </div>
                <div class="form-group">
                    <lable for="description">Description:</lable>
                    <input class="form-control" id="description"
                    name="description" placeholder="Enter product description" required>
                 </div>
                 <div class="form-group row">
                    <div class="container">
                        <div class="card border-success text-center mb-3">
                            <div class="card-header bg-transparent border-success"></div>
                                <lable for="title">Add image for product</lable>
                            </div>
                            <div class="card-body text-success">
                                <div class="row">
                                    <div class="col-md-8">
                                        <input type="file" multiple acccept="image/*" name="images[]">
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

       
