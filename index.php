<!DOCTYPE html>
<html>
   <head>
     <link rel='stylesheet' type='text/css' href='./css/stylesheet.css?<?php echo time(); ?>' />
     <script src="./js/jQuery-1.12.4.min.js"></script>

 
   </head>
<body>
    

<?php
     
     include 'EpiCurl.php';
     include 'EpiOAuth.php';
     include 'EpiTwitter.php';
     include 'keys.php';
    
     session_start();
     
     
     
   if(empty($_SESSION['TwitterUsername']))
   {
      header("Location: NotLoggedIn.php");
     
   }

?>


</body>
</html>