<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="css/contact.css" />
    <title>Omega Bank</title>
</head>
<body>
 
    <?php
    include 'nav.php';
    ?>
    
    <?php

    $message_sent=false;

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $mailFrom = $_POST['mail'];
        $message = $_POST['message'];

        $mailTo = "example@mail.com";
        $headers = "From ".$mailFrom;
        $txt = "You have received an email from ".$name.".\n\n".$message;

        // mail($mailTo, $subject, $txt, $headers);
        //   header("Location: contactus.php?mailsend");

        $message_sent = true;
        
    }

    ?>


    <!-- if message is sent succesfully -->
    <?php
    if($message_sent){
    ?>
    
    <h1>Thanks, We will be in touch</h1>

   <?php
    }
   ?>


    <?php
    include 'footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

</body>
</html>