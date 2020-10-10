<div class="overlay-form">
    <div class="container-form">  
            <div class="title">
                <i class="fa fa-envelope"></i> <?php echo $title; ?>
            </div> 
        <div class="row-form">
           
            <div class="col-lg-6">
                <form method="POST" action="" >
                    <h2 >Please, fill in the form and we will contact you!</h2>
                    <?php
                        if ($_POST) {
                                if(count($errors) === 0){
                                    echo '<div class="alert alert-success">
                                    <p>Thank you! your message has been sent.</p></div>';
                                    if ($feedback_msg){
                                        echo "<h3>$feedback_msg</h3>";
                                    }
                                }else{
                                    echo '<div class="alert alert-block alert-error fade in">
                                    <p>The following error(s) occurred:</p><ul>';
                                    foreach ($errors as $error) {
                                        echo "<li>$error</li>";
                                    }
                                    echo '</ul></div>';
                                } 
                            }
                            ?>
            
                    <input type="email"  name="email" class="mb-4" placeholder="Enter email" required>
                    <input type="text" name="firstName" class="mb-4" placeholder="First name" required>
                    <input type="text"  name="lastName" class="mb-4" placeholder="Last name" required>
                    
                    <div class="row-form mb-4">
                      <textarea class="rows" name ="message" rows="10" Placeholder="Your message"></textarea>
                    </div>
                    <div class="custom-control custom-checkbox mb-4">
                        <input type="checkbox" class="custom-control-input" id="contactFormCopy" name="contact-copy">
                        <label class="custom-control-label" for="contactFormCopy">Send me a copy of this message</label>
                    </div>
                    <div class="btn-block">
                     <button type="submit" class="btn-form btn-dark ">Send message</button>
                     <button class="btn-reset btn-form " name="reset" type="reset">Reset</button>
                    </div>
                    <div class="add-inform">
                      <a href="/forgot" class="psw">Forget password?</a>
                      <a href="/sign up" class="signup">Sign up</a>
                    </div>              
                </form>
            </div>

            <div class="col-lg-6">
              <h2>Address</h2>
               <?php
                 if (isset($address)){
                    foreach($address as $addr):?>
                        <p><?=$addr['street'];?></p>
                        <p><?=$addr['city'];?></p>
                        <p><?=$addr['country'];?></p>
                        <p><?=$addr['email'];?></p>
                        <p><?=$addr['mobile'];?></p>
                    <?php endforeach;
                  }
                ?>
            </div> 
        </div> 
      <div class="row-form">
           <div class = "col">
              <?php if(isset($comments)){
                echo "<h2> There are ".count($comments)." in Feedback </h2>";
                foreach ($comments as $k => $v){
                    echo "<div class='top'<b>User: ".$v['firstName']." ".$v['lastName']."</b> 
                    <a href='mailto:".$v['email']."'>".$v['email']."</a> Added this: ".$v
                    ['message']." At: ".$v['created_at']."</div>";
                }
             }else{
                echo "No comments yet ...";
              }
              ?>
            </div>
      </div>
    </div> 
</div>