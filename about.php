<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="css/aboutus.css" />
    <script src="https://kit.fontawesome.com/5a2dcfb856.js" crossorigin="anonymous"></script>
    
    <title>About Us</title>
</head>
<body>
   
    <?php
    include 'nav.php';
    ?>
    <br /><br />
    <h1>
        Send money overseas.
    </h1>
    <p>Be aware. Protect yourself from fraud.</p><br />
    <div class="container main-banner">
        <div class="row" id="first-row">
            <div class="col-md-6 col-sm-12 col-xs-12 info">
               <div class="banner-info">
                   <h1>
                       Pay anyone, instantly
                   </h1>
                   <p>Send and receive money anytime, anywhere. It's fast and free.</p>
               </div>

            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <img src="images/bankimage1.jpg" style='height: 100%; width: 100%; object-fit: contain' />

            </div>
        </div>

    </div>
    
    <h1>
        Why choose us
    </h1>
    <div class="container one">
        <div class="row" id="second-row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <section class="second">
                    <h4>Easily traceable</h4>
                    <p>
                        Details of payments are stored in a merchant-specific databases.
               Both merchants and customers have easy access to payment information.
                This avoids ambiguity and confusion while tracking payments.

                    </p>
                </section>

            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <section class="second">
                    <h4>
                        Safe and Security
                    </h4>
                    <p>
                        Online transactions is more secure for sellers than receiving payments through cheques.
                The sellers can get money instantly with no risk of bounced cheques and other associate fees.
                They don't need to verify the integrity of the cash.

                    </p>
                </section>

            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <section class="second">
                    <h4>Faster Transfer</h4>
                    <p>


                        Getting your money on time is crucial to your cash flow!
                You may need to do a rapid money transfer to a client or vendor,

                Instead of sending a registered cheque and waiting for it to clear,
                you may securely transfer the money online.
                    </p>
                </section>

            </div>
        </div>
    </div>
    <br />

    <?php
    include 'footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

</body>
</html>