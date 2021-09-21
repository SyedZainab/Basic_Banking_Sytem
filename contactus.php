<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="css/contactus.css" />
    <script src="https://kit.fontawesome.com/5a2dcfb856.js" crossorigin="anonymous"></script>

    <title>Omega Bank</title>
</head>
<body>

    <?php
    include 'nav.php';
    ?>

    <h1>Get in Touch</h1>

    <div class="container contact">
        <div class="row content-width">

            <section class="col-md-8 col-sm-12 col-xs-12 main-contact-form">
                <p class="blue-title">Leave us a message</p>
                <form action="contactform.php" method="post">
                    <div class="form-field">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your name" required />
                    </div>
                    <div class="form-field">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="mail" placeholder="Enter your email id" required />
                    </div>

                    <div class="form-field">
                        <label id="message">Write your message here</label>
                        <textarea rows="3" name="message" id="message" placeholder="Write the message" required></textarea><br />
                    </div>

                    <button type="submit" name="submit">Send</button>

                </form>
            </section>
            <aside class="col-md-4 col-sm-12 col-xs-12 sidebar">
                <div class="sidebar-sec">
                    <p class="blue-title">Contact Information</p>
                    <div class="sidebar-info">
                        <address>
                            <i class="fas fa-map-marker-alt"></i>
                            xxxx xxxxxxxx xxxxxx
                            <br />
                            xxxxxx xxxxxx xxxxxx
                        </address>
                        <p>
                            <i class="fas fa-envelope"></i>
                            example@email.com
                        </p>
                        <p>
                            <i class="fas fa-phone-alt"></i>
                            +91 xxxxxxxxxx
                        </p>
                        <img src="images/bankimage2.jpg" id="bankimg" />
                    </div>
                </div>
            </aside>
        </div>
    </div>


    <?php
    include 'footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

</body>
</html>