<div class="col">
    <div class="card">
        <div class="card-header">
        <?=$title?> <?=$user->first_name?><a href="/admin/users" 
        class ="float-right"> 
            <button class ="btn btn-primary text-right">
                <span data-feather ="plus"></span>Go Back
            </button></a>
        </div>
        <div class="card-body">
            <form action="/admin/users/update/<?=$user->id?>" method="POST">
            <input type="hidden" name="id" value="<?=$user->id?>">
                <div class="form-group">
                    <lable for="first_name"> First Name:</lable>
                    <input type="text" class="form-control" id="first_name"
                    name="first_name" value="<?=$user->first_name?>" required>
                </div>
            <div class="form-group">
                    <lable for="last_name"> Last Name:</lable>
                    <input type="text" class="form-control" id="last_name"
                    name="last_name" value="<?=$user->last_name?>" required>
                </div>
                <div class="form-group">
                    <lable for="name"> Email:</lable>
                    <input type="email" class="form-control" id="email"
                    name="email"  value="<?=$user->email?>"required>
                </div>
                <div class="form-group">
                    <lable for="pasword"> Password:</lable>
                    <input type="password" class="form-control" id="password"
                    name="password"  value="<?=$user->password?>"required>
                </div>
                <div class="form-group">
                    <lable for="status">Status:</lable>
                    <input type="checkbox" class="form-control" id="status" 
                name="status"<?=($user->status===1)?'checked':''?>>
                </div>
                <div class="form-group">
                    <lable for ="role">Role:</lable>
                    <select class="form-control" name="role_id" >
                   <?php foreach($roles as $role):?>
                    <option value="<?=$role->id?>"
                        <?php 
                        if($role->id ===$user->role_id)
                        echo 'selected="selected"';?>>
                        <?=$role->name?>
                    </option>
                    <?php endforeach?>
                    </select>
                </div>
                <div class="form-group">
                    <lable for="phone_number">Phone number:</lable>
                    <input class="form-control" id="phone_number"
                    name="phone_number" value="<?=$user->phone_number?>" required>
                 </div>
                
                <div class="mx-auto">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
