<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="/assets/fontawesome/css/all.min.css"> 
    <link rel="stylesheet" href="/assets/css/auth.css">
    <link href="assets/css/Styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link href="assets/css/grid.css" rel="stylesheet" >
    <link href="assets/css/forms.css" rel="stylesheet" >
    <link href="assets/css/effects.css" rel="stylesheet" >
    <link href="assets/css/animation.css" rel="stylesheet">
   <link href="assets/css/product.css" rel="stylesheet">
    <link href="assets/css/slider.css" rel="stylesheet">
    <link href="assets/css/nav.css" rel="stylesheet">
    <link href ="assets/css/sidebar.css" rel="stylesheet"> 
    <link href ="assets/css/variables.css" rel="stylesheet">
    
</head>
<body>
<?php require_once VIEWS.'/layouts/partials/_nav.php';?>

<?php require_once VIEWS.'/layouts/partials/_sidebar.php';?>

 <?php require_once VIEWS.'/layouts/partials/_flash-message.php'?>
    
 <?php include_once VIEWS.'/'.$template;?> 

 <?php require_once VIEWS.'/layouts/partials/_footer.php';?>

   

    <!-- <script> 
  const signUpButton = document.getElementById('SignUp');
  const signInButton = document.getElementById('SignIn');
  const container = document.getElementById('container');
  signUpButton.addEventListener('click',()=>{
      container.classList.add("right-panal-active");
  });
  signInButton.addEventListener('click',()=>{
      container.classList.remove("right-panal-active");
  }); 

   
    </script> -->
    <script src="/assets/js/app.js"></script>
</body>
</html>