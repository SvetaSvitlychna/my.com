<div class="overlay-form">
    <div class="container-form">  
            <div class="title">
                <i class="fa fa-envelope"></i> <?php echo $title; ?>
            </div> 
        <div class="row-form">
            <div class="col">
                <form method="POST" action="" >
                    <input type="email" name="email" class="mb-4" placeholder="Enter email" value="<?=$data[0]['email']; ?>" required>
                    <input type="text" name="street" class="mb-4" placeholder="street" value="<?=$data[0]['street']; ?>" required>
                    <input type="text"  name="city" class="mb-4" placeholder="city" value="<?=$data[0]['city']; ?>" required>
                    <input type="text"  name="country" class="mb-4" placeholder="country" value="<?=$data[0]['country']; ?>" required>
                    <input type="text"  name="mobile" class="mb-4" placeholder="mobile" value="<?=$data[0]['mobile']; ?>" required>
                                    
                    <div class="btn-block">
                     <button type="submit" class="btn-form btn-dark ">Save</button>
                     <button class="btn-reset btn-form " name="reset" type="reset">Reset</button>
                    </div>
                      
                </form>
            </div>

        </div> 
    </div> 
</div>