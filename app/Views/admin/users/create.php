<div class="col">
    <div class="card">
        <div class="card-header">
            <?=$title?> <a href="/admin/users" class ="float-right"> 
            <button class ="btn btn-primary text-right"><span 
            data-feather ="plus"></span>&nbsp;Go Back
            </button></a>
        </div>
        <div class="card-body">
          <form action="/admin/users/store" method="POST">
                <div class="form-group">
                    <lable for="first_name"> First Name:</lable>
                    <input type="text" class="form-control" id="first_name"
                    name="first_name" placeholder="Enter First Name" required>
                </div>
                <div class="form-group">
                    <lable for="last_name"> Last Name:</lable>
                    <input type="text" class="form-control" id="last_name"
                    name="last_name" placeholder="Enter Last Name" required>
                </div>
                <div class="form-group">
                    <lable for="email"> Email:</lable>
                    <input type="email" class="form-control" id="email"
                    name="email" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <lable for="pasword"> Password:</lable>
                    <input type="password" class="form-control" id="password"
                    name="password" placeholder="Enter password" required>
                </div>
                <div class="form-group">
                    <lable for="status">Status:</lable>
                    <input type="checkbox" class="form-control" 
                    id="status" name="status">
                </div>
                <div class="form-group">
                    <lable for ="role">Role:</lable>
                    <select class="form-control" id="role" 
                    name="role_id">
                    <?php if (is_array($roles)) : ?>
                   <?php foreach($roles as $role):?>
                    <option value="<?php echo $role->id; ?>">
                        <?php echo $role->name;?>
                    </option>
                   <?php endforeach;?>
                   <?php endif; ?>
                    </select>
                </div>
                 <div class="form-group">
                    <lable for="phone_number">Phone number:</lable>
                    <input class="form-control" id="phone_number"
                    name="phone_number" placeholder="Enter  phone number" required>
                 </div>
                <div class="mx-auto">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

       

           
          
           