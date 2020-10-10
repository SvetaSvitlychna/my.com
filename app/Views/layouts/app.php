<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once VIEWS.'/layouts/partials/_head.php';?>
</head>
<body>
   <?php require_once VIEWS.'/layouts/partials/_nav.php';?>

   <?php require_once VIEWS.'/layouts/partials/_sidebar.php';?>


  <?php include_once VIEWS.'/'.$template;?>

   <?php require_once VIEWS.'/layouts/partials/_footer.php';?>
  
   <!-- <template id="cartItem">
        <div  class="cart-item">
            <div class="picture product-img">
            <img src="" alt="..." class="img-fluid w-100">
            </div>
            <div class="product-name p-auto">
            Red digital smartwatch
            </div>
            <div class="remove-btn text-right">
            <a class="reset-anchor m-auto" href="#">
                <i class="fas fa-trash-alt"></i>
            </a>
             </div>
            <div class="quantity">
            <div class="border d-flex justify-content-around mx-auto">
                <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                <span class="border-1 p-0">1</span>
              <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
              </div>
              </div>
              <div class="price">
                  $<span class="product-price">250</span>
                       </div>
        
       </div>
    </template>
    <script src="assets/js/data.js"></script> -->
    <script src="assets/js/app.js"></script>
    
   
</body>
</html>