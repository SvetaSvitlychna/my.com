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
  
   
    <script src="/assets/js/app.js"></script>
   
</body>
</html>