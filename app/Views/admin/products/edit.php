<div class="col">
    <div class="card">
        <div class="card-header">
        <?=$title?> <?=$product->name?>   <a href="/admin/products" class ="float-right"> 
            <button class ="btn btn-primary text-right">
                <span data-feather ="plus"></span>Go Back
            </button></a>
        </div>
        <div class="card-body">
            <form action="/admin/products/patch" method="POST">
            <input type="hidden" name="id" value="<?=$product->id?>">
                <div class="form-group">
                    <lable for ="name">Name:</lable>
                    <input type="text" class="form-control" id="name" 
                    name="name" value="<?=$product->name?>" required>
                </div>
                <div class="form-group">
                    <lable for="status">Status:</lable>
                    <input type="checkbox" class="form-control" id="status" 
                name="status"<?php echo ($product->status==1)?'checked':''?>>
                </div>
                <div class="form-group">
                    <lable for ="price">Product Price:</lable>
                    <input type="text" class="form-control" id="price"
                    name="price" value="<?=$product->name?>" required>
                </div>
                <div class="form-group">
                    <lable for ="category">Category:</lable>
                    <select class="form-control" name="category_id" 
                    value="<?=$category->id?>">
                    <?php foreach($categories as $category):?>
                    <option value="<?=$category->id?>">
                        <?=$category->name?>
                    </option>
                    <?php endforeach?>
                    </select>
                </div>
                <div class="form-group">
                    <lable for ="brand">Brand:</lable>
                    <select class="form-control" name="brand_id" 
                    value="<?=$brand->id?>">
                    <?php foreach($brands as $brand):?>
                    <option value="<?=$brand->id?>">
                        <?=$brand->name?>
                    </option>
                    <?php endforeach?>
                    </select>
                </div>
                <div class="form-group">
                    <lable for ="description">Description:</lable>
                        <input type="text" class="form-control" id="description"
                        name="description" value="<?=$product->name?>" required>
                </div>
                <div class="mx-auto">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
